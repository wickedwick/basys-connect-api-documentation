<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class Settings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'Settings';

    protected static $swaggerTypes = [
        'credit_card_transaction_settings' => '\Swagger\Client\Model\CreditCardTransactionSettings',
        'check_transaction_settings' => '\Swagger\Client\Model\CheckTransactionSettings',
        'business' => '\Swagger\Client\Model\Business',
        'main_contact' => '\Swagger\Client\Model\Contact',
        'receipt40' => '\Swagger\Client\Model\Receipt',
        'receipt80' => '\Swagger\Client\Model\Receipt',
        'print_signature_line' => 'bool',
        'response' => '\Swagger\Client\Model\Response',
        'account_id' => 'string',
        'copy_email_receipt' => '\Swagger\Client\Model\FieldInfo'
    ];

    protected static $swaggerFormats = [
        'credit_card_transaction_settings' => null,
        'check_transaction_settings' => null,
        'business' => null,
        'main_contact' => null,
        'receipt40' => null,
        'receipt80' => null,
        'print_signature_line' => null,
        'response' => null,
        'account_id' => null,
        'copy_email_receipt' => null
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
        'credit_card_transaction_settings' => 'CreditCardTransactionSettings',
        'check_transaction_settings' => 'CheckTransactionSettings',
        'business' => 'Business',
        'main_contact' => 'MainContact',
        'receipt40' => 'Receipt40',
        'receipt80' => 'Receipt80',
        'print_signature_line' => 'PrintSignatureLine',
        'response' => 'Response',
        'account_id' => 'AccountID',
        'copy_email_receipt' => 'CopyEmailReceipt'
    ];

    protected static $setters = [
        'credit_card_transaction_settings' => 'setCreditCardTransactionSettings',
        'check_transaction_settings' => 'setCheckTransactionSettings',
        'business' => 'setBusiness',
        'main_contact' => 'setMainContact',
        'receipt40' => 'setReceipt40',
        'receipt80' => 'setReceipt80',
        'print_signature_line' => 'setPrintSignatureLine',
        'response' => 'setResponse',
        'account_id' => 'setAccountId',
        'copy_email_receipt' => 'setCopyEmailReceipt'
    ];

    protected static $getters = [
        'credit_card_transaction_settings' => 'getCreditCardTransactionSettings',
        'check_transaction_settings' => 'getCheckTransactionSettings',
        'business' => 'getBusiness',
        'main_contact' => 'getMainContact',
        'receipt40' => 'getReceipt40',
        'receipt80' => 'getReceipt80',
        'print_signature_line' => 'getPrintSignatureLine',
        'response' => 'getResponse',
        'account_id' => 'getAccountId',
        'copy_email_receipt' => 'getCopyEmailReceipt'
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
        $this->container['credit_card_transaction_settings'] = isset($data['credit_card_transaction_settings']) ? $data['credit_card_transaction_settings'] : null;
        $this->container['check_transaction_settings'] = isset($data['check_transaction_settings']) ? $data['check_transaction_settings'] : null;
        $this->container['business'] = isset($data['business']) ? $data['business'] : null;
        $this->container['main_contact'] = isset($data['main_contact']) ? $data['main_contact'] : null;
        $this->container['receipt40'] = isset($data['receipt40']) ? $data['receipt40'] : null;
        $this->container['receipt80'] = isset($data['receipt80']) ? $data['receipt80'] : null;
        $this->container['print_signature_line'] = isset($data['print_signature_line']) ? $data['print_signature_line'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['copy_email_receipt'] = isset($data['copy_email_receipt']) ? $data['copy_email_receipt'] : null;
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


    public function getCreditCardTransactionSettings()
    {
        return $this->container['credit_card_transaction_settings'];
    }

    public function setCreditCardTransactionSettings($credit_card_transaction_settings)
    {
        $this->container['credit_card_transaction_settings'] = $credit_card_transaction_settings;

        return $this;
    }

    public function getCheckTransactionSettings()
    {
        return $this->container['check_transaction_settings'];
    }

    public function setCheckTransactionSettings($check_transaction_settings)
    {
        $this->container['check_transaction_settings'] = $check_transaction_settings;

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

    public function getMainContact()
    {
        return $this->container['main_contact'];
    }

    public function setMainContact($main_contact)
    {
        $this->container['main_contact'] = $main_contact;

        return $this;
    }

    public function getReceipt40()
    {
        return $this->container['receipt40'];
    }

    public function setReceipt40($receipt40)
    {
        $this->container['receipt40'] = $receipt40;

        return $this;
    }

    public function getReceipt80()
    {
        return $this->container['receipt80'];
    }

    public function setReceipt80($receipt80)
    {
        $this->container['receipt80'] = $receipt80;

        return $this;
    }

    public function getPrintSignatureLine()
    {
        return $this->container['print_signature_line'];
    }

    public function setPrintSignatureLine($print_signature_line)
    {
        $this->container['print_signature_line'] = $print_signature_line;

        return $this;
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

    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    public function getCopyEmailReceipt()
    {
        return $this->container['copy_email_receipt'];
    }

    public function setCopyEmailReceipt($copy_email_receipt)
    {
        $this->container['copy_email_receipt'] = $copy_email_receipt;

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
