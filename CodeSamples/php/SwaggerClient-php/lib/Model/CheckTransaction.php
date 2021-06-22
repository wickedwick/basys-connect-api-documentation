<?php

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

class CheckTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'CheckTransaction';

    protected static $swaggerTypes = [
        'terminal_id' => 'string',
        'account_number' => 'string',
        'account_type' => '\Swagger\Client\Model\CheckAccountType',
        'check_number' => 'string',
        'routing_number' => 'string',
        'micr_data' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'company_name' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'phone_number' => 'string',
        'dl_number' => 'string',
        'dl_state' => 'string',
        'courtesy_card_id' => 'string',
        'ssn4' => 'string',
        'dob_year' => 'string',
        'check_amount' => 'string',
        'tran_type' => '\Swagger\Client\Model\CheckTransactionType',
        'proc_id' => 'string',
        'ip_address' => 'string',
        'customer_number' => 'string',
        'po_number' => 'string',
        'invoice_number' => 'string',
        'tran_note' => 'string',
        'email_address' => 'string',
        'sec_code' => 'string',
        'proc_resp' => 'string',
        'proc_code' => 'string',
        'proc_mess' => 'string'
    ];

    protected static $swaggerFormats = [
        'terminal_id' => null,
        'account_number' => null,
        'account_type' => null,
        'check_number' => null,
        'routing_number' => null,
        'micr_data' => null,
        'first_name' => null,
        'last_name' => null,
        'company_name' => null,
        'address1' => null,
        'address2' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'phone_number' => null,
        'dl_number' => null,
        'dl_state' => null,
        'courtesy_card_id' => null,
        'ssn4' => null,
        'dob_year' => null,
        'check_amount' => null,
        'tran_type' => null,
        'proc_id' => null,
        'ip_address' => null,
        'customer_number' => null,
        'po_number' => null,
        'invoice_number' => null,
        'tran_note' => null,
        'email_address' => null,
        'sec_code' => null,
        'proc_resp' => null,
        'proc_code' => null,
        'proc_mess' => null
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
        'terminal_id' => 'Terminal_ID',
        'account_number' => 'Account_Number',
        'account_type' => 'Account_Type',
        'check_number' => 'Check_Number',
        'routing_number' => 'Routing_Number',
        'micr_data' => 'MICR_Data',
        'first_name' => 'First_Name',
        'last_name' => 'Last_Name',
        'company_name' => 'Company_Name',
        'address1' => 'Address1',
        'address2' => 'Address2',
        'city' => 'City',
        'state' => 'State',
        'zip' => 'Zip',
        'phone_number' => 'Phone_Number',
        'dl_number' => 'DL_Number',
        'dl_state' => 'DL_State',
        'courtesy_card_id' => 'Courtesy_Card_ID',
        'ssn4' => 'SSN4',
        'dob_year' => 'DOB_Year',
        'check_amount' => 'Check_Amount',
        'tran_type' => 'Tran_Type',
        'proc_id' => 'Proc_ID',
        'ip_address' => 'IP_Address',
        'customer_number' => 'CustomerNumber',
        'po_number' => 'PONumber',
        'invoice_number' => 'InvoiceNumber',
        'tran_note' => 'TranNote',
        'email_address' => 'EmailAddress',
        'sec_code' => 'SEC_Code',
        'proc_resp' => 'Proc_Resp',
        'proc_code' => 'Proc_Code',
        'proc_mess' => 'Proc_Mess'
    ];

    protected static $setters = [
        'terminal_id' => 'setTerminalId',
        'account_number' => 'setAccountNumber',
        'account_type' => 'setAccountType',
        'check_number' => 'setCheckNumber',
        'routing_number' => 'setRoutingNumber',
        'micr_data' => 'setMicrData',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'company_name' => 'setCompanyName',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'phone_number' => 'setPhoneNumber',
        'dl_number' => 'setDlNumber',
        'dl_state' => 'setDlState',
        'courtesy_card_id' => 'setCourtesyCardId',
        'ssn4' => 'setSsn4',
        'dob_year' => 'setDobYear',
        'check_amount' => 'setCheckAmount',
        'tran_type' => 'setTranType',
        'proc_id' => 'setProcId',
        'ip_address' => 'setIpAddress',
        'customer_number' => 'setCustomerNumber',
        'po_number' => 'setPoNumber',
        'invoice_number' => 'setInvoiceNumber',
        'tran_note' => 'setTranNote',
        'email_address' => 'setEmailAddress',
        'sec_code' => 'setSecCode',
        'proc_resp' => 'setProcResp',
        'proc_code' => 'setProcCode',
        'proc_mess' => 'setProcMess'
    ];

    protected static $getters = [
        'terminal_id' => 'getTerminalId',
        'account_number' => 'getAccountNumber',
        'account_type' => 'getAccountType',
        'check_number' => 'getCheckNumber',
        'routing_number' => 'getRoutingNumber',
        'micr_data' => 'getMicrData',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'company_name' => 'getCompanyName',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'phone_number' => 'getPhoneNumber',
        'dl_number' => 'getDlNumber',
        'dl_state' => 'getDlState',
        'courtesy_card_id' => 'getCourtesyCardId',
        'ssn4' => 'getSsn4',
        'dob_year' => 'getDobYear',
        'check_amount' => 'getCheckAmount',
        'tran_type' => 'getTranType',
        'proc_id' => 'getProcId',
        'ip_address' => 'getIpAddress',
        'customer_number' => 'getCustomerNumber',
        'po_number' => 'getPoNumber',
        'invoice_number' => 'getInvoiceNumber',
        'tran_note' => 'getTranNote',
        'email_address' => 'getEmailAddress',
        'sec_code' => 'getSecCode',
        'proc_resp' => 'getProcResp',
        'proc_code' => 'getProcCode',
        'proc_mess' => 'getProcMess'
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
        $this->container['terminal_id'] = isset($data['terminal_id']) ? $data['terminal_id'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['check_number'] = isset($data['check_number']) ? $data['check_number'] : null;
        $this->container['routing_number'] = isset($data['routing_number']) ? $data['routing_number'] : null;
        $this->container['micr_data'] = isset($data['micr_data']) ? $data['micr_data'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['dl_number'] = isset($data['dl_number']) ? $data['dl_number'] : null;
        $this->container['dl_state'] = isset($data['dl_state']) ? $data['dl_state'] : null;
        $this->container['courtesy_card_id'] = isset($data['courtesy_card_id']) ? $data['courtesy_card_id'] : null;
        $this->container['ssn4'] = isset($data['ssn4']) ? $data['ssn4'] : null;
        $this->container['dob_year'] = isset($data['dob_year']) ? $data['dob_year'] : null;
        $this->container['check_amount'] = isset($data['check_amount']) ? $data['check_amount'] : null;
        $this->container['tran_type'] = isset($data['tran_type']) ? $data['tran_type'] : null;
        $this->container['proc_id'] = isset($data['proc_id']) ? $data['proc_id'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['po_number'] = isset($data['po_number']) ? $data['po_number'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['tran_note'] = isset($data['tran_note']) ? $data['tran_note'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['sec_code'] = isset($data['sec_code']) ? $data['sec_code'] : null;
        $this->container['proc_resp'] = isset($data['proc_resp']) ? $data['proc_resp'] : null;
        $this->container['proc_code'] = isset($data['proc_code']) ? $data['proc_code'] : null;
        $this->container['proc_mess'] = isset($data['proc_mess']) ? $data['proc_mess'] : null;
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


    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    public function setTerminalId($terminal_id)
    {
        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    public function getCheckNumber()
    {
        return $this->container['check_number'];
    }

    public function setCheckNumber($check_number)
    {
        $this->container['check_number'] = $check_number;

        return $this;
    }

    public function getRoutingNumber()
    {
        return $this->container['routing_number'];
    }

    public function setRoutingNumber($routing_number)
    {
        $this->container['routing_number'] = $routing_number;

        return $this;
    }

    public function getMicrData()
    {
        return $this->container['micr_data'];
    }

    public function setMicrData($micr_data)
    {
        $this->container['micr_data'] = $micr_data;

        return $this;
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

    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    public function getAddress1()
    {
        return $this->container['address1'];
    }

    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    public function getAddress2()
    {
        return $this->container['address2'];
    }

    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

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

    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    public function getDlNumber()
    {
        return $this->container['dl_number'];
    }

    public function setDlNumber($dl_number)
    {
        $this->container['dl_number'] = $dl_number;

        return $this;
    }

    public function getDlState()
    {
        return $this->container['dl_state'];
    }

    public function setDlState($dl_state)
    {
        $this->container['dl_state'] = $dl_state;

        return $this;
    }

    public function getCourtesyCardId()
    {
        return $this->container['courtesy_card_id'];
    }

    public function setCourtesyCardId($courtesy_card_id)
    {
        $this->container['courtesy_card_id'] = $courtesy_card_id;

        return $this;
    }

    public function getSsn4()
    {
        return $this->container['ssn4'];
    }

    public function setSsn4($ssn4)
    {
        $this->container['ssn4'] = $ssn4;

        return $this;
    }

    public function getDobYear()
    {
        return $this->container['dob_year'];
    }

    public function setDobYear($dob_year)
    {
        $this->container['dob_year'] = $dob_year;

        return $this;
    }

    public function getCheckAmount()
    {
        return $this->container['check_amount'];
    }

    public function setCheckAmount($check_amount)
    {
        $this->container['check_amount'] = $check_amount;

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

    public function getProcId()
    {
        return $this->container['proc_id'];
    }

    public function setProcId($proc_id)
    {
        $this->container['proc_id'] = $proc_id;

        return $this;
    }

    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

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

    public function getTranNote()
    {
        return $this->container['tran_note'];
    }

    public function setTranNote($tran_note)
    {
        $this->container['tran_note'] = $tran_note;

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

    public function getSecCode()
    {
        return $this->container['sec_code'];
    }

    public function setSecCode($sec_code)
    {
        $this->container['sec_code'] = $sec_code;

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
