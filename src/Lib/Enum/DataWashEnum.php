<?php

namespace DataWash\Lib\Enum;

use Common\Enum\TEnum;

abstract class DataWashEnum
{
    use TEnum;

    const DATAWASH = "http://webservice.datawash.com.br/localizacao.asmx?WSDL";

}