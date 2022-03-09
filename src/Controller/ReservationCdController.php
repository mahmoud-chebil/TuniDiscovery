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
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
/**
 * @Route("/reservation/cd")
 */

//récupération et affichage de toutes les réservations de l'utilisateur

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
//réservation de l'utilisateur connecté
    /**
     * @Route("/reservuser/{id}", name="reservationuser", methods={"GET"})
     */
    public function reservuser(ReservationRepository $reservationRepository,$id): Response
    {
        $res=$reservationRepository->findBy(['user' => $id]);
        return $this->render('reservation_cd/index.html.twig', [
            'reservations' =>$res
        ]);
    }
// Afficher les évènements disponibles
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
//bundle pdf
    /**
     * @Route("/pdf/{id}", name="pdf")
     */
    public function pdf($id)
    {

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $RC=$this->getDoctrine()->getRepository(Reservation::class)->find($id);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reservation_cd/pdf.html.twig', [
            'reservation' => $RC
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }

//bundle pagination + affichage des réservation pour l'administrateur
    /**
     * @Route("/reservations", name="reservations")
     */
    public function indexpaginate(Request $request, PaginatorInterface $paginator)
    {

        $donnees = $this->getDoctrine()->getRepository(Reservation::class)->findBy([],['even' => 'asc']);

        $reservation = $paginator->paginate($donnees,$request->query->getInt('page', 1), 6 );

        return $this->render('reservation_cd/indexback.html.twig', ['reservations' => $reservation]);
    }


    /**
     * @Route("/ind", name="reservation_cd_indexback", methods={"GET"})
     */
    public function indexb(Request $request,ReservationRepository $reservationRepository, PaginatorInterface $paginator): Response
    {
        $donnees = $this->getDoctrine()->getRepository(Reservation::class)->findBy([],['even' => 'asc']);

        $reservation = $paginator->paginate($donnees,$request->query->getInt('page', 1), 6 );

        return $this->render('reservation_cd/indexback.html.twig', ['reservations' => $reservation]);
    }
// routage vers le devis après l'ajout avec succès d'une nouvelle réservation et un nouveau devis
    /**
     * @Route("/succes", name="succes")
     */
    public function succes(): Response
    {
        return $this->render('reservation_cd/succes.html.twig');
    }

 // création d'une nouvelle réservation et un nouveau devis avec calcul du peix total selon nombre de personne et prix de l'évènement choisi
    /**
     * @Route("/new", name="reservation_cd_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {   
        $user=$this->getDoctrine()->getRepository(User::class)->find('31');
        $reservation = new Reservation();
        $form = $this->createForm(Reservation1Type::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $even=$reservation->getEven();
            if ($even->getNbrePlaces() >=$reservation->getNbPersonne())
            {$reservation->setEtat(false);
            $reservation->setUser($user);
            $reservation->setDateres(new \DateTime("now"));
            $devis=new Devis();
            $devis->setPrixTot($reservation->getNbPersonne()*$even->getPrixEvenement());
            $devis->setReservation($reservation);
            $devis->setRemise(0);
            $reservation->setDevis($devis);
            $entityManager->persist($reservation);
            $entityManager->flush();
            $devis->setReservation($reservation);
            $devis->setRemise(0);
            $entityManager->persist($devis);
            $entityManager->flush();

                $this->addFlash('info','added successfully!');
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

//fonction de validation de la réservation par l'administrateur
    /**
     * @Route("/validation/{id}", name="validation", methods={"GET"})
     */
    public function valider($id,EntityManagerInterface $entityManager)
    {
        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->find($id);
        $even = $reservation->getEven();
        $even->setNbrePlaces($even->getNbrePlaces() - $reservation->getNbPersonne());
        $reservation->setEtat(1);
        $entityManager->flush();
        return $this->redirectToRoute('reservation_cd_indexback', [], Response::HTTP_SEE_OTHER);
    }

//
    /**
     * @Route("/{id}", name="devisres", methods={"GET"})
     */
    public function devisres(Reservation $reservation): Response
    {
        return $this->render('reservation_cd/succes.html.twig', [
            'reservation' => $reservation,
        ]);
    }

//suppression de la réservation choisie
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
