<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class Receipt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'Receipt';

    protected static $swaggerTypes = [
        'header' => '\Swagger\Client\Model\ReceiptCustomLines',
        'footer' => '\Swagger\Client\Model\ReceiptCustomLines'
    ];

    protected static $swaggerFormats = [
        'header' => null,
        'footer' => null
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
        'header' => 'Header',
        'footer' => 'Footer'
    ];

    protected static $setters = [
        'header' => 'setHeader',
        'footer' => 'setFooter'
    ];

    protected static $getters = [
        'header' => 'getHeader',
        'footer' => 'getFooter'
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
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
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

    public function getHeader()
    {
        return $this->container['header'];
    }

    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    public function getFooter()
    {
        return $this->container['footer'];
    }

    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;

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
