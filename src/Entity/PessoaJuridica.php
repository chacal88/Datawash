<?php


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
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
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
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
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
     */
    public function setFantasia($fantasia)
    {
        $this->fantasia = $fantasia;
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
     */
    public function setDataAbertura($dataAbertura)
    {
        $this->dataAbertura = $dataAbertura;
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
     */
    public function setSituacaoCadastral($situacaoCadastral)
    {
        $this->situacaoCadastral = $situacaoCadastral;
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
     */
    public function setDataSituacaoCadastral($dataSituacaoCadastral)
    {
        $this->dataSituacaoCadastral = $dataSituacaoCadastral;
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
     */
    public function setCnae($cnae)
    {
        $this->cnae = $cnae;
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
     */
    public function setCnaeDescriacao($cnaeDescriacao)
    {
        $this->cnaeDescriacao = $cnaeDescriacao;
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
     */
    public function setCnaeSecundario($cnaeSecundario)
    {
        $this->cnaeSecundario = $cnaeSecundario;
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
     */
    public function setCnaeSecundarioDescricao($cnaeSecundarioDescricao)
    {
        $this->cnaeSecundarioDescricao = $cnaeSecundarioDescricao;
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
     */
    public function setNaturezaJuridica($naturezaJuridica)
    {
        $this->naturezaJuridica = $naturezaJuridica;
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
     */
    public function setDescricaoNaturezaJuridica($descricaoNaturezaJuridica)
    {
        $this->descricaoNaturezaJuridica = $descricaoNaturezaJuridica;
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
     */
    public function setCapitalSocial($capitalSocial)
    {
        $this->capitalSocial = $capitalSocial;
    }


}