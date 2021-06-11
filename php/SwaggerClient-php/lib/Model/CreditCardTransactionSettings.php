<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class CreditCardTransactionSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'CreditCardTransactionSettings';

    protected static $swaggerTypes = [
        'cvv' => '\Swagger\Client\Model\FieldInfo',
        'contact_name' => '\Swagger\Client\Model\FieldInfo',
        'contact_title' => '\Swagger\Client\Model\FieldInfo',
        'email_address' => '\Swagger\Client\Model\FieldInfo',
        'phone' => '\Swagger\Client\Model\FieldInfo',
        'fax' => '\Swagger\Client\Model\FieldInfo',
        'billing_address' => '\Swagger\Client\Model\FieldInfo',
        'billing_address2' => '\Swagger\Client\Model\FieldInfo',
        'billing_city' => '\Swagger\Client\Model\FieldInfo',
        'billing_state' => '\Swagger\Client\Model\FieldInfo',
        'billing_zip' => '\Swagger\Client\Model\FieldInfo',
        'po_number' => '\Swagger\Client\Model\FieldInfo',
        'invoice_number' => '\Swagger\Client\Model\FieldInfo',
        'business_name' => '\Swagger\Client\Model\FieldInfo',
        'customer_number' => '\Swagger\Client\Model\FieldInfo',
        'reference_note' => '\Swagger\Client\Model\FieldInfo',
        'sales_tax' => '\Swagger\Client\Model\FieldInfo',
        'tax_exempt' => '\Swagger\Client\Model\FieldInfo',
        'card_tracks' => '\Swagger\Client\Model\FieldInfo',
        'card_zip' => '\Swagger\Client\Model\FieldInfo',
        'card_address' => '\Swagger\Client\Model\FieldInfo',
        'item_description' => 'string',
        'default_transaction_type' => '\Swagger\Client\Model\TransactionType'
    ];

    protected static $swaggerFormats = [
        'cvv' => null,
        'contact_name' => null,
        'contact_title' => null,
        'email_address' => null,
        'phone' => null,
        'fax' => null,
        'billing_address' => null,
        'billing_address2' => null,
        'billing_city' => null,
        'billing_state' => null,
        'billing_zip' => null,
        'po_number' => null,
        'invoice_number' => null,
        'business_name' => null,
        'customer_number' => null,
        'reference_note' => null,
        'sales_tax' => null,
        'tax_exempt' => null,
        'card_tracks' => null,
        'card_zip' => null,
        'card_address' => null,
        'item_description' => null,
        'default_transaction_type' => null
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
        'cvv' => 'CVV',
        'contact_name' => 'ContactName',
        'contact_title' => 'ContactTitle',
        'email_address' => 'EmailAddress',
        'phone' => 'Phone',
        'fax' => 'Fax',
        'billing_address' => 'BillingAddress',
        'billing_address2' => 'BillingAddress2',
        'billing_city' => 'BillingCity',
        'billing_state' => 'BillingState',
        'billing_zip' => 'BillingZip',
        'po_number' => 'PONumber',
        'invoice_number' => 'InvoiceNumber',
        'business_name' => 'BusinessName',
        'customer_number' => 'CustomerNumber',
        'reference_note' => 'ReferenceNote',
        'sales_tax' => 'SalesTax',
        'tax_exempt' => 'TaxExempt',
        'card_tracks' => 'CardTracks',
        'card_zip' => 'CardZip',
        'card_address' => 'CardAddress',
        'item_description' => 'ItemDescription',
        'default_transaction_type' => 'DefaultTransactionType'
    ];

    protected static $setters = [
        'cvv' => 'setCvv',
        'contact_name' => 'setContactName',
        'contact_title' => 'setContactTitle',
        'email_address' => 'setEmailAddress',
        'phone' => 'setPhone',
        'fax' => 'setFax',
        'billing_address' => 'setBillingAddress',
        'billing_address2' => 'setBillingAddress2',
        'billing_city' => 'setBillingCity',
        'billing_state' => 'setBillingState',
        'billing_zip' => 'setBillingZip',
        'po_number' => 'setPoNumber',
        'invoice_number' => 'setInvoiceNumber',
        'business_name' => 'setBusinessName',
        'customer_number' => 'setCustomerNumber',
        'reference_note' => 'setReferenceNote',
        'sales_tax' => 'setSalesTax',
        'tax_exempt' => 'setTaxExempt',
        'card_tracks' => 'setCardTracks',
        'card_zip' => 'setCardZip',
        'card_address' => 'setCardAddress',
        'item_description' => 'setItemDescription',
        'default_transaction_type' => 'setDefaultTransactionType'
    ];

    protected static $getters = [
        'cvv' => 'getCvv',
        'contact_name' => 'getContactName',
        'contact_title' => 'getContactTitle',
        'email_address' => 'getEmailAddress',
        'phone' => 'getPhone',
        'fax' => 'getFax',
        'billing_address' => 'getBillingAddress',
        'billing_address2' => 'getBillingAddress2',
        'billing_city' => 'getBillingCity',
        'billing_state' => 'getBillingState',
        'billing_zip' => 'getBillingZip',
        'po_number' => 'getPoNumber',
        'invoice_number' => 'getInvoiceNumber',
        'business_name' => 'getBusinessName',
        'customer_number' => 'getCustomerNumber',
        'reference_note' => 'getReferenceNote',
        'sales_tax' => 'getSalesTax',
        'tax_exempt' => 'getTaxExempt',
        'card_tracks' => 'getCardTracks',
        'card_zip' => 'getCardZip',
        'card_address' => 'getCardAddress',
        'item_description' => 'getItemDescription',
        'default_transaction_type' => 'getDefaultTransactionType'
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
        $this->container['cvv'] = isset($data['cvv']) ? $data['cvv'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['contact_title'] = isset($data['contact_title']) ? $data['contact_title'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['billing_address2'] = isset($data['billing_address2']) ? $data['billing_address2'] : null;
        $this->container['billing_city'] = isset($data['billing_city']) ? $data['billing_city'] : null;
        $this->container['billing_state'] = isset($data['billing_state']) ? $data['billing_state'] : null;
        $this->container['billing_zip'] = isset($data['billing_zip']) ? $data['billing_zip'] : null;
        $this->container['po_number'] = isset($data['po_number']) ? $data['po_number'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['reference_note'] = isset($data['reference_note']) ? $data['reference_note'] : null;
        $this->container['sales_tax'] = isset($data['sales_tax']) ? $data['sales_tax'] : null;
        $this->container['tax_exempt'] = isset($data['tax_exempt']) ? $data['tax_exempt'] : null;
        $this->container['card_tracks'] = isset($data['card_tracks']) ? $data['card_tracks'] : null;
        $this->container['card_zip'] = isset($data['card_zip']) ? $data['card_zip'] : null;
        $this->container['card_address'] = isset($data['card_address']) ? $data['card_address'] : null;
        $this->container['item_description'] = isset($data['item_description']) ? $data['item_description'] : null;
        $this->container['default_transaction_type'] = isset($data['default_transaction_type']) ? $data['default_transaction_type'] : null;
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


    public function getCvv()
    {
        return $this->container['cvv'];
    }

    public function setCvv($cvv)
    {
        $this->container['cvv'] = $cvv;

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

    public function getPhone()
    {
        return $this->container['phone'];
    }

    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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

    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

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

    public function getBillingCity()
    {
        return $this->container['billing_city'];
    }

    public function setBillingCity($billing_city)
    {
        $this->container['billing_city'] = $billing_city;

        return $this;
    }

    public function getBillingState()
    {
        return $this->container['billing_state'];
    }

    public function setBillingState($billing_state)
    {
        $this->container['billing_state'] = $billing_state;

        return $this;
    }

    public function getBillingZip()
    {
        return $this->container['billing_zip'];
    }

    public function setBillingZip($billing_zip)
    {
        $this->container['billing_zip'] = $billing_zip;

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

    public function getSalesTax()
    {
        return $this->container['sales_tax'];
    }

    public function setSalesTax($sales_tax)
    {
        $this->container['sales_tax'] = $sales_tax;

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

    public function getCardTracks()
    {
        return $this->container['card_tracks'];
    }

    public function setCardTracks($card_tracks)
    {
        $this->container['card_tracks'] = $card_tracks;

        return $this;
    }

    public function getCardZip()
    {
        return $this->container['card_zip'];
    }

    public function setCardZip($card_zip)
    {
        $this->container['card_zip'] = $card_zip;

        return $this;
    }

    public function getCardAddress()
    {
        return $this->container['card_address'];
    }

    public function setCardAddress($card_address)
    {
        $this->container['card_address'] = $card_address;

        return $this;
    }

    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    public function setItemDescription($item_description)
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }

    public function getDefaultTransactionType()
    {
        return $this->container['default_transaction_type'];
    }

    public function setDefaultTransactionType($default_transaction_type)
    {
        $this->container['default_transaction_type'] = $default_transaction_type;

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
