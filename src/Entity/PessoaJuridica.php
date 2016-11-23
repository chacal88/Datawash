<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace DataWash\Entity;

/**
 * Class Cnpj
 * @package DataWash\Entity
 */
class PessoaJuridica
{

    use TPessoa;
    
    /**
     *
     * @var int
     */
    protected $cnpj;

    /**
     * @var string
     */
    protected $razaoSocial;

    /**
     * @var string
     */
    protected $fantasia;

    /**
     * @var \DateTime
     */
    protected $dataAbertura;

    /**
     * @var string
     */
    protected $situacaoCadastral;

    /**
     * @var \DateTime
     */
    protected $dataSituacaoCadastral;

    /**
     * @var int
     */
    protected $cnae;

    /**
     * @var string
     */
    protected $cnaeDescriacao;

    /**
     * @var int
     */
    protected $cnaeSecundario;

    /**
     * @var string
     */
    protected $cnaeSecundarioDescricao;

    /**
     * @var int
     */
    protected $naturezaJuridica;

    /**
     * @var string
     */
    protected $descricaoNaturezaJuridica;

    /**
     * @var int
     */
    protected $capitalSocial;

    /**
     * @return int
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param int $cnpj
     * @return PessoaJuridica
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
     * @return PessoaJuridica
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    /**
     * @return string
     */
    public function getFantasia()
    {
        return $this->fantasia;
    }

    /**
     * @param string $fantasia
     * @return PessoaJuridica
     */
    public function setFantasia($fantasia)
    {
        $this->fantasia = $fantasia;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDataAbertura()
    {
        return $this->dataAbertura;
    }

    /**
     * @param \DateTime $dataAbertura
     * @return PessoaJuridica
     */
    public function setDataAbertura($dataAbertura)
    {
        $this->dataAbertura = $dataAbertura;
        return $this;
    }

    /**
     * @return string
     */
    public function getSituacaoCadastral()
    {
        return $this->situacaoCadastral;
    }

    /**
     * @param string $situacaoCadastral
     * @return PessoaJuridica
     */
    public function setSituacaoCadastral($situacaoCadastral)
    {
        $this->situacaoCadastral = $situacaoCadastral;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDataSituacaoCadastral()
    {
        return $this->dataSituacaoCadastral;
    }

    /**
     * @param \DateTime $dataSituacaoCadastral
     * @return PessoaJuridica
     */
    public function setDataSituacaoCadastral($dataSituacaoCadastral)
    {
        $this->dataSituacaoCadastral = $dataSituacaoCadastral;
        return $this;
    }

    /**
     * @return int
     */
    public function getCnae()
    {
        return $this->cnae;
    }

    /**
     * @param int $cnae
     * @return PessoaJuridica
     */
    public function setCnae($cnae)
    {
        $this->cnae = $cnae;
        return $this;
    }

    /**
     * @return string
     */
    public function getCnaeDescriacao()
    {
        return $this->cnaeDescriacao;
    }

    /**
     * @param string $cnaeDescriacao
     * @return PessoaJuridica
     */
    public function setCnaeDescriacao($cnaeDescriacao)
    {
        $this->cnaeDescriacao = $cnaeDescriacao;
        return $this;
    }

    /**
     * @return int
     */
    public function getCnaeSecundario()
    {
        return $this->cnaeSecundario;
    }

    /**
     * @param int $cnaeSecundario
     * @return PessoaJuridica
     */
    public function setCnaeSecundario($cnaeSecundario)
    {
        $this->cnaeSecundario = $cnaeSecundario;
        return $this;
    }

    /**
     * @return string
     */
    public function getCnaeSecundarioDescricao()
    {
        return $this->cnaeSecundarioDescricao;
    }

    /**
     * @param string $cnaeSecundarioDescricao
     * @return PessoaJuridica
     */
    public function setCnaeSecundarioDescricao($cnaeSecundarioDescricao)
    {
        $this->cnaeSecundarioDescricao = $cnaeSecundarioDescricao;
        return $this;
    }

    /**
     * @return int
     */
    public function getNaturezaJuridica()
    {
        return $this->naturezaJuridica;
    }

    /**
     * @param int $naturezaJuridica
     * @return PessoaJuridica
     */
    public function setNaturezaJuridica($naturezaJuridica)
    {
        $this->naturezaJuridica = $naturezaJuridica;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescricaoNaturezaJuridica()
    {
        return $this->descricaoNaturezaJuridica;
    }

    /**
     * @param string $descricaoNaturezaJuridica
     * @return PessoaJuridica
     */
    public function setDescricaoNaturezaJuridica($descricaoNaturezaJuridica)
    {
        $this->descricaoNaturezaJuridica = $descricaoNaturezaJuridica;
        return $this;
    }

    /**
     * @return int
     */
    public function getCapitalSocial()
    {
        return $this->capitalSocial;
    }

    /**
     * @param int $capitalSocial
     * @return PessoaJuridica
     */
    public function setCapitalSocial($capitalSocial)
    {
        $this->capitalSocial = $capitalSocial;
        return $this;
    }

}