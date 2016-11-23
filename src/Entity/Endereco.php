<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace DataWash\Entity;

/**
 * Class Endereco
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWash\Entity
 */
class Endereco
{

    /**
     * @var string
     */
    protected $tipoLogradouro;

    /**
     * @var string
     */
    protected $logradouro;

    /**
     * @var string
     */
    protected $numero;

    /**
     * @var string
     */
    protected $bairro;

    /**
     * @var string
     */
    protected $cidade;

    /**
     * @var string
     */
    protected $uf;

    /**
     * @var string
     */
    protected $cep;

    /**
     * getTipoLogradouro
     *
     * @return string
     */
    public function getTipoLogradouro()
    {
        return $this->tipoLogradouro;
    }

    /**
     * setTipoLogradouro
     *
     * @param $tipoLogradouro
     * @return $this
     */
    public function setTipoLogradouro($tipoLogradouro)
    {
        $this->tipoLogradouro = $tipoLogradouro;
        return $this;
    }

    /**
     * getLogradouro
     *
     * @return string
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * setLogradouro
     *
     * @param $logradouro
     * @return $this
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
        return $this;
    }

    /**
     * getNumero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * setNumero
     *
     * @param $numero
     * @return $this
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * getBairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * setBairro
     *
     * @param $bairro
     * @return $this
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * getCidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * setCidade
     *
     * @param $cidade
     * @return $this
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * getUf
     *
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * setUf
     *
     * @param $uf
     * @return $this
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     * getCep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * setCep
     *
     * @param $cep
     * @return $this
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

}