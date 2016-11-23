<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace DataWash\Entity;

/**
 * Class Telefone
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWash\Entity
 */
class Telefone
{

    /**
     * @var int
     */
    protected $numero;

    /**
     * @var string
     */
    protected $tipo;

    /**
     * @var int
     */
    protected $ddd;

    /**
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     * @return Telefone
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param string $tipo
     * @return Telefone
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return int
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     * @param int $ddd
     * @return Telefone
     */
    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
        return $this;
    }

}