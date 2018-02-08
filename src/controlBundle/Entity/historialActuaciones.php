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
     * @var alumno
     *
     * @ORM\ManyToOne(targetEntity="alumno", inversedBy="cursosAct",cascade={"persist"})
     * @ORM\JoinColumn(name="alumnosAct", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $alumnosAct;


    /**
     * @var curso
     *
     * @ORM\ManyToOne(targetEntity="curso", inversedBy="alumnosAct",cascade={"persist"})
     * @ORM\JoinColumn(name="cursosAct", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $cursosAct;



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

    /**
     * Set alumnosAct
     *
     * @param \controlBundle\Entity\alumno $alumnosAct
     *
     * @return historialActuaciones
     */
    public function setAlumnosAct(\controlBundle\Entity\alumno $alumnosAct = null)
    {
        $this->alumnosAct = $alumnosAct;

        return $this;
    }

    /**
     * Get alumnosAct
     *
     * @return \controlBundle\Entity\alumno
     */
    public function getAlumnosAct()
    {
        return $this->alumnosAct;
    }

    /**
     * Set cursosAct
     *
     * @param \controlBundle\Entity\curso $cursosAct
     *
     * @return historialActuaciones
     */
    public function setCursosAct(\controlBundle\Entity\curso $cursosAct = null)
    {
        $this->cursosAct = $cursosAct;

        return $this;
    }

    /**
     * Get cursosAct
     *
     * @return \controlBundle\Entity\curso
     */
    public function getCursosAct()
    {
        return $this->cursosAct;
    }
}