<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier as EmailVerifierAlias;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

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
     * @Route("/allusers", name="getalluser")
     */
    public function getAllUser(NormalizerInterface $normalizer): Response
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->findAll();
        $jsonContent = $normalizer->normalize($user, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }



    /**
     * @Route("/addusermobile", name="addusermobile")
     */
    public function adduser(Request $request, NormalizerInterface $normalizer, UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $user = $this->getDoctrine()->getManager();
        $user = new User();

        $user->setEmail($request->get("email"));
        $user->setUsername($request->get("username"));
        $user->setIsVerified(false);
        $user->setPassword(
            $userPasswordEncoder->encodePassword(
                $user,
                $request->get("password")
            )
        );
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
            (new TemplatedEmail())
                ->from(new Address('svnoclip11@gmail.com', 'sv_noclip'))
                ->to($user->getEmail())
                ->subject('Please Confirm your Email')
                ->htmlTemplate('registration/confirmation_email.html.twig')
        );
        $jsonContent = $normalizer->normalize($user, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/Delete/{id}", name="delusersmobile")
     */
    public function deleteUser(Request $request,NormalizerInterface $normalizer , $id):Response
    {
        $repository=$this->getDoctrine()->getManager();
        $id=$request->get("id");
        $user=$repository->getRepository(User::class)->find($id);
        $repository->remove($user);
        $repository->flush();
        $jsonContent = $normalizer->normalize($user,'json',['groups'=>'post:read']);
        return new Response(json_encode("User deleted Successfully "));
    }

    /**
     * @Route("/update", name="updateusermobile")
     */
    public function update(Request $request,UserPasswordEncoderInterface $userPasswordEncoder,NormalizerInterface $normalizer){
        $id=($request->get("id"));
        $user= $this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setEmail($request->get("email"));
        $user->setUsername($request->get("username"));
        $user->setPassword(
            $userPasswordEncoder->encodePassword(
                $user,
                $request->get("password")));
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $jsonContent = $normalizer->normalize($user,'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));

    }


}
