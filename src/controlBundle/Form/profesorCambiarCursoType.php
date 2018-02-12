<?php

namespace controlBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class profesorCambiarCursoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre', TextType::class, array('disabled' =>'true'))
        ->add('apellidos', TextType::class, array('disabled' => 'true'))
        ->add('profesorCursos',  CollectionType::class, array(
           'entry_type'=> profesorCursoType::class,
           'allow_add'    => true,
           'allow_delete' => true
       ))
        ;
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'controlBundle\Entity\profesor'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'controlbundle_profesor';
    }


}
