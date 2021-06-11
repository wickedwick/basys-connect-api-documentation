<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class Contact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'Contact';

    protected static $swaggerTypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'name' => 'string',
        'title' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];

    protected static $swaggerFormats = [
        'first_name' => null,
        'last_name' => null,
        'name' => null,
        'title' => null,
        'phone' => null,
        'email' => null
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
        'first_name' => 'FirstName',
        'last_name' => 'LastName',
        'name' => 'Name',
        'title' => 'Title',
        'phone' => 'Phone',
        'email' => 'Email'
    ];

    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'name' => 'setName',
        'title' => 'setTitle',
        'phone' => 'setPhone',
        'email' => 'setEmail'
    ];

    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'name' => 'getName',
        'title' => 'getTitle',
        'phone' => 'getPhone',
        'email' => 'getEmail'
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
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


    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    public function getLastName()
    {
        return $this->container['last_name'];
    }

    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

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

    public function getTitle()
    {
        return $this->container['title'];
    }

    public function setTitle($title)
    {
        $this->container['title'] = $title;

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

    public function getEmail()
    {
        return $this->container['email'];
    }

    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
