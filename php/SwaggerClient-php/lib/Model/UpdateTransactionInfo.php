<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class UpdateTransactionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'UpdateTransactionInfo';

    protected static $swaggerTypes = [
        'invoice_number' => 'string',
        'customer_number' => 'string',
        'po_number' => 'string',
        'note' => 'string'
    ];

    protected static $swaggerFormats = [
        'invoice_number' => null,
        'customer_number' => null,
        'po_number' => null,
        'note' => null
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
        'invoice_number' => 'InvoiceNumber',
        'customer_number' => 'CustomerNumber',
        'po_number' => 'PONumber',
        'note' => 'Note'
    ];

    protected static $setters = [
        'invoice_number' => 'setInvoiceNumber',
        'customer_number' => 'setCustomerNumber',
        'po_number' => 'setPoNumber',
        'note' => 'setNote'
    ];

    protected static $getters = [
        'invoice_number' => 'getInvoiceNumber',
        'customer_number' => 'getCustomerNumber',
        'po_number' => 'getPoNumber',
        'note' => 'getNote'
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
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['po_number'] = isset($data['po_number']) ? $data['po_number'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
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

    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    public function getPoNumber()
    {
        return $this->container['po_number'];
    }

    public function setPoNumber($po_number)
    {
        $this->container['po_number'] = $po_number;

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
