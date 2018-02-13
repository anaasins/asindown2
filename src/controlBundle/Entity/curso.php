<?php

namespace controlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * curso
 *
 * @ORM\Table(name="curso")
 * @ORM\Entity(repositoryClass="controlBundle\Repository\cursoRepository")
 */
class curso
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="horas", type="integer", nullable=true)
     */
    private $horas;

    /**
     * @var string
     *
     * @ORM\Column(name="entidadPromotora", type="string", length=255, nullable=true)
     */
    private $entidadPromotora;

    /**
     * @var string
     *
     * @ORM\Column(name="fechasDeRealizacion", type="string", length=255, nullable=true)
     */
    private $fechasDeRealizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="valoracion", type="string", length=255, nullable=true)
     */
    private $valoracion;

    /**
     * @ORM\OneToMany(targetEntity="alumnoCurso", mappedBy="curso", cascade={"remove"})
     *
     */
    protected $cursoAlumnos;


    /**
     * @ORM\OneToMany(targetEntity="profesorCurso", mappedBy="curso")
     *
     */
    protected $cursoProfesores;
    public function __construct()
    {
        $this->cursoAlumnos = new ArrayCollection();
        $this->cursoProfesores = new ArrayCollection();
    }


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return curso
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set horas.
     *
     * @param int $horas
     *
     * @return curso
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas.
     *
     * @return int
     */
    public function getHoras()
    {
        return $this->horas;
    }

    /**
     * Set entidadPromotora.
     *
     * @param string $entidadPromotora
     *
     * @return curso
     */
    public function setEntidadPromotora($entidadPromotora)
    {
        $this->entidadPromotora = $entidadPromotora;

        return $this;
    }

    /**
     * Get entidadPromotora.
     *
     * @return string
     */
    public function getEntidadPromotora()
    {
        return $this->entidadPromotora;
    }

    /**
     * Set fechasDeRealizacion.
     *
     * @param string $fechasDeRealizacion
     *
     * @return curso
     */
    public function setFechasDeRealizacion($fechasDeRealizacion)
    {
        $this->fechasDeRealizacion = $fechasDeRealizacion;

        return $this;
    }

    /**
     * Get fechasDeRealizacion.
     *
     * @return string
     */
    public function getFechasDeRealizacion()
    {
        return $this->fechasDeRealizacion;
    }

    /**
     * Set valoracion.
     *
     * @param string $valoracion
     *
     * @return curso
     */
    public function setValoracion($valoracion)
    {
        $this->valoracion = $valoracion;

        return $this;
    }

    /**
     * Get valoracion.
     *
     * @return string
     */
    public function getValoracion()
    {
        return $this->valoracion;
    }


    /**
     * Add cursoAlumno
     *
     * @param \controlBundle\Entity\alumnoCurso $cursoAlumno
     *
     * @return curso
     */
    public function addCursoAlumno(\controlBundle\Entity\alumnoCurso $cursoAlumno)
    {
        $this->cursoAlumnos[] = $cursoAlumno;

        return $this;
    }

    /**
     * Remove cursoAlumno
     *
     * @param \controlBundle\Entity\alumnoCurso $cursoAlumno
     */
    public function removeCursoAlumno(\controlBundle\Entity\alumnoCurso $cursoAlumno)
    {
        $this->cursoAlumnos->removeElement($cursoAlumno);
    }

    /**
     * Get cursoAlumnos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCursoAlumnos()
    {
        return $this->cursoAlumnos;
    }

    /**
     * Add cursoProfesore
     *
     * @param \controlBundle\Entity\profesorCurso $cursoProfesore
     *
     * @return curso
     */
    public function addCursoProfesore(\controlBundle\Entity\profesorCurso $cursoProfesore)
    {
        $this->cursoProfesores[] = $cursoProfesore;

        return $this;
    }

    /**
     * Remove cursoProfesore
     *
     * @param \controlBundle\Entity\profesorCurso $cursoProfesore
     */
    public function removeCursoProfesore(\controlBundle\Entity\profesorCurso $cursoProfesore)
    {
        $this->cursoProfesores->removeElement($cursoProfesore);
    }

    /**
     * Get cursoProfesores
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCursoProfesores()
    {
        return $this->cursoProfesores;
    }

    public function __toString(){
      return $this->nombre;
    }
}
