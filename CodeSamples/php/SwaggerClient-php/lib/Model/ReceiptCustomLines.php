<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class ReceiptCustomLines implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'ReceiptCustomLines';

    protected static $swaggerTypes = [
        'custom_line1' => 'string',
        'custom_line2' => 'string',
        'custom_line3' => 'string',
        'custom_line4' => 'string'
    ];

    protected static $swaggerFormats = [
        'custom_line1' => null,
        'custom_line2' => null,
        'custom_line3' => null,
        'custom_line4' => null
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
        'custom_line1' => 'CustomLine1',
        'custom_line2' => 'CustomLine2',
        'custom_line3' => 'CustomLine3',
        'custom_line4' => 'CustomLine4'
    ];

    protected static $setters = [
        'custom_line1' => 'setCustomLine1',
        'custom_line2' => 'setCustomLine2',
        'custom_line3' => 'setCustomLine3',
        'custom_line4' => 'setCustomLine4'
    ];

    protected static $getters = [
        'custom_line1' => 'getCustomLine1',
        'custom_line2' => 'getCustomLine2',
        'custom_line3' => 'getCustomLine3',
        'custom_line4' => 'getCustomLine4'
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
        $this->container['custom_line1'] = isset($data['custom_line1']) ? $data['custom_line1'] : null;
        $this->container['custom_line2'] = isset($data['custom_line2']) ? $data['custom_line2'] : null;
        $this->container['custom_line3'] = isset($data['custom_line3']) ? $data['custom_line3'] : null;
        $this->container['custom_line4'] = isset($data['custom_line4']) ? $data['custom_line4'] : null;
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

    public function getCustomLine1()
    {
        return $this->container['custom_line1'];
    }

    public function setCustomLine1($custom_line1)
    {
        $this->container['custom_line1'] = $custom_line1;

        return $this;
    }

    public function getCustomLine2()
    {
        return $this->container['custom_line2'];
    }

    public function setCustomLine2($custom_line2)
    {
        $this->container['custom_line2'] = $custom_line2;

        return $this;
    }

    public function getCustomLine3()
    {
        return $this->container['custom_line3'];
    }

    public function setCustomLine3($custom_line3)
    {
        $this->container['custom_line3'] = $custom_line3;

        return $this;
    }

    public function getCustomLine4()
    {
        return $this->container['custom_line4'];
    }

    public function setCustomLine4($custom_line4)
    {
        $this->container['custom_line4'] = $custom_line4;

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
