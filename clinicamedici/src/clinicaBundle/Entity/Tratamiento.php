<?php

namespace clinicaBundle\Entity;

/**
 * Tratamiento
 */
class Tratamiento
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $precio;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \clinicaBundle\Entity\Categoria
     */
    private $categoria;


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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categoria
     *
     * @param \clinicaBundle\Entity\Categoria $categoria
     *
     * @return Tratamiento
     */
    public function setCategoria(\clinicaBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \clinicaBundle\Entity\Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}

