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
 * Class TelefoneEnum
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package DataWash\Lib\Enum
 */
abstract class TelefoneEnum
{
    use TEnum;

    /**
     * constante Celular
     */
    const CELULAR = "Celular";

    /**
     * constante Residencial
     */
    const RESIDENCIAL = "Residencial";

    /**
     * constante Trabalho
     */
    const TRABALHO = "Trabalho";

    /**
     * constante Principal
     */
    const PRINCIPAL = "Principal";

    /**
     * constante Fax
     */
    const FAX = "Fax";

}