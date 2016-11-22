<?php

namespace DataWash\Lib\Enum;

use Common\Enum\TEnum;

abstract class TelefoneEnum
{
    use TEnum;

    const CELULAR = "Celular";

    const RESIDENCIAL = "Residencial";

    const TRABALHO = "Trabalho";

    const PRINCIPAL = "Principal";

    const FAX = "Fax";

}