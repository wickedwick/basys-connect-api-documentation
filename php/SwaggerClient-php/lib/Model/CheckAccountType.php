<?php


namespace Swagger\Client\Model;

use \Swagger\Client\ObjectSerializer;

class CheckAccountType
{
    const UNKNOWN = 'Unknown';
    const CHECKING = 'Checking';
    const SAVINGS = 'Savings';
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::CHECKING,
            self::SAVINGS,
        ];
    }
}
