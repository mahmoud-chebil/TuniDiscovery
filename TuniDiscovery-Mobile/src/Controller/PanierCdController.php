<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Form\Panier1Type;
use App\Repository\EquipementRepository;
use App\Repository\PanierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/panier/cd")
 */
class PanierCdController extends AbstractController
{
    /**
     * @Route("/", name="panier_cd_index", methods={"GET"})
     */
    public function index(PanierRepository $panierRepository): Response
    {
        return $this->render('panier_cd/index.html.twig', [
            'paniers' => $panierRepository->findAll(),
        ]);
    }


    /**
     * @Route("/new", name="panier_cd_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $panier = new Panier();
        $form = $this->createForm(Panier1Type::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($panier);
            $entityManager->flush();

            return $this->redirectToRoute('panier_cd_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('panier_cd/new.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="panier_cd_show", methods={"GET"})
     */
    public function show(Panier $panier): Response
    {
        return $this->render('panier_cd/show.html.twig', [
            'panier' => $panier,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="panier_cd_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Panier $panier, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Panier1Type::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('panier_cd_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('panier_cd/edit.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="panier_cd_delete", methods={"POST"})
     */
    public function delete(Request $request, Panier $panier, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$panier->getId(), $request->request->get('_token'))) {
            $entityManager->remove($panier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('panier_cd_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/panier/remove/{id}", name="panier_remove")
     */
    public function remove($id, SessionInterface $session){
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier',$panier);

        return$this->redirectToRoute("panier_index");
    }
}
