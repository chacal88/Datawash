<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace DataWash\Lib\Enum;

use Common\Enum\TEnum;

/**
 * Class DataWashEnum
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWash\Lib\Enum
 */
abstract class DataWashEnum
{
    use TEnum;

    /**
     * Url
     */
    const DATAWASH = "http://webservice.datawash.com.br/localizacao.asmx?WSDL";

}