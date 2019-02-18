<?php

namespace EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


class EvenementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEvent')
            ->add('descriptionEvent')
            ->add('dateDebutEvent',DateType::class)
            ->add('dateFinEvent',DateType::class)
            ->add('heureDebutEvent',TimeType::class)
            ->add('heureFinEvent',TimeType::class)
            ->add('adresseEvent')
            ->add('privacyEvent', HiddenType::class)
            ->add('imageEvent',FileType::class)
            ->add('prixEvent')
            ->add('EventCategorie',EntityType::class,array(
                'class'=>'EventBundle:EventCategorie',
                'choice_label'=>'nom_event_categorie',
                'multiple'=>false
            ))
            ->add('User', HiddenType::class)
            ->add('Submit',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EventBundle\Entity\Evenement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'eventbundle_evenement';
    }


}
