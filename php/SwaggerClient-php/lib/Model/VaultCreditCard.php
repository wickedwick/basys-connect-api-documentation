<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class VaultCreditCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'VaultCreditCard';

    protected static $swaggerTypes = [
        'magnetic_tracks' => 'string',
        'track1' => 'string',
        'track2' => 'string',
        'number' => 'string',
        'masked_number' => 'string',
        'holder' => 'string',
        'exp_date' => 'string',
        'cvv' => 'string',
        'address' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'swiped' => 'bool',
        'type_string' => 'string',
        'cvv_type' => '\Swagger\Client\Model\CVVPresenceType',
        'not_present' => 'bool',
        'response' => '\Swagger\Client\Model\Response',
        'card_id' => 'int',
        'note' => 'string',
        'main' => 'bool'
    ];

    protected static $swaggerFormats = [
        'magnetic_tracks' => null,
        'track1' => null,
        'track2' => null,
        'number' => null,
        'masked_number' => null,
        'holder' => null,
        'exp_date' => null,
        'cvv' => null,
        'address' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'swiped' => null,
        'type_string' => null,
        'cvv_type' => null,
        'not_present' => null,
        'response' => null,
        'card_id' => 'int32',
        'note' => null,
        'main' => null
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
        'magnetic_tracks' => 'MagneticTracks',
        'track1' => 'Track1',
        'track2' => 'Track2',
        'number' => 'Number',
        'masked_number' => 'MaskedNumber',
        'holder' => 'Holder',
        'exp_date' => 'ExpDate',
        'cvv' => 'CVV',
        'address' => 'Address',
        'city' => 'City',
        'state' => 'State',
        'zip' => 'ZIP',
        'swiped' => 'Swiped',
        'type_string' => 'TypeString',
        'cvv_type' => 'CVVType',
        'not_present' => 'NotPresent',
        'response' => 'Response',
        'card_id' => 'CardID',
        'note' => 'Note',
        'main' => 'Main'
    ];

    protected static $setters = [
        'magnetic_tracks' => 'setMagneticTracks',
        'track1' => 'setTrack1',
        'track2' => 'setTrack2',
        'number' => 'setNumber',
        'masked_number' => 'setMaskedNumber',
        'holder' => 'setHolder',
        'exp_date' => 'setExpDate',
        'cvv' => 'setCvv',
        'address' => 'setAddress',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'swiped' => 'setSwiped',
        'type_string' => 'setTypeString',
        'cvv_type' => 'setCvvType',
        'not_present' => 'setNotPresent',
        'response' => 'setResponse',
        'card_id' => 'setCardId',
        'note' => 'setNote',
        'main' => 'setMain'
    ];

    protected static $getters = [
        'magnetic_tracks' => 'getMagneticTracks',
        'track1' => 'getTrack1',
        'track2' => 'getTrack2',
        'number' => 'getNumber',
        'masked_number' => 'getMaskedNumber',
        'holder' => 'getHolder',
        'exp_date' => 'getExpDate',
        'cvv' => 'getCvv',
        'address' => 'getAddress',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'swiped' => 'getSwiped',
        'type_string' => 'getTypeString',
        'cvv_type' => 'getCvvType',
        'not_present' => 'getNotPresent',
        'response' => 'getResponse',
        'card_id' => 'getCardId',
        'note' => 'getNote',
        'main' => 'getMain'
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
        $this->container['magnetic_tracks'] = isset($data['magnetic_tracks']) ? $data['magnetic_tracks'] : null;
        $this->container['track1'] = isset($data['track1']) ? $data['track1'] : null;
        $this->container['track2'] = isset($data['track2']) ? $data['track2'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['masked_number'] = isset($data['masked_number']) ? $data['masked_number'] : null;
        $this->container['holder'] = isset($data['holder']) ? $data['holder'] : null;
        $this->container['exp_date'] = isset($data['exp_date']) ? $data['exp_date'] : null;
        $this->container['cvv'] = isset($data['cvv']) ? $data['cvv'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['swiped'] = isset($data['swiped']) ? $data['swiped'] : null;
        $this->container['type_string'] = isset($data['type_string']) ? $data['type_string'] : null;
        $this->container['cvv_type'] = isset($data['cvv_type']) ? $data['cvv_type'] : null;
        $this->container['not_present'] = isset($data['not_present']) ? $data['not_present'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['card_id'] = isset($data['card_id']) ? $data['card_id'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['main'] = isset($data['main']) ? $data['main'] : null;
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

    public function getMagneticTracks()
    {
        return $this->container['magnetic_tracks'];
    }

    public function setMagneticTracks($magnetic_tracks)
    {
        $this->container['magnetic_tracks'] = $magnetic_tracks;

        return $this;
    }

    public function getTrack1()
    {
        return $this->container['track1'];
    }

    public function setTrack1($track1)
    {
        $this->container['track1'] = $track1;

        return $this;
    }

    public function getTrack2()
    {
        return $this->container['track2'];
    }

    public function setTrack2($track2)
    {
        $this->container['track2'] = $track2;

        return $this;
    }

    public function getNumber()
    {
        return $this->container['number'];
    }

    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    public function getMaskedNumber()
    {
        return $this->container['masked_number'];
    }

    public function setMaskedNumber($masked_number)
    {
        $this->container['masked_number'] = $masked_number;

        return $this;
    }

    public function getHolder()
    {
        return $this->container['holder'];
    }

    public function setHolder($holder)
    {
        $this->container['holder'] = $holder;

        return $this;
    }

    public function getExpDate()
    {
        return $this->container['exp_date'];
    }

    public function setExpDate($exp_date)
    {
        $this->container['exp_date'] = $exp_date;

        return $this;
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

    public function getAddress()
    {
        return $this->container['address'];
    }

    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    public function getCity()
    {
        return $this->container['city'];
    }

    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    public function getState()
    {
        return $this->container['state'];
    }

    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    public function getZip()
    {
        return $this->container['zip'];
    }

    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    public function getSwiped()
    {
        return $this->container['swiped'];
    }

    public function setSwiped($swiped)
    {
        $this->container['swiped'] = $swiped;

        return $this;
    }

    public function getTypeString()
    {
        return $this->container['type_string'];
    }

    public function setTypeString($type_string)
    {
        $this->container['type_string'] = $type_string;

        return $this;
    }

    public function getCvvType()
    {
        return $this->container['cvv_type'];
    }

    public function setCvvType($cvv_type)
    {
        $this->container['cvv_type'] = $cvv_type;

        return $this;
    }

    public function getNotPresent()
    {
        return $this->container['not_present'];
    }

    public function setNotPresent($not_present)
    {
        $this->container['not_present'] = $not_present;

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

    public function getCardId()
    {
        return $this->container['card_id'];
    }

    public function setCardId($card_id)
    {
        $this->container['card_id'] = $card_id;

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

    public function getMain()
    {
        return $this->container['main'];
    }

    public function setMain($main)
    {
        $this->container['main'] = $main;

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
