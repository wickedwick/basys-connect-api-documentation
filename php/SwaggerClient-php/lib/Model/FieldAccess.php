<?php

namespace Swagger\Client\Model;

use \Swagger\Client\ObjectSerializer;

class FieldAccess
{
    const DISABLED = 'Disabled';
    const ENABLED = 'Enabled';
    const REQUIRED = 'Required';

    public static function getAllowableEnumValues()
    {
        return [
            self::DISABLED,
            self::ENABLED,
            self::REQUIRED,
        ];
    }
}
