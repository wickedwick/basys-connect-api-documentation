<?php

namespace Swagger\Client\Model;

use \Swagger\Client\ObjectSerializer;

class CVVPresenceType
{
    const NORMAL = 'Normal';
    const BYPASS = 'Bypass';
    const ILLEGIBLE = 'Illegible';
    const NOT_AVAILABLE = 'NotAvailable';

    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::BYPASS,
            self::ILLEGIBLE,
            self::NOT_AVAILABLE,
        ];
    }
}
