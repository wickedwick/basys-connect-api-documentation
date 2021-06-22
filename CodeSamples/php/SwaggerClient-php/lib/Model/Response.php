<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class Response implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'Response';

    protected static $swaggerTypes = [
        'error' => 'bool',
        'message' => 'string'
    ];

    protected static $swaggerFormats = [
        'error' => null,
        'message' => null
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
        'error' => 'Error',
        'message' => 'Message'
    ];

    protected static $setters = [
        'error' => 'setError',
        'message' => 'setMessage'
    ];

    protected static $getters = [
        'error' => 'getError',
        'message' => 'getMessage'
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
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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

    public function getError()
    {
        return $this->container['error'];
    }

    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    public function getMessage()
    {
        return $this->container['message'];
    }

    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
