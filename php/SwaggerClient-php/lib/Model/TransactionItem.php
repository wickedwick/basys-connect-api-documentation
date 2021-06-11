<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class TransactionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'TransactionItem';

    protected static $swaggerTypes = [
        'tax_included' => 'bool',
        'credit' => 'bool',
        'extended_amount' => 'double',
        'item_number' => 'string',
        'unit_cost' => 'double',
        'quantity' => 'int',
        'description' => 'string',
        'discount' => 'double',
        'tax' => 'double',
        'commodity_code' => 'string',
        'unit_of_measure' => 'string'
    ];

    protected static $swaggerFormats = [
        'tax_included' => null,
        'credit' => null,
        'extended_amount' => 'double',
        'item_number' => null,
        'unit_cost' => 'double',
        'quantity' => 'int32',
        'description' => null,
        'discount' => 'double',
        'tax' => 'double',
        'commodity_code' => null,
        'unit_of_measure' => null
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
        'tax_included' => 'TaxIncluded',
        'credit' => 'Credit',
        'extended_amount' => 'ExtendedAmount',
        'item_number' => 'ItemNumber',
        'unit_cost' => 'UnitCost',
        'quantity' => 'Quantity',
        'description' => 'Description',
        'discount' => 'Discount',
        'tax' => 'Tax',
        'commodity_code' => 'CommodityCode',
        'unit_of_measure' => 'UnitOfMeasure'
    ];

    protected static $setters = [
        'tax_included' => 'setTaxIncluded',
        'credit' => 'setCredit',
        'extended_amount' => 'setExtendedAmount',
        'item_number' => 'setItemNumber',
        'unit_cost' => 'setUnitCost',
        'quantity' => 'setQuantity',
        'description' => 'setDescription',
        'discount' => 'setDiscount',
        'tax' => 'setTax',
        'commodity_code' => 'setCommodityCode',
        'unit_of_measure' => 'setUnitOfMeasure'
    ];

    protected static $getters = [
        'tax_included' => 'getTaxIncluded',
        'credit' => 'getCredit',
        'extended_amount' => 'getExtendedAmount',
        'item_number' => 'getItemNumber',
        'unit_cost' => 'getUnitCost',
        'quantity' => 'getQuantity',
        'description' => 'getDescription',
        'discount' => 'getDiscount',
        'tax' => 'getTax',
        'commodity_code' => 'getCommodityCode',
        'unit_of_measure' => 'getUnitOfMeasure'
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
        $this->container['tax_included'] = isset($data['tax_included']) ? $data['tax_included'] : null;
        $this->container['credit'] = isset($data['credit']) ? $data['credit'] : null;
        $this->container['extended_amount'] = isset($data['extended_amount']) ? $data['extended_amount'] : null;
        $this->container['item_number'] = isset($data['item_number']) ? $data['item_number'] : null;
        $this->container['unit_cost'] = isset($data['unit_cost']) ? $data['unit_cost'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['commodity_code'] = isset($data['commodity_code']) ? $data['commodity_code'] : null;
        $this->container['unit_of_measure'] = isset($data['unit_of_measure']) ? $data['unit_of_measure'] : null;
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

    public function getTaxIncluded()
    {
        return $this->container['tax_included'];
    }

    public function setTaxIncluded($tax_included)
    {
        $this->container['tax_included'] = $tax_included;

        return $this;
    }

    public function getCredit()
    {
        return $this->container['credit'];
    }

    public function setCredit($credit)
    {
        $this->container['credit'] = $credit;

        return $this;
    }

    public function getExtendedAmount()
    {
        return $this->container['extended_amount'];
    }

    public function setExtendedAmount($extended_amount)
    {
        $this->container['extended_amount'] = $extended_amount;

        return $this;
    }

    public function getItemNumber()
    {
        return $this->container['item_number'];
    }

    public function setItemNumber($item_number)
    {
        $this->container['item_number'] = $item_number;

        return $this;
    }

    public function getUnitCost()
    {
        return $this->container['unit_cost'];
    }

    public function setUnitCost($unit_cost)
    {
        $this->container['unit_cost'] = $unit_cost;

        return $this;
    }

    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    public function getDescription()
    {
        return $this->container['description'];
    }

    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    public function getDiscount()
    {
        return $this->container['discount'];
    }

    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    public function getTax()
    {
        return $this->container['tax'];
    }

    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    public function getCommodityCode()
    {
        return $this->container['commodity_code'];
    }

    public function setCommodityCode($commodity_code)
    {
        $this->container['commodity_code'] = $commodity_code;

        return $this;
    }

    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    public function setUnitOfMeasure($unit_of_measure)
    {
        $this->container['unit_of_measure'] = $unit_of_measure;

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
