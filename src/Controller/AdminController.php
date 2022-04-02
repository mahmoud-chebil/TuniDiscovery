<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminController extends AbstractController
{
    /**
     *
     * @Route("/allusers/", name="hh")
     */
    public function admina()
    {

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($users);

        return new JsonResponse($formatted);
        // return $this->render('admin/index.html.twig', [
        //     'users' => $users
        // ]);
    }
    /**
     * @Route("/loginUser/json",name="LOGINUserJSON")
     */
    public function LoginUserJSON(Request $request,UserPasswordEncoderInterface $userPasswordEncoder)
    {

        $email= $request->query->get('email');
        $password= $request->query->get('password');

        $em=$this->getDoctrine()->getManager();
        $user= $em->getRepository(User::class)->findOneBy(['email'=>$email]);

        if($user){

            $d=$user->getPassword(
                $userPasswordEncoder->encodePassword(
                    $user,
                    $password
                )
            );
            $var=$user->getPassword();
            //dd($var,$password,$d);
            if($user->getPassword()==$d){
                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->Normalize($user);
                return new JsonResponse($formatted);
            }
            else {
                return new Response("password not found ");
            }
        }
        else  {
            return new Response("email not found ");
        }

    }

    /**
     *
     * @Route("/admin", name="admin_list")
     */
    public function admin()
    {

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($users);

        return new JsonResponse($formatted);
        // return $this->render('admin/index.html.twig', [
        //     'users' => $users
        // ]);
    }
    /*public function add(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        # only admin function
    }

    // ...*/
    /**
     * @Route("/Delete/{id}" ,name="DELETE_USER")
     *Method({"DELETE"})
     */
    public function Delete(Request $request,$id)
    {
        $id = $request->get("id");
        $User = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);

        $em = $this->getDoctrine()->getManager();
        if($User!=null ) {
            $em->remove($User);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("user a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id user invalide.");

    }
    /**
     * @Route("/update/{id}" ,name="BLOCK_USER")
     *Method({"GET", "POST"})
     */
    public function Block(Request $request,$id)
    {
        $id = $request->get("id");
        $User = new User();
        $User = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);

        $username= $request->query->get("username");
        $email= $request->query->get("email");
        $Telephone= $request->query->get("Telephone");

        $User->setUsername($username);
        $User->setEmail($email);
        $User->setTelephone($Telephone);

        $form = $this->createformbuilder($User)
            ->add('Done',SubmitType::class)
            ->getForm();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();
        $form->handleRequest($request);
        if ($User!=null  ) {


            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("user a ete update avec success.");
            return new JsonResponse($formatted);
            // return $this->redirectToRoute('admin_list');
        }
        return new JsonResponse("id user invalide.");
        //return $this->render('admin/update.html.twig', [
        //    'form' => $form->createView()
        //    ]);

    }
    /**
     * @Route("/admin/filter" ,name="filter")
     */

    public function listwhereadminfirst(){
        $users=$this->getDoctrine()
            ->getRepository(User::class)
            ->findusers();
        return $this->render('admin/test.html.twig', [
            'users' => $users
        ]);
    }




}
