<?php


namespace DataWash\Entity;


use DataWash\Lib\Collection;

trait TPessoa
{


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
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
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
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
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
     */
    public function setEnderecos($enderecos)
    {
        $this->enderecos = $enderecos;
    }

    /**
     * @param Endereco $endereco
     */
    public function addEndereco(Endereco $endereco)
    {
        $this->enderecos[] = $endereco;
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
     */
    public function setTelefones($telefones)
    {
        $this->telefones = $telefones;
    }

    /**
     * @param Telefone $telefone
     */
    public function addTelefone(Telefone $telefone)
    {
        $this->telefones[] = $telefone;
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
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
    }

    /**
     * @param Email $email
     */
    public function addEmail(Email $email)
    {
        $this->emails[] = $email;
    }

}