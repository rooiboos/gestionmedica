<?php

namespace clinicaBundle\Entity;

/**
 * Parteincidencia
 */
class Parteincidencia
{
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
     * @var integer
     */
    private $id;

    /**
     * @var \clinicaBundle\Entity\Empleado
     */
    private $empleado;


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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set empleado
     *
     * @param \clinicaBundle\Entity\Empleado $empleado
     *
     * @return Parteincidencia
     */
    public function setEmpleado(\clinicaBundle\Entity\Empleado $empleado = null)
    {
        $this->empleado = $empleado;

        return $this;
    }

    /**
     * Get empleado
     *
     * @return \clinicaBundle\Entity\Empleado
     */
    public function getEmpleado()
    {
        return $this->empleado;
    }
}

