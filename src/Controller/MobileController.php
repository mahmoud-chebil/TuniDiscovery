<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;



class MobileController extends AbstractController
{
    /**
     * @Route("/mobile", name="mobile")
     */
    public function index(): Response
    {
        return $this->render('mobile/index.html.twig', [
            'controller_name' => 'MobileController',
        ]);
    }
    /**
     * @Route("/getreclamation", name="getreclamation")
     */
    public function getareclamation(NormalizerInterface $normalizer): Response
    {
        $repository=$this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation=$repository->findAll();
        $jsonContent = $normalizer->normalize($reclamation,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }


    /**
     * @Route("/createR",name="createR")
     */
    public function createR(Request $request,NormalizerInterface $normalizer):Response
    {
        $R = new Reclamation();
        $R->setTitre($request->get("titre"));
        $R->setDateRec(new \DateTime($request->get("dateRec")));
        $R->setDescRec($request->get("descRec"));
        $R->setReponse($request->get("reponse"));
        $R->setEtat($request->get("etat"));
        $em = $this->getDoctrine()->getManager();
        $em->persist($R);
        $em->flush();
        $jsonContent = $normalizer->normalize($R,'json',['groups'=>'read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route ("/removereclamtion", name="dm")
     */
    function removereclamtion(Request $request,NormalizerInterface $normalizer)
    {
        $id=$request->get("id");
        $R=$this->getDoctrine()->getRepository(Reclamation::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($R);
        $em->flush();
        $jsonContent = $normalizer->normalize($R,'json',['groups'=>'read']);
        return new Response(json_encode($jsonContent));

    }


    /**
     * @Route("/updaterclamation1", name="updatem1")
     */

    public function updaterclamation1(NormalizerInterface $normalizer,Request $request){

       $id=$request->get("id");
       $R= $this->getDoctrine()->getRepository(Reclamation::class)->find($id);
       $R->setTitre($request->get("titre"));
       $R->setDateRec($request->get("dateRec"));
       $R->setDescRec($request->get("descRec;"));
       $R->setReponse($request->get("reponse"));
       $R->setEtat($request->get("etat"));
       $em = $this->getDoctrine()->getManager();
       $em->flush();

       $jsonContent = $normalizer->normalize($R,'json',['groups'=>'post:read']);
       return new Response(json_encode($jsonContent));

    }

}
