# PHP Models

# Address

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class Address implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'Address';

        protected static $swaggerTypes = [
            'address_line1' => 'string',
            'address_line2' => 'string',
            'city' => 'string',
            'state' => 'string',
            'zip_code' => 'string'
        ];

        protected static $swaggerFormats = [
            'address_line1' => null,
            'address_line2' => null,
            'city' => null,
            'state' => null,
            'zip_code' => null
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
            'address_line1' => 'AddressLine1',
            'address_line2' => 'AddressLine2',
            'city' => 'City',
            'state' => 'State',
            'zip_code' => 'ZipCode'
        ];

        protected static $setters = [
            'address_line1' => 'setAddressLine1',
            'address_line2' => 'setAddressLine2',
            'city' => 'setCity',
            'state' => 'setState',
            'zip_code' => 'setZipCode'
        ];

        protected static $getters = [
            'address_line1' => 'getAddressLine1',
            'address_line2' => 'getAddressLine2',
            'city' => 'getCity',
            'state' => 'getState',
            'zip_code' => 'getZipCode'
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
            $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
            $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
            $this->container['city'] = isset($data['city']) ? $data['city'] : null;
            $this->container['state'] = isset($data['state']) ? $data['state'] : null;
            $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
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

        public function getAddressLine1()
        {
            return $this->container['address_line1'];
        }

        public function setAddressLine1($address_line1)
        {
            $this->container['address_line1'] = $address_line1;

            return $this;
        }

        public function getAddressLine2()
        {
            return $this->container['address_line2'];
        }

        public function setAddressLine2($address_line2)
        {
            $this->container['address_line2'] = $address_line2;

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

        public function getZipCode()
        {
            return $this->container['zip_code'];
        }

        public function setZipCode($zip_code)
        {
            $this->container['zip_code'] = $zip_code;

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

# Batch

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

# Business

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

# CheckAccountType

    <?php

    namespace Swagger\Client\Model;

    use \Swagger\Client\ObjectSerializer;

    class CheckAccountType
    {
        const UNKNOWN = 'Unknown';
        const CHECKING = 'Checking';
        const SAVINGS = 'Savings';
        public static function getAllowableEnumValues()
        {
            return [
                self::UNKNOWN,
                self::CHECKING,
                self::SAVINGS,
            ];
        }
    }

# CheckTransaction

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

# CheckTransactionSettings

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class CheckTransactionSettings implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'CheckTransactionSettings';

        protected static $swaggerTypes = [
            'reader' => '\Swagger\Client\Model\FieldInfo',
            'contact_name' => '\Swagger\Client\Model\FieldInfo',
            'contact_title' => '\Swagger\Client\Model\FieldInfo',
            'email_address' => '\Swagger\Client\Model\FieldInfo',
            'phone_default' => 'string',
            'fax' => '\Swagger\Client\Model\FieldInfo',
            'billing_address_default' => 'string',
            'billing_address2' => '\Swagger\Client\Model\FieldInfo',
            'billing_city_default' => 'string',
            'billing_state_default' => 'string',
            'billing_zip_default' => 'string',
            'po_number' => '\Swagger\Client\Model\FieldInfo',
            'invoice_number' => '\Swagger\Client\Model\FieldInfo',
            'business_name' => '\Swagger\Client\Model\FieldInfo',
            'customer_number' => '\Swagger\Client\Model\FieldInfo',
            'reference_note' => '\Swagger\Client\Model\FieldInfo',
            'default_sec_code' => 'string'
        ];

        protected static $swaggerFormats = [
            'reader' => null,
            'contact_name' => null,
            'contact_title' => null,
            'email_address' => null,
            'phone_default' => null,
            'fax' => null,
            'billing_address_default' => null,
            'billing_address2' => null,
            'billing_city_default' => null,
            'billing_state_default' => null,
            'billing_zip_default' => null,
            'po_number' => null,
            'invoice_number' => null,
            'business_name' => null,
            'customer_number' => null,
            'reference_note' => null,
            'default_sec_code' => null
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
            'reader' => 'Reader',
            'contact_name' => 'ContactName',
            'contact_title' => 'ContactTitle',
            'email_address' => 'EmailAddress',
            'phone_default' => 'PhoneDefault',
            'fax' => 'Fax',
            'billing_address_default' => 'BillingAddressDefault',
            'billing_address2' => 'BillingAddress2',
            'billing_city_default' => 'BillingCityDefault',
            'billing_state_default' => 'BillingStateDefault',
            'billing_zip_default' => 'BillingZipDefault',
            'po_number' => 'PONumber',
            'invoice_number' => 'InvoiceNumber',
            'business_name' => 'BusinessName',
            'customer_number' => 'CustomerNumber',
            'reference_note' => 'ReferenceNote',
            'default_sec_code' => 'DefaultSECCode'
        ];

        protected static $setters = [
            'reader' => 'setReader',
            'contact_name' => 'setContactName',
            'contact_title' => 'setContactTitle',
            'email_address' => 'setEmailAddress',
            'phone_default' => 'setPhoneDefault',
            'fax' => 'setFax',
            'billing_address_default' => 'setBillingAddressDefault',
            'billing_address2' => 'setBillingAddress2',
            'billing_city_default' => 'setBillingCityDefault',
            'billing_state_default' => 'setBillingStateDefault',
            'billing_zip_default' => 'setBillingZipDefault',
            'po_number' => 'setPoNumber',
            'invoice_number' => 'setInvoiceNumber',
            'business_name' => 'setBusinessName',
            'customer_number' => 'setCustomerNumber',
            'reference_note' => 'setReferenceNote',
            'default_sec_code' => 'setDefaultSecCode'
        ];

        protected static $getters = [
            'reader' => 'getReader',
            'contact_name' => 'getContactName',
            'contact_title' => 'getContactTitle',
            'email_address' => 'getEmailAddress',
            'phone_default' => 'getPhoneDefault',
            'fax' => 'getFax',
            'billing_address_default' => 'getBillingAddressDefault',
            'billing_address2' => 'getBillingAddress2',
            'billing_city_default' => 'getBillingCityDefault',
            'billing_state_default' => 'getBillingStateDefault',
            'billing_zip_default' => 'getBillingZipDefault',
            'po_number' => 'getPoNumber',
            'invoice_number' => 'getInvoiceNumber',
            'business_name' => 'getBusinessName',
            'customer_number' => 'getCustomerNumber',
            'reference_note' => 'getReferenceNote',
            'default_sec_code' => 'getDefaultSecCode'
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
            $this->container['reader'] = isset($data['reader']) ? $data['reader'] : null;
            $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
            $this->container['contact_title'] = isset($data['contact_title']) ? $data['contact_title'] : null;
            $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
            $this->container['phone_default'] = isset($data['phone_default']) ? $data['phone_default'] : null;
            $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
            $this->container['billing_address_default'] = isset($data['billing_address_default']) ? $data['billing_address_default'] : null;
            $this->container['billing_address2'] = isset($data['billing_address2']) ? $data['billing_address2'] : null;
            $this->container['billing_city_default'] = isset($data['billing_city_default']) ? $data['billing_city_default'] : null;
            $this->container['billing_state_default'] = isset($data['billing_state_default']) ? $data['billing_state_default'] : null;
            $this->container['billing_zip_default'] = isset($data['billing_zip_default']) ? $data['billing_zip_default'] : null;
            $this->container['po_number'] = isset($data['po_number']) ? $data['po_number'] : null;
            $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
            $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
            $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
            $this->container['reference_note'] = isset($data['reference_note']) ? $data['reference_note'] : null;
            $this->container['default_sec_code'] = isset($data['default_sec_code']) ? $data['default_sec_code'] : null;
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

        public function getReader()
        {
            return $this->container['reader'];
        }

        public function setReader($reader)
        {
            $this->container['reader'] = $reader;

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

        public function getPhoneDefault()
        {
            return $this->container['phone_default'];
        }

        public function setPhoneDefault($phone_default)
        {
            $this->container['phone_default'] = $phone_default;

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

        public function getBillingAddressDefault()
        {
            return $this->container['billing_address_default'];
        }

        public function setBillingAddressDefault($billing_address_default)
        {
            $this->container['billing_address_default'] = $billing_address_default;

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

        public function getBillingCityDefault()
        {
            return $this->container['billing_city_default'];
        }

        public function setBillingCityDefault($billing_city_default)
        {
            $this->container['billing_city_default'] = $billing_city_default;

            return $this;
        }

        public function getBillingStateDefault()
        {
            return $this->container['billing_state_default'];
        }

        public function setBillingStateDefault($billing_state_default)
        {
            $this->container['billing_state_default'] = $billing_state_default;

            return $this;
        }

        public function getBillingZipDefault()
        {
            return $this->container['billing_zip_default'];
        }

        public function setBillingZipDefault($billing_zip_default)
        {
            $this->container['billing_zip_default'] = $billing_zip_default;

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

        public function getDefaultSecCode()
        {
            return $this->container['default_sec_code'];
        }

        public function setDefaultSecCode($default_sec_code)
        {
            $this->container['default_sec_code'] = $default_sec_code;

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

# CheckTransactionType

    <?php

    namespace Swagger\Client\Model;

    use \Swagger\Client\ObjectSerializer;

    class CheckTransactionType
    {
        const UNKNOWN = 'Unknown';
        const AUTHORIZE = 'Authorize';
        const VOID = 'Void';
        const OVERRIDE = 'Override';
        const PAYROLL = 'Payroll';
        const RECURRING = 'Recurring';
        const REFUND = 'Refund';
        public static function getAllowableEnumValues()
        {
            return [
                self::UNKNOWN,
                self::AUTHORIZE,
                self::VOID,
                self::OVERRIDE,
                self::PAYROLL,
                self::RECURRING,
                self::REFUND,
            ];
        }
    }

# Contact

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

# CreditCardTransactionSettings

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

# CVVPresenceType

    <?php

    namespace Swagger\Client\Model;

    use \Swagger\Client\ObjectSerializer;

    class CVVPresenceType
    {
        const NORMAL = 'Normal';
        const BYPASS = 'Bypass';
        const ILLEGIBLE = 'Illegible';
        const NOT_AVAILABLE = 'NotAvailable';

        public static function getAllowableEnumValues()
        {
            return [
                self::NORMAL,
                self::BYPASS,
                self::ILLEGIBLE,
                self::NOT_AVAILABLE,
            ];
        }
    }

# EmailReceipt

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class EmailReceipt implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'EmailReceipt';

        protected static $swaggerTypes = [
            'transaction_id' => 'string',
            'to_addresses' => 'string',
            'subject' => 'string',
            'header' => 'string',
            'footer' => 'string'
        ];

        protected static $swaggerFormats = [
            'transaction_id' => null,
            'to_addresses' => null,
            'subject' => null,
            'header' => null,
            'footer' => null
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
            'transaction_id' => 'TransactionID',
            'to_addresses' => 'ToAddresses',
            'subject' => 'Subject',
            'header' => 'Header',
            'footer' => 'Footer'
        ];

        protected static $setters = [
            'transaction_id' => 'setTransactionId',
            'to_addresses' => 'setToAddresses',
            'subject' => 'setSubject',
            'header' => 'setHeader',
            'footer' => 'setFooter'
        ];

        protected static $getters = [
            'transaction_id' => 'getTransactionId',
            'to_addresses' => 'getToAddresses',
            'subject' => 'getSubject',
            'header' => 'getHeader',
            'footer' => 'getFooter'
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
            $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
            $this->container['to_addresses'] = isset($data['to_addresses']) ? $data['to_addresses'] : null;
            $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
            $this->container['header'] = isset($data['header']) ? $data['header'] : null;
            $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
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


        public function getTransactionId()
        {
            return $this->container['transaction_id'];
        }

        public function setTransactionId($transaction_id)
        {
            $this->container['transaction_id'] = $transaction_id;

            return $this;
        }

        public function getToAddresses()
        {
            return $this->container['to_addresses'];
        }

        public function setToAddresses($to_addresses)
        {
            $this->container['to_addresses'] = $to_addresses;

            return $this;
        }

        public function getSubject()
        {
            return $this->container['subject'];
        }

        public function setSubject($subject)
        {
            $this->container['subject'] = $subject;

            return $this;
        }

        public function getHeader()
        {
            return $this->container['header'];
        }

        public function setHeader($header)
        {
            $this->container['header'] = $header;

            return $this;
        }

        public function getFooter()
        {
            return $this->container['footer'];
        }

        public function setFooter($footer)
        {
            $this->container['footer'] = $footer;

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

# FieldAccess

    <?php

    namespace Swagger\Client\Model;

    use \Swagger\Client\ObjectSerializer;

    class FieldAccess
    {
        const DISABLED = 'Disabled';
        const ENABLED = 'Enabled';
        const REQUIRED = 'Required';

        public static function getAllowableEnumValues()
        {
            return [
                self::DISABLED,
                self::ENABLED,
                self::REQUIRED,
            ];
        }
    }

# FieldInfo

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class FieldInfo implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'FieldInfo';

        protected static $swaggerTypes = [
            'access' => '\Swagger\Client\Model\FieldAccess',
            'default' => 'string'
        ];

        protected static $swaggerFormats = [
            'access' => null,
            'default' => null
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
            'access' => 'Access',
            'default' => 'Default'
        ];

        protected static $setters = [
            'access' => 'setAccess',
            'default' => 'setDefault'
        ];

        protected static $getters = [
            'access' => 'getAccess',
            'default' => 'getDefault'
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
            $this->container['access'] = isset($data['access']) ? $data['access'] : null;
            $this->container['default'] = isset($data['default']) ? $data['default'] : null;
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


        public function getAccess()
        {
            return $this->container['access'];
        }

        public function setAccess($access)
        {
            $this->container['access'] = $access;

            return $this;
        }

        public function getDefault()
        {
            return $this->container['default'];
        }

        public function setDefault($default)
        {
            $this->container['default'] = $default;

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

# QueryTransaction

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class QueryTransaction implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'QueryTransaction';

        protected static $swaggerTypes = [
            'tran_sequence' => 'string',
            'tran_batch' => 'string',
            'tran_modified' => 'string',
            'tran_processed' => 'string',
            'tran_settled' => 'string',
            'submit_time' => 'string',
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
            'tran_sequence' => null,
            'tran_batch' => null,
            'tran_modified' => null,
            'tran_processed' => null,
            'tran_settled' => null,
            'submit_time' => null,
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
            'tran_sequence' => 'Tran_Sequence',
            'tran_batch' => 'Tran_Batch',
            'tran_modified' => 'Tran_Modified',
            'tran_processed' => 'Tran_Processed',
            'tran_settled' => 'Tran_Settled',
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
            'tran_sequence' => 'setTranSequence',
            'tran_batch' => 'setTranBatch',
            'tran_modified' => 'setTranModified',
            'tran_processed' => 'setTranProcessed',
            'tran_settled' => 'setTranSettled',
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
            'tran_sequence' => 'getTranSequence',
            'tran_batch' => 'getTranBatch',
            'tran_modified' => 'getTranModified',
            'tran_processed' => 'getTranProcessed',
            'tran_settled' => 'getTranSettled',
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
            $this->container['tran_sequence'] = isset($data['tran_sequence']) ? $data['tran_sequence'] : null;
            $this->container['tran_batch'] = isset($data['tran_batch']) ? $data['tran_batch'] : null;
            $this->container['tran_modified'] = isset($data['tran_modified']) ? $data['tran_modified'] : null;
            $this->container['tran_processed'] = isset($data['tran_processed']) ? $data['tran_processed'] : null;
            $this->container['tran_settled'] = isset($data['tran_settled']) ? $data['tran_settled'] : null;
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


        public function getTranSequence()
        {
            return $this->container['tran_sequence'];
        }

        public function setTranSequence($tran_sequence)
        {
            $this->container['tran_sequence'] = $tran_sequence;

            return $this;
        }

        public function getTranBatch()
        {
            return $this->container['tran_batch'];
        }

        public function setTranBatch($tran_batch)
        {
            $this->container['tran_batch'] = $tran_batch;

            return $this;
        }

        public function getTranModified()
        {
            return $this->container['tran_modified'];
        }

        public function setTranModified($tran_modified)
        {
            $this->container['tran_modified'] = $tran_modified;

            return $this;
        }

        public function getTranProcessed()
        {
            return $this->container['tran_processed'];
        }

        public function setTranProcessed($tran_processed)
        {
            $this->container['tran_processed'] = $tran_processed;

            return $this;
        }

        public function getTranSettled()
        {
            return $this->container['tran_settled'];
        }

        public function setTranSettled($tran_settled)
        {
            $this->container['tran_settled'] = $tran_settled;

            return $this;
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

# Receipt

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class Receipt implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'Receipt';

        protected static $swaggerTypes = [
            'header' => '\Swagger\Client\Model\ReceiptCustomLines',
            'footer' => '\Swagger\Client\Model\ReceiptCustomLines'
        ];

        protected static $swaggerFormats = [
            'header' => null,
            'footer' => null
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
            'header' => 'Header',
            'footer' => 'Footer'
        ];

        protected static $setters = [
            'header' => 'setHeader',
            'footer' => 'setFooter'
        ];

        protected static $getters = [
            'header' => 'getHeader',
            'footer' => 'getFooter'
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
            $this->container['header'] = isset($data['header']) ? $data['header'] : null;
            $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
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

        public function getHeader()
        {
            return $this->container['header'];
        }

        public function setHeader($header)
        {
            $this->container['header'] = $header;

            return $this;
        }

        public function getFooter()
        {
            return $this->container['footer'];
        }

        public function setFooter($footer)
        {
            $this->container['footer'] = $footer;

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

# ReceiptCustomLines

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class ReceiptCustomLines implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'ReceiptCustomLines';

        protected static $swaggerTypes = [
            'custom_line1' => 'string',
            'custom_line2' => 'string',
            'custom_line3' => 'string',
            'custom_line4' => 'string'
        ];

        protected static $swaggerFormats = [
            'custom_line1' => null,
            'custom_line2' => null,
            'custom_line3' => null,
            'custom_line4' => null
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
            'custom_line1' => 'CustomLine1',
            'custom_line2' => 'CustomLine2',
            'custom_line3' => 'CustomLine3',
            'custom_line4' => 'CustomLine4'
        ];

        protected static $setters = [
            'custom_line1' => 'setCustomLine1',
            'custom_line2' => 'setCustomLine2',
            'custom_line3' => 'setCustomLine3',
            'custom_line4' => 'setCustomLine4'
        ];

        protected static $getters = [
            'custom_line1' => 'getCustomLine1',
            'custom_line2' => 'getCustomLine2',
            'custom_line3' => 'getCustomLine3',
            'custom_line4' => 'getCustomLine4'
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
            $this->container['custom_line1'] = isset($data['custom_line1']) ? $data['custom_line1'] : null;
            $this->container['custom_line2'] = isset($data['custom_line2']) ? $data['custom_line2'] : null;
            $this->container['custom_line3'] = isset($data['custom_line3']) ? $data['custom_line3'] : null;
            $this->container['custom_line4'] = isset($data['custom_line4']) ? $data['custom_line4'] : null;
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

        public function getCustomLine1()
        {
            return $this->container['custom_line1'];
        }

        public function setCustomLine1($custom_line1)
        {
            $this->container['custom_line1'] = $custom_line1;

            return $this;
        }

        public function getCustomLine2()
        {
            return $this->container['custom_line2'];
        }

        public function setCustomLine2($custom_line2)
        {
            $this->container['custom_line2'] = $custom_line2;

            return $this;
        }

        public function getCustomLine3()
        {
            return $this->container['custom_line3'];
        }

        public function setCustomLine3($custom_line3)
        {
            $this->container['custom_line3'] = $custom_line3;

            return $this;
        }

        public function getCustomLine4()
        {
            return $this->container['custom_line4'];
        }

        public function setCustomLine4($custom_line4)
        {
            $this->container['custom_line4'] = $custom_line4;

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

# Record

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class Record implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'Record';

        protected static $swaggerTypes = [
            'response' => '\Swagger\Client\Model\Response',
            'id' => 'int',
            'reference' => 'string',
            'business' => '\Swagger\Client\Model\Business',
            'contact' => '\Swagger\Client\Model\Contact',
            'po' => 'string',
            'invoice' => 'string',
            'customer' => 'string',
            'tax_exempt' => 'bool',
            'note' => 'string',
            'credit_cards' => '\Swagger\Client\Model\VaultCreditCard[]',
            'checks' => '\Swagger\Client\Model\VaultCheck[]'
        ];

        protected static $swaggerFormats = [
            'response' => null,
            'id' => 'int32',
            'reference' => null,
            'business' => null,
            'contact' => null,
            'po' => null,
            'invoice' => null,
            'customer' => null,
            'tax_exempt' => null,
            'note' => null,
            'credit_cards' => null,
            'checks' => null
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
            'response' => 'Response',
            'id' => 'ID',
            'reference' => 'Reference',
            'business' => 'Business',
            'contact' => 'Contact',
            'po' => 'PO',
            'invoice' => 'Invoice',
            'customer' => 'Customer',
            'tax_exempt' => 'TaxExempt',
            'note' => 'Note',
            'credit_cards' => 'CreditCards',
            'checks' => 'Checks'
        ];

        protected static $setters = [
            'response' => 'setResponse',
            'id' => 'setId',
            'reference' => 'setReference',
            'business' => 'setBusiness',
            'contact' => 'setContact',
            'po' => 'setPo',
            'invoice' => 'setInvoice',
            'customer' => 'setCustomer',
            'tax_exempt' => 'setTaxExempt',
            'note' => 'setNote',
            'credit_cards' => 'setCreditCards',
            'checks' => 'setChecks'
        ];

        protected static $getters = [
            'response' => 'getResponse',
            'id' => 'getId',
            'reference' => 'getReference',
            'business' => 'getBusiness',
            'contact' => 'getContact',
            'po' => 'getPo',
            'invoice' => 'getInvoice',
            'customer' => 'getCustomer',
            'tax_exempt' => 'getTaxExempt',
            'note' => 'getNote',
            'credit_cards' => 'getCreditCards',
            'checks' => 'getChecks'
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
            $this->container['response'] = isset($data['response']) ? $data['response'] : null;
            $this->container['id'] = isset($data['id']) ? $data['id'] : null;
            $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
            $this->container['business'] = isset($data['business']) ? $data['business'] : null;
            $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
            $this->container['po'] = isset($data['po']) ? $data['po'] : null;
            $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
            $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
            $this->container['tax_exempt'] = isset($data['tax_exempt']) ? $data['tax_exempt'] : null;
            $this->container['note'] = isset($data['note']) ? $data['note'] : null;
            $this->container['credit_cards'] = isset($data['credit_cards']) ? $data['credit_cards'] : null;
            $this->container['checks'] = isset($data['checks']) ? $data['checks'] : null;
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

        public function getResponse()
        {
            return $this->container['response'];
        }

        public function setResponse($response)
        {
            $this->container['response'] = $response;

            return $this;
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

        public function getReference()
        {
            return $this->container['reference'];
        }

        public function setReference($reference)
        {
            $this->container['reference'] = $reference;

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

        public function getContact()
        {
            return $this->container['contact'];
        }

        public function setContact($contact)
        {
            $this->container['contact'] = $contact;

            return $this;
        }

        public function getPo()
        {
            return $this->container['po'];
        }

        public function setPo($po)
        {
            $this->container['po'] = $po;

            return $this;
        }

        public function getInvoice()
        {
            return $this->container['invoice'];
        }

        public function setInvoice($invoice)
        {
            $this->container['invoice'] = $invoice;

            return $this;
        }

        public function getCustomer()
        {
            return $this->container['customer'];
        }

        public function setCustomer($customer)
        {
            $this->container['customer'] = $customer;

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

        public function getNote()
        {
            return $this->container['note'];
        }

        public function setNote($note)
        {
            $this->container['note'] = $note;

            return $this;
        }

        public function getCreditCards()
        {
            return $this->container['credit_cards'];
        }

        public function setCreditCards($credit_cards)
        {
            $this->container['credit_cards'] = $credit_cards;

            return $this;
        }

        public function getChecks()
        {
            return $this->container['checks'];
        }

        public function setChecks($checks)
        {
            $this->container['checks'] = $checks;

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

# Response

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class Response implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'Response';

        protected static $swaggerTypes = [
            'error' => 'bool',
            'message' => 'string'
        ];

        protected static $swaggerFormats = [
            'error' => null,
            'message' => null
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
            'error' => 'Error',
            'message' => 'Message'
        ];

        protected static $setters = [
            'error' => 'setError',
            'message' => 'setMessage'
        ];

        protected static $getters = [
            'error' => 'getError',
            'message' => 'getMessage'
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
            $this->container['error'] = isset($data['error']) ? $data['error'] : null;
            $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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

        public function getError()
        {
            return $this->container['error'];
        }

        public function setError($error)
        {
            $this->container['error'] = $error;

            return $this;
        }

        public function getMessage()
        {
            return $this->container['message'];
        }

        public function setMessage($message)
        {
            $this->container['message'] = $message;

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

# SearchVault

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class SearchVault implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'SearchVault';

        protected static $swaggerTypes = [
            'reference' => 'string',
            'business_name' => 'string',
            'first_name' => 'string',
            'last_name' => 'string'
        ];

        protected static $swaggerFormats = [
            'reference' => null,
            'business_name' => null,
            'first_name' => null,
            'last_name' => null
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
            'reference' => 'Reference',
            'business_name' => 'BusinessName',
            'first_name' => 'FirstName',
            'last_name' => 'LastName'
        ];

        protected static $setters = [
            'reference' => 'setReference',
            'business_name' => 'setBusinessName',
            'first_name' => 'setFirstName',
            'last_name' => 'setLastName'
        ];

        protected static $getters = [
            'reference' => 'getReference',
            'business_name' => 'getBusinessName',
            'first_name' => 'getFirstName',
            'last_name' => 'getLastName'
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
            $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
            $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
            $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
            $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
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

        public function getReference()
        {
            return $this->container['reference'];
        }

        public function setReference($reference)
        {
            $this->container['reference'] = $reference;

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

# Settings

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

# TerminalSettings

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

# Transaction

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

# TransactionItem

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

# TransactionType

    <?php

    namespace Swagger\Client\Model;

    use \Swagger\Client\ObjectSerializer;

    class TransactionType
    {
        const SALE = 'Sale';
        const CREDIT = 'Credit';
        const AUTHORIZATION = 'Authorization';
        const PRE_AUTH = 'PreAuth';
        const POST_AUTH = 'PostAuth';
        const FORCE_AUTH = 'ForceAuth';
        const VOID = 'Void';
        const QUERY = 'Query';
        const VERIFY = 'Verify';
        const MARK = 'Mark';
        const _RETURN = 'Return';
        const _USE = 'Use';

        public static function getAllowableEnumValues()
        {
            return [
                self::SALE,
                self::CREDIT,
                self::AUTHORIZATION,
                self::PRE_AUTH,
                self::POST_AUTH,
                self::FORCE_AUTH,
                self::VOID,
                self::QUERY,
                self::VERIFY,
                self::MARK,
                self::_RETURN,
                self::_USE,
            ];
        }
    }

# UpdateTransactionInfo

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class UpdateTransactionInfo implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'UpdateTransactionInfo';

        protected static $swaggerTypes = [
            'invoice_number' => 'string',
            'customer_number' => 'string',
            'po_number' => 'string',
            'note' => 'string'
        ];

        protected static $swaggerFormats = [
            'invoice_number' => null,
            'customer_number' => null,
            'po_number' => null,
            'note' => null
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
            'invoice_number' => 'InvoiceNumber',
            'customer_number' => 'CustomerNumber',
            'po_number' => 'PONumber',
            'note' => 'Note'
        ];

        protected static $setters = [
            'invoice_number' => 'setInvoiceNumber',
            'customer_number' => 'setCustomerNumber',
            'po_number' => 'setPoNumber',
            'note' => 'setNote'
        ];

        protected static $getters = [
            'invoice_number' => 'getInvoiceNumber',
            'customer_number' => 'getCustomerNumber',
            'po_number' => 'getPoNumber',
            'note' => 'getNote'
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
            $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
            $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
            $this->container['po_number'] = isset($data['po_number']) ? $data['po_number'] : null;
            $this->container['note'] = isset($data['note']) ? $data['note'] : null;
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

        public function getInvoiceNumber()
        {
            return $this->container['invoice_number'];
        }

        public function setInvoiceNumber($invoice_number)
        {
            $this->container['invoice_number'] = $invoice_number;

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

        public function getNote()
        {
            return $this->container['note'];
        }

        public function setNote($note)
        {
            $this->container['note'] = $note;

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

# VaultCheck

    <?php

    namespace Swagger\Client\Model;

    use \ArrayAccess;
    use \Swagger\Client\ObjectSerializer;

    class VaultCheck implements ModelInterface, ArrayAccess
    {
        const DISCRIMINATOR = null;

        protected static $swaggerModelName = 'VaultCheck';

        protected static $swaggerTypes = [
            'response' => '\Swagger\Client\Model\Response',
            'check_id' => 'int',
            'main' => 'bool',
            'check_routing' => 'string',
            'check_account' => 'string',
            'check_number' => 'string',
            'check_first_name' => 'string',
            'check_last_name' => 'string',
            'note' => 'string',
            'masked_routing' => 'string',
            'masked_account' => 'string',
            'account_type' => 'string'
        ];

        protected static $swaggerFormats = [
            'response' => null,
            'check_id' => 'int32',
            'main' => null,
            'check_routing' => null,
            'check_account' => null,
            'check_number' => null,
            'check_first_name' => null,
            'check_last_name' => null,
            'note' => null,
            'masked_routing' => null,
            'masked_account' => null,
            'account_type' => null
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
            'response' => 'Response',
            'check_id' => 'CheckID',
            'main' => 'Main',
            'check_routing' => 'CheckRouting',
            'check_account' => 'CheckAccount',
            'check_number' => 'CheckNumber',
            'check_first_name' => 'CheckFirstName',
            'check_last_name' => 'CheckLastName',
            'note' => 'Note',
            'masked_routing' => 'MaskedRouting',
            'masked_account' => 'MaskedAccount',
            'account_type' => 'AccountType'
        ];

        protected static $setters = [
            'response' => 'setResponse',
            'check_id' => 'setCheckId',
            'main' => 'setMain',
            'check_routing' => 'setCheckRouting',
            'check_account' => 'setCheckAccount',
            'check_number' => 'setCheckNumber',
            'check_first_name' => 'setCheckFirstName',
            'check_last_name' => 'setCheckLastName',
            'note' => 'setNote',
            'masked_routing' => 'setMaskedRouting',
            'masked_account' => 'setMaskedAccount',
            'account_type' => 'setAccountType'
        ];

        protected static $getters = [
            'response' => 'getResponse',
            'check_id' => 'getCheckId',
            'main' => 'getMain',
            'check_routing' => 'getCheckRouting',
            'check_account' => 'getCheckAccount',
            'check_number' => 'getCheckNumber',
            'check_first_name' => 'getCheckFirstName',
            'check_last_name' => 'getCheckLastName',
            'note' => 'getNote',
            'masked_routing' => 'getMaskedRouting',
            'masked_account' => 'getMaskedAccount',
            'account_type' => 'getAccountType'
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
            $this->container['response'] = isset($data['response']) ? $data['response'] : null;
            $this->container['check_id'] = isset($data['check_id']) ? $data['check_id'] : null;
            $this->container['main'] = isset($data['main']) ? $data['main'] : null;
            $this->container['check_routing'] = isset($data['check_routing']) ? $data['check_routing'] : null;
            $this->container['check_account'] = isset($data['check_account']) ? $data['check_account'] : null;
            $this->container['check_number'] = isset($data['check_number']) ? $data['check_number'] : null;
            $this->container['check_first_name'] = isset($data['check_first_name']) ? $data['check_first_name'] : null;
            $this->container['check_last_name'] = isset($data['check_last_name']) ? $data['check_last_name'] : null;
            $this->container['note'] = isset($data['note']) ? $data['note'] : null;
            $this->container['masked_routing'] = isset($data['masked_routing']) ? $data['masked_routing'] : null;
            $this->container['masked_account'] = isset($data['masked_account']) ? $data['masked_account'] : null;
            $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
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

        public function getResponse()
        {
            return $this->container['response'];
        }

        public function setResponse($response)
        {
            $this->container['response'] = $response;

            return $this;
        }

        public function getCheckId()
        {
            return $this->container['check_id'];
        }

        public function setCheckId($check_id)
        {
            $this->container['check_id'] = $check_id;

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

        public function getCheckRouting()
        {
            return $this->container['check_routing'];
        }

        public function setCheckRouting($check_routing)
        {
            $this->container['check_routing'] = $check_routing;

            return $this;
        }

        public function getCheckAccount()
        {
            return $this->container['check_account'];
        }

        public function setCheckAccount($check_account)
        {
            $this->container['check_account'] = $check_account;

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

        public function getCheckFirstName()
        {
            return $this->container['check_first_name'];
        }

        public function setCheckFirstName($check_first_name)
        {
            $this->container['check_first_name'] = $check_first_name;

            return $this;
        }

        public function getCheckLastName()
        {
            return $this->container['check_last_name'];
        }

        public function setCheckLastName($check_last_name)
        {
            $this->container['check_last_name'] = $check_last_name;

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

        public function getMaskedRouting()
        {
            return $this->container['masked_routing'];
        }

        public function setMaskedRouting($masked_routing)
        {
            $this->container['masked_routing'] = $masked_routing;

            return $this;
        }

        public function getMaskedAccount()
        {
            return $this->container['masked_account'];
        }

        public function setMaskedAccount($masked_account)
        {
            $this->container['masked_account'] = $masked_account;

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

# VaultCreditCard

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
