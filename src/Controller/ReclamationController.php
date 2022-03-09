<?php

namespace App\Controller;
use App\Entity\TypeReclamation;
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
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart ;
use Knp\Component\Pager\PaginatorInterface;

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
    public function AfficheBack(ReclamationRepository $T,Request $request , PaginatorInterface $paginator){
        $donnes = $T->findAll();
        $Rec = $paginator->paginate(
            $donnes,
            $request->query->getInt('page', 1),
            4
        );

        return $this->render("reclamation/afficheback.html.twig", array('tabT' => $Rec));;

    }
    /**
     * @Route("/tri", name="tri")
     */
    public function tri(ReclamationRepository $repository)
    {
        $repo=$this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation=$repository->findAll();
        $type =$repo->findType();
        return $this->render('reclamation/tri.html.twig',
            ['reclamation'=>$reclamation,"type"=>$type]);

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
            $this->addFlash('info','added successfully!');
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
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('listReclamationByUser', array('id'=>$reclamation->getIdUser()));

        }

        return $this->render('reclamation/updatereclamation.html.twig',[
            'u'=>$form->createView()
        ]);
    }

    /**
     * @Route("/listReclamationByUser/{id}",name="listReclamationByUser")
     */
    public function listReclamationByUser($id)
    {
        $reclamation= $this->getDoctrine()->getRepository(Reclamation::class)->listReclamationByUser($id);
        return $this->render("reclamation/listreclamation.html.twig",array('reclamation'=>$reclamation));
    }
    /**
     * @Route("reclamation/Etat/{id}", name="Etat")
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

    /**
     * @Route("reclamation/listReclamationByType/{id}",name="listReclamationByType")
     */
    public function listReclamationByType($id)
    {
        $reclamation= $this->getDoctrine()->getRepository(Reclamation::class)->listReclamationByType($id);
        $type =$this->getDoctrine()->getRepository(Reclamation::class)->findType();
        return $this->render("reclamation/listReclamationByType.html.twig",array('reclamation'=>$reclamation,'type'=>$type));
    }

    /**
     * @Route("reclamation/{id}",name="reponseadmin")
     */
    public function reponseadmin($id)
    {
        $reclamation= $this->getDoctrine()->getRepository(Reclamation::class)->find($id);

        return $this->render("reclamation/reponseadmin.html.twig",array('reclamation'=>$reclamation));
    }

    /**
     * @Route("/stat",  name="stat")
     */
    public function stat()
    {
        $pieChart = new PieChart();
        $Ts= $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        $data = [['etat','Nombre de etat']];
        $etats= ['en cour','traiter'];
        $R=[];
        $j=0;
        foreach ($etats as $etat)
        {$j=0;
            foreach ($Ts as $T)
            {
                if((string)$etat==$T->getEtat()) {
                    $j++;
                }

            }
            $data[] = array((string)$etat,$j,);

        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            $data
        );
        return $this->render('reclamation/stat.html.twig', array(
                'piechart' => $pieChart,
            )

        );

    }

}
