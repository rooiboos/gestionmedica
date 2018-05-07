<?php

namespace gestionmedicaBundle\Entity;

/**
 * Tratamiento
 */
class Tratamiento
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $precio;

    /**
     * @var \gestionmedicaBundle\Entity\Categoria
     */
    private $categoriaid;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Tratamiento
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     *
     * @return Tratamiento
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set categoriaid
     *
     * @param \gestionmedicaBundle\Entity\Categoria $categoriaid
     *
     * @return Tratamiento
     */
    public function setCategoriaid(\gestionmedicaBundle\Entity\Categoria $categoriaid = null)
    {
        $this->categoriaid = $categoriaid;

        return $this;
    }

    /**
     * Get categoriaid
     *
     * @return \gestionmedicaBundle\Entity\Categoria
     */
    public function getCategoriaid()
    {
        return $this->categoriaid;
    }
}

