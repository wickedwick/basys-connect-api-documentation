<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class Transaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'Transaction';

    protected static $swaggerTypes = [
        'submit_time' => '\DateTime',
        'tran_type' => 'string',
        'tran_amt' => 'double',
        'tran_tax' => 'double',
        'tran_inv' => 'string',
        'tran_po' => 'string',
        'tran_c_num' => 'string',
        'tran_note' => 'string',
        'card_num' => 'string',
        'card_name' => 'string',
        'card_exp' => 'string',
        'card_type' => 'string',
        'avs_street' => 'string',
        'avs_zip' => 'string',
        'cvv_num' => 'string',
        'proc_id' => 'string',
        'proc_resp' => 'string',
        'proc_code' => 'string',
        'proc_mess' => 'string',
        'avs_code' => 'string',
        'avs_resp' => 'string',
        'cvv_code' => 'string',
        'cvv_resp' => 'string',
        'items' => '\Swagger\Client\Model\TransactionItem[]',
        'business_name' => 'string',
        'business_address' => 'string',
        'business_address2' => 'string',
        'business_city' => 'string',
        'business_state' => 'string',
        'business_zip' => 'string',
        'business_country' => 'string',
        'business_website' => 'string',
        'contact_first_name' => 'string',
        'contact_last_name' => 'string',
        'contact_phone' => 'string',
        'contact_fax' => 'string',
        'contact_email' => 'string',
        'contact_title' => 'string',
        'ip' => 'string',
        'tax_exempt' => 'bool'
    ];

    protected static $swaggerFormats = [
        'submit_time' => 'date-time',
        'tran_type' => null,
        'tran_amt' => 'double',
        'tran_tax' => 'double',
        'tran_inv' => null,
        'tran_po' => null,
        'tran_c_num' => null,
        'tran_note' => null,
        'card_num' => null,
        'card_name' => null,
        'card_exp' => null,
        'card_type' => null,
        'avs_street' => null,
        'avs_zip' => null,
        'cvv_num' => null,
        'proc_id' => null,
        'proc_resp' => null,
        'proc_code' => null,
        'proc_mess' => null,
        'avs_code' => null,
        'avs_resp' => null,
        'cvv_code' => null,
        'cvv_resp' => null,
        'items' => null,
        'business_name' => null,
        'business_address' => null,
        'business_address2' => null,
        'business_city' => null,
        'business_state' => null,
        'business_zip' => null,
        'business_country' => null,
        'business_website' => null,
        'contact_first_name' => null,
        'contact_last_name' => null,
        'contact_phone' => null,
        'contact_fax' => null,
        'contact_email' => null,
        'contact_title' => null,
        'ip' => null,
        'tax_exempt' => null
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
        'submit_time' => 'Submit_Time',
        'tran_type' => 'Tran_Type',
        'tran_amt' => 'Tran_Amt',
        'tran_tax' => 'Tran_Tax',
        'tran_inv' => 'Tran_Inv',
        'tran_po' => 'Tran_PO',
        'tran_c_num' => 'Tran_CNum',
        'tran_note' => 'Tran_Note',
        'card_num' => 'Card_Num',
        'card_name' => 'Card_Name',
        'card_exp' => 'Card_Exp',
        'card_type' => 'Card_Type',
        'avs_street' => 'AVS_Street',
        'avs_zip' => 'AVS_Zip',
        'cvv_num' => 'CVV_Num',
        'proc_id' => 'Proc_ID',
        'proc_resp' => 'Proc_Resp',
        'proc_code' => 'Proc_Code',
        'proc_mess' => 'Proc_Mess',
        'avs_code' => 'AVS_Code',
        'avs_resp' => 'AVS_Resp',
        'cvv_code' => 'CVV_Code',
        'cvv_resp' => 'CVV_Resp',
        'items' => 'Items',
        'business_name' => 'Business_Name',
        'business_address' => 'Business_Address',
        'business_address2' => 'Business_Address2',
        'business_city' => 'Business_City',
        'business_state' => 'Business_State',
        'business_zip' => 'Business_Zip',
        'business_country' => 'Business_Country',
        'business_website' => 'Business_Website',
        'contact_first_name' => 'Contact_FirstName',
        'contact_last_name' => 'Contact_LastName',
        'contact_phone' => 'Contact_Phone',
        'contact_fax' => 'Contact_Fax',
        'contact_email' => 'Contact_Email',
        'contact_title' => 'Contact_Title',
        'ip' => 'IP',
        'tax_exempt' => 'TaxExempt'
    ];

    protected static $setters = [
        'submit_time' => 'setSubmitTime',
        'tran_type' => 'setTranType',
        'tran_amt' => 'setTranAmt',
        'tran_tax' => 'setTranTax',
        'tran_inv' => 'setTranInv',
        'tran_po' => 'setTranPo',
        'tran_c_num' => 'setTranCNum',
        'tran_note' => 'setTranNote',
        'card_num' => 'setCardNum',
        'card_name' => 'setCardName',
        'card_exp' => 'setCardExp',
        'card_type' => 'setCardType',
        'avs_street' => 'setAvsStreet',
        'avs_zip' => 'setAvsZip',
        'cvv_num' => 'setCvvNum',
        'proc_id' => 'setProcId',
        'proc_resp' => 'setProcResp',
        'proc_code' => 'setProcCode',
        'proc_mess' => 'setProcMess',
        'avs_code' => 'setAvsCode',
        'avs_resp' => 'setAvsResp',
        'cvv_code' => 'setCvvCode',
        'cvv_resp' => 'setCvvResp',
        'items' => 'setItems',
        'business_name' => 'setBusinessName',
        'business_address' => 'setBusinessAddress',
        'business_address2' => 'setBusinessAddress2',
        'business_city' => 'setBusinessCity',
        'business_state' => 'setBusinessState',
        'business_zip' => 'setBusinessZip',
        'business_country' => 'setBusinessCountry',
        'business_website' => 'setBusinessWebsite',
        'contact_first_name' => 'setContactFirstName',
        'contact_last_name' => 'setContactLastName',
        'contact_phone' => 'setContactPhone',
        'contact_fax' => 'setContactFax',
        'contact_email' => 'setContactEmail',
        'contact_title' => 'setContactTitle',
        'ip' => 'setIp',
        'tax_exempt' => 'setTaxExempt'
    ];

    protected static $getters = [
        'submit_time' => 'getSubmitTime',
        'tran_type' => 'getTranType',
        'tran_amt' => 'getTranAmt',
        'tran_tax' => 'getTranTax',
        'tran_inv' => 'getTranInv',
        'tran_po' => 'getTranPo',
        'tran_c_num' => 'getTranCNum',
        'tran_note' => 'getTranNote',
        'card_num' => 'getCardNum',
        'card_name' => 'getCardName',
        'card_exp' => 'getCardExp',
        'card_type' => 'getCardType',
        'avs_street' => 'getAvsStreet',
        'avs_zip' => 'getAvsZip',
        'cvv_num' => 'getCvvNum',
        'proc_id' => 'getProcId',
        'proc_resp' => 'getProcResp',
        'proc_code' => 'getProcCode',
        'proc_mess' => 'getProcMess',
        'avs_code' => 'getAvsCode',
        'avs_resp' => 'getAvsResp',
        'cvv_code' => 'getCvvCode',
        'cvv_resp' => 'getCvvResp',
        'items' => 'getItems',
        'business_name' => 'getBusinessName',
        'business_address' => 'getBusinessAddress',
        'business_address2' => 'getBusinessAddress2',
        'business_city' => 'getBusinessCity',
        'business_state' => 'getBusinessState',
        'business_zip' => 'getBusinessZip',
        'business_country' => 'getBusinessCountry',
        'business_website' => 'getBusinessWebsite',
        'contact_first_name' => 'getContactFirstName',
        'contact_last_name' => 'getContactLastName',
        'contact_phone' => 'getContactPhone',
        'contact_fax' => 'getContactFax',
        'contact_email' => 'getContactEmail',
        'contact_title' => 'getContactTitle',
        'ip' => 'getIp',
        'tax_exempt' => 'getTaxExempt'
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
        $this->container['submit_time'] = isset($data['submit_time']) ? $data['submit_time'] : null;
        $this->container['tran_type'] = isset($data['tran_type']) ? $data['tran_type'] : null;
        $this->container['tran_amt'] = isset($data['tran_amt']) ? $data['tran_amt'] : null;
        $this->container['tran_tax'] = isset($data['tran_tax']) ? $data['tran_tax'] : null;
        $this->container['tran_inv'] = isset($data['tran_inv']) ? $data['tran_inv'] : null;
        $this->container['tran_po'] = isset($data['tran_po']) ? $data['tran_po'] : null;
        $this->container['tran_c_num'] = isset($data['tran_c_num']) ? $data['tran_c_num'] : null;
        $this->container['tran_note'] = isset($data['tran_note']) ? $data['tran_note'] : null;
        $this->container['card_num'] = isset($data['card_num']) ? $data['card_num'] : null;
        $this->container['card_name'] = isset($data['card_name']) ? $data['card_name'] : null;
        $this->container['card_exp'] = isset($data['card_exp']) ? $data['card_exp'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['avs_street'] = isset($data['avs_street']) ? $data['avs_street'] : null;
        $this->container['avs_zip'] = isset($data['avs_zip']) ? $data['avs_zip'] : null;
        $this->container['cvv_num'] = isset($data['cvv_num']) ? $data['cvv_num'] : null;
        $this->container['proc_id'] = isset($data['proc_id']) ? $data['proc_id'] : null;
        $this->container['proc_resp'] = isset($data['proc_resp']) ? $data['proc_resp'] : null;
        $this->container['proc_code'] = isset($data['proc_code']) ? $data['proc_code'] : null;
        $this->container['proc_mess'] = isset($data['proc_mess']) ? $data['proc_mess'] : null;
        $this->container['avs_code'] = isset($data['avs_code']) ? $data['avs_code'] : null;
        $this->container['avs_resp'] = isset($data['avs_resp']) ? $data['avs_resp'] : null;
        $this->container['cvv_code'] = isset($data['cvv_code']) ? $data['cvv_code'] : null;
        $this->container['cvv_resp'] = isset($data['cvv_resp']) ? $data['cvv_resp'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['business_address'] = isset($data['business_address']) ? $data['business_address'] : null;
        $this->container['business_address2'] = isset($data['business_address2']) ? $data['business_address2'] : null;
        $this->container['business_city'] = isset($data['business_city']) ? $data['business_city'] : null;
        $this->container['business_state'] = isset($data['business_state']) ? $data['business_state'] : null;
        $this->container['business_zip'] = isset($data['business_zip']) ? $data['business_zip'] : null;
        $this->container['business_country'] = isset($data['business_country']) ? $data['business_country'] : null;
        $this->container['business_website'] = isset($data['business_website']) ? $data['business_website'] : null;
        $this->container['contact_first_name'] = isset($data['contact_first_name']) ? $data['contact_first_name'] : null;
        $this->container['contact_last_name'] = isset($data['contact_last_name']) ? $data['contact_last_name'] : null;
        $this->container['contact_phone'] = isset($data['contact_phone']) ? $data['contact_phone'] : null;
        $this->container['contact_fax'] = isset($data['contact_fax']) ? $data['contact_fax'] : null;
        $this->container['contact_email'] = isset($data['contact_email']) ? $data['contact_email'] : null;
        $this->container['contact_title'] = isset($data['contact_title']) ? $data['contact_title'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['tax_exempt'] = isset($data['tax_exempt']) ? $data['tax_exempt'] : null;
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

    public function getSubmitTime()
    {
        return $this->container['submit_time'];
    }

    public function setSubmitTime($submit_time)
    {
        $this->container['submit_time'] = $submit_time;

        return $this;
    }

    public function getTranType()
    {
        return $this->container['tran_type'];
    }

    public function setTranType($tran_type)
    {
        $this->container['tran_type'] = $tran_type;

        return $this;
    }

    public function getTranAmt()
    {
        return $this->container['tran_amt'];
    }

    public function setTranAmt($tran_amt)
    {
        $this->container['tran_amt'] = $tran_amt;

        return $this;
    }

    public function getTranTax()
    {
        return $this->container['tran_tax'];
    }

    public function setTranTax($tran_tax)
    {
        $this->container['tran_tax'] = $tran_tax;

        return $this;
    }

    public function getTranInv()
    {
        return $this->container['tran_inv'];
    }

    public function setTranInv($tran_inv)
    {
        $this->container['tran_inv'] = $tran_inv;

        return $this;
    }

    public function getTranPo()
    {
        return $this->container['tran_po'];
    }

    public function setTranPo($tran_po)
    {
        $this->container['tran_po'] = $tran_po;

        return $this;
    }

    public function getTranCNum()
    {
        return $this->container['tran_c_num'];
    }

    public function setTranCNum($tran_c_num)
    {
        $this->container['tran_c_num'] = $tran_c_num;

        return $this;
    }

    public function getTranNote()
    {
        return $this->container['tran_note'];
    }

    public function setTranNote($tran_note)
    {
        $this->container['tran_note'] = $tran_note;

        return $this;
    }

    public function getCardNum()
    {
        return $this->container['card_num'];
    }

    public function setCardNum($card_num)
    {
        $this->container['card_num'] = $card_num;

        return $this;
    }

    public function getCardName()
    {
        return $this->container['card_name'];
    }

    public function setCardName($card_name)
    {
        $this->container['card_name'] = $card_name;

        return $this;
    }

    public function getCardExp()
    {
        return $this->container['card_exp'];
    }

    public function setCardExp($card_exp)
    {
        $this->container['card_exp'] = $card_exp;

        return $this;
    }

    public function getCardType()
    {
        return $this->container['card_type'];
    }

    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    public function getAvsStreet()
    {
        return $this->container['avs_street'];
    }

    public function setAvsStreet($avs_street)
    {
        $this->container['avs_street'] = $avs_street;

        return $this;
    }

    public function getAvsZip()
    {
        return $this->container['avs_zip'];
    }

    public function setAvsZip($avs_zip)
    {
        $this->container['avs_zip'] = $avs_zip;

        return $this;
    }

    public function getCvvNum()
    {
        return $this->container['cvv_num'];
    }

    public function setCvvNum($cvv_num)
    {
        $this->container['cvv_num'] = $cvv_num;

        return $this;
    }

    public function getProcId()
    {
        return $this->container['proc_id'];
    }

    public function setProcId($proc_id)
    {
        $this->container['proc_id'] = $proc_id;

        return $this;
    }

    public function getProcResp()
    {
        return $this->container['proc_resp'];
    }

    public function setProcResp($proc_resp)
    {
        $this->container['proc_resp'] = $proc_resp;

        return $this;
    }

    public function getProcCode()
    {
        return $this->container['proc_code'];
    }

    public function setProcCode($proc_code)
    {
        $this->container['proc_code'] = $proc_code;

        return $this;
    }

    public function getProcMess()
    {
        return $this->container['proc_mess'];
    }

    public function setProcMess($proc_mess)
    {
        $this->container['proc_mess'] = $proc_mess;

        return $this;
    }

    public function getAvsCode()
    {
        return $this->container['avs_code'];
    }

    public function setAvsCode($avs_code)
    {
        $this->container['avs_code'] = $avs_code;

        return $this;
    }

    public function getAvsResp()
    {
        return $this->container['avs_resp'];
    }

    public function setAvsResp($avs_resp)
    {
        $this->container['avs_resp'] = $avs_resp;

        return $this;
    }

    public function getCvvCode()
    {
        return $this->container['cvv_code'];
    }

    public function setCvvCode($cvv_code)
    {
        $this->container['cvv_code'] = $cvv_code;

        return $this;
    }

    public function getCvvResp()
    {
        return $this->container['cvv_resp'];
    }

    public function setCvvResp($cvv_resp)
    {
        $this->container['cvv_resp'] = $cvv_resp;

        return $this;
    }

    public function getItems()
    {
        return $this->container['items'];
    }

    public function setItems($items)
    {
        $this->container['items'] = $items;

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

    public function getBusinessAddress()
    {
        return $this->container['business_address'];
    }

    public function setBusinessAddress($business_address)
    {
        $this->container['business_address'] = $business_address;

        return $this;
    }

    public function getBusinessAddress2()
    {
        return $this->container['business_address2'];
    }

    public function setBusinessAddress2($business_address2)
    {
        $this->container['business_address2'] = $business_address2;

        return $this;
    }

    public function getBusinessCity()
    {
        return $this->container['business_city'];
    }

    public function setBusinessCity($business_city)
    {
        $this->container['business_city'] = $business_city;

        return $this;
    }

    public function getBusinessState()
    {
        return $this->container['business_state'];
    }

    public function setBusinessState($business_state)
    {
        $this->container['business_state'] = $business_state;

        return $this;
    }

    public function getBusinessZip()
    {
        return $this->container['business_zip'];
    }

    public function setBusinessZip($business_zip)
    {
        $this->container['business_zip'] = $business_zip;

        return $this;
    }

    public function getBusinessCountry()
    {
        return $this->container['business_country'];
    }

    public function setBusinessCountry($business_country)
    {
        $this->container['business_country'] = $business_country;

        return $this;
    }

    public function getBusinessWebsite()
    {
        return $this->container['business_website'];
    }

    public function setBusinessWebsite($business_website)
    {
        $this->container['business_website'] = $business_website;

        return $this;
    }

    public function getContactFirstName()
    {
        return $this->container['contact_first_name'];
    }

    public function setContactFirstName($contact_first_name)
    {
        $this->container['contact_first_name'] = $contact_first_name;

        return $this;
    }

    public function getContactLastName()
    {
        return $this->container['contact_last_name'];
    }

    public function setContactLastName($contact_last_name)
    {
        $this->container['contact_last_name'] = $contact_last_name;

        return $this;
    }

    public function getContactPhone()
    {
        return $this->container['contact_phone'];
    }

    public function setContactPhone($contact_phone)
    {
        $this->container['contact_phone'] = $contact_phone;

        return $this;
    }

    public function getContactFax()
    {
        return $this->container['contact_fax'];
    }

    public function setContactFax($contact_fax)
    {
        $this->container['contact_fax'] = $contact_fax;

        return $this;
    }

    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    public function setContactEmail($contact_email)
    {
        $this->container['contact_email'] = $contact_email;

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

    public function getIp()
    {
        return $this->container['ip'];
    }

    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

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
