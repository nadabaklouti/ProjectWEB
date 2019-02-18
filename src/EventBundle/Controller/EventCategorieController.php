<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 16/02/2019
 * Time: 18:11
 */

namespace EventBundle\Controller;



use EventBundle\Entity\EventCategorie;
use EventBundle\Form\EventCategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EventCategorieController extends Controller
{
    public function ajouterEventCategorieAction(Request $request)
    {

        $categorie = new EventCategorie();
        $form = $this->createForm(EventCategorieType::class,$categorie);
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){

            $file = $categorie->getImageEventCategorie();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('photos_directory'),
                $fileName
            );
            $categorie->setImageEventCategorie($fileName);


            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();

        }



        return $this->render('@Event/EventCategorie/ajouterEventCategorie.html.twig',
            array("Form"=>$form->createView()));
    }



    public function afficherEventCategories(Request $request){
        $em=$this->getDoctrine()->getManager();
        $categories= $em->getRepository("ServiceTBundle:Enseignant")->findAll();
        $em=$this->getDoctrine()->getManager();
        $equipements= $em->getRepository("ServiceTBundle:Equipement")->findAll();


        return $this->render('@ServiceT/Enseignant/afficherEnseignants.html.twig',
            array("categories"=>$categories));
    }

}