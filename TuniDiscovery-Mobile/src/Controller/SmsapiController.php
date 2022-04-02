<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
// important import to use orangesmsapi
use App\Controller\Utility;

use App\Entity\SmsApi;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class SmsapiController extends Controller
{
    /**
     * @Route("/smsapi", name="smsapi")
     */
    public function index(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $smsorangeci = new SmsApi();

        $form = $this->createFormBuilder($smsorangeci)
            ->add('senderAdresse', TextType::class)

            ->add('receiverAdresse', TextType::class)
            ->add('message', TextType::class)

            ->add('Enregistrer', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $senderAdresse = "tel:+216".$form["senderAdresse"]->getData();

            $receiverAdresse = "tel:+216".$form["receiverAdresse"]->getData();
            $message = $form["message"]->getData();
            //$testval1=$senderAdresse;
            //$testval2=$receiverAdresse;
            $config = array(
                'token' => 'your_access_token'
            );

            $osms = new Utility($config);

            $osms->setVerifyPeerSSL(false);

            $response = $osms->sendSms(
                $senderAdresse,

                // receiver
                $receiverAdresse,
                // message
                $message
            );

            if (empty($response['error'])) {
                $em->persist($smsorangeci);
                $em->flush();


                return $this->render('smsapi/index.html.twig', [
                    'controller_name' => 'SmsapiController',
                    'form' => $form->createView(),
                ]);
            } else {
                echo $response['error'];
            }




        }

        return $this->render('smsapi/index.html.twig', [
            'controller_name' => 'SmsapiController',
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/get_admin_contracts", name="getadmincontracy")
     */
    public function getAdminContracts(Request $request)
    {

        $config = array(
            'token' => 'your_access_token',
        );
        $osms = new Utility($config);


        $osms->setVerifyPeerSSL(false);

        $response = $osms->getAdminContracts('CIV');


        if (empty($response['error'])) {

            return $this->render('smsapi/getcontract.html.twig', [
                'response' => $response
            ]);
        } else {

            return $this->render('smsapi/getcontract.html.twig', [
                'response' => $response['error']
            ]);
        }
    }


    /**
     * @Route("/get_Admin_Stats", name="getAdminStats")
     */
    public function getAdminStats(Request $request)
    {
        $config = array(
            'token' => 'your_access_token',
        );
        $osms = new Utility($config);


        $osms->setVerifyPeerSSL(false);

        $response = $osms->getAdminStats(array('country' => 'CIV'));


        if (empty($response['error'])) {

            return $this->render('smsapi/getadminstats.html.twig', [
                'response' => $response
            ]);
        } else {

            return $this->render('smsapi/getadminstats.html.twig', [
                'response' => $response['error']
            ]);
        }


    }




    /**
     * @Route("/get_admin_purchased", name="getAdminPurchased")
     */
    public function getAdminPurchased(Request $request)
    {
        $config = array(
            'token' => 'your_access_token',
        );
        $osms = new Utility($config);


        $osms->setVerifyPeerSSL(false);

        $response = $osms->getAdminPurchasedBundles();


        if (empty($response['error'])) {

            return $this->render('smsapi/getadminstats.html.twig', [
                'response' => $response
            ]);
        } else {

            return $this->render('smsapi/getadminstats.html.twig', [
                'response' => $response['error']
            ]);
        }


    }


}