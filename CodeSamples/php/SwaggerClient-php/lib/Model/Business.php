<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class Business implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'Business';

    protected static $swaggerTypes = [
        'address' => '\Swagger\Client\Model\Address',
        'name' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'web_site' => 'string'
    ];

    protected static $swaggerFormats = [
        'address' => null,
        'name' => null,
        'phone' => null,
        'fax' => null,
        'web_site' => null
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
        'address' => 'Address',
        'name' => 'Name',
        'phone' => 'Phone',
        'fax' => 'Fax',
        'web_site' => 'WebSite'
    ];

    protected static $setters = [
        'address' => 'setAddress',
        'name' => 'setName',
        'phone' => 'setPhone',
        'fax' => 'setFax',
        'web_site' => 'setWebSite'
    ];

    protected static $getters = [
        'address' => 'getAddress',
        'name' => 'getName',
        'phone' => 'getPhone',
        'fax' => 'getFax',
        'web_site' => 'getWebSite'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['web_site'] = isset($data['web_site']) ? $data['web_site'] : null;
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

    public function getAddress()
    {
        return $this->container['address'];
    }

    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    public function getName()
    {
        return $this->container['name'];
    }

    public function setName($name)
    {
        $this->container['name'] = $name;

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

    public function getWebSite()
    {
        return $this->container['web_site'];
    }

    public function setWebSite($web_site)
    {
        $this->container['web_site'] = $web_site;

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
