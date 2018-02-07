<?php

namespace controlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * historialActuaciones
 *
 * @ORM\Table(name="historial_actuaciones")
 * @ORM\Entity(repositoryClass="controlBundle\Repository\historialActuacionesRepository")
 */
class historialActuaciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaActuacion", type="date")
     */
    private $fechaActuacion;

    /**
     * @var string
     *
     * @ORM\Column(name="personas", type="string", length=255)
     */
    private $personas;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=255)
     */
    private $motivo;

    /**
     * @var string
     *
     * @ORM\Column(name="conclusiones", type="string", length=255)
     */
    private $conclusiones;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaActuacion
     *
     * @param \DateTime $fechaActuacion
     *
     * @return historialActuaciones
     */
    public function setFechaActuacion($fechaActuacion)
    {
        $this->fechaActuacion = $fechaActuacion;

        return $this;
    }

    /**
     * Get fechaActuacion
     *
     * @return \DateTime
     */
    public function getFechaActuacion()
    {
        return $this->fechaActuacion;
    }

    /**
     * Set personas
     *
     * @param string $personas
     *
     * @return historialActuaciones
     */
    public function setPersonas($personas)
    {
        $this->personas = $personas;

        return $this;
    }

    /**
     * Get personas
     *
     * @return string
     */
    public function getPersonas()
    {
        return $this->personas;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     *
     * @return historialActuaciones
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set conclusiones
     *
     * @param string $conclusiones
     *
     * @return historialActuaciones
     */
    public function setConclusiones($conclusiones)
    {
        $this->conclusiones = $conclusiones;

        return $this;
    }

    /**
     * Get conclusiones
     *
     * @return string
     */
    public function getConclusiones()
    {
        return $this->conclusiones;
    }
}
