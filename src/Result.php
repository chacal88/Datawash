<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace DataWash;

use DataWash\Entity\PessoaFisica;
use DataWash\Entity\PessoaJuridica;
use Psr\Log\InvalidArgumentException;

/**
 * Class Result
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWash
 */
class Result
{

    /**
     *
     * @var bool
     */
    protected $isSoapFault = false;

    /**
     *
     * @var int
     */
    protected $errorCode = null;

    /**
     *
     * @var string
     */
    protected $errorMsg = null;

    /**
     *
     * @var PessoaFisica|PessoaJuridica
     */
    protected $result;

    /**
     *
     * @var \SoapFault
     */
    protected $soapFault;

    /**
     * hasError
     *
     * @return bool
     */
    public function hasError()
    {
        return ($this->errorCode !== null || $this->errorMsg !== null || $this->isSoapFault);
    }

    /**
     * setIsSoapFault
     *
     * @param $isSoapFault
     * @return $this
     */
    public function setIsSoapFault($isSoapFault)
    {
        $this->isSoapFault = $isSoapFault;

        return $this;
    }

    /**
     * getIsSoapFault
     *
     * @return bool
     */
    public function getIsSoapFault()
    {
        return $this->isSoapFault;
    }

    /**
     * setErrorCode
     *
     * @param $errorCode
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * getErrorCode
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * setErrorMsg
     *
     * @param $errorMsg
     * @return $this
     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;

        return $this;
    }

    /**
     * getErrorMsg
     *
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }

    /**
     * setSoapFault
     *
     * @param \SoapFault $soapFault
     * @return $this
     */
    public function setSoapFault(\SoapFault $soapFault)
    {
        $this->soapFault = $soapFault;

        $this->setIsSoapFault(true);

        return $this;
    }

    /**
     * getSoapFault
     *
     * @return \SoapFault
     */
    public function getSoapFault()
    {
        return $this->soapFault;
    }

    /**
     * setResult
     *
     * @param $result
     * @return $this
     */
    public function setResult($result)
    {
        if ($result instanceof \SoapFault) {

            $this->setIsSoapFault(true);
            $this->setErrorCode($result->getCode());
            $this->setErrorMsg($result->getMessage());
            $this->setResult(null);
            $this->setSoapFault($result);

        } else {

            $piece = $result;

            if (is_array($result)) {

                if (count($result)) {

                    $piece = reset($result);
                } else {

                    $piece = null;
                }
            }

            if ($piece !== null && !($piece instanceof PessoaJuridica) && !($piece instanceof PessoaFisica) && !($piece instanceof \SoapFault)) {

                throw new InvalidArgumentException('O resultado deve ser uma instância de DataWash\Entity\PessoaFisica ou um ' . 'DataWash\Entity\PessoaJuridica ou uma instância de \SoapFault.');
            }

            $this->result = $result;
        }

        return $this;
    }

    /**
     * getResult
     *
     * @return PessoaFisica|PessoaJuridica
     */
    public function getResult()
    {
        return $this->result;
    }
} 