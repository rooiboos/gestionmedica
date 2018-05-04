<?php

namespace clinicaBundle\Entity;

/**
 * Empleado
 */
class Empleado
{
    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $dni;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var integer
     */
    private $telefono;

    /**
     * @var \DateTime
     */
    private $fechacontrato;

    /**
     * @var integer
     */
    private $salariomes;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set role
     *
     * @param string $role
     *
     * @return Empleado
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empleado
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Empleado
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Empleado
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Empleado
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Empleado
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Empleado
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Empleado
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fechacontrato
     *
     * @param \DateTime $fechacontrato
     *
     * @return Empleado
     */
    public function setFechacontrato($fechacontrato)
    {
        $this->fechacontrato = $fechacontrato;

        return $this;
    }

    /**
     * Get fechacontrato
     *
     * @return \DateTime
     */
    public function getFechacontrato()
    {
        return $this->fechacontrato;
    }

    /**
     * Set salariomes
     *
     * @param integer $salariomes
     *
     * @return Empleado
     */
    public function setSalariomes($salariomes)
    {
        $this->salariomes = $salariomes;

        return $this;
    }

    /**
     * Get salariomes
     *
     * @return integer
     */
    public function getSalariomes()
    {
        return $this->salariomes;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Empleado
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
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
}

