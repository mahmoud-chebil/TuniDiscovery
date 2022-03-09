<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Search;
use App\Form\EvenementType;
use App\Form\SearchType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\Query;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;





/**
 * @Route("/evenement")
 */
class EvenementController extends AbstractController
{


    /**
     * @Route("/", name="evenement_index", methods={"GET"})
     */
    public function index(EvenementRepository $evenementRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $evenements=$evenementRepository->findAll();
            $evenements = $paginator->paginate(
            $evenements, /* query NOT result */
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,

        ]);

    }

    /**
     * @Route("/calendar", name="evenement_calendar", methods={"GET"})
     */
    public function calendar(EvenementRepository $evenementRepository): Response
    {
        $events=$evenementRepository->findAll();
        $tabev=[];
        foreach ($events as $event) {
            $tabev[] = [
                'id' => $event->getId(),
                'title' => $event->getTitreEvenement(),
                'start' => $event->getDateDebut()->format('Y-m-d'),
                'end' => $event->getDateFin()->format('Y-m-d'),
                'description' => $event->getDecriptionEvenement()

            ];
        }
            $data= json_encode($tabev);


        return $this->render('full_calendar.html.twig',compact('data'));

    }

    /**
     * @Route("/new", name="evenement_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evenement);
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Ajouter avec succes'

            );
            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="evenement_show", methods={"GET"})
     */
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="evenement_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Modifier avec succes'

            );

            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="evenement_delete", methods={"POST"})
     */
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $evenement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Suprimer avec succes'

            );
        }

        return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/event/adminAsma", name="evenement_admin", methods={"GET"})
     */
    public function indexadmin(EvenementRepository $evenementRepository,Request $request, PaginatorInterface $paginator): Response
    {


        $evenements=$evenementRepository->findAll();
        $evenements = $paginator->paginate(
          $evenements, /* query NOT result */
            $request->query->getInt('page', 1),
            5
        );
        return $this->render('evenement/liste_event.html.twig', [
            'evenements' => $evenements,
        ]);
    }


    /**
     * @Route("/event/{id}", name="event_delete", methods={"POST"})
     */
    public function deleteEvent(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $evenement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Suprimer avec succes'

            );
        }

        return $this->redirectToRoute('evenement_admin');
    }
}
