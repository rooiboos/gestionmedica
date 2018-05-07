<?php

namespace gestionmedicaBundle\Entity;

/**
 * Consulta
 */
class Consulta
{
    /**
     * @var integer
     */
    private $id;

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
     * @var \gestionmedicaBundle\Entity\Paciente
     */
    private $pacienteid;


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
     * Set pacienteid
     *
     * @param \gestionmedicaBundle\Entity\Paciente $pacienteid
     *
     * @return Consulta
     */
    public function setPacienteid(\gestionmedicaBundle\Entity\Paciente $pacienteid = null)
    {
        $this->pacienteid = $pacienteid;

        return $this;
    }

    /**
     * Get pacienteid
     *
     * @return \gestionmedicaBundle\Entity\Paciente
     */
    public function getPacienteid()
    {
        return $this->pacienteid;
    }
}

