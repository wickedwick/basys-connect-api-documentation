<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class SearchVault implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'SearchVault';

    protected static $swaggerTypes = [
        'reference' => 'string',
        'business_name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string'
    ];

    protected static $swaggerFormats = [
        'reference' => null,
        'business_name' => null,
        'first_name' => null,
        'last_name' => null
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
        'reference' => 'Reference',
        'business_name' => 'BusinessName',
        'first_name' => 'FirstName',
        'last_name' => 'LastName'
    ];

    protected static $setters = [
        'reference' => 'setReference',
        'business_name' => 'setBusinessName',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName'
    ];

    protected static $getters = [
        'reference' => 'getReference',
        'business_name' => 'getBusinessName',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName'
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
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
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

    public function getReference()
    {
        return $this->container['reference'];
    }

    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    public function setBusinessName($business_name)
    {
        $this->container['business_name'] = $business_name;

        return $this;
    }

    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    public function getLastName()
    {
        return $this->container['last_name'];
    }

    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

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
