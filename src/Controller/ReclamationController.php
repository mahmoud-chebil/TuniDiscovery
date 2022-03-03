<?php

namespace App\Controller;
use App\Form\AddType;
use App\Form\ReclamationEtatType;
use App\Form\ReponseType;
use App\Form\UpdateType;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }
    /**
     * @Route("/hellohello", name="hellohello")
     */
    public function helloHome( ){

        return $this->render('reclamation/add.html.twig');

    }




    /**
     * @Route("/ajoutsucee", name="ajoutsucee")
     */
    public function ajoutsucee(){

        return $this->render('reclamation/ajoutsucee.html.twig');

    }


    /**
     * @Route("/affichefront", name="affichefront")
     */
    public function AfficheFront(ReclamationRepository $repository){
        $repo=$this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation=$repository->findAll();
        return $this->render('reclamation/affichefront.html.twig',
            ['reclamation'=>$reclamation]);

    }

    /**
     * @Route("/afficheback", name="afficheback")
     */
    public function AfficheBack(ReclamationRepository $repository){
        $repo=$this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation=$repository->findAll();
        return $this->render('reclamation/afficheback.html.twig',
            ['reclamation'=>$reclamation]);

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/addreclamation" ,name="add")
     */
    function Add(Request $request)
    {
        $reclamation = new Reclamation();
        $reclamation->setDateRec(new \DateTime('now'));
        $form = $this->createForm(AddType::class, $reclamation);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('listReclamationByUser',array('id'=>$reclamation->getIdUser()));
        }
        return $this->render('reclamation/add.html.twig', [
            'Add' => $form->createView()
        ]);
    }


    /**
     * @Route ("/remove/{id}", name="d")
     */
    function delete($id)
    {
        $r=$this->getDoctrine()->getRepository(Reclamation::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($r);
        $em->flush();
        return $this->redirectToRoute("afficheback");

    }


    /**
     * @Route("/reclamation/update/{id}", name="update")
     */
    function Update(Request $request, ReclamationRepository $repository, $id): Response
    {
        $reclamation=$repository->find($id);
        $form=$this->createForm(UpdateType::class,$reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listReclamationByUser', array('id'=>$reclamation->getIdUser()));
        }
        return $this->render('reclamation/updatereclamation.html.twig',[
            'u'=>$form->createView()
        ]);
    }


    /**
     * @Route("reclamation/listReclamationByUser/{id}",name="listReclamationByUser")
     */
    public function listReclamationByUser($id)
    {
        $reclamation= $this->getDoctrine()->getRepository(Reclamation::class)->listReclamationByUser($id);
        return $this->render("reclamation/listreclamation.html.twig",array('reclamation'=>$reclamation));
    }
    /**
     * @Route("/Etat/{id}", name="Etat")
     */
    function Etat(Request $request, ReclamationRepository $repository, $id): Response
    {
        $reclamation=$repository->find($id);
        $form=$this->createForm(ReclamationEtatType::class,$reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficheback');
        }
        return $this->render('reclamation/etat.html.twig',[
            'etat'=>$form->createView()
        ]);
    }

    /**
     * @Route("reclamation/Reponse/{id}", name="Reponse")
     */
    function Reponse(Request $request, ReclamationRepository $repository, $id): Response
    {
        $reclamation=$repository->find($id);
        $form=$this->createForm(ReponseType::class,$reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficheback');
        }
        return $this->render('reclamation/reponse.html.twig',[
            'reponse'=>$form->createView()
        ]);
    }
}