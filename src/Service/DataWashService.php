<?php

namespace DataWash\Service;


use DataWash\Entity\PessoaFisica;
use DataWash\Entity\PessoaJuridica;
use DataWash\Facade\ConsultaCnpj;
use DataWash\Facade\ConsultaCpf;
use DataWash\Lib\Enum\DataWashEnum;
use DataWash\Result;
use Respect\Validation\Exceptions\AllOfException;
use Respect\Validation\Validator as v;


/**
 * Class Datawash
 * @package DataWash\Service
 */
class DataWashService
{

    /**
     * @var \SoapClient
     */
    private $soap;
    /**
     * @var string
     */
    private $cliente;
    /**
     * @var string
     */
    private $usuario;
    /**
     * @var string
     */
    private $senha;

    /**
     * Datawash constructor.
     */
    public function __construct(\SoapClient $soap, $cliente, $usuario, $senha)
    {
        $this->soap = $soap;
        $this->cliente = $cliente;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    /**
     * @param $cnpj
     * @param $tipo
     * @return PessoaJuridica
     */
    public function ConsultaCNPJ($cnpj)
    {
        /** @var $data Result */
        /** @var $result PessoaJuridica */

        try {
            v::cnpj()->assert($cnpj);
        } catch (AllOfException $e) {
            throw new \InvalidArgumentException(sprintf('Cnpj %s inválido', $cnpj), 500, $e);
        }

        $arguments = array(
            __FUNCTION__ => array(
                'Cliente' => $this->cliente,
                'Usuario' => $this->usuario,
                'Senha' => $this->senha,
                'CNPJ' => $cnpj
            )
        );

        $options = array(
            'location' => DataWashEnum::DATAWASH
        );

        $result = $this->soap->__soapCall(__FUNCTION__, $arguments, $options);
        $consultaCnpj = new ConsultaCnpj();
        $data = $consultaCnpj->parse($result);
        $result = $data->getResult();

        return $result;

    }

    /**
     * @param $cpf
     * @return PessoaFisica
     */
    public function ConsultaCPFCompleta($cpf)
    {
        /** @var $data Result */
        /** @var $result PessoaFisica */

        try {
            v::cpf()->assert($cpf);
        } catch (AllOfException $e) {
            throw new \InvalidArgumentException(sprintf('Cpf %s invalido', $cpf), 500, $e);
        }


        $arguments = [
            __FUNCTION__ => [
                'Cliente' => $this->cliente,
                'Usuario' => $this->usuario,
                'Senha' => $this->senha,
                'CPF' => $cpf
            ]
        ];

        $options = array(
            'location' => DataWashEnum::DATAWASH
        );

        $result = $this->soap->__soapCall(__FUNCTION__, $arguments, $options);
        $consultaCpf = new ConsultaCpf();
        $data = $consultaCpf->parse($result);
        $result = $data->getResult();

        return $result;

    }
}