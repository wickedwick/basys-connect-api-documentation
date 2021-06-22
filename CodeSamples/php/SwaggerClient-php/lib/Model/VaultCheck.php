<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class VaultCheck implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'VaultCheck';

    protected static $swaggerTypes = [
        'response' => '\Swagger\Client\Model\Response',
        'check_id' => 'int',
        'main' => 'bool',
        'check_routing' => 'string',
        'check_account' => 'string',
        'check_number' => 'string',
        'check_first_name' => 'string',
        'check_last_name' => 'string',
        'note' => 'string',
        'masked_routing' => 'string',
        'masked_account' => 'string',
        'account_type' => 'string'
    ];

    protected static $swaggerFormats = [
        'response' => null,
        'check_id' => 'int32',
        'main' => null,
        'check_routing' => null,
        'check_account' => null,
        'check_number' => null,
        'check_first_name' => null,
        'check_last_name' => null,
        'note' => null,
        'masked_routing' => null,
        'masked_account' => null,
        'account_type' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    protected static $attributeMap = [
        'response' => 'Response',
        'check_id' => 'CheckID',
        'main' => 'Main',
        'check_routing' => 'CheckRouting',
        'check_account' => 'CheckAccount',
        'check_number' => 'CheckNumber',
        'check_first_name' => 'CheckFirstName',
        'check_last_name' => 'CheckLastName',
        'note' => 'Note',
        'masked_routing' => 'MaskedRouting',
        'masked_account' => 'MaskedAccount',
        'account_type' => 'AccountType'
    ];

    protected static $setters = [
        'response' => 'setResponse',
        'check_id' => 'setCheckId',
        'main' => 'setMain',
        'check_routing' => 'setCheckRouting',
        'check_account' => 'setCheckAccount',
        'check_number' => 'setCheckNumber',
        'check_first_name' => 'setCheckFirstName',
        'check_last_name' => 'setCheckLastName',
        'note' => 'setNote',
        'masked_routing' => 'setMaskedRouting',
        'masked_account' => 'setMaskedAccount',
        'account_type' => 'setAccountType'
    ];

    protected static $getters = [
        'response' => 'getResponse',
        'check_id' => 'getCheckId',
        'main' => 'getMain',
        'check_routing' => 'getCheckRouting',
        'check_account' => 'getCheckAccount',
        'check_number' => 'getCheckNumber',
        'check_first_name' => 'getCheckFirstName',
        'check_last_name' => 'getCheckLastName',
        'note' => 'getNote',
        'masked_routing' => 'getMaskedRouting',
        'masked_account' => 'getMaskedAccount',
        'account_type' => 'getAccountType'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['check_id'] = isset($data['check_id']) ? $data['check_id'] : null;
        $this->container['main'] = isset($data['main']) ? $data['main'] : null;
        $this->container['check_routing'] = isset($data['check_routing']) ? $data['check_routing'] : null;
        $this->container['check_account'] = isset($data['check_account']) ? $data['check_account'] : null;
        $this->container['check_number'] = isset($data['check_number']) ? $data['check_number'] : null;
        $this->container['check_first_name'] = isset($data['check_first_name']) ? $data['check_first_name'] : null;
        $this->container['check_last_name'] = isset($data['check_last_name']) ? $data['check_last_name'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['masked_routing'] = isset($data['masked_routing']) ? $data['masked_routing'] : null;
        $this->container['masked_account'] = isset($data['masked_account']) ? $data['masked_account'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    public function getResponse()
    {
        return $this->container['response'];
    }

    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    public function getCheckId()
    {
        return $this->container['check_id'];
    }

    public function setCheckId($check_id)
    {
        $this->container['check_id'] = $check_id;

        return $this;
    }

    public function getMain()
    {
        return $this->container['main'];
    }

    public function setMain($main)
    {
        $this->container['main'] = $main;

        return $this;
    }

    public function getCheckRouting()
    {
        return $this->container['check_routing'];
    }

    public function setCheckRouting($check_routing)
    {
        $this->container['check_routing'] = $check_routing;

        return $this;
    }

    public function getCheckAccount()
    {
        return $this->container['check_account'];
    }

    public function setCheckAccount($check_account)
    {
        $this->container['check_account'] = $check_account;

        return $this;
    }

    public function getCheckNumber()
    {
        return $this->container['check_number'];
    }

    public function setCheckNumber($check_number)
    {
        $this->container['check_number'] = $check_number;

        return $this;
    }

    public function getCheckFirstName()
    {
        return $this->container['check_first_name'];
    }

    public function setCheckFirstName($check_first_name)
    {
        $this->container['check_first_name'] = $check_first_name;

        return $this;
    }

    public function getCheckLastName()
    {
        return $this->container['check_last_name'];
    }

    public function setCheckLastName($check_last_name)
    {
        $this->container['check_last_name'] = $check_last_name;

        return $this;
    }

    public function getNote()
    {
        return $this->container['note'];
    }

    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    public function getMaskedRouting()
    {
        return $this->container['masked_routing'];
    }

    public function setMaskedRouting($masked_routing)
    {
        $this->container['masked_routing'] = $masked_routing;

        return $this;
    }

    public function getMaskedAccount()
    {
        return $this->container['masked_account'];
    }

    public function setMaskedAccount($masked_account)
    {
        $this->container['masked_account'] = $masked_account;

        return $this;
    }

    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
