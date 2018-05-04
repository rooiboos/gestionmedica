<?php

namespace clinicaBundle\Entity;

/**
 * DetalleConsulta
 */
class DetalleConsulta
{
    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \clinicaBundle\Entity\Consulta
     */
    private $consulta;

    /**
     * @var \clinicaBundle\Entity\Tratamiento
     */
    private $tratamiento;


    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return DetalleConsulta
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
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
     * Set consulta
     *
     * @param \clinicaBundle\Entity\Consulta $consulta
     *
     * @return DetalleConsulta
     */
    public function setConsulta(\clinicaBundle\Entity\Consulta $consulta = null)
    {
        $this->consulta = $consulta;

        return $this;
    }

    /**
     * Get consulta
     *
     * @return \clinicaBundle\Entity\Consulta
     */
    public function getConsulta()
    {
        return $this->consulta;
    }

    /**
     * Set tratamiento
     *
     * @param \clinicaBundle\Entity\Tratamiento $tratamiento
     *
     * @return DetalleConsulta
     */
    public function setTratamiento(\clinicaBundle\Entity\Tratamiento $tratamiento = null)
    {
        $this->tratamiento = $tratamiento;

        return $this;
    }

    /**
     * Get tratamiento
     *
     * @return \clinicaBundle\Entity\Tratamiento
     */
    public function getTratamiento()
    {
        return $this->tratamiento;
    }
}

