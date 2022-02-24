<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\Commande2Type;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
    public function indexAdmin(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande_cd/indexAdmin.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }
    /**
     * @Route("/new", name="commande_cd_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commande = new Commande();
        $form = $this->createForm(Commande2Type::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('commande_cd_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande_cd/new.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commande_cd_show", methods={"GET"})
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
    public function deleteAdmin(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commande_cd_index_admin', [], Response::HTTP_SEE_OTHER);
    }
}
