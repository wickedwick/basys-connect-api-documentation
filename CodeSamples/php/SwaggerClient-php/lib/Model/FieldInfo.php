<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class FieldInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'FieldInfo';

    protected static $swaggerTypes = [
        'access' => '\Swagger\Client\Model\FieldAccess',
        'default' => 'string'
    ];

    protected static $swaggerFormats = [
        'access' => null,
        'default' => null
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
        'access' => 'Access',
        'default' => 'Default'
    ];

    protected static $setters = [
        'access' => 'setAccess',
        'default' => 'setDefault'
    ];

    protected static $getters = [
        'access' => 'getAccess',
        'default' => 'getDefault'
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
        $this->container['access'] = isset($data['access']) ? $data['access'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
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


    public function getAccess()
    {
        return $this->container['access'];
    }

    public function setAccess($access)
    {
        $this->container['access'] = $access;

        return $this;
    }

    public function getDefault()
    {
        return $this->container['default'];
    }

    public function setDefault($default)
    {
        $this->container['default'] = $default;

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
