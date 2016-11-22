<?php

namespace DataWash\Facade;


use DataWash\Entity\Email;
use DataWash\Entity\Endereco;
use DataWash\Entity\PessoaJuridica;
use DataWash\Entity\Telefone;
use DataWash\Result;

class ConsultaCnpj
{

    public function parse($r)
    {
        $errorCode = null;
        $errorMsg = null;
        $result = new Result();

        if (!$r) {

            $errorCode = 0;
        } else {
            if ($r instanceof \SoapFault) {

                $errorCode = $r->getCode();
                $errorMsg = $r->getMessage();
                $result->setSoapFault($r);
            } else {
                if ($r instanceof \stdClass) {
                    if (property_exists($r, 'ConsultaCNPJResult') && $r->ConsultaCNPJResult instanceof \stdClass) {

                        $parse = simplexml_load_string($r->ConsultaCNPJResult->any);

                        //  print_r($parse);
                        $pessoaJuridica = new PessoaJuridica();

                        $pessoaJuridica->setCodigo((string)$parse->Codigo);

                        $pessoaJuridica->setMensagem((string)$parse->Mensagem);

                        $pessoaJuridica->setCnpj((string)$parse->DADOS->CNPJ);

                        $pessoaJuridica->setRazaoSocial((string)$parse->DADOS->RAZAO_SOCIAL);

                        $pessoaJuridica->setDataAbertura((string)$parse->DADOS->DATA_ABERTURA);

                        $pessoaJuridica->setSituacaoCadastral((string)$parse->DADOS->SITUACAO_CADASTRAL);

                        $pessoaJuridica->setDataSituacaoCadastral((string)$parse->DADOS->DATA_SITUACAO_CADASTRAL);

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

                        $result->setResult($pessoaJuridica);
                    } else {

                        $errorCode = 0;

                        $errorMsg = "Resposta em branco. Confirme se o Cnpj realmente existe.";
                    }
                } else {

                    $errorCode = 0;

                    $errorMsg = "A resposta não está no formato esperado.";
                }
            }
        }
        $result->setErrorCode($errorCode);
        $result->setErrorMsg($errorMsg);
        return $result;
    }
}
