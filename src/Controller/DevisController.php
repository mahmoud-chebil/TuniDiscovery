<?php

namespace App\Controller;

use App\Entity\Devis;
use App\Entity\Reservation;
use App\Form\DevisType;
use App\Repository\DevisRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


//affichage des devis
/**
 * @Route("/devis")
 */
class DevisController extends AbstractController
{
    /**
     * @Route("/", name="devis_index", methods={"GET"})
     */
    public function index(DevisRepository $devisRepository): Response
    {

        return $this->render('devis/index.html.twig', [
            'devis' => $devisRepository->findAll(),
        ]);
    }

//Tri dans l'ordre croissant selon le prix total
    /**
     * @Route("/triprixtotasc",name="triprixtotasc")
     */
    public function triprixtotasc()
    {
        $devi= $this->getDoctrine()->getRepository(Devis::class)->orderByPrixTotAsc();
        return $this->render("devis/index.html.twig",
            array('devis'=>$devi));
    }

//Tri dans l'ordre décroissant selon le prix total
    /**
     * @Route("/triprixtotdesc",name="triprixtotdesc")
     */
    public function triprixtotdesc()
    {
        $devi= $this->getDoctrine()->getRepository(Devis::class)->orderByPrixTotDesc();
        return $this->render("devis/index.html.twig",
            array('devis'=>$devi));
    }

//Tri dans l'ordre croissant selon le nombre de personnes
    /**
     * @Route("/trinbpersASC",name="trinbpersASC")
     */
    public function triNbrePersASC()
    {
        $devi= $this->getDoctrine()->getRepository(Devis::class)->orderByNbPersonneAsc();
        return $this->render("devis/index.html.twig",
            array('devis'=>$devi));
    }

//Tri dans l'ordre décroissant selon le nombre de personnes
    /**
     * @Route("/trinbpersDESC",name="trinbpersDESC")
     */
    public function triNbrePersDesc()
    {
        $devi= $this->getDoctrine()->getRepository(Devis::class)->orderByNbPersonneDesc();
        return $this->render("devis/index.html.twig",
            array('devis'=>$devi));
    }

//Mise à jour le devis choisi avec la remise indiquée dans le formulaire
    /**
     * @Route("/{id}/edit", name="devis_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Devis $devi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DevisType::class, $devi);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //définir le nouveau prix total avec un calcul utilisant la remise saisie dans le form

            $devi->setPrixTot($devi->getPrixTot()*(1-$form->get('remise')->getData()));

            $entityManager->flush();

            return $this->redirectToRoute('devis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('devis/edit.html.twig', [
            'devi' => $devi,
            'form' => $form->createView(),
        ]);
    }

// supprimer le devis choisi
    /**
     * @Route("/{id}", name="devis_delete", methods={"POST"})
     */
    public function delete(Request $request, Devis $devi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$devi->getId(), $request->request->get('_token'))) {
            $entityManager->remove($devi);
            $entityManager->flush();
        }
        return $this->redirectToRoute('devis_index', [], Response::HTTP_SEE_OTHER);
    }
}
