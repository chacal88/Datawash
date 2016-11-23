<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace DataWash\Entity;

use Common\Lib\Collection;

/**
 * Class PessoaFisica
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWash\Entity
 */
class PessoaFisica
{
    use TPessoa;

    /**
     *
     * @var int
     */
    protected $cpf;

    /**
     *
     * @var string
     */
    protected $nome;

    /**
     *
     * @var string
     */
    protected $sexo;

    /**
     *
     * @var \DateTime
     */
    protected $dataNascimento;

    /**
     *
     * @var string
     */
    protected $nomeMae;

    /**
     *
     * @var string
     */
    protected $escolaridade;

    /**
     *
     * @var Collection
     */
    protected $partipacoes;

    /**
     *
     * @var Ocupacao
     */
    protected $ocupacao;

    /**
     *
     * @var string
     */
    protected $beneficio;

    /**
     * PessoaFisica constructor.
     */
    public function __construct()
    {
        $this->partipacoes = new Collection();
    }

    /**
     * @return int
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param int $cpf
     * @return PessoaFisica
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return PessoaFisica
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param string $sexo
     * @return PessoaFisica
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * @param \DateTime $dataNascimento
     * @return PessoaFisica
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
        return $this;
    }

    /**
     * @return string
     */
    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    /**
     * @param string $nomeMae
     * @return PessoaFisica
     */
    public function setNomeMae($nomeMae)
    {
        $this->nomeMae = $nomeMae;
        return $this;
    }

    /**
     * @return string
     */
    public function getEscolaridade()
    {
        return $this->escolaridade;
    }

    /**
     * @param string $escolaridade
     * @return PessoaFisica
     */
    public function setEscolaridade($escolaridade)
    {
        $this->escolaridade = $escolaridade;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getPartipacoes()
    {
        return $this->partipacoes;
    }

    /**
     * @param Collection $partipacoes
     * @return PessoaFisica
     */
    public function setPartipacoes($partipacoes)
    {
        $this->partipacoes = $partipacoes;
        return $this;
    }

    /**
     * @return Ocupacao
     */
    public function getOcupacao()
    {
        return $this->ocupacao;
    }

    /**
     * @param Ocupacao $ocupacao
     * @return PessoaFisica
     */
    public function setOcupacao($ocupacao)
    {
        $this->ocupacao = $ocupacao;
        return $this;
    }

    /**
     * @return string
     */
    public function getBeneficio()
    {
        return $this->beneficio;
    }

    /**
     * @param string $beneficio
     * @return PessoaFisica
     */
    public function setBeneficio($beneficio)
    {
        $this->beneficio = $beneficio;
        return $this;
    }

    /**
     * @param Participacao $participacao
     */
    public function addParticipacao(Participacao $participacao)
    {
        $this->partipacoes ?? $this->partipacoes = new Collection();
        $this->partipacoes->add($participacao);
    }

} 