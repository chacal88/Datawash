<?php


namespace DataWash\Entity;


use Common\Lib\Collection;

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
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
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
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
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
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
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
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
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
     */
    public function setNomeMae($nomeMae)
    {
        $this->nomeMae = $nomeMae;
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
     */
    public function setEscolaridade($escolaridade)
    {
        $this->escolaridade = $escolaridade;
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
     */
    public function setOcupacao($ocupacao)
    {
        $this->ocupacao = $ocupacao;
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
     */
    public function setBeneficio($beneficio)
    {
        $this->beneficio = $beneficio;
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
     */
    public function setPartipacoes($partipacoes)
    {
        $this->partipacoes = $partipacoes;
    }

    /**
     * @param Participacao $participacao
     */
    public function addParticacao(Participacao $participacao)
    {
        $this->partipacoes ?? $this->partipacoes = new Collection();
        $this->partipacoes->add($participacao);
    }

} 