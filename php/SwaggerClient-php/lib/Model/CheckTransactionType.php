<?php

namespace Swagger\Client\Model;

use \Swagger\Client\ObjectSerializer;

class CheckTransactionType
{
    const UNKNOWN = 'Unknown';
    const AUTHORIZE = 'Authorize';
    const VOID = 'Void';
    const OVERRIDE = 'Override';
    const PAYROLL = 'Payroll';
    const RECURRING = 'Recurring';
    const REFUND = 'Refund';
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::AUTHORIZE,
            self::VOID,
            self::OVERRIDE,
            self::PAYROLL,
            self::RECURRING,
            self::REFUND,
        ];
    }
}
