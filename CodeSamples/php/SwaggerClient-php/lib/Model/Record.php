<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class Record implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'Record';

    protected static $swaggerTypes = [
        'response' => '\Swagger\Client\Model\Response',
        'id' => 'int',
        'reference' => 'string',
        'business' => '\Swagger\Client\Model\Business',
        'contact' => '\Swagger\Client\Model\Contact',
        'po' => 'string',
        'invoice' => 'string',
        'customer' => 'string',
        'tax_exempt' => 'bool',
        'note' => 'string',
        'credit_cards' => '\Swagger\Client\Model\VaultCreditCard[]',
        'checks' => '\Swagger\Client\Model\VaultCheck[]'
    ];

    protected static $swaggerFormats = [
        'response' => null,
        'id' => 'int32',
        'reference' => null,
        'business' => null,
        'contact' => null,
        'po' => null,
        'invoice' => null,
        'customer' => null,
        'tax_exempt' => null,
        'note' => null,
        'credit_cards' => null,
        'checks' => null
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
        'id' => 'ID',
        'reference' => 'Reference',
        'business' => 'Business',
        'contact' => 'Contact',
        'po' => 'PO',
        'invoice' => 'Invoice',
        'customer' => 'Customer',
        'tax_exempt' => 'TaxExempt',
        'note' => 'Note',
        'credit_cards' => 'CreditCards',
        'checks' => 'Checks'
    ];

    protected static $setters = [
        'response' => 'setResponse',
        'id' => 'setId',
        'reference' => 'setReference',
        'business' => 'setBusiness',
        'contact' => 'setContact',
        'po' => 'setPo',
        'invoice' => 'setInvoice',
        'customer' => 'setCustomer',
        'tax_exempt' => 'setTaxExempt',
        'note' => 'setNote',
        'credit_cards' => 'setCreditCards',
        'checks' => 'setChecks'
    ];

    protected static $getters = [
        'response' => 'getResponse',
        'id' => 'getId',
        'reference' => 'getReference',
        'business' => 'getBusiness',
        'contact' => 'getContact',
        'po' => 'getPo',
        'invoice' => 'getInvoice',
        'customer' => 'getCustomer',
        'tax_exempt' => 'getTaxExempt',
        'note' => 'getNote',
        'credit_cards' => 'getCreditCards',
        'checks' => 'getChecks'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['business'] = isset($data['business']) ? $data['business'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['po'] = isset($data['po']) ? $data['po'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['tax_exempt'] = isset($data['tax_exempt']) ? $data['tax_exempt'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['credit_cards'] = isset($data['credit_cards']) ? $data['credit_cards'] : null;
        $this->container['checks'] = isset($data['checks']) ? $data['checks'] : null;
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

    public function getId()
    {
        return $this->container['id'];
    }

    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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

    public function getBusiness()
    {
        return $this->container['business'];
    }

    public function setBusiness($business)
    {
        $this->container['business'] = $business;

        return $this;
    }

    public function getContact()
    {
        return $this->container['contact'];
    }

    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    public function getPo()
    {
        return $this->container['po'];
    }

    public function setPo($po)
    {
        $this->container['po'] = $po;

        return $this;
    }

    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    public function getCustomer()
    {
        return $this->container['customer'];
    }

    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    public function getTaxExempt()
    {
        return $this->container['tax_exempt'];
    }

    public function setTaxExempt($tax_exempt)
    {
        $this->container['tax_exempt'] = $tax_exempt;

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

    public function getCreditCards()
    {
        return $this->container['credit_cards'];
    }

    public function setCreditCards($credit_cards)
    {
        $this->container['credit_cards'] = $credit_cards;

        return $this;
    }

    public function getChecks()
    {
        return $this->container['checks'];
    }

    public function setChecks($checks)
    {
        $this->container['checks'] = $checks;

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
