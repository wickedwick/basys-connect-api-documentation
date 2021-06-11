<?php

namespace Swagger\Client\Model;

use \Swagger\Client\ObjectSerializer;

class TransactionType
{
    const SALE = 'Sale';
    const CREDIT = 'Credit';
    const AUTHORIZATION = 'Authorization';
    const PRE_AUTH = 'PreAuth';
    const POST_AUTH = 'PostAuth';
    const FORCE_AUTH = 'ForceAuth';
    const VOID = 'Void';
    const QUERY = 'Query';
    const VERIFY = 'Verify';
    const MARK = 'Mark';
    const _RETURN = 'Return';
    const _USE = 'Use';

    public static function getAllowableEnumValues()
    {
        return [
            self::SALE,
            self::CREDIT,
            self::AUTHORIZATION,
            self::PRE_AUTH,
            self::POST_AUTH,
            self::FORCE_AUTH,
            self::VOID,
            self::QUERY,
            self::VERIFY,
            self::MARK,
            self::_RETURN,
            self::_USE,
        ];
    }
}
