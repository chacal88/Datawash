<?php


namespace DataWash\Entity;


/**
 * Class Telefone
 * @package DataWash\Model
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
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
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
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
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
     */
    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
    }

}