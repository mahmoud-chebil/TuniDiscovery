<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class AdminController extends AbstractController
{

    /**
    * 
    * @Route("/admin", name="admin_list")
    */
    public function admin()
    {
     
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('admin/index.html.twig', [
            'users' => $users
        ]);
    }
    /*public function add(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        # only admin function
    }

    // ...*/
     /**
     * @Route("/admin/Delete/{id}" ,name="DELETE_USER")
     *Method({"DELETE"})
     */
    public function Delete(Request $request,$id)
    {
            $User = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($User);
            $entityManager->flush();

            
            return $this->redirectToRoute('admin_list');
            
    }
    /**
     * @Route("/admin/update/{id}" ,name="BLOCK_USER")
     *Method({"GET", "POST"})
     */
    public function Block(Request $request,$id)
    {       
            $User = new User();
            $User = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);

            $form = $this->createformbuilder($User)
            ->add('isExpired',CheckboxType::class, [
                'label'    => 'BLOCK',
                'required' => false,
            ])
            ->add('Done',SubmitType::class)
            ->getForm();
            $form->handleRequest($request);
            if ($form->isSubmitted() ) {
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->flush();

                return $this->redirectToRoute('admin_list');
            }
            return $this->render('admin/update.html.twig', [
                'form' => $form->createView()
               ]);
            
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
