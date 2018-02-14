<?php

namespace controlBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class alumnoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre', TextType::class)
        ->add('apellidos', TextType::class)
        ->add('fechaNacimiento',DateType::Class, array(
                 'widget' => 'choice',
                 'years' => range(date('Y'), date('Y')-80),
                 'months' => range(date('m'), 12),
                 'days' => range(date('d'), 31),
               ))
        ->add('dni', TextType::class)
        ->add('localidad', TextType::class)
        ->add('codigoPostal', NumberType::class)
        ->add('direccion', TextType::class)
        ->add('telfCasa', NumberType::class)
        ->add('telf2', NumberType::class)
        ->add('movil', NumberType::class)
        ->add('nombrePadre', TextType::class)
        ->add('apellidosPadre', TextType::class)
        ->add('direccionPadre', TextType::class)
        ->add('telfTrabajoPadre', NumberType::class)
        ->add('movilPadre', NumberType::class)
        ->add('profesionPadre', TextType::class)
        ->add('fechaNacPadre',DateType::Class, array(
                 'widget' => 'choice',
                 'years' => range(date('Y'), date('Y')-80),
                 'months' => range(date('m'), 12),
                 'days' => range(date('d'), 31),
               ))
        ->add('dniPadre', TextType::class)
        ->add('correoPadre', EmailType::class)
        ->add('nombreMadre', TextType::class)
        ->add('apellidosMadre', TextType::class)
        ->add('direccionMadre', TextType::class)
        ->add('telfTrabajoMadre', NumberType::class)
        ->add('movilMadre', NumberType::class)
        ->add('profesionMadre', TextType::class)
        ->add('fechaNacMadre',DateType::Class, array(
                 'widget' => 'choice',
                 'years' => range(date('Y'), date('Y')-80),
                 'months' => range(date('m'), 12),
                 'days' => range(date('d'), 31),
               ))
        ->add('dniMadre', TextType::class)
        ->add('correoMadre', EmailType::class)
        ->add('diagnostico', TextType::class)
        ->add('fechaAlta',DateType::Class, array(
                 'widget' => 'choice',
                 'years' => range(date('Y'), date('Y')-80),
                 'months' => range(date('m'), 12),
                 'days' => range(date('d'), 31),
               ))
        ->add('fechaBaja',DateType::Class, array(
                 'widget' => 'choice',
                 'years' => range(date('Y'), date('Y')-80),
                 'months' => range(date('m'), 12),
                 'days' => range(date('d'), 31),
               ))
        ->add('autorizacionImagen')
        ->add('consentimientoTelf')
        ->add('consentimientoTelfNumero')
        ->add('observaciones', TextType::class)
        ->add('fotoUsuario')
        ->add('renovServef',DateType::Class, array(
                 'widget' => 'choice',
                 'years' => range(date('Y'), date('Y')-80),
                 'months' => range(date('m'), 12),
                 'days' => range(date('d'), 31),
               ))
        ->add('centroAcademicoAnterior')
        ->add('inscripcionServef')
        ->add('informePsico')
        ->add('documentosMatricula')
        ->add('activo')
        ->add('Registrar', SubmitType::class)
        ;
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'controlBundle\Entity\alumno'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'controlbundle_alumno';
    }


}
