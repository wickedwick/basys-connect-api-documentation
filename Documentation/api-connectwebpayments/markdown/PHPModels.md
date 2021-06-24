# PHP Models

# Address

    <?php

    namespace Swagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classAddressimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'Address';

    protectedstatic$swaggerTypes = [

    'address_line1' => 'string',

    'address_line2' => 'string',

    'city' => 'string',

    'state' => 'string',

    'zip_code' => 'string'

    ];

    protectedstatic$swaggerFormats = [

    'address_line1' => null,

    'address_line2' => null,

    'city' => null,

    'state' => null,

    'zip_code' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'address_line1' => 'AddressLine1',

    'address_line2' => 'AddressLine2',

    'city' => 'City',

    'state' => 'State',

    'zip_code' => 'ZipCode'

    ];

    protectedstatic$setters = [

    'address_line1' => 'setAddressLine1',

    'address_line2' => 'setAddressLine2',

    'city' => 'setCity',

    'state' => 'setState',

    'zip_code' => 'setZipCode'

    ];

    protectedstatic$getters = [

    'address_line1' => 'getAddressLine1',

    'address_line2' => 'getAddressLine2',

    'city' => 'getCity',

    'state' => 'getState',

    'zip_code' => 'getZipCode'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

    {

    $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;

    $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;

    $this->container['city'] = isset($data['city']) ? $data['city'] : null;

    $this->container['state'] = isset($data['state']) ? $data['state'] : null;

    $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;

    }

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetAddressLine1()

    {

    return $this->container['address_line1'];

    }

    public functionsetAddressLine1($address_line1)

    {

    $this->container['address_line1'] = $address_line1;

    return $this;

    }

    public functiongetAddressLine2()

    {

    return $this->container['address_line2'];

    }

    public functionsetAddressLine2($address_line2)

    {

    $this->container['address_line2'] = $address_line2;

    return $this;

    }

    public functiongetCity()

    {

    return $this->container['city'];

    }

    public functionsetCity($city)

    {

    $this->container['city'] = $city;

    return $this;

    }

    public functiongetState()

    {

    return $this->container['state'];

    }

    public functionsetState($state)

    {

    $this->container['state'] = $state;

    return $this;

    }

    public functiongetZipCode()

    {

    return $this->container['zip_code'];

    }

    public functionsetZipCode($zip_code)

    {

    $this->container['zip_code'] = $zip_code;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classBatchimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'Batch';

    protectedstatic$swaggerTypes = [

    'batch_number' => 'string',

    'started' => '\DateTime',

    'completed' => '\DateTime',

    'sales_count' => 'string',

    'sales_sum' => 'double',

    'return _count' => 'string',

    'return _sum' => 'double',

    'batch_error' => 'bool'

    ];

    protectedstatic$swaggerFormats = [

    'batch_number' => null,

    'started' => 'date-time',

    'completed' => 'date-time',

    'sales_count' => null,

    'sales_sum' => 'double',

    'return _count' => null,

    'return _sum' => 'double',

    'batch_error' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'batch_number' => 'BatchNumber',

    'started' => 'Started',

    'completed' => 'Completed',

    'sales_count' => 'SalesCount',

    'sales_sum' => 'SalesSum',

    'return _count' => 'ReturnCount',

    'return _sum' => 'ReturnSum',

    'batch_error' => 'BatchError'

    ];

    protectedstatic$setters = [

    'batch_number' => 'setBatchNumber',

    'started' => 'setStarted',

    'completed' => 'setCompleted',

    'sales_count' => 'setSalesCount',

    'sales_sum' => 'setSalesSum',

    'return _count' => 'setReturnCount',

    'return _sum' => 'setReturnSum',

    'batch_error' => 'setBatchError'

    ];

    protectedstatic$getters = [

    'batch_number' => 'getBatchNumber',

    'started' => 'getStarted',

    'completed' => 'getCompleted',

    'sales_count' => 'getSalesCount',

    'sales_sum' => 'getSalesSum',

    'return _count' => 'getReturnCount',

    'return _sum' => 'getReturnSum',

    'batch_error' => 'getBatchError'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

    {

    $this->container['batch_number'] = isset($data['batch_number']) ? $data['batch_number'] : null;

    $this->container['started'] = isset($data['started']) ? $data['started'] : null;

    $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;

    $this->container['sales_count'] = isset($data['sales_count']) ? $data['sales_count'] : null;

    $this->container['sales_sum'] = isset($data['sales_sum']) ? $data['sales_sum'] : null;

    $this->container['return _count'] = isset($data['return _count']) ? $data['return _count'] : null;

    $this->container['return _sum'] = isset($data['return _sum']) ? $data['return _sum'] : null;

    $this->container['batch_error'] = isset($data['batch_error']) ? $data['batch_error'] : null;

    }

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetBatchNumber()

    {

    return $this->container['batch_number'];

    }

    public functionsetBatchNumber($batch_number)

    {

    $this->container['batch_number'] = $batch_number;

    return $this;

    }

    public functiongetStarted()

    {

    return $this->container['started'];

    }

    public functionsetStarted($started)

    {

    $this->container['started'] = $started;

    return $this;

    }

    public functiongetCompleted()

    {

    return $this->container['completed'];

    }

    public functionsetCompleted($completed)

    {

    $this->container['completed'] = $completed;

    return $this;

    }

    public functiongetSalesCount()

    {

    return $this->container['sales_count'];

    }

    public functionsetSalesCount($sales_count)

    {

    $this->container['sales_count'] = $sales_count;

    return $this;

    }

    public functiongetSalesSum()

    {

    return $this->container['sales_sum'];

    }

    public functionsetSalesSum($sales_sum)

    {

    $this->container['sales_sum'] = $sales_sum;

    return $this;

    }

    public functiongetReturnCount()

    {

    return $this->container['return _count'];

    }

    public functionsetReturnCount($return _count)

    {

    $this->container['return _count'] = $return _count;

    return $this;

    }

    public functiongetReturnSum()

    {

    return $this->container['return _sum'];

    }

    public functionsetReturnSum($return _sum)

    {

    $this->container['return _sum'] = $return _sum;

    return $this;

    }

    public functiongetBatchError()

    {

    return $this->container['batch_error'];

    }

    public functionsetBatchError($batch_error)

    {

    $this->container['batch_error'] = $batch_error;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classBusinessimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'Business';

    protectedstatic$swaggerTypes = [

    'address' => '\Swagger\Client\Model\Address',

    'name' => 'string',

    'phone' => 'string',

    'fax' => 'string',

    'web_site' => 'string'

    ];

    protectedstatic$swaggerFormats = [

    'address' => null,

    'name' => null,

    'phone' => null,

    'fax' => null,

    'web_site' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'address' => 'Address',

    'name' => 'Name',

    'phone' => 'Phone',

    'fax' => 'Fax',

    'web_site' => 'WebSite'

    ];

    protectedstatic$setters = [

    'address' => 'setAddress',

    'name' => 'setName',

    'phone' => 'setPhone',

    'fax' => 'setFax',

    'web_site' => 'setWebSite'

    ];

    protectedstatic$getters = [

    'address' => 'getAddress',

    'name' => 'getName',

    'phone' => 'getPhone',

    'fax' => 'getFax',

    'web_site' => 'getWebSite'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

    {

    $this->container['address'] = isset($data['address']) ? $data['address'] : null;

    $this->container['name'] = isset($data['name']) ? $data['name'] : null;

    $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;

    $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;

    $this->container['web_site'] = isset($data['web_site']) ? $data['web_site'] : null;

    }

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetAddress()

    {

    return $this->container['address'];

    }

    public functionsetAddress($address)

    {

    $this->container['address'] = $address;

    return $this;

    }

    public functiongetName()

    {

    return $this->container['name'];

    }

    public functionsetName($name)

    {

    $this->container['name'] = $name;

    return $this;

    }

    public functiongetPhone()

    {

    return $this->container['phone'];

    }

    public functionsetPhone($phone)

    {

    $this->container['phone'] = $phone;

    return $this;

    }

    public functiongetFax()

    {

    return $this->container['fax'];

    }

    public functionsetFax($fax)

    {

    $this->container['fax'] = $fax;

    return $this;

    }

    public functiongetWebSite()

    {

    return $this->container['web_site'];

    }

    public functionsetWebSite($web_site)

    {

    $this->container['web_site'] = $web_site;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    classCheckAccountType

    {

    const UNKNOWN = 'Unknown';

    const CHECKING = 'Checking';

    const SAVINGS = 'Savings';

    public staticfunctiongetAllowableEnumValues()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classCheckTransactionimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'CheckTransaction';

    protectedstatic$swaggerTypes = [

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

    protectedstatic$swaggerFormats = [

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

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

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

    protectedstatic$setters = [

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

    protectedstatic$getters = [

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

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

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

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetTerminalId()

    {

    return $this->container['terminal_id'];

    }

    public functionsetTerminalId($terminal_id)

    {

    $this->container['terminal_id'] = $terminal_id;

    return $this;

    }

    public functiongetAccountNumber()

    {

    return $this->container['account_number'];

    }

    public functionsetAccountNumber($account_number)

    {

    $this->container['account_number'] = $account_number;

    return $this;

    }

    public functiongetAccountType()

    {

    return $this->container['account_type'];

    }

    public functionsetAccountType($account_type)

    {

    $this->container['account_type'] = $account_type;

    return $this;

    }

    public functiongetCheckNumber()

    {

    return $this->container['check_number'];

    }

    public functionsetCheckNumber($check_number)

    {

    $this->container['check_number'] = $check_number;

    return $this;

    }

    public functiongetRoutingNumber()

    {

    return $this->container['routing_number'];

    }

    public functionsetRoutingNumber($routing_number)

    {

    $this->container['routing_number'] = $routing_number;

    return $this;

    }

    public functiongetMicrData()

    {

    return $this->container['micr_data'];

    }

    public functionsetMicrData($micr_data)

    {

    $this->container['micr_data'] = $micr_data;

    return $this;

    }

    public functiongetFirstName()

    {

    return $this->container['first_name'];

    }

    public functionsetFirstName($first_name)

    {

    $this->container['first_name'] = $first_name;

    return $this;

    }

    public functiongetLastName()

    {

    return $this->container['last_name'];

    }

    public functionsetLastName($last_name)

    {

    $this->container['last_name'] = $last_name;

    return $this;

    }

    public functiongetCompanyName()

    {

    return $this->container['company_name'];

    }

    public functionsetCompanyName($company_name)

    {

    $this->container['company_name'] = $company_name;

    return $this;

    }

    public functiongetAddress1()

    {

    return $this->container['address1'];

    }

    public functionsetAddress1($address1)

    {

    $this->container['address1'] = $address1;

    return $this;

    }

    public functiongetAddress2()

    {

    return $this->container['address2'];

    }

    public functionsetAddress2($address2)

    {

    $this->container['address2'] = $address2;

    return $this;

    }

    public functiongetCity()

    {

    return $this->container['city'];

    }

    public functionsetCity($city)

    {

    $this->container['city'] = $city;

    return $this;

    }

    public functiongetState()

    {

    return $this->container['state'];

    }

    public functionsetState($state)

    {

    $this->container['state'] = $state;

    return $this;

    }

    public functiongetZip()

    {

    return $this->container['zip'];

    }

    public functionsetZip($zip)

    {

    $this->container['zip'] = $zip;

    return $this;

    }

    public functiongetPhoneNumber()

    {

    return $this->container['phone_number'];

    }

    public functionsetPhoneNumber($phone_number)

    {

    $this->container['phone_number'] = $phone_number;

    return $this;

    }

    public functiongetDlNumber()

    {

    return $this->container['dl_number'];

    }

    public functionsetDlNumber($dl_number)

    {

    $this->container['dl_number'] = $dl_number;

    return $this;

    }

    public functiongetDlState()

    {

    return $this->container['dl_state'];

    }

    public functionsetDlState($dl_state)

    {

    $this->container['dl_state'] = $dl_state;

    return $this;

    }

    public functiongetCourtesyCardId()

    {

    return $this->container['courtesy_card_id'];

    }

    public functionsetCourtesyCardId($courtesy_card_id)

    {

    $this->container['courtesy_card_id'] = $courtesy_card_id;

    return $this;

    }

    public functiongetSsn4()

    {

    return $this->container['ssn4'];

    }

    public functionsetSsn4($ssn4)

    {

    $this->container['ssn4'] = $ssn4;

    return $this;

    }

    public functiongetDobYear()

    {

    return $this->container['dob_year'];

    }

    public functionsetDobYear($dob_year)

    {

    $this->container['dob_year'] = $dob_year;

    return $this;

    }

    public functiongetCheckAmount()

    {

    return $this->container['check_amount'];

    }

    public functionsetCheckAmount($check_amount)

    {

    $this->container['check_amount'] = $check_amount;

    return $this;

    }

    public functiongetTranType()

    {

    return $this->container['tran_type'];

    }

    public functionsetTranType($tran_type)

    {

    $this->container['tran_type'] = $tran_type;

    return $this;

    }

    public functiongetProcId()

    {

    return $this->container['proc_id'];

    }

    public functionsetProcId($proc_id)

    {

    $this->container['proc_id'] = $proc_id;

    return $this;

    }

    public functiongetIpAddress()

    {

    return $this->container['ip_address'];

    }

    public functionsetIpAddress($ip_address)

    {

    $this->container['ip_address'] = $ip_address;

    return $this;

    }

    public functiongetCustomerNumber()

    {

    return $this->container['customer_number'];

    }

    public functionsetCustomerNumber($customer_number)

    {

    $this->container['customer_number'] = $customer_number;

    return $this;

    }

    public functiongetPoNumber()

    {

    return $this->container['po_number'];

    }

    public functionsetPoNumber($po_number)

    {

    $this->container['po_number'] = $po_number;

    return $this;

    }

    public functiongetInvoiceNumber()

    {

    return $this->container['invoice_number'];

    }

    public functionsetInvoiceNumber($invoice_number)

    {

    $this->container['invoice_number'] = $invoice_number;

    return $this;

    }

    public functiongetTranNote()

    {

    return $this->container['tran_note'];

    }

    public functionsetTranNote($tran_note)

    {

    $this->container['tran_note'] = $tran_note;

    return $this;

    }

    public functiongetEmailAddress()

    {

    return $this->container['email_address'];

    }

    public functionsetEmailAddress($email_address)

    {

    $this->container['email_address'] = $email_address;

    return $this;

    }

    public functiongetSecCode()

    {

    return $this->container['sec_code'];

    }

    public functionsetSecCode($sec_code)

    {

    $this->container['sec_code'] = $sec_code;

    return $this;

    }

    public functiongetProcResp()

    {

    return $this->container['proc_resp'];

    }

    public functionsetProcResp($proc_resp)

    {

    $this->container['proc_resp'] = $proc_resp;

    return $this;

    }

    public functiongetProcCode()

    {

    return $this->container['proc_code'];

    }

    public functionsetProcCode($proc_code)

    {

    $this->container['proc_code'] = $proc_code;

    return $this;

    }

    public functiongetProcMess()

    {

    return $this->container['proc_mess'];

    }

    public functionsetProcMess($proc_mess)

    {

    $this->container['proc_mess'] = $proc_mess;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classCheckTransactionSettingsimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'CheckTransactionSettings';

    protectedstatic$swaggerTypes = [

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

    protectedstatic$swaggerFormats = [

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

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

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

    protectedstatic$setters = [

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

    protectedstatic$getters = [

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

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

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

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetReader()

    {

    return $this->container['reader'];

    }

    public functionsetReader($reader)

    {

    $this->container['reader'] = $reader;

    return $this;

    }

    public functiongetContactName()

    {

    return $this->container['contact_name'];

    }

    public functionsetContactName($contact_name)

    {

    $this->container['contact_name'] = $contact_name;

    return $this;

    }

    public functiongetContactTitle()

    {

    return $this->container['contact_title'];

    }

    public functionsetContactTitle($contact_title)

    {

    $this->container['contact_title'] = $contact_title;

    return $this;

    }

    public functiongetEmailAddress()

    {

    return $this->container['email_address'];

    }

    public functionsetEmailAddress($email_address)

    {

    $this->container['email_address'] = $email_address;

    return $this;

    }

    public functiongetPhoneDefault()

    {

    return $this->container['phone_default'];

    }

    public functionsetPhoneDefault($phone_default)

    {

    $this->container['phone_default'] = $phone_default;

    return $this;

    }

    public functiongetFax()

    {

    return $this->container['fax'];

    }

    public functionsetFax($fax)

    {

    $this->container['fax'] = $fax;

    return $this;

    }

    public functiongetBillingAddressDefault()

    {

    return $this->container['billing_address_default'];

    }

    public functionsetBillingAddressDefault($billing_address_default)

    {

    $this->container['billing_address_default'] = $billing_address_default;

    return $this;

    }

    public functiongetBillingAddress2()

    {

    return $this->container['billing_address2'];

    }

    public functionsetBillingAddress2($billing_address2)

    {

    $this->container['billing_address2'] = $billing_address2;

    return $this;

    }

    public functiongetBillingCityDefault()

    {

    return $this->container['billing_city_default'];

    }

    public functionsetBillingCityDefault($billing_city_default)

    {

    $this->container['billing_city_default'] = $billing_city_default;

    return $this;

    }

    public functiongetBillingStateDefault()

    {

    return $this->container['billing_state_default'];

    }

    public functionsetBillingStateDefault($billing_state_default)

    {

    $this->container['billing_state_default'] = $billing_state_default;

    return $this;

    }

    public functiongetBillingZipDefault()

    {

    return $this->container['billing_zip_default'];

    }

    public functionsetBillingZipDefault($billing_zip_default)

    {

    $this->container['billing_zip_default'] = $billing_zip_default;

    return $this;

    }

    public functiongetPoNumber()

    {

    return $this->container['po_number'];

    }

    public functionsetPoNumber($po_number)

    {

    $this->container['po_number'] = $po_number;

    return $this;

    }

    public functiongetInvoiceNumber()

    {

    return $this->container['invoice_number'];

    }

    public functionsetInvoiceNumber($invoice_number)

    {

    $this->container['invoice_number'] = $invoice_number;

    return $this;

    }

    public functiongetBusinessName()

    {

    return $this->container['business_name'];

    }

    public functionsetBusinessName($business_name)

    {

    $this->container['business_name'] = $business_name;

    return $this;

    }

    public functiongetCustomerNumber()

    {

    return $this->container['customer_number'];

    }

    public functionsetCustomerNumber($customer_number)

    {

    $this->container['customer_number'] = $customer_number;

    return $this;

    }

    public functiongetReferenceNote()

    {

    return $this->container['reference_note'];

    }

    public functionsetReferenceNote($reference_note)

    {

    $this->container['reference_note'] = $reference_note;

    return $this;

    }

    public functiongetDefaultSecCode()

    {

    return $this->container['default_sec_code'];

    }

    public functionsetDefaultSecCode($default_sec_code)

    {

    $this->container['default_sec_code'] = $default_sec_code;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    classCheckTransactionType

    {

    const UNKNOWN = 'Unknown';

    const AUTHORIZE = 'Authorize';

    const void = 'void ';

    const OVERRIDE = 'Override';

    const PAYROLL = 'Payroll';

    const RECURRING = 'Recurring';

    const REFUND = 'Refund';

    public staticfunctiongetAllowableEnumValues()

    {

    return [

    self::UNKNOWN,

    self::AUTHORIZE,

    self::void ,

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classContactimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'Contact';

    protectedstatic$swaggerTypes = [

    'first_name' => 'string',

    'last_name' => 'string',

    'name' => 'string',

    'title' => 'string',

    'phone' => 'string',

    'email' => 'string'

    ];

    protectedstatic$swaggerFormats = [

    'first_name' => null,

    'last_name' => null,

    'name' => null,

    'title' => null,

    'phone' => null,

    'email' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'first_name' => 'FirstName',

    'last_name' => 'LastName',

    'name' => 'Name',

    'title' => 'Title',

    'phone' => 'Phone',

    'email' => 'Email'

    ];

    protectedstatic$setters = [

    'first_name' => 'setFirstName',

    'last_name' => 'setLastName',

    'name' => 'setName',

    'title' => 'setTitle',

    'phone' => 'setPhone',

    'email' => 'setEmail'

    ];

    protectedstatic$getters = [

    'first_name' => 'getFirstName',

    'last_name' => 'getLastName',

    'name' => 'getName',

    'title' => 'getTitle',

    'phone' => 'getPhone',

    'email' => 'getEmail'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

    {

    $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;

    $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;

    $this->container['name'] = isset($data['name']) ? $data['name'] : null;

    $this->container['title'] = isset($data['title']) ? $data['title'] : null;

    $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;

    $this->container['email'] = isset($data['email']) ? $data['email'] : null;

    }

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetFirstName()

    {

    return $this->container['first_name'];

    }

    public functionsetFirstName($first_name)

    {

    $this->container['first_name'] = $first_name;

    return $this;

    }

    public functiongetLastName()

    {

    return $this->container['last_name'];

    }

    public functionsetLastName($last_name)

    {

    $this->container['last_name'] = $last_name;

    return $this;

    }

    public functiongetName()

    {

    return $this->container['name'];

    }

    public functionsetName($name)

    {

    $this->container['name'] = $name;

    return $this;

    }

    public functiongetTitle()

    {

    return $this->container['title'];

    }

    public functionsetTitle($title)

    {

    $this->container['title'] = $title;

    return $this;

    }

    public functiongetPhone()

    {

    return $this->container['phone'];

    }

    public functionsetPhone($phone)

    {

    $this->container['phone'] = $phone;

    return $this;

    }

    public functiongetEmail()

    {

    return $this->container['email'];

    }

    public functionsetEmail($email)

    {

    $this->container['email'] = $email;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classCreditCardTransactionSettingsimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'CreditCardTransactionSettings';

    protectedstatic$swaggerTypes = [

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

    protectedstatic$swaggerFormats = [

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

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

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

    protectedstatic$setters = [

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

    protectedstatic$getters = [

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

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

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

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetCvv()

    {

    return $this->container['cvv'];

    }

    public functionsetCvv($cvv)

    {

    $this->container['cvv'] = $cvv;

    return $this;

    }

    public functiongetContactName()

    {

    return $this->container['contact_name'];

    }

    public functionsetContactName($contact_name)

    {

    $this->container['contact_name'] = $contact_name;

    return $this;

    }

    public functiongetContactTitle()

    {

    return $this->container['contact_title'];

    }

    public functionsetContactTitle($contact_title)

    {

    $this->container['contact_title'] = $contact_title;

    return $this;

    }

    public functiongetEmailAddress()

    {

    return $this->container['email_address'];

    }

    public functionsetEmailAddress($email_address)

    {

    $this->container['email_address'] = $email_address;

    return $this;

    }

    public functiongetPhone()

    {

    return $this->container['phone'];

    }

    public functionsetPhone($phone)

    {

    $this->container['phone'] = $phone;

    return $this;

    }

    public functiongetFax()

    {

    return $this->container['fax'];

    }

    public functionsetFax($fax)

    {

    $this->container['fax'] = $fax;

    return $this;

    }

    public functiongetBillingAddress()

    {

    return $this->container['billing_address'];

    }

    public functionsetBillingAddress($billing_address)

    {

    $this->container['billing_address'] = $billing_address;

    return $this;

    }

    public functiongetBillingAddress2()

    {

    return $this->container['billing_address2'];

    }

    public functionsetBillingAddress2($billing_address2)

    {

    $this->container['billing_address2'] = $billing_address2;

    return $this;

    }

    public functiongetBillingCity()

    {

    return $this->container['billing_city'];

    }

    public functionsetBillingCity($billing_city)

    {

    $this->container['billing_city'] = $billing_city;

    return $this;

    }

    public functiongetBillingState()

    {

    return $this->container['billing_state'];

    }

    public functionsetBillingState($billing_state)

    {

    $this->container['billing_state'] = $billing_state;

    return $this;

    }

    public functiongetBillingZip()

    {

    return $this->container['billing_zip'];

    }

    public functionsetBillingZip($billing_zip)

    {

    $this->container['billing_zip'] = $billing_zip;

    return $this;

    }

    public functiongetPoNumber()

    {

    return $this->container['po_number'];

    }

    public functionsetPoNumber($po_number)

    {

    $this->container['po_number'] = $po_number;

    return $this;

    }

    public functiongetInvoiceNumber()

    {

    return $this->container['invoice_number'];

    }

    public functionsetInvoiceNumber($invoice_number)

    {

    $this->container['invoice_number'] = $invoice_number;

    return $this;

    }

    public functiongetBusinessName()

    {

    return $this->container['business_name'];

    }

    public functionsetBusinessName($business_name)

    {

    $this->container['business_name'] = $business_name;

    return $this;

    }

    public functiongetCustomerNumber()

    {

    return $this->container['customer_number'];

    }

    public functionsetCustomerNumber($customer_number)

    {

    $this->container['customer_number'] = $customer_number;

    return $this;

    }

    public functiongetReferenceNote()

    {

    return $this->container['reference_note'];

    }

    public functionsetReferenceNote($reference_note)

    {

    $this->container['reference_note'] = $reference_note;

    return $this;

    }

    public functiongetSalesTax()

    {

    return $this->container['sales_tax'];

    }

    public functionsetSalesTax($sales_tax)

    {

    $this->container['sales_tax'] = $sales_tax;

    return $this;

    }

    public functiongetTaxExempt()

    {

    return $this->container['tax_exempt'];

    }

    public functionsetTaxExempt($tax_exempt)

    {

    $this->container['tax_exempt'] = $tax_exempt;

    return $this;

    }

    public functiongetCardTracks()

    {

    return $this->container['card_tracks'];

    }

    public functionsetCardTracks($card_tracks)

    {

    $this->container['card_tracks'] = $card_tracks;

    return $this;

    }

    public functiongetCardZip()

    {

    return $this->container['card_zip'];

    }

    public functionsetCardZip($card_zip)

    {

    $this->container['card_zip'] = $card_zip;

    return $this;

    }

    public functiongetCardAddress()

    {

    return $this->container['card_address'];

    }

    public functionsetCardAddress($card_address)

    {

    $this->container['card_address'] = $card_address;

    return $this;

    }

    public functiongetItemDescription()

    {

    return $this->container['item_description'];

    }

    public functionsetItemDescription($item_description)

    {

    $this->container['item_description'] = $item_description;

    return $this;

    }

    public functiongetDefaultTransactionType()

    {

    return $this->container['default_transaction_type'];

    }

    public functionsetDefaultTransactionType($default_transaction_type)

    {

    $this->container['default_transaction_type'] = $default_transaction_type;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    classCVVPresenceType

    {

    const NORMAL = 'Normal';

    const BYPASS = 'Bypass';

    const ILLEGIBLE = 'Illegible';

    const NOT_AVAILABLE = 'NotAvailable';

    public staticfunctiongetAllowableEnumValues()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classEmailReceiptimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'EmailReceipt';

    protectedstatic$swaggerTypes = [

    'transaction_id' => 'string',

    'to_addresses' => 'string',

    'subject' => 'string',

    'header' => 'string',

    'footer' => 'string'

    ];

    protectedstatic$swaggerFormats = [

    'transaction_id' => null,

    'to_addresses' => null,

    'subject' => null,

    'header' => null,

    'footer' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'transaction_id' => 'TransactionID',

    'to_addresses' => 'ToAddresses',

    'subject' => 'Subject',

    'header' => 'Header',

    'footer' => 'Footer'

    ];

    protectedstatic$setters = [

    'transaction_id' => 'setTransactionId',

    'to_addresses' => 'setToAddresses',

    'subject' => 'setSubject',

    'header' => 'setHeader',

    'footer' => 'setFooter'

    ];

    protectedstatic$getters = [

    'transaction_id' => 'getTransactionId',

    'to_addresses' => 'getToAddresses',

    'subject' => 'getSubject',

    'header' => 'getHeader',

    'footer' => 'getFooter'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

    {

    $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;

    $this->container['to_addresses'] = isset($data['to_addresses']) ? $data['to_addresses'] : null;

    $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;

    $this->container['header'] = isset($data['header']) ? $data['header'] : null;

    $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;

    }

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetTransactionId()

    {

    return $this->container['transaction_id'];

    }

    public functionsetTransactionId($transaction_id)

    {

    $this->container['transaction_id'] = $transaction_id;

    return $this;

    }

    public functiongetToAddresses()

    {

    return $this->container['to_addresses'];

    }

    public functionsetToAddresses($to_addresses)

    {

    $this->container['to_addresses'] = $to_addresses;

    return $this;

    }

    public functiongetSubject()

    {

    return $this->container['subject'];

    }

    public functionsetSubject($subject)

    {

    $this->container['subject'] = $subject;

    return $this;

    }

    public functiongetHeader()

    {

    return $this->container['header'];

    }

    public functionsetHeader($header)

    {

    $this->container['header'] = $header;

    return $this;

    }

    public functiongetFooter()

    {

    return $this->container['footer'];

    }

    public functionsetFooter($footer)

    {

    $this->container['footer'] = $footer;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    classFieldAccess

    {

    const DISABLED = 'Disabled';

    const ENABLED = 'Enabled';

    const REQUIRED = 'Required';

    public staticfunctiongetAllowableEnumValues()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classFieldInfoimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'FieldInfo';

    protectedstatic$swaggerTypes = [

    'access' => '\Swagger\Client\Model\FieldAccess',

    'default' => 'string'

    ];

    protectedstatic$swaggerFormats = [

    'access' => null,

    'default' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'access' => 'Access',

    'default' => 'Default'

    ];

    protectedstatic$setters = [

    'access' => 'setAccess',

    'default' => 'setDefault'

    ];

    protectedstatic$getters = [

    'access' => 'getAccess',

    'default' => 'getDefault'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

    {

    $this->container['access'] = isset($data['access']) ? $data['access'] : null;

    $this->container['default'] = isset($data['default']) ? $data['default'] : null;

    }

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetAccess()

    {

    return $this->container['access'];

    }

    public functionsetAccess($access)

    {

    $this->container['access'] = $access;

    return $this;

    }

    public functiongetDefault()

    {

    return $this->container['default'];

    }

    public functionsetDefault($default)

    {

    $this->container['default'] = $default;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classQueryTransactionimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'QueryTransaction';

    protectedstatic$swaggerTypes = [

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

    protectedstatic$swaggerFormats = [

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

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

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

    protectedstatic$setters = [

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

    protectedstatic$getters = [

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

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

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

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetTranSequence()

    {

    return $this->container['tran_sequence'];

    }

    public functionsetTranSequence($tran_sequence)

    {

    $this->container['tran_sequence'] = $tran_sequence;

    return $this;

    }

    public functiongetTranBatch()

    {

    return $this->container['tran_batch'];

    }

    public functionsetTranBatch($tran_batch)

    {

    $this->container['tran_batch'] = $tran_batch;

    return $this;

    }

    public functiongetTranModified()

    {

    return $this->container['tran_modified'];

    }

    public functionsetTranModified($tran_modified)

    {

    $this->container['tran_modified'] = $tran_modified;

    return $this;

    }

    public functiongetTranProcessed()

    {

    return $this->container['tran_processed'];

    }

    public functionsetTranProcessed($tran_processed)

    {

    $this->container['tran_processed'] = $tran_processed;

    return $this;

    }

    public functiongetTranSettled()

    {

    return $this->container['tran_settled'];

    }

    public functionsetTranSettled($tran_settled)

    {

    $this->container['tran_settled'] = $tran_settled;

    return $this;

    }

    public functiongetSubmitTime()

    {

    return $this->container['submit_time'];

    }

    public functionsetSubmitTime($submit_time)

    {

    $this->container['submit_time'] = $submit_time;

    return $this;

    }

    public functiongetTranType()

    {

    return $this->container['tran_type'];

    }

    public functionsetTranType($tran_type)

    {

    $this->container['tran_type'] = $tran_type;

    return $this;

    }

    public functiongetTranAmt()

    {

    return $this->container['tran_amt'];

    }

    public functionsetTranAmt($tran_amt)

    {

    $this->container['tran_amt'] = $tran_amt;

    return $this;

    }

    public functiongetTranTax()

    {

    return $this->container['tran_tax'];

    }

    public functionsetTranTax($tran_tax)

    {

    $this->container['tran_tax'] = $tran_tax;

    return $this;

    }

    public functiongetTranInv()

    {

    return $this->container['tran_inv'];

    }

    public functionsetTranInv($tran_inv)

    {

    $this->container['tran_inv'] = $tran_inv;

    return $this;

    }

    public functiongetTranPo()

    {

    return $this->container['tran_po'];

    }

    public functionsetTranPo($tran_po)

    {

    $this->container['tran_po'] = $tran_po;

    return $this;

    }

    public functiongetTranCNum()

    {

    return $this->container['tran_c_num'];

    }

    public functionsetTranCNum($tran_c_num)

    {

    $this->container['tran_c_num'] = $tran_c_num;

    return $this;

    }

    public functiongetTranNote()

    {

    return $this->container['tran_note'];

    }

    public functionsetTranNote($tran_note)

    {

    $this->container['tran_note'] = $tran_note;

    return $this;

    }

    public functiongetCardNum()

    {

    return $this->container['card_num'];

    }

    public functionsetCardNum($card_num)

    {

    $this->container['card_num'] = $card_num;

    return $this;

    }

    public functiongetCardName()

    {

    return $this->container['card_name'];

    }

    public functionsetCardName($card_name)

    {

    $this->container['card_name'] = $card_name;

    return $this;

    }

    public functiongetCardExp()

    {

    return $this->container['card_exp'];

    }

    public functionsetCardExp($card_exp)

    {

    $this->container['card_exp'] = $card_exp;

    return $this;

    }

    public functiongetAvsStreet()

    {

    return $this->container['avs_street'];

    }

    public functionsetAvsStreet($avs_street)

    {

    $this->container['avs_street'] = $avs_street;

    return $this;

    }

    public functiongetAvsZip()

    {

    return $this->container['avs_zip'];

    }

    public functionsetAvsZip($avs_zip)

    {

    $this->container['avs_zip'] = $avs_zip;

    return $this;

    }

    public functiongetCvvNum()

    {

    return $this->container['cvv_num'];

    }

    public functionsetCvvNum($cvv_num)

    {

    $this->container['cvv_num'] = $cvv_num;

    return $this;

    }

    public functiongetProcId()

    {

    return $this->container['proc_id'];

    }

    public functionsetProcId($proc_id)

    {

    $this->container['proc_id'] = $proc_id;

    return $this;

    }

    public functiongetProcResp()

    {

    return $this->container['proc_resp'];

    }

    public functionsetProcResp($proc_resp)

    {

    $this->container['proc_resp'] = $proc_resp;

    return $this;

    }

    public functiongetProcCode()

    {

    return $this->container['proc_code'];

    }

    public functionsetProcCode($proc_code)

    {

    $this->container['proc_code'] = $proc_code;

    return $this;

    }

    public functiongetProcMess()

    {

    return $this->container['proc_mess'];

    }

    public functionsetProcMess($proc_mess)

    {

    $this->container['proc_mess'] = $proc_mess;

    return $this;

    }

    public functiongetAvsCode()

    {

    return $this->container['avs_code'];

    }

    public functionsetAvsCode($avs_code)

    {

    $this->container['avs_code'] = $avs_code;

    return $this;

    }

    public functiongetAvsResp()

    {

    return $this->container['avs_resp'];

    }

    public functionsetAvsResp($avs_resp)

    {

    $this->container['avs_resp'] = $avs_resp;

    return $this;

    }

    public functiongetCvvCode()

    {

    return $this->container['cvv_code'];

    }

    public functionsetCvvCode($cvv_code)

    {

    $this->container['cvv_code'] = $cvv_code;

    return $this;

    }

    public functiongetCvvResp()

    {

    return $this->container['cvv_resp'];

    }

    public functionsetCvvResp($cvv_resp)

    {

    $this->container['cvv_resp'] = $cvv_resp;

    return $this;

    }

    public functiongetItems()

    {

    return $this->container['items'];

    }

    public functionsetItems($items)

    {

    $this->container['items'] = $items;

    return $this;

    }

    public functiongetBusinessName()

    {

    return $this->container['business_name'];

    }

    public functionsetBusinessName($business_name)

    {

    $this->container['business_name'] = $business_name;

    return $this;

    }

    public functiongetBusinessAddress()

    {

    return $this->container['business_address'];

    }

    public functionsetBusinessAddress($business_address)

    {

    $this->container['business_address'] = $business_address;

    return $this;

    }

    public functiongetBusinessAddress2()

    {

    return $this->container['business_address2'];

    }

    public functionsetBusinessAddress2($business_address2)

    {

    $this->container['business_address2'] = $business_address2;

    return $this;

    }

    public functiongetBusinessCity()

    {

    return $this->container['business_city'];

    }

    public functionsetBusinessCity($business_city)

    {

    $this->container['business_city'] = $business_city;

    return $this;

    }

    public functiongetBusinessState()

    {

    return $this->container['business_state'];

    }

    public functionsetBusinessState($business_state)

    {

    $this->container['business_state'] = $business_state;

    return $this;

    }

    public functiongetBusinessZip()

    {

    return $this->container['business_zip'];

    }

    public functionsetBusinessZip($business_zip)

    {

    $this->container['business_zip'] = $business_zip;

    return $this;

    }

    public functiongetBusinessCountry()

    {

    return $this->container['business_country'];

    }

    public functionsetBusinessCountry($business_country)

    {

    $this->container['business_country'] = $business_country;

    return $this;

    }

    public functiongetBusinessWebsite()

    {

    return $this->container['business_website'];

    }

    public functionsetBusinessWebsite($business_website)

    {

    $this->container['business_website'] = $business_website;

    return $this;

    }

    public functiongetContactFirstName()

    {

    return $this->container['contact_first_name'];

    }

    public functionsetContactFirstName($contact_first_name)

    {

    $this->container['contact_first_name'] = $contact_first_name;

    return $this;

    }

    public functiongetContactLastName()

    {

    return $this->container['contact_last_name'];

    }

    public functionsetContactLastName($contact_last_name)

    {

    $this->container['contact_last_name'] = $contact_last_name;

    return $this;

    }

    public functiongetContactPhone()

    {

    return $this->container['contact_phone'];

    }

    public functionsetContactPhone($contact_phone)

    {

    $this->container['contact_phone'] = $contact_phone;

    return $this;

    }

    public functiongetContactFax()

    {

    return $this->container['contact_fax'];

    }

    public functionsetContactFax($contact_fax)

    {

    $this->container['contact_fax'] = $contact_fax;

    return $this;

    }

    public functiongetContactEmail()

    {

    return $this->container['contact_email'];

    }

    public functionsetContactEmail($contact_email)

    {

    $this->container['contact_email'] = $contact_email;

    return $this;

    }

    public functiongetContactTitle()

    {

    return $this->container['contact_title'];

    }

    public functionsetContactTitle($contact_title)

    {

    $this->container['contact_title'] = $contact_title;

    return $this;

    }

    public functiongetIp()

    {

    return $this->container['ip'];

    }

    public functionsetIp($ip)

    {

    $this->container['ip'] = $ip;

    return $this;

    }

    public functiongetTaxExempt()

    {

    return $this->container['tax_exempt'];

    }

    public functionsetTaxExempt($tax_exempt)

    {

    $this->container['tax_exempt'] = $tax_exempt;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classReceiptimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'Receipt';

    protectedstatic$swaggerTypes = [

    'header' => '\Swagger\Client\Model\ReceiptCustomLines',

    'footer' => '\Swagger\Client\Model\ReceiptCustomLines'

    ];

    protectedstatic$swaggerFormats = [

    'header' => null,

    'footer' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'header' => 'Header',

    'footer' => 'Footer'

    ];

    protectedstatic$setters = [

    'header' => 'setHeader',

    'footer' => 'setFooter'

    ];

    protectedstatic$getters = [

    'header' => 'getHeader',

    'footer' => 'getFooter'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

    {

    $this->container['header'] = isset($data['header']) ? $data['header'] : null;

    $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;

    }

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetHeader()

    {

    return $this->container['header'];

    }

    public functionsetHeader($header)

    {

    $this->container['header'] = $header;

    return $this;

    }

    public functiongetFooter()

    {

    return $this->container['footer'];

    }

    public functionsetFooter($footer)

    {

    $this->container['footer'] = $footer;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classReceiptCustomLinesimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'ReceiptCustomLines';

    protectedstatic$swaggerTypes = [

    'custom_line1' => 'string',

    'custom_line2' => 'string',

    'custom_line3' => 'string',

    'custom_line4' => 'string'

    ];

    protectedstatic$swaggerFormats = [

    'custom_line1' => null,

    'custom_line2' => null,

    'custom_line3' => null,

    'custom_line4' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'custom_line1' => 'CustomLine1',

    'custom_line2' => 'CustomLine2',

    'custom_line3' => 'CustomLine3',

    'custom_line4' => 'CustomLine4'

    ];

    protectedstatic$setters = [

    'custom_line1' => 'setCustomLine1',

    'custom_line2' => 'setCustomLine2',

    'custom_line3' => 'setCustomLine3',

    'custom_line4' => 'setCustomLine4'

    ];

    protectedstatic$getters = [

    'custom_line1' => 'getCustomLine1',

    'custom_line2' => 'getCustomLine2',

    'custom_line3' => 'getCustomLine3',

    'custom_line4' => 'getCustomLine4'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

    {

    $this->container['custom_line1'] = isset($data['custom_line1']) ? $data['custom_line1'] : null;

    $this->container['custom_line2'] = isset($data['custom_line2']) ? $data['custom_line2'] : null;

    $this->container['custom_line3'] = isset($data['custom_line3']) ? $data['custom_line3'] : null;

    $this->container['custom_line4'] = isset($data['custom_line4']) ? $data['custom_line4'] : null;

    }

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetCustomLine1()

    {

    return $this->container['custom_line1'];

    }

    public functionsetCustomLine1($custom_line1)

    {

    $this->container['custom_line1'] = $custom_line1;

    return $this;

    }

    public functiongetCustomLine2()

    {

    return $this->container['custom_line2'];

    }

    public functionsetCustomLine2($custom_line2)

    {

    $this->container['custom_line2'] = $custom_line2;

    return $this;

    }

    public functiongetCustomLine3()

    {

    return $this->container['custom_line3'];

    }

    public functionsetCustomLine3($custom_line3)

    {

    $this->container['custom_line3'] = $custom_line3;

    return $this;

    }

    public functiongetCustomLine4()

    {

    return $this->container['custom_line4'];

    }

    public functionsetCustomLine4($custom_line4)

    {

    $this->container['custom_line4'] = $custom_line4;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classRecordimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'Record';

    protectedstatic$swaggerTypes = [

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

    protectedstatic$swaggerFormats = [

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

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

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

    protectedstatic$setters = [

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

    protectedstatic$getters = [

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

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

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

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetResponse()

    {

    return $this->container['response'];

    }

    public functionsetResponse($response)

    {

    $this->container['response'] = $response;

    return $this;

    }

    public functiongetId()

    {

    return $this->container['id'];

    }

    public functionsetId($id)

    {

    $this->container['id'] = $id;

    return $this;

    }

    public functiongetReference()

    {

    return $this->container['reference'];

    }

    public functionsetReference($reference)

    {

    $this->container['reference'] = $reference;

    return $this;

    }

    public functiongetBusiness()

    {

    return $this->container['business'];

    }

    public functionsetBusiness($business)

    {

    $this->container['business'] = $business;

    return $this;

    }

    public functiongetContact()

    {

    return $this->container['contact'];

    }

    public functionsetContact($contact)

    {

    $this->container['contact'] = $contact;

    return $this;

    }

    public functiongetPo()

    {

    return $this->container['po'];

    }

    public functionsetPo($po)

    {

    $this->container['po'] = $po;

    return $this;

    }

    public functiongetInvoice()

    {

    return $this->container['invoice'];

    }

    public functionsetInvoice($invoice)

    {

    $this->container['invoice'] = $invoice;

    return $this;

    }

    public functiongetCustomer()

    {

    return $this->container['customer'];

    }

    public functionsetCustomer($customer)

    {

    $this->container['customer'] = $customer;

    return $this;

    }

    public functiongetTaxExempt()

    {

    return $this->container['tax_exempt'];

    }

    public functionsetTaxExempt($tax_exempt)

    {

    $this->container['tax_exempt'] = $tax_exempt;

    return $this;

    }

    public functiongetNote()

    {

    return $this->container['note'];

    }

    public functionsetNote($note)

    {

    $this->container['note'] = $note;

    return $this;

    }

    public functiongetCreditCards()

    {

    return $this->container['credit_cards'];

    }

    public functionsetCreditCards($credit_cards)

    {

    $this->container['credit_cards'] = $credit_cards;

    return $this;

    }

    public functiongetChecks()

    {

    return $this->container['checks'];

    }

    public functionsetChecks($checks)

    {

    $this->container['checks'] = $checks;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classResponseimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'Response';

    protectedstatic$swaggerTypes = [

    'error' => 'bool',

    'message' => 'string'

    ];

    protectedstatic$swaggerFormats = [

    'error' => null,

    'message' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'error' => 'Error',

    'message' => 'Message'

    ];

    protectedstatic$setters = [

    'error' => 'setError',

    'message' => 'setMessage'

    ];

    protectedstatic$getters = [

    'error' => 'getError',

    'message' => 'getMessage'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

    {

    $this->container['error'] = isset($data['error']) ? $data['error'] : null;

    $this->container['message'] = isset($data['message']) ? $data['message'] : null;

    }

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetError()

    {

    return $this->container['error'];

    }

    public functionsetError($error)

    {

    $this->container['error'] = $error;

    return $this;

    }

    public functiongetMessage()

    {

    return $this->container['message'];

    }

    public functionsetMessage($message)

    {

    $this->container['message'] = $message;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classSearchVaultimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'SearchVault';

    protectedstatic$swaggerTypes = [

    'reference' => 'string',

    'business_name' => 'string',

    'first_name' => 'string',

    'last_name' => 'string'

    ];

    protectedstatic$swaggerFormats = [

    'reference' => null,

    'business_name' => null,

    'first_name' => null,

    'last_name' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'reference' => 'Reference',

    'business_name' => 'BusinessName',

    'first_name' => 'FirstName',

    'last_name' => 'LastName'

    ];

    protectedstatic$setters = [

    'reference' => 'setReference',

    'business_name' => 'setBusinessName',

    'first_name' => 'setFirstName',

    'last_name' => 'setLastName'

    ];

    protectedstatic$getters = [

    'reference' => 'getReference',

    'business_name' => 'getBusinessName',

    'first_name' => 'getFirstName',

    'last_name' => 'getLastName'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

    {

    $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;

    $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;

    $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;

    $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;

    }

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetReference()

    {

    return $this->container['reference'];

    }

    public functionsetReference($reference)

    {

    $this->container['reference'] = $reference;

    return $this;

    }

    public functiongetBusinessName()

    {

    return $this->container['business_name'];

    }

    public functionsetBusinessName($business_name)

    {

    $this->container['business_name'] = $business_name;

    return $this;

    }

    public functiongetFirstName()

    {

    return $this->container['first_name'];

    }

    public functionsetFirstName($first_name)

    {

    $this->container['first_name'] = $first_name;

    return $this;

    }

    public functiongetLastName()

    {

    return $this->container['last_name'];

    }

    public functionsetLastName($last_name)

    {

    $this->container['last_name'] = $last_name;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classSettingsimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'Settings';

    protectedstatic$swaggerTypes = [

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

    protectedstatic$swaggerFormats = [

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

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

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

    protectedstatic$setters = [

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

    protectedstatic$getters = [

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

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

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

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetCreditCardTransactionSettings()

    {

    return $this->container['credit_card_transaction_settings'];

    }

    public functionsetCreditCardTransactionSettings($credit_card_transaction_settings)

    {

    $this->container['credit_card_transaction_settings'] = $credit_card_transaction_settings;

    return $this;

    }

    public functiongetCheckTransactionSettings()

    {

    return $this->container['check_transaction_settings'];

    }

    public functionsetCheckTransactionSettings($check_transaction_settings)

    {

    $this->container['check_transaction_settings'] = $check_transaction_settings;

    return $this;

    }

    public functiongetBusiness()

    {

    return $this->container['business'];

    }

    public functionsetBusiness($business)

    {

    $this->container['business'] = $business;

    return $this;

    }

    public functiongetMainContact()

    {

    return $this->container['main_contact'];

    }

    public functionsetMainContact($main_contact)

    {

    $this->container['main_contact'] = $main_contact;

    return $this;

    }

    public functiongetReceipt40()

    {

    return $this->container['receipt40'];

    }

    public functionsetReceipt40($receipt40)

    {

    $this->container['receipt40'] = $receipt40;

    return $this;

    }

    public functiongetReceipt80()

    {

    return $this->container['receipt80'];

    }

    public functionsetReceipt80($receipt80)

    {

    $this->container['receipt80'] = $receipt80;

    return $this;

    }

    public functiongetPrintSignatureLine()

    {

    return $this->container['print_signature_line'];

    }

    public functionsetPrintSignatureLine($print_signature_line)

    {

    $this->container['print_signature_line'] = $print_signature_line;

    return $this;

    }

    public functiongetResponse()

    {

    return $this->container['response'];

    }

    public functionsetResponse($response)

    {

    $this->container['response'] = $response;

    return $this;

    }

    public functiongetAccountId()

    {

    return $this->container['account_id'];

    }

    public functionsetAccountId($account_id)

    {

    $this->container['account_id'] = $account_id;

    return $this;

    }

    public functiongetCopyEmailReceipt()

    {

    return $this->container['copy_email_receipt'];

    }

    public functionsetCopyEmailReceipt($copy_email_receipt)

    {

    $this->container['copy_email_receipt'] = $copy_email_receipt;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classTerminalSettingsimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'TerminalSettings';

    protectedstatic$swaggerTypes = [

    'id' => 'int',

    'terminal_id' => 'int',

    'sec_code' => 'string',

    'gateway_terminal' => 'bool',

    'consumer_credits' => 'bool',

    'dl_required' => 'bool',

    'check_verify' => 'bool',

    'identity_verify' => 'bool'

    ];

    protectedstatic$swaggerFormats = [

    'id' => 'int32',

    'terminal_id' => 'int32',

    'sec_code' => null,

    'gateway_terminal' => null,

    'consumer_credits' => null,

    'dl_required' => null,

    'check_verify' => null,

    'identity_verify' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'id' => 'ID',

    'terminal_id' => 'Terminal_ID',

    'sec_code' => 'SEC_Code',

    'gateway_terminal' => 'Gateway_Terminal',

    'consumer_credits' => 'Consumer_Credits',

    'dl_required' => 'DL_Required',

    'check_verify' => 'Check_Verify',

    'identity_verify' => 'Identity_Verify'

    ];

    protectedstatic$setters = [

    'id' => 'setId',

    'terminal_id' => 'setTerminalId',

    'sec_code' => 'setSecCode',

    'gateway_terminal' => 'setGatewayTerminal',

    'consumer_credits' => 'setConsumerCredits',

    'dl_required' => 'setDlRequired',

    'check_verify' => 'setCheckVerify',

    'identity_verify' => 'setIdentityVerify'

    ];

    protectedstatic$getters = [

    'id' => 'getId',

    'terminal_id' => 'getTerminalId',

    'sec_code' => 'getSecCode',

    'gateway_terminal' => 'getGatewayTerminal',

    'consumer_credits' => 'getConsumerCredits',

    'dl_required' => 'getDlRequired',

    'check_verify' => 'getCheckVerify',

    'identity_verify' => 'getIdentityVerify'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

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

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetId()

    {

    return $this->container['id'];

    }

    public functionsetId($id)

    {

    $this->container['id'] = $id;

    return $this;

    }

    public functiongetTerminalId()

    {

    return $this->container['terminal_id'];

    }

    public functionsetTerminalId($terminal_id)

    {

    $this->container['terminal_id'] = $terminal_id;

    return $this;

    }

    public functiongetSecCode()

    {

    return $this->container['sec_code'];

    }

    public functionsetSecCode($sec_code)

    {

    $this->container['sec_code'] = $sec_code;

    return $this;

    }

    public functiongetGatewayTerminal()

    {

    return $this->container['gateway_terminal'];

    }

    public functionsetGatewayTerminal($gateway_terminal)

    {

    $this->container['gateway_terminal'] = $gateway_terminal;

    return $this;

    }

    public functiongetConsumerCredits()

    {

    return $this->container['consumer_credits'];

    }

    public functionsetConsumerCredits($consumer_credits)

    {

    $this->container['consumer_credits'] = $consumer_credits;

    return $this;

    }

    public functiongetDlRequired()

    {

    return $this->container['dl_required'];

    }

    public functionsetDlRequired($dl_required)

    {

    $this->container['dl_required'] = $dl_required;

    return $this;

    }

    public functiongetCheckVerify()

    {

    return $this->container['check_verify'];

    }

    public functionsetCheckVerify($check_verify)

    {

    $this->container['check_verify'] = $check_verify;

    return $this;

    }

    public functiongetIdentityVerify()

    {

    return $this->container['identity_verify'];

    }

    public functionsetIdentityVerify($identity_verify)

    {

    $this->container['identity_verify'] = $identity_verify;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classTransactionimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'Transaction';

    protectedstatic$swaggerTypes = [

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

    protectedstatic$swaggerFormats = [

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

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

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

    protectedstatic$setters = [

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

    protectedstatic$getters = [

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

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

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

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetSubmitTime()

    {

    return $this->container['submit_time'];

    }

    public functionsetSubmitTime($submit_time)

    {

    $this->container['submit_time'] = $submit_time;

    return $this;

    }

    public functiongetTranType()

    {

    return $this->container['tran_type'];

    }

    public functionsetTranType($tran_type)

    {

    $this->container['tran_type'] = $tran_type;

    return $this;

    }

    public functiongetTranAmt()

    {

    return $this->container['tran_amt'];

    }

    public functionsetTranAmt($tran_amt)

    {

    $this->container['tran_amt'] = $tran_amt;

    return $this;

    }

    public functiongetTranTax()

    {

    return $this->container['tran_tax'];

    }

    public functionsetTranTax($tran_tax)

    {

    $this->container['tran_tax'] = $tran_tax;

    return $this;

    }

    public functiongetTranInv()

    {

    return $this->container['tran_inv'];

    }

    public functionsetTranInv($tran_inv)

    {

    $this->container['tran_inv'] = $tran_inv;

    return $this;

    }

    public functiongetTranPo()

    {

    return $this->container['tran_po'];

    }

    public functionsetTranPo($tran_po)

    {

    $this->container['tran_po'] = $tran_po;

    return $this;

    }

    public functiongetTranCNum()

    {

    return $this->container['tran_c_num'];

    }

    public functionsetTranCNum($tran_c_num)

    {

    $this->container['tran_c_num'] = $tran_c_num;

    return $this;

    }

    public functiongetTranNote()

    {

    return $this->container['tran_note'];

    }

    public functionsetTranNote($tran_note)

    {

    $this->container['tran_note'] = $tran_note;

    return $this;

    }

    public functiongetCardNum()

    {

    return $this->container['card_num'];

    }

    public functionsetCardNum($card_num)

    {

    $this->container['card_num'] = $card_num;

    return $this;

    }

    public functiongetCardName()

    {

    return $this->container['card_name'];

    }

    public functionsetCardName($card_name)

    {

    $this->container['card_name'] = $card_name;

    return $this;

    }

    public functiongetCardExp()

    {

    return $this->container['card_exp'];

    }

    public functionsetCardExp($card_exp)

    {

    $this->container['card_exp'] = $card_exp;

    return $this;

    }

    public functiongetCardType()

    {

    return $this->container['card_type'];

    }

    public functionsetCardType($card_type)

    {

    $this->container['card_type'] = $card_type;

    return $this;

    }

    public functiongetAvsStreet()

    {

    return $this->container['avs_street'];

    }

    public functionsetAvsStreet($avs_street)

    {

    $this->container['avs_street'] = $avs_street;

    return $this;

    }

    public functiongetAvsZip()

    {

    return $this->container['avs_zip'];

    }

    public functionsetAvsZip($avs_zip)

    {

    $this->container['avs_zip'] = $avs_zip;

    return $this;

    }

    public functiongetCvvNum()

    {

    return $this->container['cvv_num'];

    }

    public functionsetCvvNum($cvv_num)

    {

    $this->container['cvv_num'] = $cvv_num;

    return $this;

    }

    public functiongetProcId()

    {

    return $this->container['proc_id'];

    }

    public functionsetProcId($proc_id)

    {

    $this->container['proc_id'] = $proc_id;

    return $this;

    }

    public functiongetProcResp()

    {

    return $this->container['proc_resp'];

    }

    public functionsetProcResp($proc_resp)

    {

    $this->container['proc_resp'] = $proc_resp;

    return $this;

    }

    public functiongetProcCode()

    {

    return $this->container['proc_code'];

    }

    public functionsetProcCode($proc_code)

    {

    $this->container['proc_code'] = $proc_code;

    return $this;

    }

    public functiongetProcMess()

    {

    return $this->container['proc_mess'];

    }

    public functionsetProcMess($proc_mess)

    {

    $this->container['proc_mess'] = $proc_mess;

    return $this;

    }

    public functiongetAvsCode()

    {

    return $this->container['avs_code'];

    }

    public functionsetAvsCode($avs_code)

    {

    $this->container['avs_code'] = $avs_code;

    return $this;

    }

    public functiongetAvsResp()

    {

    return $this->container['avs_resp'];

    }

    public functionsetAvsResp($avs_resp)

    {

    $this->container['avs_resp'] = $avs_resp;

    return $this;

    }

    public functiongetCvvCode()

    {

    return $this->container['cvv_code'];

    }

    public functionsetCvvCode($cvv_code)

    {

    $this->container['cvv_code'] = $cvv_code;

    return $this;

    }

    public functiongetCvvResp()

    {

    return $this->container['cvv_resp'];

    }

    public functionsetCvvResp($cvv_resp)

    {

    $this->container['cvv_resp'] = $cvv_resp;

    return $this;

    }

    public functiongetItems()

    {

    return $this->container['items'];

    }

    public functionsetItems($items)

    {

    $this->container['items'] = $items;

    return $this;

    }

    public functiongetBusinessName()

    {

    return $this->container['business_name'];

    }

    public functionsetBusinessName($business_name)

    {

    $this->container['business_name'] = $business_name;

    return $this;

    }

    public functiongetBusinessAddress()

    {

    return $this->container['business_address'];

    }

    public functionsetBusinessAddress($business_address)

    {

    $this->container['business_address'] = $business_address;

    return $this;

    }

    public functiongetBusinessAddress2()

    {

    return $this->container['business_address2'];

    }

    public functionsetBusinessAddress2($business_address2)

    {

    $this->container['business_address2'] = $business_address2;

    return $this;

    }

    public functiongetBusinessCity()

    {

    return $this->container['business_city'];

    }

    public functionsetBusinessCity($business_city)

    {

    $this->container['business_city'] = $business_city;

    return $this;

    }

    public functiongetBusinessState()

    {

    return $this->container['business_state'];

    }

    public functionsetBusinessState($business_state)

    {

    $this->container['business_state'] = $business_state;

    return $this;

    }

    public functiongetBusinessZip()

    {

    return $this->container['business_zip'];

    }

    public functionsetBusinessZip($business_zip)

    {

    $this->container['business_zip'] = $business_zip;

    return $this;

    }

    public functiongetBusinessCountry()

    {

    return $this->container['business_country'];

    }

    public functionsetBusinessCountry($business_country)

    {

    $this->container['business_country'] = $business_country;

    return $this;

    }

    public functiongetBusinessWebsite()

    {

    return $this->container['business_website'];

    }

    public functionsetBusinessWebsite($business_website)

    {

    $this->container['business_website'] = $business_website;

    return $this;

    }

    public functiongetContactFirstName()

    {

    return $this->container['contact_first_name'];

    }

    public functionsetContactFirstName($contact_first_name)

    {

    $this->container['contact_first_name'] = $contact_first_name;

    return $this;

    }

    public functiongetContactLastName()

    {

    return $this->container['contact_last_name'];

    }

    public functionsetContactLastName($contact_last_name)

    {

    $this->container['contact_last_name'] = $contact_last_name;

    return $this;

    }

    public functiongetContactPhone()

    {

    return $this->container['contact_phone'];

    }

    public functionsetContactPhone($contact_phone)

    {

    $this->container['contact_phone'] = $contact_phone;

    return $this;

    }

    public functiongetContactFax()

    {

    return $this->container['contact_fax'];

    }

    public functionsetContactFax($contact_fax)

    {

    $this->container['contact_fax'] = $contact_fax;

    return $this;

    }

    public functiongetContactEmail()

    {

    return $this->container['contact_email'];

    }

    public functionsetContactEmail($contact_email)

    {

    $this->container['contact_email'] = $contact_email;

    return $this;

    }

    public functiongetContactTitle()

    {

    return $this->container['contact_title'];

    }

    public functionsetContactTitle($contact_title)

    {

    $this->container['contact_title'] = $contact_title;

    return $this;

    }

    public functiongetIp()

    {

    return $this->container['ip'];

    }

    public functionsetIp($ip)

    {

    $this->container['ip'] = $ip;

    return $this;

    }

    public functiongetTaxExempt()

    {

    return $this->container['tax_exempt'];

    }

    public functionsetTaxExempt($tax_exempt)

    {

    $this->container['tax_exempt'] = $tax_exempt;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classTransactionItemimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'TransactionItem';

    protectedstatic$swaggerTypes = [

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

    protectedstatic$swaggerFormats = [

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

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

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

    protectedstatic$setters = [

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

    protectedstatic$getters = [

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

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

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

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetTaxIncluded()

    {

    return $this->container['tax_included'];

    }

    public functionsetTaxIncluded($tax_included)

    {

    $this->container['tax_included'] = $tax_included;

    return $this;

    }

    public functiongetCredit()

    {

    return $this->container['credit'];

    }

    public functionsetCredit($credit)

    {

    $this->container['credit'] = $credit;

    return $this;

    }

    public functiongetExtendedAmount()

    {

    return $this->container['extended_amount'];

    }

    public functionsetExtendedAmount($extended_amount)

    {

    $this->container['extended_amount'] = $extended_amount;

    return $this;

    }

    public functiongetItemNumber()

    {

    return $this->container['item_number'];

    }

    public functionsetItemNumber($item_number)

    {

    $this->container['item_number'] = $item_number;

    return $this;

    }

    public functiongetUnitCost()

    {

    return $this->container['unit_cost'];

    }

    public functionsetUnitCost($unit_cost)

    {

    $this->container['unit_cost'] = $unit_cost;

    return $this;

    }

    public functiongetQuantity()

    {

    return $this->container['quantity'];

    }

    public functionsetQuantity($quantity)

    {

    $this->container['quantity'] = $quantity;

    return $this;

    }

    public functiongetDescription()

    {

    return $this->container['description'];

    }

    public functionsetDescription($description)

    {

    $this->container['description'] = $description;

    return $this;

    }

    public functiongetDiscount()

    {

    return $this->container['discount'];

    }

    public functionsetDiscount($discount)

    {

    $this->container['discount'] = $discount;

    return $this;

    }

    public functiongetTax()

    {

    return $this->container['tax'];

    }

    public functionsetTax($tax)

    {

    $this->container['tax'] = $tax;

    return $this;

    }

    public functiongetCommodityCode()

    {

    return $this->container['commodity_code'];

    }

    public functionsetCommodityCode($commodity_code)

    {

    $this->container['commodity_code'] = $commodity_code;

    return $this;

    }

    public functiongetUnitOfMeasure()

    {

    return $this->container['unit_of_measure'];

    }

    public functionsetUnitOfMeasure($unit_of_measure)

    {

    $this->container['unit_of_measure'] = $unit_of_measure;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    classTransactionType

    {

    const SALE = 'Sale';

    const CREDIT = 'Credit';

    const AUTHORIZATION = 'Authorization';

    const PRE_AUTH = 'PreAuth';

    const POST_AUTH = 'PostAuth';

    const FORCE_AUTH = 'ForceAuth';

    const void = 'void ';

    const QUERY = 'Query';

    const VERIFY = 'Verify';

    const MARK = 'Mark';

    const _RETURN = 'Return';

    const _USE = 'Use';

    public staticfunctiongetAllowableEnumValues()

    {

    return [

    self::SALE,

    self::CREDIT,

    self::AUTHORIZATION,

    self::PRE_AUTH,

    self::POST_AUTH,

    self::FORCE_AUTH,

    self::void ,

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classUpdateTransactionInfoimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'UpdateTransactionInfo';

    protectedstatic$swaggerTypes = [

    'invoice_number' => 'string',

    'customer_number' => 'string',

    'po_number' => 'string',

    'note' => 'string'

    ];

    protectedstatic$swaggerFormats = [

    'invoice_number' => null,

    'customer_number' => null,

    'po_number' => null,

    'note' => null

    ];

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    'invoice_number' => 'InvoiceNumber',

    'customer_number' => 'CustomerNumber',

    'po_number' => 'PONumber',

    'note' => 'Note'

    ];

    protectedstatic$setters = [

    'invoice_number' => 'setInvoiceNumber',

    'customer_number' => 'setCustomerNumber',

    'po_number' => 'setPoNumber',

    'note' => 'setNote'

    ];

    protectedstatic$getters = [

    'invoice_number' => 'getInvoiceNumber',

    'customer_number' => 'getCustomerNumber',

    'po_number' => 'getPoNumber',

    'note' => 'getNote'

    ];

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

    {

    $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;

    $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;

    $this->container['po_number'] = isset($data['po_number']) ? $data['po_number'] : null;

    $this->container['note'] = isset($data['note']) ? $data['note'] : null;

    }

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetInvoiceNumber()

    {

    return $this->container['invoice_number'];

    }

    public functionsetInvoiceNumber($invoice_number)

    {

    $this->container['invoice_number'] = $invoice_number;

    return $this;

    }

    public functiongetCustomerNumber()

    {

    return $this->container['customer_number'];

    }

    public functionsetCustomerNumber($customer_number)

    {

    $this->container['customer_number'] = $customer_number;

    return $this;

    }

    public functiongetPoNumber()

    {

    return $this->container['po_number'];

    }

    public functionsetPoNumber($po_number)

    {

    $this->container['po_number'] = $po_number;

    return $this;

    }

    public functiongetNote()

    {

    return $this->container['note'];

    }

    public functionsetNote($note)

    {

    $this->container['note'] = $note;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classVaultCheckimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'VaultCheck';

    protectedstatic$swaggerTypes = [

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

    protectedstatic$swaggerFormats = [

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

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

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

    protectedstatic$setters = [

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

    protectedstatic$getters = [

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

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

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

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetResponse()

    {

    return $this->container['response'];

    }

    public functionsetResponse($response)

    {

    $this->container['response'] = $response;

    return $this;

    }

    public functiongetCheckId()

    {

    return $this->container['check_id'];

    }

    public functionsetCheckId($check_id)

    {

    $this->container['check_id'] = $check_id;

    return $this;

    }

    public functiongetMain()

    {

    return $this->container['main'];

    }

    public functionsetMain($main)

    {

    $this->container['main'] = $main;

    return $this;

    }

    public functiongetCheckRouting()

    {

    return $this->container['check_routing'];

    }

    public functionsetCheckRouting($check_routing)

    {

    $this->container['check_routing'] = $check_routing;

    return $this;

    }

    public functiongetCheckAccount()

    {

    return $this->container['check_account'];

    }

    public functionsetCheckAccount($check_account)

    {

    $this->container['check_account'] = $check_account;

    return $this;

    }

    public functiongetCheckNumber()

    {

    return $this->container['check_number'];

    }

    public functionsetCheckNumber($check_number)

    {

    $this->container['check_number'] = $check_number;

    return $this;

    }

    public functiongetCheckFirstName()

    {

    return $this->container['check_first_name'];

    }

    public functionsetCheckFirstName($check_first_name)

    {

    $this->container['check_first_name'] = $check_first_name;

    return $this;

    }

    public functiongetCheckLastName()

    {

    return $this->container['check_last_name'];

    }

    public functionsetCheckLastName($check_last_name)

    {

    $this->container['check_last_name'] = $check_last_name;

    return $this;

    }

    public functiongetNote()

    {

    return $this->container['note'];

    }

    public functionsetNote($note)

    {

    $this->container['note'] = $note;

    return $this;

    }

    public functiongetMaskedRouting()

    {

    return $this->container['masked_routing'];

    }

    public functionsetMaskedRouting($masked_routing)

    {

    $this->container['masked_routing'] = $masked_routing;

    return $this;

    }

    public functiongetMaskedAccount()

    {

    return $this->container['masked_account'];

    }

    public functionsetMaskedAccount($masked_account)

    {

    $this->container['masked_account'] = $masked_account;

    return $this;

    }

    public functiongetAccountType()

    {

    return $this->container['account_type'];

    }

    public functionsetAccountType($account_type)

    {

    $this->container['account_type'] = $account_type;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classVaultCreditCardimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = 'VaultCreditCard';

    protectedstatic$swaggerTypes = [

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

    protectedstatic$swaggerFormats = [

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

    public staticfunctionswaggerTypes()

    {

    return self::$swaggerTypes;

    }

    public staticfunctionswaggerFormats()

    {

    return self::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

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

    protectedstatic$setters = [

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

    protectedstatic$getters = [

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

    public staticfunctionattributeMap()

    {

    return self::$attributeMap;

    }

    public staticfunctionsetters()

    {

    return self::$setters;

    }

    public staticfunctiongetters()

    {

    return self::$getters;

    }

    public functiongetModelName()

    {

    return self::$swaggerModelName;

    }

    protected$container = [];

    public function__construct(array$data = null)

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

    public functionlistInvalidProperties()

    {

    $invalidProperties = [];

    return $invalidProperties;

    }

    public functionvalid()

    {

    return count($this->listInvalidProperties()) === 0;

    }

    public functiongetMagneticTracks()

    {

    return $this->container['magnetic_tracks'];

    }

    public functionsetMagneticTracks($magnetic_tracks)

    {

    $this->container['magnetic_tracks'] = $magnetic_tracks;

    return $this;

    }

    public functiongetTrack1()

    {

    return $this->container['track1'];

    }

    public functionsetTrack1($track1)

    {

    $this->container['track1'] = $track1;

    return $this;

    }

    public functiongetTrack2()

    {

    return $this->container['track2'];

    }

    public functionsetTrack2($track2)

    {

    $this->container['track2'] = $track2;

    return $this;

    }

    public functiongetNumber()

    {

    return $this->container['number'];

    }

    public functionsetNumber($number)

    {

    $this->container['number'] = $number;

    return $this;

    }

    public functiongetMaskedNumber()

    {

    return $this->container['masked_number'];

    }

    public functionsetMaskedNumber($masked_number)

    {

    $this->container['masked_number'] = $masked_number;

    return $this;

    }

    public functiongetHolder()

    {

    return $this->container['holder'];

    }

    public functionsetHolder($holder)

    {

    $this->container['holder'] = $holder;

    return $this;

    }

    public functiongetExpDate()

    {

    return $this->container['exp_date'];

    }

    public functionsetExpDate($exp_date)

    {

    $this->container['exp_date'] = $exp_date;

    return $this;

    }

    public functiongetCvv()

    {

    return $this->container['cvv'];

    }

    public functionsetCvv($cvv)

    {

    $this->container['cvv'] = $cvv;

    return $this;

    }

    public functiongetAddress()

    {

    return $this->container['address'];

    }

    public functionsetAddress($address)

    {

    $this->container['address'] = $address;

    return $this;

    }

    public functiongetCity()

    {

    return $this->container['city'];

    }

    public functionsetCity($city)

    {

    $this->container['city'] = $city;

    return $this;

    }

    public functiongetState()

    {

    return $this->container['state'];

    }

    public functionsetState($state)

    {

    $this->container['state'] = $state;

    return $this;

    }

    public functiongetZip()

    {

    return $this->container['zip'];

    }

    public functionsetZip($zip)

    {

    $this->container['zip'] = $zip;

    return $this;

    }

    public functiongetSwiped()

    {

    return $this->container['swiped'];

    }

    public functionsetSwiped($swiped)

    {

    $this->container['swiped'] = $swiped;

    return $this;

    }

    public functiongetTypeString()

    {

    return $this->container['type_string'];

    }

    public functionsetTypeString($type_string)

    {

    $this->container['type_string'] = $type_string;

    return $this;

    }

    public functiongetCvvType()

    {

    return $this->container['cvv_type'];

    }

    public functionsetCvvType($cvv_type)

    {

    $this->container['cvv_type'] = $cvv_type;

    return $this;

    }

    public functiongetNotPresent()

    {

    return $this->container['not_present'];

    }

    public functionsetNotPresent($not_present)

    {

    $this->container['not_present'] = $not_present;

    return $this;

    }

    public functiongetResponse()

    {

    return $this->container['response'];

    }

    public functionsetResponse($response)

    {

    $this->container['response'] = $response;

    return $this;

    }

    public functiongetCardId()

    {

    return $this->container['card_id'];

    }

    public functionsetCardId($card_id)

    {

    $this->container['card_id'] = $card_id;

    return $this;

    }

    public functiongetNote()

    {

    return $this->container['note'];

    }

    public functionsetNote($note)

    {

    $this->container['note'] = $note;

    return $this;

    }

    public functiongetMain()

    {

    return $this->container['main'];

    }

    public functionsetMain($main)

    {

    $this->container['main'] = $main;

    return $this;

    }

    public functionoffsetExists($offset)

    {

    return isset($this->container[$offset]);

    }

    public functionoffsetGet($offset)

    {

    return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public functionoffsetSet($offset, $value)

    {

    if (is_null($offset)) {

    $this->container[] = $value;

    } else {

    $this->container[$offset] = $value;

    }

    }

    public functionoffsetUnset($offset)

    {

    unset($this->container[$offset]);

    }

    public function__toString()

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
