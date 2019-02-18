<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 15/02/2019
 * Time: 13:12
 */

namespace EventBundle\Controller;


use EventBundle\Entity\Evenement;
use EventBundle\Entity\EventParticipation;
use EventBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EventController extends Controller
{
    public function afficherListEventsAction()
    {
        $user=$this->getUser()->getId();

        $em=$this->getDoctrine()->getManager();
        $categories= $em->getRepository("EventBundle:EventCategorie")->findAll();

        $events= $em->getRepository("EventBundle:Evenement")->findAll();




        return $this->render('@Event/Event/afficherListEvents.html.twig',
            array("categories"=>$categories,"events"=>$events,"user"=>$user));
    }


    public function ajouterEventAdminAction(Request $request)
    {
        $user=$this->getUser();

        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $evenement->getImageEvent();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $this->getParameter('photos_directory'),
                $fileName
            );
            $evenement->setImageEvent($fileName);

            $evenement->setUser($user);

            $evenement->setPrivacyEvent("Privé");


            $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();

        }
        return $this->render('@Event/Event/ajouterEventAdmin.html.twig',
            array("Form"=>$form->createView(),"user"=>$user));
    }


    public function ajouterEventAction(Request $request)
    {
        $user=$this->getUser();

        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $evenement->getImageEvent();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $this->getParameter('photos_directory'),
                $fileName
            );
            $evenement->setImageEvent($fileName);

            $evenement->setUser($user);

            $evenement->setPrivacyEvent("Privé");


            $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();

        }
        return $this->render('@Event/Event/ajouterEvent.html.twig',
            array("Form"=>$form->createView(),"user"=>$user));
    }

    public function afficherDetailsEventAction(Request $request){

        $user=$this->getUser();
        $idEvent=$request->get('idEvent');
        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository("EventBundle:Evenement")->find($idEvent);
        return $this->render('@Event/Event/afficherDetailsEvent.html.twig',
            array("user"=>$user,"event"=>$event));
    }


    public function participerEventAction(Request $request){

        $user=$this->getUser();
        $idEvent=$request->get('idEvent');
        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository("EventBundle:Evenement")->find($idEvent);

        $participation= new EventParticipation();
        $participation->setUser($user);
        $participation->setEvenement($event);
        $participation->setDateParticipation(new \DateTime());

        $em=$this->getDoctrine()->getManager();
        $em->persist($participation);
        $em->flush();


        return $this->render('@Event/Event/afficherDetailsEvent.html.twig',
            array("user"=>$user,"event"=>$event));
    }

}