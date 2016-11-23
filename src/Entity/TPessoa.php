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
 * Class TPessoa
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWash\Entity
 */
trait TPessoa
{

    /**
     * TPessoa constructor.
     */
    public function __construct()
    {
        $this->enderecos = new Collection();
        $this->telefones = new Collection();
        $this->emails = new Collection();
    }

    /**
     *
     * @var int
     */
    protected $codigo;

    /**
     *
     * @var int
     */
    protected $mensagem;

    /**
     *
     * @var Collection
     */
    protected $enderecos;

    /**
     *
     * @var Collection
     */
    protected $telefones;

    /**
     *
     * @var Collection
     */
    protected $emails;

    /**
     * @return int
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param int $codigo
     * @return TPessoa
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * @return int
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * @param int $mensagem
     * @return TPessoa
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getEnderecos()
    {
        return $this->enderecos;
    }

    /**
     * @param Collection $enderecos
     * @return TPessoa
     */
    public function setEnderecos($enderecos)
    {
        $this->enderecos = $enderecos;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getTelefones()
    {
        return $this->telefones;
    }

    /**
     * @param Collection $telefones
     * @return TPessoa
     */
    public function setTelefones($telefones)
    {
        $this->telefones = $telefones;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param Collection $emails
     * @return TPessoa
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
        return $this;
    }

    /**
     * @param Endereco $endereco
     */
    public function addEndereco(Endereco $endereco)
    {
        $this->enderecos ?? $this->enderecos = new Collection();
        $this->enderecos->add($endereco);
    }

    /**
     * @param Telefone $telefone
     */
    public function addTelefone(Telefone $telefone)
    {
        $this->telefones ?? $this->telefones = new Collection();
        $this->telefones->add($telefone);
    }

    /**
     * @param Email $email
     */
    public function addEmail(Email $email)
    {
        $this->emails ?? $this->emails = new Collection();
        $this->emails->add($email);
    }

}