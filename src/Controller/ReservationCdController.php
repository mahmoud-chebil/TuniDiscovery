<?php

namespace App\Controller;

use App\Entity\Devis;
use App\Entity\Evenement;
use App\Entity\Reservation;
use App\Entity\User;
use App\Form\Reservation1Type;
use App\Repository\DevisRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservation/cd")
 */
class ReservationCdController extends AbstractController
{
    /**
     * @Route("/", name="reservation_cd_index", methods={"GET"})
     */
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation_cd/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }
    /**
     * @Route("/ind", name="reservation_cd_indexback", methods={"GET"})
     */
    public function indexb(ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation_cd/indexback.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }
    /**
     * @Route("/listedevis", name="devis_indexd", methods={"GET"})
     */
    public function devis(DevisRepository $devisRepository): Response
    {
        return $this->render('reservation_cd/listedevis.html.twig', [
            'devis' => $devisRepository->findAll(),
        ]);
    }

    /**
     * @Route("/evenchoisi", name="evenchoisi", methods={"GET"})
     */
    public function indexf(): Response
    {

        $even=$this->getDoctrine()->getRepository(Evenement::class)->findAll();
        $user=$this->getDoctrine()->getRepository(User::class)->find('1');
        return $this->render('reservation/index.html.twig', [
            'evenements' => $even,'User'=>$user
        ]);
    }
    /**
     * @Route("/succes", name="succes")
     */
    public function succes(): Response
    {
        return $this->render('reservation_cd/succes.html.twig');
    }

    /**
     * @Route("/new", name="reservation_cd_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user=$this->getDoctrine()->getRepository(User::class)->find('1');
        $reservation = new Reservation();
        $form = $this->createForm(Reservation1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $even=$reservation->getEven();
            if ($even->getNbrePlace()>=$reservation->getNbPersonne())
            {$reservation->setEtat(false);
            $reservation->setUser($user);
            $reservation->setDateres(new \DateTime("now"));
            $devis=new Devis();
            $devis->setPrixTot($reservation->getNbPersonne()*$even->getPrixEven());
            $devis->setReservation($reservation);
            $devis->setRemise(0);
            $reservation->setDevis($devis);
            $entityManager->persist($reservation);
            $entityManager->flush();
            $devis->setReservation($reservation);
            $devis->setRemise(0);
            $entityManager->persist($devis);
            $entityManager->flush();

                return $this->render('reservation_cd/succes.html.twig', [
                    'reservation' => $reservation,

                ]);}
            else
                return $this->render('reservation_cd/fail.html.twig', [
                    'reservation' => $reservation,

                ]);
        }

        return $this->render('reservation_cd/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),'User'=>$user
        ]);
    }
    /**
     * @Route("/validation/{id}", name="validation", methods={"GET"})
     */
    public function valider($id,EntityManagerInterface $entityManager)
    {
        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->find($id);
        $even = $reservation->getEven();
        $even->setNbrePlace($even->getNbrePlace() - $reservation->getNbPersonne());
        $reservation->setEtat(1);
        $entityManager->flush();
        return $this->redirectToRoute('reservation_cd_indexback', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/{id}", name="devisres", methods={"GET"})
     */
    public function devisres(Reservation $reservation): Response
    {
        return $this->render('reservation_cd/succes.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservation_cd_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $user=$this->getDoctrine()->getRepository(User::class)->find('1');
        $form = $this->createForm(Reservation1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('reservation_cd_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation_cd/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),'User'=>$user
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_cd_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservation_cd_index', [], Response::HTTP_SEE_OTHER);
    }
}
