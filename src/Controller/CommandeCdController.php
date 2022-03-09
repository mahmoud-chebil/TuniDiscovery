<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Controller\QrcodeService;
use App\Form\Commande2Type;
use App\Form\Commande3Type;
use App\Repository\CommandeRepository;
use App\Repository\EquipementRepository;
use App\Repository\ProductRepository;
use App\Services\SmsGatewayService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use MongoDB\Driver\Session;


use Symfony\Component\Security\Http\Logout\SessionLogoutHandler;

/**
 * @Route("/commande/cd")
 */
class CommandeCdController extends AbstractController
{
    /**
     * @Route("/", name="commande_cd_index", methods={"GET"})
     */
    public function index(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande_cd/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }
    /**
     * @Route("/admin", name="commande_cd_index_admin", methods={"GET"})
     */
    public function indexAdmin(CommandeRepository $commandeRepository,Request $request): Response
    {
        $commandes=$commandeRepository->findAll();


        return $this->render('commande_cd/indexAdmin.html.twig', [
            'commandes' => $commandes,
        ]);
    }




    /**
     * @Route("/commandelist",name="commandelist")
     */
    public function list()
    {
        $Commandes= $this->getDoctrine()->
        getRepository(Commande::class)->findAll();
        return $this->render("commande_cd/index.html.twig",
            array('commandes'=>$Commandes));
    }


    /**
     * @Route("/new", name="commande_cd_new", methods={"GET", "POST"})
     * @param Request $request
     * @param SessionInterface $session
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @param CommandeRepository $commandeRepository
     * @return Response
     */
    public function new(Request $request,SessionInterface $session,  ProductRepository $productRepository, CommandeRepository $commandeRepository): Response
    {
        $qrCode = null;
        $commande = new Commande();
        $form = $this->createForm(Commande2Type::class, $commande);

        $form->handleRequest($request);

        $panier = $session->get('panier', []);
        $panierInfo = [];

        $total = 0;
        Foreach ($panier as $id => $quantite) {
            $Equipement = $productRepository->find($id);
            $panierInfo[] = [

                'Equipement' => $productRepository->find($id),
                'quantite' => $quantite
            ];
            $total += $Equipement->getPrice() * $quantite;
        }
        $Quantites=[];
        if ($form->isSubmitted() && $form->isValid()) {


            for ($i = 0; $i < count($panierInfo ); $i++) {

                $commande->addListP($panierInfo [$i]['Equipement']);
                $Quantites[$i]=($panierInfo [$i]['quantite']);



            }

            $this->addFlash('success', 'votre commande a été Ajouter !!');

            $commande->Quantites=$Quantites;
            $commande->setEtat(0);
            $commande->setTotal($total);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commande);
            $entityManager->flush();
            $this->addFlash(
                'infoV',
                'Veuillez consulter votre boîte email pour vérifier votre commande'
            );

            $panier = $session->get('panier', []);
            $session->clear();
            return $this->render('product/index.front.html.twig', [
                'products' => $productRepository->findAll()
            ]);
        }

        return $this->render('commande_cd/new.html.twig',
            ['commande' => $commande,'panierInfo' => $panierInfo,'total'=>$total,'form'=>$form->createView()]);
    }

    /**
     * @Route("/new/sh/{id}", name="commande_cd_show", methods={"GET", "POST"})
     */
    public function show(Commande $commande): Response
    {
        return $this->render('commande_cd/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    /**
     * @Route("/show/admin/{id}", name="commande_cd_show_admin", methods={"GET"})
     */
    public function showAdmin(Commande $commande): Response
    {
        return $this->render('commande_cd/showAdmin.html.twig', [
            'commande' => $commande,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="commande_cd_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Commande2Type::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('commande_cd_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande_cd/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/editb", name="commande_cd_editb", methods={"GET", "POST"})
     */
    public function editb(Request $request, Commande $commande, EntityManagerInterface $entityManager,\Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(Commande3Type::class, $commande);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $name=$commande->getnom();
            $email=$commande->getEmail();
            $entityManager->flush();



            $message = (new \Swift_Message('TuniDiscovery'))
                ->setFrom('TuniDiscovery@gmail.com')
                ->setTo($email)
                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        'commande_cd/email.html.twig',
                        ['name' => $name]
                    ),
                    'text/html'
                )

                // you can remove the following code if you don't define a text version for your emails

            ;$mailer->send($message);
            return $this->redirectToRoute('commande_cd_index_admin', [], Response::HTTP_SEE_OTHER);
        }
        $this->addFlash(
            'info',
            'Commande traitée'
        );
        return $this->render('commande_cd/editb.html.twig', [
            'commande' => $commande,
            'formb' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="commande_cd_delete", methods={"POST"})
     */
    public function delete(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commande_cd_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/deleteAdmin/{id}", name="commande_cd_delete_admin", methods={"POST"})
     */
    public function deleteAdmin(Request $request, Commande $commande, EntityManagerInterface $entityManager, \Swift_Mailer $mailer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commande);
            $name=$commande->getnom();
            $email=$commande->getEmail();
            $entityManager->flush();
            $message = (new \Swift_Message('TuniDiscovery'))
                ->setFrom('TuniDiscovery@gmail.com')
                ->setTo($email)
                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        'commande_cd/emailsupp.html.twig',
                        ['name' => $name]
                    ),
                    'text/html'
                )

                // you can remove the following code if you don't define a text version for your emails

            ;$mailer->send($message);
            $this->addFlash(
                'supp',
                'Commande Suprimée Avec Succées'
            );
        }

        return $this->redirectToRoute('commande_cd_index_admin', [], Response::HTTP_SEE_OTHER);
    }
}
