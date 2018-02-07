<?php

namespace controlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * alumno
 *
 * @ORM\Table(name="alumno")
 * @ORM\Entity(repositoryClass="controlBundle\Repository\alumnoRepository")
 */
class alumno
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
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNacimiento", type="date")
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=255)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255)
     */
    private $localidad;

    /**
     * @var int
     *
     * @ORM\Column(name="codigoPostal", type="integer")
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var int
     *
     * @ORM\Column(name="telfCasa", type="integer")
     */
    private $telfCasa;

    /**
     * @var int
     *
     * @ORM\Column(name="telf2", type="integer")
     */
    private $telf2;

    /**
     * @var int
     *
     * @ORM\Column(name="movil", type="integer")
     */
    private $movil;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrePadre", type="string", length=255)
     */
    private $nombrePadre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidosPadre", type="string", length=255)
     */
    private $apellidosPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccionPadre", type="string", length=255)
     */
    private $direccionPadre;

    /**
     * @var int
     *
     * @ORM\Column(name="telfTrabajoPadre", type="integer")
     */
    private $telfTrabajoPadre;

    /**
     * @var int
     *
     * @ORM\Column(name="movilPadre", type="integer")
     */
    private $movilPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="profesionPadre", type="string", length=255)
     */
    private $profesionPadre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNacPadre", type="date")
     */
    private $fechaNacPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="dniPadre", type="string", length=255)
     */
    private $dniPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="correoPadre", type="string", length=255)
     */
    private $correoPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreMadre", type="string", length=255)
     */
    private $nombreMadre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidosMadre", type="string", length=255)
     */
    private $apellidosMadre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccionMadre", type="string", length=255)
     */
    private $direccionMadre;

    /**
     * @var int
     *
     * @ORM\Column(name="telfTrabajoMadre", type="integer")
     */
    private $telfTrabajoMadre;

    /**
     * @var int
     *
     * @ORM\Column(name="movilMadre", type="integer")
     */
    private $movilMadre;

    /**
     * @var string
     *
     * @ORM\Column(name="profesionMadre", type="string", length=255)
     */
    private $profesionMadre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNacMadre", type="date")
     */
    private $fechaNacMadre;

    /**
     * @var string
     *
     * @ORM\Column(name="dniMadre", type="string", length=255)
     */
    private $dniMadre;

    /**
     * @var string
     *
     * @ORM\Column(name="correoMadre", type="string", length=255)
     */
    private $correoMadre;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico", type="string", length=255)
     */
    private $diagnostico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAlta", type="date")
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaBaja", type="date")
     */
    private $fechaBaja;

    /**
     * @var string
     *
     * @ORM\Column(name="autorizacionImagen", type="string", length=255)
     */
    private $autorizacionImagen;

    /**
     * @var string
     *
     * @ORM\Column(name="consentimientoTelf", type="string", length=255)
     */
    private $consentimientoTelf;

    /**
     * @var int
     *
     * @ORM\Column(name="consentimientoTelfNumero", type="integer")
     */
    private $consentimientoTelfNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="fotoUsuario", type="string", length=255)
     */
    private $fotoUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="renovServef", type="date")
     */
    private $renovServef;

    /**
     * @var string
     *
     * @ORM\Column(name="centroAcademicoAnterior", type="string", length=255)
     */
    private $centroAcademicoAnterior;

    /**
     * @var string
     *
     * @ORM\Column(name="inscripcionServef", type="string", length=255)
     */
    private $inscripcionServef;

    /**
     * @var string
     *
     * @ORM\Column(name="informePsico", type="string", length=255)
     */
    private $informePsico;

    /**
     * @var string
     *
     * @ORM\Column(name="documentosMatricula", type="string", length=255)
     */
    private $documentosMatricula;

    /**
     * @var historialActuaciones[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="historialActuaciones", mappedBy="alumnosAct",cascade={"all"}, orphanRemoval=true)
     */
    protected $cursosAct;

    /**
     * @var alumnoCurso[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="alumnoCurso", mappedBy="alumnos",cascade={"all"}, orphanRemoval=true)
     */
    protected $cursos;
    public function __construct()
    {
        $this->cursosAct = new ArrayCollection();
        $this->cursos = new ArrayCollection();
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
     * @return alumno
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
     * Set apellidos.
     *
     * @param string $apellidos
     *
     * @return alumno
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos.
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set fechaNacimiento.
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return alumno
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento.
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set dni.
     *
     * @param string $dni
     *
     * @return alumno
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni.
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set localidad.
     *
     * @param string $localidad
     *
     * @return alumno
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad.
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set codigoPostal.
     *
     * @param int $codigoPostal
     *
     * @return alumno
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal.
     *
     * @return int
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set direccion.
     *
     * @param string $direccion
     *
     * @return alumno
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion.
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telfCasa.
     *
     * @param int $telfCasa
     *
     * @return alumno
     */
    public function setTelfCasa($telfCasa)
    {
        $this->telfCasa = $telfCasa;

        return $this;
    }

    /**
     * Get telfCasa.
     *
     * @return int
     */
    public function getTelfCasa()
    {
        return $this->telfCasa;
    }

    /**
     * Set telf2.
     *
     * @param int $telf2
     *
     * @return alumno
     */
    public function setTelf2($telf2)
    {
        $this->telf2 = $telf2;

        return $this;
    }

    /**
     * Get telf2.
     *
     * @return int
     */
    public function getTelf2()
    {
        return $this->telf2;
    }

    /**
     * Set movil.
     *
     * @param int $movil
     *
     * @return alumno
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil.
     *
     * @return int
     */
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set nombrePadre.
     *
     * @param string $nombrePadre
     *
     * @return alumno
     */
    public function setNombrePadre($nombrePadre)
    {
        $this->nombrePadre = $nombrePadre;

        return $this;
    }

    /**
     * Get nombrePadre.
     *
     * @return string
     */
    public function getNombrePadre()
    {
        return $this->nombrePadre;
    }

    /**
     * Set apellidosPadre.
     *
     * @param string $apellidosPadre
     *
     * @return alumno
     */
    public function setApellidosPadre($apellidosPadre)
    {
        $this->apellidosPadre = $apellidosPadre;

        return $this;
    }

    /**
     * Get apellidosPadre.
     *
     * @return string
     */
    public function getApellidosPadre()
    {
        return $this->apellidosPadre;
    }

    /**
     * Set direccionPadre.
     *
     * @param string $direccionPadre
     *
     * @return alumno
     */
    public function setDireccionPadre($direccionPadre)
    {
        $this->direccionPadre = $direccionPadre;

        return $this;
    }

    /**
     * Get direccionPadre.
     *
     * @return string
     */
    public function getDireccionPadre()
    {
        return $this->direccionPadre;
    }

    /**
     * Set telfTrabajoPadre.
     *
     * @param int $telfTrabajoPadre
     *
     * @return alumno
     */
    public function setTelfTrabajoPadre($telfTrabajoPadre)
    {
        $this->telfTrabajoPadre = $telfTrabajoPadre;

        return $this;
    }

    /**
     * Get telfTrabajoPadre.
     *
     * @return int
     */
    public function getTelfTrabajoPadre()
    {
        return $this->telfTrabajoPadre;
    }

    /**
     * Set movilPadre.
     *
     * @param int $movilPadre
     *
     * @return alumno
     */
    public function setMovilPadre($movilPadre)
    {
        $this->movilPadre = $movilPadre;

        return $this;
    }

    /**
     * Get movilPadre.
     *
     * @return int
     */
    public function getMovilPadre()
    {
        return $this->movilPadre;
    }

    /**
     * Set profesionPadre.
     *
     * @param string $profesionPadre
     *
     * @return alumno
     */
    public function setProfesionPadre($profesionPadre)
    {
        $this->profesionPadre = $profesionPadre;

        return $this;
    }

    /**
     * Get profesionPadre.
     *
     * @return string
     */
    public function getProfesionPadre()
    {
        return $this->profesionPadre;
    }

    /**
     * Set fechaNacPadre.
     *
     * @param \DateTime $fechaNacPadre
     *
     * @return alumno
     */
    public function setFechaNacPadre($fechaNacPadre)
    {
        $this->fechaNacPadre = $fechaNacPadre;

        return $this;
    }

    /**
     * Get fechaNacPadre.
     *
     * @return \DateTime
     */
    public function getFechaNacPadre()
    {
        return $this->fechaNacPadre;
    }

    /**
     * Set dniPadre.
     *
     * @param string $dniPadre
     *
     * @return alumno
     */
    public function setDniPadre($dniPadre)
    {
        $this->dniPadre = $dniPadre;

        return $this;
    }

    /**
     * Get dniPadre.
     *
     * @return string
     */
    public function getDniPadre()
    {
        return $this->dniPadre;
    }

    /**
     * Set correoPadre.
     *
     * @param string $correoPadre
     *
     * @return alumno
     */
    public function setCorreoPadre($correoPadre)
    {
        $this->correoPadre = $correoPadre;

        return $this;
    }

    /**
     * Get correoPadre.
     *
     * @return string
     */
    public function getCorreoPadre()
    {
        return $this->correoPadre;
    }

    /**
     * Set nombreMadre.
     *
     * @param string $nombreMadre
     *
     * @return alumno
     */
    public function setNombreMadre($nombreMadre)
    {
        $this->nombreMadre = $nombreMadre;

        return $this;
    }

    /**
     * Get nombreMadre.
     *
     * @return string
     */
    public function getNombreMadre()
    {
        return $this->nombreMadre;
    }

    /**
     * Set apellidosMadre.
     *
     * @param string $apellidosMadre
     *
     * @return alumno
     */
    public function setApellidosMadre($apellidosMadre)
    {
        $this->apellidosMadre = $apellidosMadre;

        return $this;
    }

    /**
     * Get apellidosMadre.
     *
     * @return string
     */
    public function getApellidosMadre()
    {
        return $this->apellidosMadre;
    }

    /**
     * Set direccionMadre.
     *
     * @param string $direccionMadre
     *
     * @return alumno
     */
    public function setDireccionMadre($direccionMadre)
    {
        $this->direccionMadre = $direccionMadre;

        return $this;
    }

    /**
     * Get direccionMadre.
     *
     * @return string
     */
    public function getDireccionMadre()
    {
        return $this->direccionMadre;
    }

    /**
     * Set telfTrabajoMadre.
     *
     * @param int $telfTrabajoMadre
     *
     * @return alumno
     */
    public function setTelfTrabajoMadre($telfTrabajoMadre)
    {
        $this->telfTrabajoMadre = $telfTrabajoMadre;

        return $this;
    }

    /**
     * Get telfTrabajoMadre.
     *
     * @return int
     */
    public function getTelfTrabajoMadre()
    {
        return $this->telfTrabajoMadre;
    }

    /**
     * Set movilMadre.
     *
     * @param int $movilMadre
     *
     * @return alumno
     */
    public function setMovilMadre($movilMadre)
    {
        $this->movilMadre = $movilMadre;

        return $this;
    }

    /**
     * Get movilMadre.
     *
     * @return int
     */
    public function getMovilMadre()
    {
        return $this->movilMadre;
    }

    /**
     * Set profesionMadre.
     *
     * @param string $profesionMadre
     *
     * @return alumno
     */
    public function setProfesionMadre($profesionMadre)
    {
        $this->profesionMadre = $profesionMadre;

        return $this;
    }

    /**
     * Get profesionMadre.
     *
     * @return string
     */
    public function getProfesionMadre()
    {
        return $this->profesionMadre;
    }

    /**
     * Set fechaNacMadre.
     *
     * @param \DateTime $fechaNacMadre
     *
     * @return alumno
     */
    public function setFechaNacMadre($fechaNacMadre)
    {
        $this->fechaNacMadre = $fechaNacMadre;

        return $this;
    }

    /**
     * Get fechaNacMadre.
     *
     * @return \DateTime
     */
    public function getFechaNacMadre()
    {
        return $this->fechaNacMadre;
    }

    /**
     * Set dniMadre.
     *
     * @param string $dniMadre
     *
     * @return alumno
     */
    public function setDniMadre($dniMadre)
    {
        $this->dniMadre = $dniMadre;

        return $this;
    }

    /**
     * Get dniMadre.
     *
     * @return string
     */
    public function getDniMadre()
    {
        return $this->dniMadre;
    }

    /**
     * Set correoMadre.
     *
     * @param string $correoMadre
     *
     * @return alumno
     */
    public function setCorreoMadre($correoMadre)
    {
        $this->correoMadre = $correoMadre;

        return $this;
    }

    /**
     * Get correoMadre.
     *
     * @return string
     */
    public function getCorreoMadre()
    {
        return $this->correoMadre;
    }

    /**
     * Set diagnostico.
     *
     * @param string $diagnostico
     *
     * @return alumno
     */
    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }

    /**
     * Get diagnostico.
     *
     * @return string
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Set fechaAlta.
     *
     * @param \DateTime $fechaAlta
     *
     * @return alumno
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta.
     *
     * @return \DateTime
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaBaja.
     *
     * @param \DateTime $fechaBaja
     *
     * @return alumno
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja.
     *
     * @return \DateTime
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    /**
     * Set autorizacionImagen.
     *
     * @param string $autorizacionImagen
     *
     * @return alumno
     */
    public function setAutorizacionImagen($autorizacionImagen)
    {
        $this->autorizacionImagen = $autorizacionImagen;

        return $this;
    }

    /**
     * Get autorizacionImagen.
     *
     * @return string
     */
    public function getAutorizacionImagen()
    {
        return $this->autorizacionImagen;
    }

    /**
     * Set consentimientoTelf.
     *
     * @param string $consentimientoTelf
     *
     * @return alumno
     */
    public function setConsentimientoTelf($consentimientoTelf)
    {
        $this->consentimientoTelf = $consentimientoTelf;

        return $this;
    }

    /**
     * Get consentimientoTelf.
     *
     * @return string
     */
    public function getConsentimientoTelf()
    {
        return $this->consentimientoTelf;
    }

    /**
     * Set consentimientoTelfNumero.
     *
     * @param int $consentimientoTelfNumero
     *
     * @return alumno
     */
    public function setConsentimientoTelfNumero($consentimientoTelfNumero)
    {
        $this->consentimientoTelfNumero = $consentimientoTelfNumero;

        return $this;
    }

    /**
     * Get consentimientoTelfNumero.
     *
     * @return int
     */
    public function getConsentimientoTelfNumero()
    {
        return $this->consentimientoTelfNumero;
    }

    /**
     * Set observaciones.
     *
     * @param string $observaciones
     *
     * @return alumno
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones.
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set fotoUsuario.
     *
     * @param string $fotoUsuario
     *
     * @return alumno
     */
    public function setFotoUsuario($fotoUsuario)
    {
        $this->fotoUsuario = $fotoUsuario;

        return $this;
    }

    /**
     * Get fotoUsuario.
     *
     * @return string
     */
    public function getFotoUsuario()
    {
        return $this->fotoUsuario;
    }

    /**
     * Set renovServef.
     *
     * @param \DateTime $renovServef
     *
     * @return alumno
     */
    public function setRenovServef($renovServef)
    {
        $this->renovServef = $renovServef;

        return $this;
    }

    /**
     * Get renovServef.
     *
     * @return \DateTime
     */
    public function getRenovServef()
    {
        return $this->renovServef;
    }

    /**
     * Set centroAcademicoAnterior.
     *
     * @param string $centroAcademicoAnterior
     *
     * @return alumno
     */
    public function setCentroAcademicoAnterior($centroAcademicoAnterior)
    {
        $this->centroAcademicoAnterior = $centroAcademicoAnterior;

        return $this;
    }

    /**
     * Get centroAcademicoAnterior.
     *
     * @return string
     */
    public function getCentroAcademicoAnterior()
    {
        return $this->centroAcademicoAnterior;
    }

    /**
     * Set inscripcionServef.
     *
     * @param string $inscripcionServef
     *
     * @return alumno
     */
    public function setInscripcionServef($inscripcionServef)
    {
        $this->inscripcionServef = $inscripcionServef;

        return $this;
    }

    /**
     * Get inscripcionServef.
     *
     * @return string
     */
    public function getInscripcionServef()
    {
        return $this->inscripcionServef;
    }

    /**
     * Set informePsico.
     *
     * @param string $informePsico
     *
     * @return alumno
     */
    public function setInformePsico($informePsico)
    {
        $this->informePsico = $informePsico;

        return $this;
    }

    /**
     * Get informePsico.
     *
     * @return string
     */
    public function getInformePsico()
    {
        return $this->informePsico;
    }

    /**
     * Set documentosMatricula.
     *
     * @param string $documentosMatricula
     *
     * @return alumno
     */
    public function setDocumentosMatricula($documentosMatricula)
    {
        $this->documentosMatricula = $documentosMatricula;

        return $this;
    }

    /**
     * Get documentosMatricula.
     *
     * @return string
     */
    public function getDocumentosMatricula()
    {
        return $this->documentosMatricula;
    }

    /**
     * Add curso
     *
     * @param \controlBundle\Entity\alumnoCurso $curso
     *
     * @return alumno
     */
    public function addCurso(\controlBundle\Entity\alumnoCurso $curso)
    {
        $this->cursos[] = $curso;

        return $this;
    }

    /**
     * Remove curso
     *
     * @param \controlBundle\Entity\alumnoCurso $curso
     */
    public function removeCurso(\controlBundle\Entity\alumnoCurso $curso)
    {
        $this->cursos->removeElement($curso);
    }

    /**
     * Get cursos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCursos()
    {
        return $this->cursos;
    }

    /**
     * Add cursosAct
     *
     * @param \controlBundle\Entity\historialActuaciones $cursosAct
     *
     * @return alumno
     */
    public function addCursosAct(\controlBundle\Entity\historialActuaciones $cursosAct)
    {
        $this->cursosAct[] = $cursosAct;

        return $this;
    }

    /**
     * Remove cursosAct
     *
     * @param \controlBundle\Entity\historialActuaciones $cursosAct
     */
    public function removeCursosAct(\controlBundle\Entity\historialActuaciones $cursosAct)
    {
        $this->cursosAct->removeElement($cursosAct);
    }

    /**
     * Get cursosAct
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCursosAct()
    {
        return $this->cursosAct;
    }
}
