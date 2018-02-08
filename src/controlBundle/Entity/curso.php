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
     * @ORM\OneToMany(targetEntity="alumnoCurso", mappedBy="curso")
     * @ORM\OrderBy({"order_id" = "ASC"})
     */
    protected $cursoAlumnos;


    /**
     * @var profesorCurso[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="profesorCurso", mappedBy="cursos",cascade={"all"}, orphanRemoval=true)
     */
    protected $profesores;
    public function __construct()
    {
        $this->cursoAlumnos = new ArrayCollection();
        $this->profesores = new ArrayCollection();
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
     * Add profesore
     *
     * @param \controlBundle\Entity\profesorCurso $profesore
     *
     * @return curso
     */
    public function addProfesore(\controlBundle\Entity\profesorCurso $profesore)
    {
        $this->profesores[] = $profesore;

        return $this;
    }

    /**
     * Remove profesore
     *
     * @param \controlBundle\Entity\profesorCurso $profesore
     */
    public function removeProfesore(\controlBundle\Entity\profesorCurso $profesore)
    {
        $this->profesores->removeElement($profesore);
    }

    /**
     * Get profesores
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfesores()
    {
        return $this->profesores;
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
}
