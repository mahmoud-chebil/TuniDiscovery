<?php

namespace App\Controller;

use App\Entity\TypeReclamation;
use App\Form\TypeReclamationType;
use App\Repository\TypeReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormTypeInterface;

class TypeReclamationController extends AbstractController
{
    /**
     * @Route("/type/reclamation", name="typereclamation")
     */
    public function index(): Response
    {
        return $this->render('typereclamation/index.html.twig', [
            'controller_name' => 'TypeReclamationController',
        ]);
    }

    /**
     * @Route("type/affichetype", name="affichetype")
     */
    public function Affiche(TypeReclamationRepository $repository){
        $repo=$this->getDoctrine()->getRepository(TypeReclamation::class);
        $typereclamation=$repository->findAll();
        return $this->render('typereclamation/affichetype.html.twig',
            ['typereclamation'=>$typereclamation]);

    }

    /**
     * @param Request $request
     * @Route("/addtype" ,name="addtype")
     */
    function Add(Request $request)
    {
        $typereclamation = new TypeReclamation();
        $form = $this->createForm(TypeReclamationType::class,$typereclamation);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typereclamation);
            $em->flush();
            $this->addFlash('info','added successfully!');

            return $this->redirectToRoute('affichetype');
        }
        return $this->render('typereclamation/addtype.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/deletetype/{id}",name="delete")
     */
    function Delete($id, TypeReclamationRepository $repository){
        $typereclamation=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($typereclamation);
        $em->flush();
        return $this->redirectToRoute('affichetype');

    }

    /**
     * @Route("typereclamation/updatetype/{id}", name="updatetype")
     */
    function Update(Request $request, TypeReclamationRepository $repository, $id): Response
    {
        $typereclamation=$repository->find($id);
        $form=$this->createForm(TypeReclamationType::class,$typereclamation);
        $form->add('update',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('affichetype');
        }
        return $this->render('typereclamation/updatetype.html.twig',[
            'type'=>$form->createView()
        ]);
    }


}
