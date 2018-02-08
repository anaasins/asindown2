<?php

namespace controlBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class alumnoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre')
        ->add('apellidos')
        ->add('fechaNacimiento')
        ->add('dni')
        ->add('localidad')
        ->add('codigoPostal')
        ->add('direccion')
        ->add('telfCasa')
        ->add('telf2')
        ->add('movil')
        ->add('nombrePadre')
        ->add('apellidosPadre')
        ->add('direccionPadre')
        ->add('telfTrabajoPadre')
        ->add('movilPadre')
        ->add('profesionPadre')
        ->add('fechaNacPadre')
        ->add('dniPadre')
        ->add('correoPadre')
        ->add('nombreMadre')
        ->add('apellidosMadre')
        ->add('direccionMadre')
        ->add('telfTrabajoMadre')
        ->add('movilMadre')
        ->add('profesionMadre')
        ->add('fechaNacMadre')
        ->add('dniMadre')
        ->add('correoMadre')
        ->add('diagnostico')
        ->add('fechaAlta')
        ->add('fechaBaja')
        ->add('autorizacionImagen')
        ->add('consentimientoTelf')
        ->add('consentimientoTelfNumero')
        ->add('observaciones')
        ->add('fotoUsuario')
        ->add('renovServef')
        ->add('centroAcademicoAnterior')
        ->add('inscripcionServef')
        ->add('informePsico')
        ->add('documentosMatricula')
        ;
    }/**
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
