<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class EmailReceipt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'EmailReceipt';

    protected static $swaggerTypes = [
        'transaction_id' => 'string',
        'to_addresses' => 'string',
        'subject' => 'string',
        'header' => 'string',
        'footer' => 'string'
    ];

    protected static $swaggerFormats = [
        'transaction_id' => null,
        'to_addresses' => null,
        'subject' => null,
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
        'transaction_id' => 'TransactionID',
        'to_addresses' => 'ToAddresses',
        'subject' => 'Subject',
        'header' => 'Header',
        'footer' => 'Footer'
    ];

    protected static $setters = [
        'transaction_id' => 'setTransactionId',
        'to_addresses' => 'setToAddresses',
        'subject' => 'setSubject',
        'header' => 'setHeader',
        'footer' => 'setFooter'
    ];

    protected static $getters = [
        'transaction_id' => 'getTransactionId',
        'to_addresses' => 'getToAddresses',
        'subject' => 'getSubject',
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
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['to_addresses'] = isset($data['to_addresses']) ? $data['to_addresses'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
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


    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    public function getToAddresses()
    {
        return $this->container['to_addresses'];
    }

    public function setToAddresses($to_addresses)
    {
        $this->container['to_addresses'] = $to_addresses;

        return $this;
    }

    public function getSubject()
    {
        return $this->container['subject'];
    }

    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
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
