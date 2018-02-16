<?php

namespace controlBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use controlBundle\Entity\curso;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class profesorCursoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('curso', EntityType::class, array(
            'class'    => curso::class,
            'multiple' => false,
            'choice_label' => 'nombre'
        ))
        ->add('anyoImpartido', NumberType::class, array(
          'label' => 'Año impartido',
        ))
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'controlBundle\Entity\profesorCurso'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'controlbundle_profesorcurso';
    }


}
