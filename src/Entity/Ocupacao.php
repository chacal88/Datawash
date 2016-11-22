<?php


namespace DataWash\Entity;


class Ocupacao
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
    protected $cbo;

    /**
     *
     * @var string
     */
    protected $descricaoCbo;

    /**
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param string $cnpj
     * @return Ocupacao
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
     * @return Ocupacao
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    /**
     * @return string
     */
    public function getCbo()
    {
        return $this->cbo;
    }

    /**
     * @param string $cbo
     * @return Ocupacao
     */
    public function setCbo($cbo)
    {
        $this->cbo = $cbo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescricaoCbo()
    {
        return $this->descricaoCbo;
    }

    /**
     * @param string $descricaoCbo
     * @return Ocupacao
     */
    public function setDescricaoCbo($descricaoCbo)
    {
        $this->descricaoCbo = $descricaoCbo;
        return $this;
    }

}