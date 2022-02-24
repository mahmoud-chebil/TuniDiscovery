<?php

namespace App\Controller;
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
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('affichefront');
        }
        return $this->render('reclamation/add.html.twig', [
            'form' => $form->createView()
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
    return $this->redirectToRoute("affichefront");

    }


    /**
     * @Route("reclamation/update/{id}", name="update")
     */
    function Update(Request $request, ReclamationRepository $repository, $id): Response
    {
        $reclamation=$repository->find($id);
        $form=$this->createForm(ReclamationType::class,$reclamation);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('affichefront');
        }
        return $this->render('reclamation/updatereclamation.html.twig',[
            'f'=>$form->createView()
        ]);
    }

}
