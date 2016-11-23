<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace DataWash\Facade;

use Common\Lib\DateCreate;
use DataWash\Entity\Email;
use DataWash\Entity\Endereco;
use DataWash\Entity\Ocupacao;
use DataWash\Entity\Participacao;
use DataWash\Entity\PessoaFisica;
use DataWash\Entity\Telefone;
use DataWash\Lib\Enum\TelefoneEnum;
use DataWash\Result;


/**
 * Class ConsultaCpf
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWash\Facade
 */
class ConsultaCpf
{

    /**
     * @var Result
     */
    private $result;

    /**
     * ConsultaCpf constructor.
     */
    public function __construct()
    {
        $this->result = new Result();
    }


    /**
     * parse
     *
     * @param $r
     * @return Result
     */
    public function parse($r)
    {
        $this->result->setErrorCode(null);
        $this->result->setErrorMsg(null);

        if (!$r) {

            $this->result->setErrorCode(0);
        } else {
            if ($r instanceof \SoapFault) {

                $this->result->setErrorCode($r->getCode());
                $this->result->setErrorMsg($r->getMessage());
                $this->result->setSoapFault($r);
            } else {
                if ($r instanceof \stdClass) {
                    if (property_exists($r, 'ConsultaCPFCompletaResult') && $r->ConsultaCPFCompletaResult instanceof \stdClass) {

                        $parse = simplexml_load_string($r->ConsultaCPFCompletaResult->any);

                        $pessoaFisica = new PessoaFisica();
                        $pessoaFisica->setCodigo((string)$parse->Codigo);
                        $pessoaFisica->setMensagem((string)$parse->Mensagem);
                        $pessoaFisica->setCpf((string)$parse->DADOS->CPF);
                        $pessoaFisica->setBeneficio((string)$parse->DADOS->BENEFICIO->FAIXA_BENEFICIO);
                        $pessoaFisica->setDataNascimento(DateCreate::created($parse->DADOS->DATA_NASC));
                        $pessoaFisica->setEscolaridade((string)$parse->DADOS->ESCOLARIDADE);
                        $pessoaFisica->setNome((string)$parse->DADOS->NOME);
                        $pessoaFisica->setNomeMae((string)$parse->DADOS->NOME_MAE);
                        $pessoaFisica->setSexo((string)$parse->DADOS->SEXO);

                        $ocupacao = new Ocupacao();
                        $ocupacao->setCnpj((string)$parse->DADOS->OCUPACAO->CNPJ);
                        $ocupacao->setRazaoSocial((string)$parse->DADOS->OCUPACAO->RAZAO_SOCIAL);
                        $ocupacao->setCbo((string)$parse->DADOS->OCUPACAO->CBO);
                        $ocupacao->setDescricaoCbo((string)$parse->DADOS->OCUPACAO->DESCRICAO_CBO);
                        $pessoaFisica->setOcupacao($ocupacao);


                        if (isset($parse->DADOS->TELEFONES_FIXOS->TELEFONE)) {
                            foreach ($parse->DADOS->TELEFONES_FIXOS->TELEFONE as $value) {

                                $telefone = new Telefone();
                                $pattern = '/\d{2}(\d{4}\d*)/';
                                $telefone->setNumero(preg_replace($pattern, '$1', (string)$value));
                                $pattern = '/(\d{2})\d{4}\d*/';
                                $telefone->setDdd(preg_replace($pattern, '$1', (string)$value));
                                $telefone->setTipo(TelefoneEnum::RESIDENCIAL);
                                $pessoaFisica->addTelefone($telefone);
                            }
                        }

                        if (isset($parse->DADOS->TELEFONES_MOVEIS->TELEFONE)) {
                            foreach ($parse->DADOS->TELEFONES_MOVEIS->TELEFONE as $value) {

                                $telefone = new Telefone();
                                $pattern = '/\d{2}(\d{4}\d*)/';
                                $telefone->setNumero(preg_replace($pattern, '$1', (string)$value));
                                $pattern = '/(\d{2})/';
                                $telefone->setDdd(preg_replace($pattern, '$1', (string)$value));
                                $telefone->setTipo(TelefoneEnum::CELULAR);
                                $pessoaFisica->addTelefone($telefone);
                            }
                        }

                        if (isset($parse->DADOS->ENDERECOS)) {
                            foreach ($parse->DADOS->ENDERECOS as $value) {

                                $endereco = new Endereco();
                                $endereco->setBairro((string)$value->ENDERECO->BAIRRO);
                                $endereco->setCep((string)$value->ENDERECO->CEP);
                                $endereco->setCidade((string)$value->ENDERECO->CIDADE);
                                $endereco->setLogradouro((string)$value->ENDERECO->LOGRADOURO);
                                $endereco->setNumero((string)$value->ENDERECO->NUMERO);
                                $endereco->setTipoLogradouro((string)$value->ENDERECO->TIPO_LOGRADOURO);
                                $endereco->setUf((string)$value->ENDERECO->UF);
                                $pessoaFisica->addEndereco($endereco);
                            }
                        }

                        if (isset($parse->DADOS->EMAILS->EMAIL)) {

                            foreach ($parse->DADOS->EMAILS->EMAIL as $value) {

                                $email = new Email();
                                $email->setEmail((string)$value->EMAIL);
                                $pessoaFisica->addEmail($email);
                            }
                        }

                        if (isset($parse->DADOS->PARTICIPACOES)) {

                            foreach ($parse->DADOS->PARTICIPACOES as $value) {

                                $participacao = new Participacao();
                                $participacao->setCargo((string)$value->PARTICIPACAO->CARGO);
                                $participacao->setCnpj((string)$value->PARTICIPACAO->CNPJ);
                                $participacao->setDataEntrada(DateCreate::created($value->PARTICIPACAO->DATA_ENTRADA));
                                $participacao->setParticipacao((string)$value->PARTICIPACAO->PARTICIPACAO);
                                $participacao->setRazaoSocial((string)$value->PARTICIPACAO->RAZAO_SOCIAL);
                                $pessoaFisica->addParticipacao($participacao);
                            }
                        }

                        $this->result->setResult($pessoaFisica);
                    } else {
                        $this->result->setErrorCode(0);
                        $this->result->setErrorMsg("Resposta em branco. Confirme se o Cpf realmente existe.");
                    }
                } else {
                    $this->result->setErrorCode(0);
                    $this->result->setErrorMsg("A resposta não está no formato esperado.");
                }
            }
        }
        return $this->result;
    }
}
