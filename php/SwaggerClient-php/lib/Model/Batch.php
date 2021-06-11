<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class Batch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'Batch';

    protected static $swaggerTypes = [
        'batch_number' => 'string',
        'started' => '\DateTime',
        'completed' => '\DateTime',
        'sales_count' => 'string',
        'sales_sum' => 'double',
        'return_count' => 'string',
        'return_sum' => 'double',
        'batch_error' => 'bool'
    ];

    protected static $swaggerFormats = [
        'batch_number' => null,
        'started' => 'date-time',
        'completed' => 'date-time',
        'sales_count' => null,
        'sales_sum' => 'double',
        'return_count' => null,
        'return_sum' => 'double',
        'batch_error' => null
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
        'batch_number' => 'BatchNumber',
        'started' => 'Started',
        'completed' => 'Completed',
        'sales_count' => 'SalesCount',
        'sales_sum' => 'SalesSum',
        'return_count' => 'ReturnCount',
        'return_sum' => 'ReturnSum',
        'batch_error' => 'BatchError'
    ];

    protected static $setters = [
        'batch_number' => 'setBatchNumber',
        'started' => 'setStarted',
        'completed' => 'setCompleted',
        'sales_count' => 'setSalesCount',
        'sales_sum' => 'setSalesSum',
        'return_count' => 'setReturnCount',
        'return_sum' => 'setReturnSum',
        'batch_error' => 'setBatchError'
    ];

    protected static $getters = [
        'batch_number' => 'getBatchNumber',
        'started' => 'getStarted',
        'completed' => 'getCompleted',
        'sales_count' => 'getSalesCount',
        'sales_sum' => 'getSalesSum',
        'return_count' => 'getReturnCount',
        'return_sum' => 'getReturnSum',
        'batch_error' => 'getBatchError'
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
        $this->container['batch_number'] = isset($data['batch_number']) ? $data['batch_number'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['sales_count'] = isset($data['sales_count']) ? $data['sales_count'] : null;
        $this->container['sales_sum'] = isset($data['sales_sum']) ? $data['sales_sum'] : null;
        $this->container['return_count'] = isset($data['return_count']) ? $data['return_count'] : null;
        $this->container['return_sum'] = isset($data['return_sum']) ? $data['return_sum'] : null;
        $this->container['batch_error'] = isset($data['batch_error']) ? $data['batch_error'] : null;
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

    public function getBatchNumber()
    {
        return $this->container['batch_number'];
    }

    public function setBatchNumber($batch_number)
    {
        $this->container['batch_number'] = $batch_number;

        return $this;
    }

    public function getStarted()
    {
        return $this->container['started'];
    }

    public function setStarted($started)
    {
        $this->container['started'] = $started;

        return $this;
    }

    public function getCompleted()
    {
        return $this->container['completed'];
    }

    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    public function getSalesCount()
    {
        return $this->container['sales_count'];
    }

    public function setSalesCount($sales_count)
    {
        $this->container['sales_count'] = $sales_count;

        return $this;
    }

    public function getSalesSum()
    {
        return $this->container['sales_sum'];
    }

    public function setSalesSum($sales_sum)
    {
        $this->container['sales_sum'] = $sales_sum;

        return $this;
    }

    public function getReturnCount()
    {
        return $this->container['return_count'];
    }

    public function setReturnCount($return_count)
    {
        $this->container['return_count'] = $return_count;

        return $this;
    }

    public function getReturnSum()
    {
        return $this->container['return_sum'];
    }

    public function setReturnSum($return_sum)
    {
        $this->container['return_sum'] = $return_sum;

        return $this;
    }

    public function getBatchError()
    {
        return $this->container['batch_error'];
    }

    public function setBatchError($batch_error)
    {
        $this->container['batch_error'] = $batch_error;

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
