<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class CheckTransactionSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'CheckTransactionSettings';

    protected static $swaggerTypes = [
        'reader' => '\Swagger\Client\Model\FieldInfo',
        'contact_name' => '\Swagger\Client\Model\FieldInfo',
        'contact_title' => '\Swagger\Client\Model\FieldInfo',
        'email_address' => '\Swagger\Client\Model\FieldInfo',
        'phone_default' => 'string',
        'fax' => '\Swagger\Client\Model\FieldInfo',
        'billing_address_default' => 'string',
        'billing_address2' => '\Swagger\Client\Model\FieldInfo',
        'billing_city_default' => 'string',
        'billing_state_default' => 'string',
        'billing_zip_default' => 'string',
        'po_number' => '\Swagger\Client\Model\FieldInfo',
        'invoice_number' => '\Swagger\Client\Model\FieldInfo',
        'business_name' => '\Swagger\Client\Model\FieldInfo',
        'customer_number' => '\Swagger\Client\Model\FieldInfo',
        'reference_note' => '\Swagger\Client\Model\FieldInfo',
        'default_sec_code' => 'string'
    ];

    protected static $swaggerFormats = [
        'reader' => null,
        'contact_name' => null,
        'contact_title' => null,
        'email_address' => null,
        'phone_default' => null,
        'fax' => null,
        'billing_address_default' => null,
        'billing_address2' => null,
        'billing_city_default' => null,
        'billing_state_default' => null,
        'billing_zip_default' => null,
        'po_number' => null,
        'invoice_number' => null,
        'business_name' => null,
        'customer_number' => null,
        'reference_note' => null,
        'default_sec_code' => null
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
        'reader' => 'Reader',
        'contact_name' => 'ContactName',
        'contact_title' => 'ContactTitle',
        'email_address' => 'EmailAddress',
        'phone_default' => 'PhoneDefault',
        'fax' => 'Fax',
        'billing_address_default' => 'BillingAddressDefault',
        'billing_address2' => 'BillingAddress2',
        'billing_city_default' => 'BillingCityDefault',
        'billing_state_default' => 'BillingStateDefault',
        'billing_zip_default' => 'BillingZipDefault',
        'po_number' => 'PONumber',
        'invoice_number' => 'InvoiceNumber',
        'business_name' => 'BusinessName',
        'customer_number' => 'CustomerNumber',
        'reference_note' => 'ReferenceNote',
        'default_sec_code' => 'DefaultSECCode'
    ];

    protected static $setters = [
        'reader' => 'setReader',
        'contact_name' => 'setContactName',
        'contact_title' => 'setContactTitle',
        'email_address' => 'setEmailAddress',
        'phone_default' => 'setPhoneDefault',
        'fax' => 'setFax',
        'billing_address_default' => 'setBillingAddressDefault',
        'billing_address2' => 'setBillingAddress2',
        'billing_city_default' => 'setBillingCityDefault',
        'billing_state_default' => 'setBillingStateDefault',
        'billing_zip_default' => 'setBillingZipDefault',
        'po_number' => 'setPoNumber',
        'invoice_number' => 'setInvoiceNumber',
        'business_name' => 'setBusinessName',
        'customer_number' => 'setCustomerNumber',
        'reference_note' => 'setReferenceNote',
        'default_sec_code' => 'setDefaultSecCode'
    ];

    protected static $getters = [
        'reader' => 'getReader',
        'contact_name' => 'getContactName',
        'contact_title' => 'getContactTitle',
        'email_address' => 'getEmailAddress',
        'phone_default' => 'getPhoneDefault',
        'fax' => 'getFax',
        'billing_address_default' => 'getBillingAddressDefault',
        'billing_address2' => 'getBillingAddress2',
        'billing_city_default' => 'getBillingCityDefault',
        'billing_state_default' => 'getBillingStateDefault',
        'billing_zip_default' => 'getBillingZipDefault',
        'po_number' => 'getPoNumber',
        'invoice_number' => 'getInvoiceNumber',
        'business_name' => 'getBusinessName',
        'customer_number' => 'getCustomerNumber',
        'reference_note' => 'getReferenceNote',
        'default_sec_code' => 'getDefaultSecCode'
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
        $this->container['reader'] = isset($data['reader']) ? $data['reader'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['contact_title'] = isset($data['contact_title']) ? $data['contact_title'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['phone_default'] = isset($data['phone_default']) ? $data['phone_default'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['billing_address_default'] = isset($data['billing_address_default']) ? $data['billing_address_default'] : null;
        $this->container['billing_address2'] = isset($data['billing_address2']) ? $data['billing_address2'] : null;
        $this->container['billing_city_default'] = isset($data['billing_city_default']) ? $data['billing_city_default'] : null;
        $this->container['billing_state_default'] = isset($data['billing_state_default']) ? $data['billing_state_default'] : null;
        $this->container['billing_zip_default'] = isset($data['billing_zip_default']) ? $data['billing_zip_default'] : null;
        $this->container['po_number'] = isset($data['po_number']) ? $data['po_number'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['reference_note'] = isset($data['reference_note']) ? $data['reference_note'] : null;
        $this->container['default_sec_code'] = isset($data['default_sec_code']) ? $data['default_sec_code'] : null;
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

    public function getReader()
    {
        return $this->container['reader'];
    }

    public function setReader($reader)
    {
        $this->container['reader'] = $reader;

        return $this;
    }

    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    public function getContactTitle()
    {
        return $this->container['contact_title'];
    }

    public function setContactTitle($contact_title)
    {
        $this->container['contact_title'] = $contact_title;

        return $this;
    }

    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    public function getPhoneDefault()
    {
        return $this->container['phone_default'];
    }

    public function setPhoneDefault($phone_default)
    {
        $this->container['phone_default'] = $phone_default;

        return $this;
    }

    public function getFax()
    {
        return $this->container['fax'];
    }

    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    public function getBillingAddressDefault()
    {
        return $this->container['billing_address_default'];
    }

    public function setBillingAddressDefault($billing_address_default)
    {
        $this->container['billing_address_default'] = $billing_address_default;

        return $this;
    }

    public function getBillingAddress2()
    {
        return $this->container['billing_address2'];
    }

    public function setBillingAddress2($billing_address2)
    {
        $this->container['billing_address2'] = $billing_address2;

        return $this;
    }

    public function getBillingCityDefault()
    {
        return $this->container['billing_city_default'];
    }

    public function setBillingCityDefault($billing_city_default)
    {
        $this->container['billing_city_default'] = $billing_city_default;

        return $this;
    }

    public function getBillingStateDefault()
    {
        return $this->container['billing_state_default'];
    }

    public function setBillingStateDefault($billing_state_default)
    {
        $this->container['billing_state_default'] = $billing_state_default;

        return $this;
    }

    public function getBillingZipDefault()
    {
        return $this->container['billing_zip_default'];
    }

    public function setBillingZipDefault($billing_zip_default)
    {
        $this->container['billing_zip_default'] = $billing_zip_default;

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

    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

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

    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    public function getReferenceNote()
    {
        return $this->container['reference_note'];
    }

    public function setReferenceNote($reference_note)
    {
        $this->container['reference_note'] = $reference_note;

        return $this;
    }

    public function getDefaultSecCode()
    {
        return $this->container['default_sec_code'];
    }

    public function setDefaultSecCode($default_sec_code)
    {
        $this->container['default_sec_code'] = $default_sec_code;

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
