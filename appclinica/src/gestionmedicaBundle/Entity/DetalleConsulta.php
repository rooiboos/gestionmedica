<?php

namespace gestionmedicaBundle\Entity;

/**
 * DetalleConsulta
 */
class DetalleConsulta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var \gestionmedicaBundle\Entity\Consulta
     */
    private $consultaid;

    /**
     * @var \gestionmedicaBundle\Entity\Tratamiento
     */
    private $tratamientoid;


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
     * Set consultaid
     *
     * @param \gestionmedicaBundle\Entity\Consulta $consultaid
     *
     * @return DetalleConsulta
     */
    public function setConsultaid(\gestionmedicaBundle\Entity\Consulta $consultaid = null)
    {
        $this->consultaid = $consultaid;

        return $this;
    }

    /**
     * Get consultaid
     *
     * @return \gestionmedicaBundle\Entity\Consulta
     */
    public function getConsultaid()
    {
        return $this->consultaid;
    }

    /**
     * Set tratamientoid
     *
     * @param \gestionmedicaBundle\Entity\Tratamiento $tratamientoid
     *
     * @return DetalleConsulta
     */
    public function setTratamientoid(\gestionmedicaBundle\Entity\Tratamiento $tratamientoid = null)
    {
        $this->tratamientoid = $tratamientoid;

        return $this;
    }

    /**
     * Get tratamientoid
     *
     * @return \gestionmedicaBundle\Entity\Tratamiento
     */
    public function getTratamientoid()
    {
        return $this->tratamientoid;
    }
}

