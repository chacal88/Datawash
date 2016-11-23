<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace DataWash\Entity;

/**
 * Class Participacao
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWash\Entity
 */
class Participacao
{

    /**
     *
     * @var string
     */
    protected $cnpj;

    /**
     *
     * @var string
     */
    protected $razaoSocial;

    /**
     *
     * @var string
     */
    protected $cargo;

    /**
     *
     * @var string
     */
    protected $participacao;

    /**
     *
     * @var \DateTime
     */
    protected $dataEntrada;

    /**
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param string $cnpj
     * @return Participacao
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return string
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * @param string $razaoSocial
     * @return Participacao
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    /**
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param string $cargo
     * @return Participacao
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
        return $this;
    }

    /**
     * @return string
     */
    public function getParticipacao()
    {
        return $this->participacao;
    }

    /**
     * @param string $participacao
     * @return Participacao
     */
    public function setParticipacao($participacao)
    {
        $this->participacao = $participacao;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDataEntrada()
    {
        return $this->dataEntrada;
    }

    /**
     * @param \DateTime $dataEntrada
     * @return Participacao
     */
    public function setDataEntrada($dataEntrada)
    {
        $this->dataEntrada = $dataEntrada;
        return $this;
    }

}