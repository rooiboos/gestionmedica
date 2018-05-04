<?php

namespace clinicaBundle\Entity;

/**
 * Consulta
 */
class Consulta
{
    /**
     * @var string
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $fechasolicitud;

    /**
     * @var \DateTime
     */
    private $fechaconsulta;

    /**
     * @var string
     */
    private $comentmedico;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \clinicaBundle\Entity\Paciente
     */
    private $paciente;


    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Consulta
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
     * Set fechasolicitud
     *
     * @param \DateTime $fechasolicitud
     *
     * @return Consulta
     */
    public function setFechasolicitud($fechasolicitud)
    {
        $this->fechasolicitud = $fechasolicitud;

        return $this;
    }

    /**
     * Get fechasolicitud
     *
     * @return \DateTime
     */
    public function getFechasolicitud()
    {
        return $this->fechasolicitud;
    }

    /**
     * Set fechaconsulta
     *
     * @param \DateTime $fechaconsulta
     *
     * @return Consulta
     */
    public function setFechaconsulta($fechaconsulta)
    {
        $this->fechaconsulta = $fechaconsulta;

        return $this;
    }

    /**
     * Get fechaconsulta
     *
     * @return \DateTime
     */
    public function getFechaconsulta()
    {
        return $this->fechaconsulta;
    }

    /**
     * Set comentmedico
     *
     * @param string $comentmedico
     *
     * @return Consulta
     */
    public function setComentmedico($comentmedico)
    {
        $this->comentmedico = $comentmedico;

        return $this;
    }

    /**
     * Get comentmedico
     *
     * @return string
     */
    public function getComentmedico()
    {
        return $this->comentmedico;
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
     * Set paciente
     *
     * @param \clinicaBundle\Entity\Paciente $paciente
     *
     * @return Consulta
     */
    public function setPaciente(\clinicaBundle\Entity\Paciente $paciente = null)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get paciente
     *
     * @return \clinicaBundle\Entity\Paciente
     */
    public function getPaciente()
    {
        return $this->paciente;
    }
}

