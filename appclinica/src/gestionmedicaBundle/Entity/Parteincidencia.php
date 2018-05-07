<?php

namespace gestionmedicaBundle\Entity;

/**
 * Parteincidencia
 */
class Parteincidencia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaincidencia;

    /**
     * @var \DateTime
     */
    private $fechasolucion;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $incidencia;

    /**
     * @var string
     */
    private $solucion;

    /**
     * @var integer
     */
    private $coste;

    /**
     * @var \gestionmedicaBundle\Entity\Empleado
     */
    private $empleadoid;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaincidencia
     *
     * @param \DateTime $fechaincidencia
     *
     * @return Parteincidencia
     */
    public function setFechaincidencia($fechaincidencia)
    {
        $this->fechaincidencia = $fechaincidencia;

        return $this;
    }

    /**
     * Get fechaincidencia
     *
     * @return \DateTime
     */
    public function getFechaincidencia()
    {
        return $this->fechaincidencia;
    }

    /**
     * Set fechasolucion
     *
     * @param \DateTime $fechasolucion
     *
     * @return Parteincidencia
     */
    public function setFechasolucion($fechasolucion)
    {
        $this->fechasolucion = $fechasolucion;

        return $this;
    }

    /**
     * Get fechasolucion
     *
     * @return \DateTime
     */
    public function getFechasolucion()
    {
        return $this->fechasolucion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Parteincidencia
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set incidencia
     *
     * @param string $incidencia
     *
     * @return Parteincidencia
     */
    public function setIncidencia($incidencia)
    {
        $this->incidencia = $incidencia;

        return $this;
    }

    /**
     * Get incidencia
     *
     * @return string
     */
    public function getIncidencia()
    {
        return $this->incidencia;
    }

    /**
     * Set solucion
     *
     * @param string $solucion
     *
     * @return Parteincidencia
     */
    public function setSolucion($solucion)
    {
        $this->solucion = $solucion;

        return $this;
    }

    /**
     * Get solucion
     *
     * @return string
     */
    public function getSolucion()
    {
        return $this->solucion;
    }

    /**
     * Set coste
     *
     * @param integer $coste
     *
     * @return Parteincidencia
     */
    public function setCoste($coste)
    {
        $this->coste = $coste;

        return $this;
    }

    /**
     * Get coste
     *
     * @return integer
     */
    public function getCoste()
    {
        return $this->coste;
    }

    /**
     * Set empleadoid
     *
     * @param \gestionmedicaBundle\Entity\Empleado $empleadoid
     *
     * @return Parteincidencia
     */
    public function setEmpleadoid(\gestionmedicaBundle\Entity\Empleado $empleadoid = null)
    {
        $this->empleadoid = $empleadoid;

        return $this;
    }

    /**
     * Get empleadoid
     *
     * @return \gestionmedicaBundle\Entity\Empleado
     */
    public function getEmpleadoid()
    {
        return $this->empleadoid;
    }
}

