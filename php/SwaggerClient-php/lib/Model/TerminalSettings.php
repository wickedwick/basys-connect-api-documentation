<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class TerminalSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'TerminalSettings';

    protected static $swaggerTypes = [
        'id' => 'int',
        'terminal_id' => 'int',
        'sec_code' => 'string',
        'gateway_terminal' => 'bool',
        'consumer_credits' => 'bool',
        'dl_required' => 'bool',
        'check_verify' => 'bool',
        'identity_verify' => 'bool'
    ];

    protected static $swaggerFormats = [
        'id' => 'int32',
        'terminal_id' => 'int32',
        'sec_code' => null,
        'gateway_terminal' => null,
        'consumer_credits' => null,
        'dl_required' => null,
        'check_verify' => null,
        'identity_verify' => null
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
        'id' => 'ID',
        'terminal_id' => 'Terminal_ID',
        'sec_code' => 'SEC_Code',
        'gateway_terminal' => 'Gateway_Terminal',
        'consumer_credits' => 'Consumer_Credits',
        'dl_required' => 'DL_Required',
        'check_verify' => 'Check_Verify',
        'identity_verify' => 'Identity_Verify'
    ];

    protected static $setters = [
        'id' => 'setId',
        'terminal_id' => 'setTerminalId',
        'sec_code' => 'setSecCode',
        'gateway_terminal' => 'setGatewayTerminal',
        'consumer_credits' => 'setConsumerCredits',
        'dl_required' => 'setDlRequired',
        'check_verify' => 'setCheckVerify',
        'identity_verify' => 'setIdentityVerify'
    ];

    protected static $getters = [
        'id' => 'getId',
        'terminal_id' => 'getTerminalId',
        'sec_code' => 'getSecCode',
        'gateway_terminal' => 'getGatewayTerminal',
        'consumer_credits' => 'getConsumerCredits',
        'dl_required' => 'getDlRequired',
        'check_verify' => 'getCheckVerify',
        'identity_verify' => 'getIdentityVerify'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['terminal_id'] = isset($data['terminal_id']) ? $data['terminal_id'] : null;
        $this->container['sec_code'] = isset($data['sec_code']) ? $data['sec_code'] : null;
        $this->container['gateway_terminal'] = isset($data['gateway_terminal']) ? $data['gateway_terminal'] : null;
        $this->container['consumer_credits'] = isset($data['consumer_credits']) ? $data['consumer_credits'] : null;
        $this->container['dl_required'] = isset($data['dl_required']) ? $data['dl_required'] : null;
        $this->container['check_verify'] = isset($data['check_verify']) ? $data['check_verify'] : null;
        $this->container['identity_verify'] = isset($data['identity_verify']) ? $data['identity_verify'] : null;
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

    public function getId()
    {
        return $this->container['id'];
    }

    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    public function setTerminalId($terminal_id)
    {
        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    public function getSecCode()
    {
        return $this->container['sec_code'];
    }

    public function setSecCode($sec_code)
    {
        $this->container['sec_code'] = $sec_code;

        return $this;
    }

    public function getGatewayTerminal()
    {
        return $this->container['gateway_terminal'];
    }

    public function setGatewayTerminal($gateway_terminal)
    {
        $this->container['gateway_terminal'] = $gateway_terminal;

        return $this;
    }

    public function getConsumerCredits()
    {
        return $this->container['consumer_credits'];
    }

    public function setConsumerCredits($consumer_credits)
    {
        $this->container['consumer_credits'] = $consumer_credits;

        return $this;
    }

    public function getDlRequired()
    {
        return $this->container['dl_required'];
    }

    public function setDlRequired($dl_required)
    {
        $this->container['dl_required'] = $dl_required;

        return $this;
    }

    public function getCheckVerify()
    {
        return $this->container['check_verify'];
    }

    public function setCheckVerify($check_verify)
    {
        $this->container['check_verify'] = $check_verify;

        return $this;
    }

    public function getIdentityVerify()
    {
        return $this->container['identity_verify'];
    }

    public function setIdentityVerify($identity_verify)
    {
        $this->container['identity_verify'] = $identity_verify;

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
