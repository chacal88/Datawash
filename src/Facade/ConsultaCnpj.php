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
use DataWash\Entity\PessoaJuridica;
use DataWash\Entity\Telefone;
use DataWash\Result;
use Respect\Validation\Rules\Date;

/**
 * Class ConsultaCnpj
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWash\Facade
 */
class ConsultaCnpj
{

    /**
     * @var Result
     */
    private $result;

    /**
     * ConsultaCnpj constructor.
     * @param $result
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
                    if (property_exists($r, 'ConsultaCNPJResult') && $r->ConsultaCNPJResult instanceof \stdClass) {

                        $parse = simplexml_load_string($r->ConsultaCNPJResult->any);

                        $pessoaJuridica = new PessoaJuridica();
                        $pessoaJuridica->setCodigo((string)$parse->Codigo);
                        $pessoaJuridica->setMensagem((string)$parse->Mensagem);
                        $pessoaJuridica->setCnpj((string)$parse->DADOS->CNPJ);
                        $pessoaJuridica->setRazaoSocial((string)$parse->DADOS->RAZAO_SOCIAL);
                        $pessoaJuridica->setDataAbertura(DateCreate::created($parse->DADOS->DATA_ABERTURA));
                        $pessoaJuridica->setSituacaoCadastral((string)$parse->DADOS->SITUACAO_CADASTRAL);
                        $pessoaJuridica->setDataSituacaoCadastral(DateCreate::created($parse->DADOS->DATA_SITUACAO_CADASTRAL));
                        $pessoaJuridica->setCnae((string)$parse->DADOS->CNAE);
                        $pessoaJuridica->setCnaeDescriacao((string)$parse->DADOS->CNAEDescricao);
                        $pessoaJuridica->setCnaeSecundario((string)$parse->DADOS->CNAE_SECUNDARIO);
                        $pessoaJuridica->setCnaeSecundarioDescricao((string)$parse->DADOS->CNAE_SECUNDARIO_DESCRICAO);
                        $pessoaJuridica->setNaturezaJuridica((string)$parse->DADOS->NATUREZA_JURIDICA);
                        $pessoaJuridica->setDescricaoNaturezaJuridica((string)$parse->DADOS->DESCRICAO_NATUREZA_JURIDICA);

                        if (isset($parse->DADOS->TELEFONES->TELEFONE)) {
                            foreach ($parse->DADOS->TELEFONES->TELEFONE as $value) {

                                $telefone = new Telefone();
                                $pattern = '/\d{2}(\d{4}\d*)/';
                                $telefone->setNumero(preg_replace($pattern, '$1', (string)$value));
                                $pattern = '/(\d{2})\d{4}\d*/';
                                $telefone->setDdd(preg_replace($pattern, '$1', (string)$value));
                                $telefone->setTipo(\DataWash\Lib\Enum\TelefoneEnum::TRABALHO);
                                $pessoaJuridica->addTelefone($telefone);
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
                                $pessoaJuridica->addEndereco($endereco);
                            }
                        }

                        if (isset($parse->DADOS->EMAILS->EMAIL)) {
                            foreach ($parse->DADOS->EMAILS->EMAIL as $value) {

                                $email = new Email();
                                $email->setEmail((string)$value);
                                $pessoaJuridica->addEmail($email);
                            }
                        }

                        $this->result->setResult($pessoaJuridica);
                    } else {
                        $this->result->setErrorCode(0);
                        $this->result->setErrorMsg("Resposta em branco. Confirme se o Cnpj realmente existe.");
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
