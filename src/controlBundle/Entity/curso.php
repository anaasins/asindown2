<?php

namespace controlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="horas", type="integer")
     */
    private $horas;

    /**
     * @var string
     *
     * @ORM\Column(name="entidadPromotora", type="string", length=255)
     */
    private $entidadPromotora;

    /**
     * @var string
     *
     * @ORM\Column(name="fechasDeRealizacion", type="string", length=255)
     */
    private $fechasDeRealizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="valoracion", type="string", length=255)
     */
    private $valoracion;

    /**
     * @var alumnoCurso[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="alumnoCurso", mappedBy="cursos",cascade={"all"}, orphanRemoval=true)
     */
    protected $alumnos;
    public function __construct()
    {
        $this->alumnos = new ArrayCollection();
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
     * Add alumno
     *
     * @param \controlBundle\Entity\alumnoCurso $alumno
     *
     * @return curso
     */
    public function addAlumno(\controlBundle\Entity\alumnoCurso $alumno)
    {
        $this->alumnos[] = $alumno;

        return $this;
    }

    /**
     * Remove alumno
     *
     * @param \controlBundle\Entity\alumnoCurso $alumno
     */
    public function removeAlumno(\controlBundle\Entity\alumnoCurso $alumno)
    {
        $this->alumnos->removeElement($alumno);
    }

    /**
     * Get alumnos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }
}
