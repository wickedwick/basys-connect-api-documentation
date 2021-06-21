# PHP Models

# Address

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classAddressimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;Address&#39;;

    protectedstatic$swaggerTypes = [

    &#39;address\_line1&#39; =\&gt; &#39;string&#39;,

    &#39;address\_line2&#39; =\&gt; &#39;string&#39;,

    &#39;city&#39; =\&gt; &#39;string&#39;,

    &#39;state&#39; =\&gt; &#39;string&#39;,

    &#39;zip\_code&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;address\_line1&#39; =\&gt; null,

    &#39;address\_line2&#39; =\&gt; null,

    &#39;city&#39; =\&gt; null,

    &#39;state&#39; =\&gt; null,

    &#39;zip\_code&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;address\_line1&#39; =\&gt; &#39;AddressLine1&#39;,

    &#39;address\_line2&#39; =\&gt; &#39;AddressLine2&#39;,

    &#39;city&#39; =\&gt; &#39;City&#39;,

    &#39;state&#39; =\&gt; &#39;State&#39;,

    &#39;zip\_code&#39; =\&gt; &#39;ZipCode&#39;

    ];

    protectedstatic$setters = [

    &#39;address\_line1&#39; =\&gt; &#39;setAddressLine1&#39;,

    &#39;address\_line2&#39; =\&gt; &#39;setAddressLine2&#39;,

    &#39;city&#39; =\&gt; &#39;setCity&#39;,

    &#39;state&#39; =\&gt; &#39;setState&#39;,

    &#39;zip\_code&#39; =\&gt; &#39;setZipCode&#39;

    ];

    protectedstatic$getters = [

    &#39;address\_line1&#39; =\&gt; &#39;getAddressLine1&#39;,

    &#39;address\_line2&#39; =\&gt; &#39;getAddressLine2&#39;,

    &#39;city&#39; =\&gt; &#39;getCity&#39;,

    &#39;state&#39; =\&gt; &#39;getState&#39;,

    &#39;zip\_code&#39; =\&gt; &#39;getZipCode&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;address\_line1&#39;] = isset($data[&#39;address\_line1&#39;]) ? $data[&#39;address\_line1&#39;] : null;

    $this-\&gt;container[&#39;address\_line2&#39;] = isset($data[&#39;address\_line2&#39;]) ? $data[&#39;address\_line2&#39;] : null;

    $this-\&gt;container[&#39;city&#39;] = isset($data[&#39;city&#39;]) ? $data[&#39;city&#39;] : null;

    $this-\&gt;container[&#39;state&#39;] = isset($data[&#39;state&#39;]) ? $data[&#39;state&#39;] : null;

    $this-\&gt;container[&#39;zip\_code&#39;] = isset($data[&#39;zip\_code&#39;]) ? $data[&#39;zip\_code&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetAddressLine1()

    {

    return$this-\&gt;container[&#39;address\_line1&#39;];

    }

    publicfunctionsetAddressLine1($address\_line1)

    {

    $this-\&gt;container[&#39;address\_line1&#39;] = $address\_line1;

    return$this;

    }

    publicfunctiongetAddressLine2()

    {

    return$this-\&gt;container[&#39;address\_line2&#39;];

    }

    publicfunctionsetAddressLine2($address\_line2)

    {

    $this-\&gt;container[&#39;address\_line2&#39;] = $address\_line2;

    return$this;

    }

    publicfunctiongetCity()

    {

    return$this-\&gt;container[&#39;city&#39;];

    }

    publicfunctionsetCity($city)

    {

    $this-\&gt;container[&#39;city&#39;] = $city;

    return$this;

    }

    publicfunctiongetState()

    {

    return$this-\&gt;container[&#39;state&#39;];

    }

    publicfunctionsetState($state)

    {

    $this-\&gt;container[&#39;state&#39;] = $state;

    return$this;

    }

    publicfunctiongetZipCode()

    {

    return$this-\&gt;container[&#39;zip\_code&#39;];

    }

    publicfunctionsetZipCode($zip\_code)

    {

    $this-\&gt;container[&#39;zip\_code&#39;] = $zip\_code;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# Batch

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classBatchimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;Batch&#39;;

    protectedstatic$swaggerTypes = [

    &#39;batch\_number&#39; =\&gt; &#39;string&#39;,

    &#39;started&#39; =\&gt; &#39;\DateTime&#39;,

    &#39;completed&#39; =\&gt; &#39;\DateTime&#39;,

    &#39;sales\_count&#39; =\&gt; &#39;string&#39;,

    &#39;sales\_sum&#39; =\&gt; &#39;double&#39;,

    &#39;return\_count&#39; =\&gt; &#39;string&#39;,

    &#39;return\_sum&#39; =\&gt; &#39;double&#39;,

    &#39;batch\_error&#39; =\&gt; &#39;bool&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;batch\_number&#39; =\&gt; null,

    &#39;started&#39; =\&gt; &#39;date-time&#39;,

    &#39;completed&#39; =\&gt; &#39;date-time&#39;,

    &#39;sales\_count&#39; =\&gt; null,

    &#39;sales\_sum&#39; =\&gt; &#39;double&#39;,

    &#39;return\_count&#39; =\&gt; null,

    &#39;return\_sum&#39; =\&gt; &#39;double&#39;,

    &#39;batch\_error&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;batch\_number&#39; =\&gt; &#39;BatchNumber&#39;,

    &#39;started&#39; =\&gt; &#39;Started&#39;,

    &#39;completed&#39; =\&gt; &#39;Completed&#39;,

    &#39;sales\_count&#39; =\&gt; &#39;SalesCount&#39;,

    &#39;sales\_sum&#39; =\&gt; &#39;SalesSum&#39;,

    &#39;return\_count&#39; =\&gt; &#39;ReturnCount&#39;,

    &#39;return\_sum&#39; =\&gt; &#39;ReturnSum&#39;,

    &#39;batch\_error&#39; =\&gt; &#39;BatchError&#39;

    ];

    protectedstatic$setters = [

    &#39;batch\_number&#39; =\&gt; &#39;setBatchNumber&#39;,

    &#39;started&#39; =\&gt; &#39;setStarted&#39;,

    &#39;completed&#39; =\&gt; &#39;setCompleted&#39;,

    &#39;sales\_count&#39; =\&gt; &#39;setSalesCount&#39;,

    &#39;sales\_sum&#39; =\&gt; &#39;setSalesSum&#39;,

    &#39;return\_count&#39; =\&gt; &#39;setReturnCount&#39;,

    &#39;return\_sum&#39; =\&gt; &#39;setReturnSum&#39;,

    &#39;batch\_error&#39; =\&gt; &#39;setBatchError&#39;

    ];

    protectedstatic$getters = [

    &#39;batch\_number&#39; =\&gt; &#39;getBatchNumber&#39;,

    &#39;started&#39; =\&gt; &#39;getStarted&#39;,

    &#39;completed&#39; =\&gt; &#39;getCompleted&#39;,

    &#39;sales\_count&#39; =\&gt; &#39;getSalesCount&#39;,

    &#39;sales\_sum&#39; =\&gt; &#39;getSalesSum&#39;,

    &#39;return\_count&#39; =\&gt; &#39;getReturnCount&#39;,

    &#39;return\_sum&#39; =\&gt; &#39;getReturnSum&#39;,

    &#39;batch\_error&#39; =\&gt; &#39;getBatchError&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;batch\_number&#39;] = isset($data[&#39;batch\_number&#39;]) ? $data[&#39;batch\_number&#39;] : null;

    $this-\&gt;container[&#39;started&#39;] = isset($data[&#39;started&#39;]) ? $data[&#39;started&#39;] : null;

    $this-\&gt;container[&#39;completed&#39;] = isset($data[&#39;completed&#39;]) ? $data[&#39;completed&#39;] : null;

    $this-\&gt;container[&#39;sales\_count&#39;] = isset($data[&#39;sales\_count&#39;]) ? $data[&#39;sales\_count&#39;] : null;

    $this-\&gt;container[&#39;sales\_sum&#39;] = isset($data[&#39;sales\_sum&#39;]) ? $data[&#39;sales\_sum&#39;] : null;

    $this-\&gt;container[&#39;return\_count&#39;] = isset($data[&#39;return\_count&#39;]) ? $data[&#39;return\_count&#39;] : null;

    $this-\&gt;container[&#39;return\_sum&#39;] = isset($data[&#39;return\_sum&#39;]) ? $data[&#39;return\_sum&#39;] : null;

    $this-\&gt;container[&#39;batch\_error&#39;] = isset($data[&#39;batch\_error&#39;]) ? $data[&#39;batch\_error&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetBatchNumber()

    {

    return$this-\&gt;container[&#39;batch\_number&#39;];

    }

    publicfunctionsetBatchNumber($batch\_number)

    {

    $this-\&gt;container[&#39;batch\_number&#39;] = $batch\_number;

    return$this;

    }

    publicfunctiongetStarted()

    {

    return$this-\&gt;container[&#39;started&#39;];

    }

    publicfunctionsetStarted($started)

    {

    $this-\&gt;container[&#39;started&#39;] = $started;

    return$this;

    }

    publicfunctiongetCompleted()

    {

    return$this-\&gt;container[&#39;completed&#39;];

    }

    publicfunctionsetCompleted($completed)

    {

    $this-\&gt;container[&#39;completed&#39;] = $completed;

    return$this;

    }

    publicfunctiongetSalesCount()

    {

    return$this-\&gt;container[&#39;sales\_count&#39;];

    }

    publicfunctionsetSalesCount($sales\_count)

    {

    $this-\&gt;container[&#39;sales\_count&#39;] = $sales\_count;

    return$this;

    }

    publicfunctiongetSalesSum()

    {

    return$this-\&gt;container[&#39;sales\_sum&#39;];

    }

    publicfunctionsetSalesSum($sales\_sum)

    {

    $this-\&gt;container[&#39;sales\_sum&#39;] = $sales\_sum;

    return$this;

    }

    publicfunctiongetReturnCount()

    {

    return$this-\&gt;container[&#39;return\_count&#39;];

    }

    publicfunctionsetReturnCount($return\_count)

    {

    $this-\&gt;container[&#39;return\_count&#39;] = $return\_count;

    return$this;

    }

    publicfunctiongetReturnSum()

    {

    return$this-\&gt;container[&#39;return\_sum&#39;];

    }

    publicfunctionsetReturnSum($return\_sum)

    {

    $this-\&gt;container[&#39;return\_sum&#39;] = $return\_sum;

    return$this;

    }

    publicfunctiongetBatchError()

    {

    return$this-\&gt;container[&#39;batch\_error&#39;];

    }

    publicfunctionsetBatchError($batch\_error)

    {

    $this-\&gt;container[&#39;batch\_error&#39;] = $batch\_error;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# Business

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classBusinessimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;Business&#39;;

    protectedstatic$swaggerTypes = [

    &#39;address&#39; =\&gt; &#39;\Swagger\Client\Model\Address&#39;,

    &#39;name&#39; =\&gt; &#39;string&#39;,

    &#39;phone&#39; =\&gt; &#39;string&#39;,

    &#39;fax&#39; =\&gt; &#39;string&#39;,

    &#39;web\_site&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;address&#39; =\&gt; null,

    &#39;name&#39; =\&gt; null,

    &#39;phone&#39; =\&gt; null,

    &#39;fax&#39; =\&gt; null,

    &#39;web\_site&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;address&#39; =\&gt; &#39;Address&#39;,

    &#39;name&#39; =\&gt; &#39;Name&#39;,

    &#39;phone&#39; =\&gt; &#39;Phone&#39;,

    &#39;fax&#39; =\&gt; &#39;Fax&#39;,

    &#39;web\_site&#39; =\&gt; &#39;WebSite&#39;

    ];

    protectedstatic$setters = [

    &#39;address&#39; =\&gt; &#39;setAddress&#39;,

    &#39;name&#39; =\&gt; &#39;setName&#39;,

    &#39;phone&#39; =\&gt; &#39;setPhone&#39;,

    &#39;fax&#39; =\&gt; &#39;setFax&#39;,

    &#39;web\_site&#39; =\&gt; &#39;setWebSite&#39;

    ];

    protectedstatic$getters = [

    &#39;address&#39; =\&gt; &#39;getAddress&#39;,

    &#39;name&#39; =\&gt; &#39;getName&#39;,

    &#39;phone&#39; =\&gt; &#39;getPhone&#39;,

    &#39;fax&#39; =\&gt; &#39;getFax&#39;,

    &#39;web\_site&#39; =\&gt; &#39;getWebSite&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;address&#39;] = isset($data[&#39;address&#39;]) ? $data[&#39;address&#39;] : null;

    $this-\&gt;container[&#39;name&#39;] = isset($data[&#39;name&#39;]) ? $data[&#39;name&#39;] : null;

    $this-\&gt;container[&#39;phone&#39;] = isset($data[&#39;phone&#39;]) ? $data[&#39;phone&#39;] : null;

    $this-\&gt;container[&#39;fax&#39;] = isset($data[&#39;fax&#39;]) ? $data[&#39;fax&#39;] : null;

    $this-\&gt;container[&#39;web\_site&#39;] = isset($data[&#39;web\_site&#39;]) ? $data[&#39;web\_site&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetAddress()

    {

    return$this-\&gt;container[&#39;address&#39;];

    }

    publicfunctionsetAddress($address)

    {

    $this-\&gt;container[&#39;address&#39;] = $address;

    return$this;

    }

    publicfunctiongetName()

    {

    return$this-\&gt;container[&#39;name&#39;];

    }

    publicfunctionsetName($name)

    {

    $this-\&gt;container[&#39;name&#39;] = $name;

    return$this;

    }

    publicfunctiongetPhone()

    {

    return$this-\&gt;container[&#39;phone&#39;];

    }

    publicfunctionsetPhone($phone)

    {

    $this-\&gt;container[&#39;phone&#39;] = $phone;

    return$this;

    }

    publicfunctiongetFax()

    {

    return$this-\&gt;container[&#39;fax&#39;];

    }

    publicfunctionsetFax($fax)

    {

    $this-\&gt;container[&#39;fax&#39;] = $fax;

    return$this;

    }

    publicfunctiongetWebSite()

    {

    return$this-\&gt;container[&#39;web\_site&#39;];

    }

    publicfunctionsetWebSite($web\_site)

    {

    $this-\&gt;container[&#39;web\_site&#39;] = $web\_site;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# CheckAccountType

    \&lt;?php

    namespaceSwagger\Client\Model;

    use \Swagger\Client\ObjectSerializer;

    classCheckAccountType

    {

    const UNKNOWN = &#39;Unknown&#39;;

    const CHECKING = &#39;Checking&#39;;

    const SAVINGS = &#39;Savings&#39;;

    publicstaticfunctiongetAllowableEnumValues()

    {

    return [

    self::UNKNOWN,

    self::CHECKING,

    self::SAVINGS,

    ];

    }

    }

    # CheckTransaction

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classCheckTransactionimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;CheckTransaction&#39;;

    protectedstatic$swaggerTypes = [

    &#39;terminal\_id&#39; =\&gt; &#39;string&#39;,

    &#39;account\_number&#39; =\&gt; &#39;string&#39;,

    &#39;account\_type&#39; =\&gt; &#39;\Swagger\Client\Model\CheckAccountType&#39;,

    &#39;check\_number&#39; =\&gt; &#39;string&#39;,

    &#39;routing\_number&#39; =\&gt; &#39;string&#39;,

    &#39;micr\_data&#39; =\&gt; &#39;string&#39;,

    &#39;first\_name&#39; =\&gt; &#39;string&#39;,

    &#39;last\_name&#39; =\&gt; &#39;string&#39;,

    &#39;company\_name&#39; =\&gt; &#39;string&#39;,

    &#39;address1&#39; =\&gt; &#39;string&#39;,

    &#39;address2&#39; =\&gt; &#39;string&#39;,

    &#39;city&#39; =\&gt; &#39;string&#39;,

    &#39;state&#39; =\&gt; &#39;string&#39;,

    &#39;zip&#39; =\&gt; &#39;string&#39;,

    &#39;phone\_number&#39; =\&gt; &#39;string&#39;,

    &#39;dl\_number&#39; =\&gt; &#39;string&#39;,

    &#39;dl\_state&#39; =\&gt; &#39;string&#39;,

    &#39;courtesy\_card\_id&#39; =\&gt; &#39;string&#39;,

    &#39;ssn4&#39; =\&gt; &#39;string&#39;,

    &#39;dob\_year&#39; =\&gt; &#39;string&#39;,

    &#39;check\_amount&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;\Swagger\Client\Model\CheckTransactionType&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;string&#39;,

    &#39;ip\_address&#39; =\&gt; &#39;string&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;string&#39;,

    &#39;po\_number&#39; =\&gt; &#39;string&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;string&#39;,

    &#39;email\_address&#39; =\&gt; &#39;string&#39;,

    &#39;sec\_code&#39; =\&gt; &#39;string&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;string&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;string&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;terminal\_id&#39; =\&gt; null,

    &#39;account\_number&#39; =\&gt; null,

    &#39;account\_type&#39; =\&gt; null,

    &#39;check\_number&#39; =\&gt; null,

    &#39;routing\_number&#39; =\&gt; null,

    &#39;micr\_data&#39; =\&gt; null,

    &#39;first\_name&#39; =\&gt; null,

    &#39;last\_name&#39; =\&gt; null,

    &#39;company\_name&#39; =\&gt; null,

    &#39;address1&#39; =\&gt; null,

    &#39;address2&#39; =\&gt; null,

    &#39;city&#39; =\&gt; null,

    &#39;state&#39; =\&gt; null,

    &#39;zip&#39; =\&gt; null,

    &#39;phone\_number&#39; =\&gt; null,

    &#39;dl\_number&#39; =\&gt; null,

    &#39;dl\_state&#39; =\&gt; null,

    &#39;courtesy\_card\_id&#39; =\&gt; null,

    &#39;ssn4&#39; =\&gt; null,

    &#39;dob\_year&#39; =\&gt; null,

    &#39;check\_amount&#39; =\&gt; null,

    &#39;tran\_type&#39; =\&gt; null,

    &#39;proc\_id&#39; =\&gt; null,

    &#39;ip\_address&#39; =\&gt; null,

    &#39;customer\_number&#39; =\&gt; null,

    &#39;po\_number&#39; =\&gt; null,

    &#39;invoice\_number&#39; =\&gt; null,

    &#39;tran\_note&#39; =\&gt; null,

    &#39;email\_address&#39; =\&gt; null,

    &#39;sec\_code&#39; =\&gt; null,

    &#39;proc\_resp&#39; =\&gt; null,

    &#39;proc\_code&#39; =\&gt; null,

    &#39;proc\_mess&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;terminal\_id&#39; =\&gt; &#39;Terminal\_ID&#39;,

    &#39;account\_number&#39; =\&gt; &#39;Account\_Number&#39;,

    &#39;account\_type&#39; =\&gt; &#39;Account\_Type&#39;,

    &#39;check\_number&#39; =\&gt; &#39;Check\_Number&#39;,

    &#39;routing\_number&#39; =\&gt; &#39;Routing\_Number&#39;,

    &#39;micr\_data&#39; =\&gt; &#39;MICR\_Data&#39;,

    &#39;first\_name&#39; =\&gt; &#39;First\_Name&#39;,

    &#39;last\_name&#39; =\&gt; &#39;Last\_Name&#39;,

    &#39;company\_name&#39; =\&gt; &#39;Company\_Name&#39;,

    &#39;address1&#39; =\&gt; &#39;Address1&#39;,

    &#39;address2&#39; =\&gt; &#39;Address2&#39;,

    &#39;city&#39; =\&gt; &#39;City&#39;,

    &#39;state&#39; =\&gt; &#39;State&#39;,

    &#39;zip&#39; =\&gt; &#39;Zip&#39;,

    &#39;phone\_number&#39; =\&gt; &#39;Phone\_Number&#39;,

    &#39;dl\_number&#39; =\&gt; &#39;DL\_Number&#39;,

    &#39;dl\_state&#39; =\&gt; &#39;DL\_State&#39;,

    &#39;courtesy\_card\_id&#39; =\&gt; &#39;Courtesy\_Card\_ID&#39;,

    &#39;ssn4&#39; =\&gt; &#39;SSN4&#39;,

    &#39;dob\_year&#39; =\&gt; &#39;DOB\_Year&#39;,

    &#39;check\_amount&#39; =\&gt; &#39;Check\_Amount&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;Tran\_Type&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;Proc\_ID&#39;,

    &#39;ip\_address&#39; =\&gt; &#39;IP\_Address&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;CustomerNumber&#39;,

    &#39;po\_number&#39; =\&gt; &#39;PONumber&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;InvoiceNumber&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;TranNote&#39;,

    &#39;email\_address&#39; =\&gt; &#39;EmailAddress&#39;,

    &#39;sec\_code&#39; =\&gt; &#39;SEC\_Code&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;Proc\_Resp&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;Proc\_Code&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;Proc\_Mess&#39;

    ];

    protectedstatic$setters = [

    &#39;terminal\_id&#39; =\&gt; &#39;setTerminalId&#39;,

    &#39;account\_number&#39; =\&gt; &#39;setAccountNumber&#39;,

    &#39;account\_type&#39; =\&gt; &#39;setAccountType&#39;,

    &#39;check\_number&#39; =\&gt; &#39;setCheckNumber&#39;,

    &#39;routing\_number&#39; =\&gt; &#39;setRoutingNumber&#39;,

    &#39;micr\_data&#39; =\&gt; &#39;setMicrData&#39;,

    &#39;first\_name&#39; =\&gt; &#39;setFirstName&#39;,

    &#39;last\_name&#39; =\&gt; &#39;setLastName&#39;,

    &#39;company\_name&#39; =\&gt; &#39;setCompanyName&#39;,

    &#39;address1&#39; =\&gt; &#39;setAddress1&#39;,

    &#39;address2&#39; =\&gt; &#39;setAddress2&#39;,

    &#39;city&#39; =\&gt; &#39;setCity&#39;,

    &#39;state&#39; =\&gt; &#39;setState&#39;,

    &#39;zip&#39; =\&gt; &#39;setZip&#39;,

    &#39;phone\_number&#39; =\&gt; &#39;setPhoneNumber&#39;,

    &#39;dl\_number&#39; =\&gt; &#39;setDlNumber&#39;,

    &#39;dl\_state&#39; =\&gt; &#39;setDlState&#39;,

    &#39;courtesy\_card\_id&#39; =\&gt; &#39;setCourtesyCardId&#39;,

    &#39;ssn4&#39; =\&gt; &#39;setSsn4&#39;,

    &#39;dob\_year&#39; =\&gt; &#39;setDobYear&#39;,

    &#39;check\_amount&#39; =\&gt; &#39;setCheckAmount&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;setTranType&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;setProcId&#39;,

    &#39;ip\_address&#39; =\&gt; &#39;setIpAddress&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;setCustomerNumber&#39;,

    &#39;po\_number&#39; =\&gt; &#39;setPoNumber&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;setInvoiceNumber&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;setTranNote&#39;,

    &#39;email\_address&#39; =\&gt; &#39;setEmailAddress&#39;,

    &#39;sec\_code&#39; =\&gt; &#39;setSecCode&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;setProcResp&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;setProcCode&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;setProcMess&#39;

    ];

    protectedstatic$getters = [

    &#39;terminal\_id&#39; =\&gt; &#39;getTerminalId&#39;,

    &#39;account\_number&#39; =\&gt; &#39;getAccountNumber&#39;,

    &#39;account\_type&#39; =\&gt; &#39;getAccountType&#39;,

    &#39;check\_number&#39; =\&gt; &#39;getCheckNumber&#39;,

    &#39;routing\_number&#39; =\&gt; &#39;getRoutingNumber&#39;,

    &#39;micr\_data&#39; =\&gt; &#39;getMicrData&#39;,

    &#39;first\_name&#39; =\&gt; &#39;getFirstName&#39;,

    &#39;last\_name&#39; =\&gt; &#39;getLastName&#39;,

    &#39;company\_name&#39; =\&gt; &#39;getCompanyName&#39;,

    &#39;address1&#39; =\&gt; &#39;getAddress1&#39;,

    &#39;address2&#39; =\&gt; &#39;getAddress2&#39;,

    &#39;city&#39; =\&gt; &#39;getCity&#39;,

    &#39;state&#39; =\&gt; &#39;getState&#39;,

    &#39;zip&#39; =\&gt; &#39;getZip&#39;,

    &#39;phone\_number&#39; =\&gt; &#39;getPhoneNumber&#39;,

    &#39;dl\_number&#39; =\&gt; &#39;getDlNumber&#39;,

    &#39;dl\_state&#39; =\&gt; &#39;getDlState&#39;,

    &#39;courtesy\_card\_id&#39; =\&gt; &#39;getCourtesyCardId&#39;,

    &#39;ssn4&#39; =\&gt; &#39;getSsn4&#39;,

    &#39;dob\_year&#39; =\&gt; &#39;getDobYear&#39;,

    &#39;check\_amount&#39; =\&gt; &#39;getCheckAmount&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;getTranType&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;getProcId&#39;,

    &#39;ip\_address&#39; =\&gt; &#39;getIpAddress&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;getCustomerNumber&#39;,

    &#39;po\_number&#39; =\&gt; &#39;getPoNumber&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;getInvoiceNumber&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;getTranNote&#39;,

    &#39;email\_address&#39; =\&gt; &#39;getEmailAddress&#39;,

    &#39;sec\_code&#39; =\&gt; &#39;getSecCode&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;getProcResp&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;getProcCode&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;getProcMess&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;terminal\_id&#39;] = isset($data[&#39;terminal\_id&#39;]) ? $data[&#39;terminal\_id&#39;] : null;

    $this-\&gt;container[&#39;account\_number&#39;] = isset($data[&#39;account\_number&#39;]) ? $data[&#39;account\_number&#39;] : null;

    $this-\&gt;container[&#39;account\_type&#39;] = isset($data[&#39;account\_type&#39;]) ? $data[&#39;account\_type&#39;] : null;

    $this-\&gt;container[&#39;check\_number&#39;] = isset($data[&#39;check\_number&#39;]) ? $data[&#39;check\_number&#39;] : null;

    $this-\&gt;container[&#39;routing\_number&#39;] = isset($data[&#39;routing\_number&#39;]) ? $data[&#39;routing\_number&#39;] : null;

    $this-\&gt;container[&#39;micr\_data&#39;] = isset($data[&#39;micr\_data&#39;]) ? $data[&#39;micr\_data&#39;] : null;

    $this-\&gt;container[&#39;first\_name&#39;] = isset($data[&#39;first\_name&#39;]) ? $data[&#39;first\_name&#39;] : null;

    $this-\&gt;container[&#39;last\_name&#39;] = isset($data[&#39;last\_name&#39;]) ? $data[&#39;last\_name&#39;] : null;

    $this-\&gt;container[&#39;company\_name&#39;] = isset($data[&#39;company\_name&#39;]) ? $data[&#39;company\_name&#39;] : null;

    $this-\&gt;container[&#39;address1&#39;] = isset($data[&#39;address1&#39;]) ? $data[&#39;address1&#39;] : null;

    $this-\&gt;container[&#39;address2&#39;] = isset($data[&#39;address2&#39;]) ? $data[&#39;address2&#39;] : null;

    $this-\&gt;container[&#39;city&#39;] = isset($data[&#39;city&#39;]) ? $data[&#39;city&#39;] : null;

    $this-\&gt;container[&#39;state&#39;] = isset($data[&#39;state&#39;]) ? $data[&#39;state&#39;] : null;

    $this-\&gt;container[&#39;zip&#39;] = isset($data[&#39;zip&#39;]) ? $data[&#39;zip&#39;] : null;

    $this-\&gt;container[&#39;phone\_number&#39;] = isset($data[&#39;phone\_number&#39;]) ? $data[&#39;phone\_number&#39;] : null;

    $this-\&gt;container[&#39;dl\_number&#39;] = isset($data[&#39;dl\_number&#39;]) ? $data[&#39;dl\_number&#39;] : null;

    $this-\&gt;container[&#39;dl\_state&#39;] = isset($data[&#39;dl\_state&#39;]) ? $data[&#39;dl\_state&#39;] : null;

    $this-\&gt;container[&#39;courtesy\_card\_id&#39;] = isset($data[&#39;courtesy\_card\_id&#39;]) ? $data[&#39;courtesy\_card\_id&#39;] : null;

    $this-\&gt;container[&#39;ssn4&#39;] = isset($data[&#39;ssn4&#39;]) ? $data[&#39;ssn4&#39;] : null;

    $this-\&gt;container[&#39;dob\_year&#39;] = isset($data[&#39;dob\_year&#39;]) ? $data[&#39;dob\_year&#39;] : null;

    $this-\&gt;container[&#39;check\_amount&#39;] = isset($data[&#39;check\_amount&#39;]) ? $data[&#39;check\_amount&#39;] : null;

    $this-\&gt;container[&#39;tran\_type&#39;] = isset($data[&#39;tran\_type&#39;]) ? $data[&#39;tran\_type&#39;] : null;

    $this-\&gt;container[&#39;proc\_id&#39;] = isset($data[&#39;proc\_id&#39;]) ? $data[&#39;proc\_id&#39;] : null;

    $this-\&gt;container[&#39;ip\_address&#39;] = isset($data[&#39;ip\_address&#39;]) ? $data[&#39;ip\_address&#39;] : null;

    $this-\&gt;container[&#39;customer\_number&#39;] = isset($data[&#39;customer\_number&#39;]) ? $data[&#39;customer\_number&#39;] : null;

    $this-\&gt;container[&#39;po\_number&#39;] = isset($data[&#39;po\_number&#39;]) ? $data[&#39;po\_number&#39;] : null;

    $this-\&gt;container[&#39;invoice\_number&#39;] = isset($data[&#39;invoice\_number&#39;]) ? $data[&#39;invoice\_number&#39;] : null;

    $this-\&gt;container[&#39;tran\_note&#39;] = isset($data[&#39;tran\_note&#39;]) ? $data[&#39;tran\_note&#39;] : null;

    $this-\&gt;container[&#39;email\_address&#39;] = isset($data[&#39;email\_address&#39;]) ? $data[&#39;email\_address&#39;] : null;

    $this-\&gt;container[&#39;sec\_code&#39;] = isset($data[&#39;sec\_code&#39;]) ? $data[&#39;sec\_code&#39;] : null;

    $this-\&gt;container[&#39;proc\_resp&#39;] = isset($data[&#39;proc\_resp&#39;]) ? $data[&#39;proc\_resp&#39;] : null;

    $this-\&gt;container[&#39;proc\_code&#39;] = isset($data[&#39;proc\_code&#39;]) ? $data[&#39;proc\_code&#39;] : null;

    $this-\&gt;container[&#39;proc\_mess&#39;] = isset($data[&#39;proc\_mess&#39;]) ? $data[&#39;proc\_mess&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetTerminalId()

    {

    return$this-\&gt;container[&#39;terminal\_id&#39;];

    }

    publicfunctionsetTerminalId($terminal\_id)

    {

    $this-\&gt;container[&#39;terminal\_id&#39;] = $terminal\_id;

    return$this;

    }

    publicfunctiongetAccountNumber()

    {

    return$this-\&gt;container[&#39;account\_number&#39;];

    }

    publicfunctionsetAccountNumber($account\_number)

    {

    $this-\&gt;container[&#39;account\_number&#39;] = $account\_number;

    return$this;

    }

    publicfunctiongetAccountType()

    {

    return$this-\&gt;container[&#39;account\_type&#39;];

    }

    publicfunctionsetAccountType($account\_type)

    {

    $this-\&gt;container[&#39;account\_type&#39;] = $account\_type;

    return$this;

    }

    publicfunctiongetCheckNumber()

    {

    return$this-\&gt;container[&#39;check\_number&#39;];

    }

    publicfunctionsetCheckNumber($check\_number)

    {

    $this-\&gt;container[&#39;check\_number&#39;] = $check\_number;

    return$this;

    }

    publicfunctiongetRoutingNumber()

    {

    return$this-\&gt;container[&#39;routing\_number&#39;];

    }

    publicfunctionsetRoutingNumber($routing\_number)

    {

    $this-\&gt;container[&#39;routing\_number&#39;] = $routing\_number;

    return$this;

    }

    publicfunctiongetMicrData()

    {

    return$this-\&gt;container[&#39;micr\_data&#39;];

    }

    publicfunctionsetMicrData($micr\_data)

    {

    $this-\&gt;container[&#39;micr\_data&#39;] = $micr\_data;

    return$this;

    }

    publicfunctiongetFirstName()

    {

    return$this-\&gt;container[&#39;first\_name&#39;];

    }

    publicfunctionsetFirstName($first\_name)

    {

    $this-\&gt;container[&#39;first\_name&#39;] = $first\_name;

    return$this;

    }

    publicfunctiongetLastName()

    {

    return$this-\&gt;container[&#39;last\_name&#39;];

    }

    publicfunctionsetLastName($last\_name)

    {

    $this-\&gt;container[&#39;last\_name&#39;] = $last\_name;

    return$this;

    }

    publicfunctiongetCompanyName()

    {

    return$this-\&gt;container[&#39;company\_name&#39;];

    }

    publicfunctionsetCompanyName($company\_name)

    {

    $this-\&gt;container[&#39;company\_name&#39;] = $company\_name;

    return$this;

    }

    publicfunctiongetAddress1()

    {

    return$this-\&gt;container[&#39;address1&#39;];

    }

    publicfunctionsetAddress1($address1)

    {

    $this-\&gt;container[&#39;address1&#39;] = $address1;

    return$this;

    }

    publicfunctiongetAddress2()

    {

    return$this-\&gt;container[&#39;address2&#39;];

    }

    publicfunctionsetAddress2($address2)

    {

    $this-\&gt;container[&#39;address2&#39;] = $address2;

    return$this;

    }

    publicfunctiongetCity()

    {

    return$this-\&gt;container[&#39;city&#39;];

    }

    publicfunctionsetCity($city)

    {

    $this-\&gt;container[&#39;city&#39;] = $city;

    return$this;

    }

    publicfunctiongetState()

    {

    return$this-\&gt;container[&#39;state&#39;];

    }

    publicfunctionsetState($state)

    {

    $this-\&gt;container[&#39;state&#39;] = $state;

    return$this;

    }

    publicfunctiongetZip()

    {

    return$this-\&gt;container[&#39;zip&#39;];

    }

    publicfunctionsetZip($zip)

    {

    $this-\&gt;container[&#39;zip&#39;] = $zip;

    return$this;

    }

    publicfunctiongetPhoneNumber()

    {

    return$this-\&gt;container[&#39;phone\_number&#39;];

    }

    publicfunctionsetPhoneNumber($phone\_number)

    {

    $this-\&gt;container[&#39;phone\_number&#39;] = $phone\_number;

    return$this;

    }

    publicfunctiongetDlNumber()

    {

    return$this-\&gt;container[&#39;dl\_number&#39;];

    }

    publicfunctionsetDlNumber($dl\_number)

    {

    $this-\&gt;container[&#39;dl\_number&#39;] = $dl\_number;

    return$this;

    }

    publicfunctiongetDlState()

    {

    return$this-\&gt;container[&#39;dl\_state&#39;];

    }

    publicfunctionsetDlState($dl\_state)

    {

    $this-\&gt;container[&#39;dl\_state&#39;] = $dl\_state;

    return$this;

    }

    publicfunctiongetCourtesyCardId()

    {

    return$this-\&gt;container[&#39;courtesy\_card\_id&#39;];

    }

    publicfunctionsetCourtesyCardId($courtesy\_card\_id)

    {

    $this-\&gt;container[&#39;courtesy\_card\_id&#39;] = $courtesy\_card\_id;

    return$this;

    }

    publicfunctiongetSsn4()

    {

    return$this-\&gt;container[&#39;ssn4&#39;];

    }

    publicfunctionsetSsn4($ssn4)

    {

    $this-\&gt;container[&#39;ssn4&#39;] = $ssn4;

    return$this;

    }

    publicfunctiongetDobYear()

    {

    return$this-\&gt;container[&#39;dob\_year&#39;];

    }

    publicfunctionsetDobYear($dob\_year)

    {

    $this-\&gt;container[&#39;dob\_year&#39;] = $dob\_year;

    return$this;

    }

    publicfunctiongetCheckAmount()

    {

    return$this-\&gt;container[&#39;check\_amount&#39;];

    }

    publicfunctionsetCheckAmount($check\_amount)

    {

    $this-\&gt;container[&#39;check\_amount&#39;] = $check\_amount;

    return$this;

    }

    publicfunctiongetTranType()

    {

    return$this-\&gt;container[&#39;tran\_type&#39;];

    }

    publicfunctionsetTranType($tran\_type)

    {

    $this-\&gt;container[&#39;tran\_type&#39;] = $tran\_type;

    return$this;

    }

    publicfunctiongetProcId()

    {

    return$this-\&gt;container[&#39;proc\_id&#39;];

    }

    publicfunctionsetProcId($proc\_id)

    {

    $this-\&gt;container[&#39;proc\_id&#39;] = $proc\_id;

    return$this;

    }

    publicfunctiongetIpAddress()

    {

    return$this-\&gt;container[&#39;ip\_address&#39;];

    }

    publicfunctionsetIpAddress($ip\_address)

    {

    $this-\&gt;container[&#39;ip\_address&#39;] = $ip\_address;

    return$this;

    }

    publicfunctiongetCustomerNumber()

    {

    return$this-\&gt;container[&#39;customer\_number&#39;];

    }

    publicfunctionsetCustomerNumber($customer\_number)

    {

    $this-\&gt;container[&#39;customer\_number&#39;] = $customer\_number;

    return$this;

    }

    publicfunctiongetPoNumber()

    {

    return$this-\&gt;container[&#39;po\_number&#39;];

    }

    publicfunctionsetPoNumber($po\_number)

    {

    $this-\&gt;container[&#39;po\_number&#39;] = $po\_number;

    return$this;

    }

    publicfunctiongetInvoiceNumber()

    {

    return$this-\&gt;container[&#39;invoice\_number&#39;];

    }

    publicfunctionsetInvoiceNumber($invoice\_number)

    {

    $this-\&gt;container[&#39;invoice\_number&#39;] = $invoice\_number;

    return$this;

    }

    publicfunctiongetTranNote()

    {

    return$this-\&gt;container[&#39;tran\_note&#39;];

    }

    publicfunctionsetTranNote($tran\_note)

    {

    $this-\&gt;container[&#39;tran\_note&#39;] = $tran\_note;

    return$this;

    }

    publicfunctiongetEmailAddress()

    {

    return$this-\&gt;container[&#39;email\_address&#39;];

    }

    publicfunctionsetEmailAddress($email\_address)

    {

    $this-\&gt;container[&#39;email\_address&#39;] = $email\_address;

    return$this;

    }

    publicfunctiongetSecCode()

    {

    return$this-\&gt;container[&#39;sec\_code&#39;];

    }

    publicfunctionsetSecCode($sec\_code)

    {

    $this-\&gt;container[&#39;sec\_code&#39;] = $sec\_code;

    return$this;

    }

    publicfunctiongetProcResp()

    {

    return$this-\&gt;container[&#39;proc\_resp&#39;];

    }

    publicfunctionsetProcResp($proc\_resp)

    {

    $this-\&gt;container[&#39;proc\_resp&#39;] = $proc\_resp;

    return$this;

    }

    publicfunctiongetProcCode()

    {

    return$this-\&gt;container[&#39;proc\_code&#39;];

    }

    publicfunctionsetProcCode($proc\_code)

    {

    $this-\&gt;container[&#39;proc\_code&#39;] = $proc\_code;

    return$this;

    }

    publicfunctiongetProcMess()

    {

    return$this-\&gt;container[&#39;proc\_mess&#39;];

    }

    publicfunctionsetProcMess($proc\_mess)

    {

    $this-\&gt;container[&#39;proc\_mess&#39;] = $proc\_mess;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# CheckTransactionSettings

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classCheckTransactionSettingsimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;CheckTransactionSettings&#39;;

    protectedstatic$swaggerTypes = [

    &#39;reader&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;contact\_name&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;email\_address&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;phone\_default&#39; =\&gt; &#39;string&#39;,

    &#39;fax&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;billing\_address\_default&#39; =\&gt; &#39;string&#39;,

    &#39;billing\_address2&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;billing\_city\_default&#39; =\&gt; &#39;string&#39;,

    &#39;billing\_state\_default&#39; =\&gt; &#39;string&#39;,

    &#39;billing\_zip\_default&#39; =\&gt; &#39;string&#39;,

    &#39;po\_number&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;business\_name&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;reference\_note&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;default\_sec\_code&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;reader&#39; =\&gt; null,

    &#39;contact\_name&#39; =\&gt; null,

    &#39;contact\_title&#39; =\&gt; null,

    &#39;email\_address&#39; =\&gt; null,

    &#39;phone\_default&#39; =\&gt; null,

    &#39;fax&#39; =\&gt; null,

    &#39;billing\_address\_default&#39; =\&gt; null,

    &#39;billing\_address2&#39; =\&gt; null,

    &#39;billing\_city\_default&#39; =\&gt; null,

    &#39;billing\_state\_default&#39; =\&gt; null,

    &#39;billing\_zip\_default&#39; =\&gt; null,

    &#39;po\_number&#39; =\&gt; null,

    &#39;invoice\_number&#39; =\&gt; null,

    &#39;business\_name&#39; =\&gt; null,

    &#39;customer\_number&#39; =\&gt; null,

    &#39;reference\_note&#39; =\&gt; null,

    &#39;default\_sec\_code&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;reader&#39; =\&gt; &#39;Reader&#39;,

    &#39;contact\_name&#39; =\&gt; &#39;ContactName&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;ContactTitle&#39;,

    &#39;email\_address&#39; =\&gt; &#39;EmailAddress&#39;,

    &#39;phone\_default&#39; =\&gt; &#39;PhoneDefault&#39;,

    &#39;fax&#39; =\&gt; &#39;Fax&#39;,

    &#39;billing\_address\_default&#39; =\&gt; &#39;BillingAddressDefault&#39;,

    &#39;billing\_address2&#39; =\&gt; &#39;BillingAddress2&#39;,

    &#39;billing\_city\_default&#39; =\&gt; &#39;BillingCityDefault&#39;,

    &#39;billing\_state\_default&#39; =\&gt; &#39;BillingStateDefault&#39;,

    &#39;billing\_zip\_default&#39; =\&gt; &#39;BillingZipDefault&#39;,

    &#39;po\_number&#39; =\&gt; &#39;PONumber&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;InvoiceNumber&#39;,

    &#39;business\_name&#39; =\&gt; &#39;BusinessName&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;CustomerNumber&#39;,

    &#39;reference\_note&#39; =\&gt; &#39;ReferenceNote&#39;,

    &#39;default\_sec\_code&#39; =\&gt; &#39;DefaultSECCode&#39;

    ];

    protectedstatic$setters = [

    &#39;reader&#39; =\&gt; &#39;setReader&#39;,

    &#39;contact\_name&#39; =\&gt; &#39;setContactName&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;setContactTitle&#39;,

    &#39;email\_address&#39; =\&gt; &#39;setEmailAddress&#39;,

    &#39;phone\_default&#39; =\&gt; &#39;setPhoneDefault&#39;,

    &#39;fax&#39; =\&gt; &#39;setFax&#39;,

    &#39;billing\_address\_default&#39; =\&gt; &#39;setBillingAddressDefault&#39;,

    &#39;billing\_address2&#39; =\&gt; &#39;setBillingAddress2&#39;,

    &#39;billing\_city\_default&#39; =\&gt; &#39;setBillingCityDefault&#39;,

    &#39;billing\_state\_default&#39; =\&gt; &#39;setBillingStateDefault&#39;,

    &#39;billing\_zip\_default&#39; =\&gt; &#39;setBillingZipDefault&#39;,

    &#39;po\_number&#39; =\&gt; &#39;setPoNumber&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;setInvoiceNumber&#39;,

    &#39;business\_name&#39; =\&gt; &#39;setBusinessName&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;setCustomerNumber&#39;,

    &#39;reference\_note&#39; =\&gt; &#39;setReferenceNote&#39;,

    &#39;default\_sec\_code&#39; =\&gt; &#39;setDefaultSecCode&#39;

    ];

    protectedstatic$getters = [

    &#39;reader&#39; =\&gt; &#39;getReader&#39;,

    &#39;contact\_name&#39; =\&gt; &#39;getContactName&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;getContactTitle&#39;,

    &#39;email\_address&#39; =\&gt; &#39;getEmailAddress&#39;,

    &#39;phone\_default&#39; =\&gt; &#39;getPhoneDefault&#39;,

    &#39;fax&#39; =\&gt; &#39;getFax&#39;,

    &#39;billing\_address\_default&#39; =\&gt; &#39;getBillingAddressDefault&#39;,

    &#39;billing\_address2&#39; =\&gt; &#39;getBillingAddress2&#39;,

    &#39;billing\_city\_default&#39; =\&gt; &#39;getBillingCityDefault&#39;,

    &#39;billing\_state\_default&#39; =\&gt; &#39;getBillingStateDefault&#39;,

    &#39;billing\_zip\_default&#39; =\&gt; &#39;getBillingZipDefault&#39;,

    &#39;po\_number&#39; =\&gt; &#39;getPoNumber&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;getInvoiceNumber&#39;,

    &#39;business\_name&#39; =\&gt; &#39;getBusinessName&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;getCustomerNumber&#39;,

    &#39;reference\_note&#39; =\&gt; &#39;getReferenceNote&#39;,

    &#39;default\_sec\_code&#39; =\&gt; &#39;getDefaultSecCode&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;reader&#39;] = isset($data[&#39;reader&#39;]) ? $data[&#39;reader&#39;] : null;

    $this-\&gt;container[&#39;contact\_name&#39;] = isset($data[&#39;contact\_name&#39;]) ? $data[&#39;contact\_name&#39;] : null;

    $this-\&gt;container[&#39;contact\_title&#39;] = isset($data[&#39;contact\_title&#39;]) ? $data[&#39;contact\_title&#39;] : null;

    $this-\&gt;container[&#39;email\_address&#39;] = isset($data[&#39;email\_address&#39;]) ? $data[&#39;email\_address&#39;] : null;

    $this-\&gt;container[&#39;phone\_default&#39;] = isset($data[&#39;phone\_default&#39;]) ? $data[&#39;phone\_default&#39;] : null;

    $this-\&gt;container[&#39;fax&#39;] = isset($data[&#39;fax&#39;]) ? $data[&#39;fax&#39;] : null;

    $this-\&gt;container[&#39;billing\_address\_default&#39;] = isset($data[&#39;billing\_address\_default&#39;]) ? $data[&#39;billing\_address\_default&#39;] : null;

    $this-\&gt;container[&#39;billing\_address2&#39;] = isset($data[&#39;billing\_address2&#39;]) ? $data[&#39;billing\_address2&#39;] : null;

    $this-\&gt;container[&#39;billing\_city\_default&#39;] = isset($data[&#39;billing\_city\_default&#39;]) ? $data[&#39;billing\_city\_default&#39;] : null;

    $this-\&gt;container[&#39;billing\_state\_default&#39;] = isset($data[&#39;billing\_state\_default&#39;]) ? $data[&#39;billing\_state\_default&#39;] : null;

    $this-\&gt;container[&#39;billing\_zip\_default&#39;] = isset($data[&#39;billing\_zip\_default&#39;]) ? $data[&#39;billing\_zip\_default&#39;] : null;

    $this-\&gt;container[&#39;po\_number&#39;] = isset($data[&#39;po\_number&#39;]) ? $data[&#39;po\_number&#39;] : null;

    $this-\&gt;container[&#39;invoice\_number&#39;] = isset($data[&#39;invoice\_number&#39;]) ? $data[&#39;invoice\_number&#39;] : null;

    $this-\&gt;container[&#39;business\_name&#39;] = isset($data[&#39;business\_name&#39;]) ? $data[&#39;business\_name&#39;] : null;

    $this-\&gt;container[&#39;customer\_number&#39;] = isset($data[&#39;customer\_number&#39;]) ? $data[&#39;customer\_number&#39;] : null;

    $this-\&gt;container[&#39;reference\_note&#39;] = isset($data[&#39;reference\_note&#39;]) ? $data[&#39;reference\_note&#39;] : null;

    $this-\&gt;container[&#39;default\_sec\_code&#39;] = isset($data[&#39;default\_sec\_code&#39;]) ? $data[&#39;default\_sec\_code&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetReader()

    {

    return$this-\&gt;container[&#39;reader&#39;];

    }

    publicfunctionsetReader($reader)

    {

    $this-\&gt;container[&#39;reader&#39;] = $reader;

    return$this;

    }

    publicfunctiongetContactName()

    {

    return$this-\&gt;container[&#39;contact\_name&#39;];

    }

    publicfunctionsetContactName($contact\_name)

    {

    $this-\&gt;container[&#39;contact\_name&#39;] = $contact\_name;

    return$this;

    }

    publicfunctiongetContactTitle()

    {

    return$this-\&gt;container[&#39;contact\_title&#39;];

    }

    publicfunctionsetContactTitle($contact\_title)

    {

    $this-\&gt;container[&#39;contact\_title&#39;] = $contact\_title;

    return$this;

    }

    publicfunctiongetEmailAddress()

    {

    return$this-\&gt;container[&#39;email\_address&#39;];

    }

    publicfunctionsetEmailAddress($email\_address)

    {

    $this-\&gt;container[&#39;email\_address&#39;] = $email\_address;

    return$this;

    }

    publicfunctiongetPhoneDefault()

    {

    return$this-\&gt;container[&#39;phone\_default&#39;];

    }

    publicfunctionsetPhoneDefault($phone\_default)

    {

    $this-\&gt;container[&#39;phone\_default&#39;] = $phone\_default;

    return$this;

    }

    publicfunctiongetFax()

    {

    return$this-\&gt;container[&#39;fax&#39;];

    }

    publicfunctionsetFax($fax)

    {

    $this-\&gt;container[&#39;fax&#39;] = $fax;

    return$this;

    }

    publicfunctiongetBillingAddressDefault()

    {

    return$this-\&gt;container[&#39;billing\_address\_default&#39;];

    }

    publicfunctionsetBillingAddressDefault($billing\_address\_default)

    {

    $this-\&gt;container[&#39;billing\_address\_default&#39;] = $billing\_address\_default;

    return$this;

    }

    publicfunctiongetBillingAddress2()

    {

    return$this-\&gt;container[&#39;billing\_address2&#39;];

    }

    publicfunctionsetBillingAddress2($billing\_address2)

    {

    $this-\&gt;container[&#39;billing\_address2&#39;] = $billing\_address2;

    return$this;

    }

    publicfunctiongetBillingCityDefault()

    {

    return$this-\&gt;container[&#39;billing\_city\_default&#39;];

    }

    publicfunctionsetBillingCityDefault($billing\_city\_default)

    {

    $this-\&gt;container[&#39;billing\_city\_default&#39;] = $billing\_city\_default;

    return$this;

    }

    publicfunctiongetBillingStateDefault()

    {

    return$this-\&gt;container[&#39;billing\_state\_default&#39;];

    }

    publicfunctionsetBillingStateDefault($billing\_state\_default)

    {

    $this-\&gt;container[&#39;billing\_state\_default&#39;] = $billing\_state\_default;

    return$this;

    }

    publicfunctiongetBillingZipDefault()

    {

    return$this-\&gt;container[&#39;billing\_zip\_default&#39;];

    }

    publicfunctionsetBillingZipDefault($billing\_zip\_default)

    {

    $this-\&gt;container[&#39;billing\_zip\_default&#39;] = $billing\_zip\_default;

    return$this;

    }

    publicfunctiongetPoNumber()

    {

    return$this-\&gt;container[&#39;po\_number&#39;];

    }

    publicfunctionsetPoNumber($po\_number)

    {

    $this-\&gt;container[&#39;po\_number&#39;] = $po\_number;

    return$this;

    }

    publicfunctiongetInvoiceNumber()

    {

    return$this-\&gt;container[&#39;invoice\_number&#39;];

    }

    publicfunctionsetInvoiceNumber($invoice\_number)

    {

    $this-\&gt;container[&#39;invoice\_number&#39;] = $invoice\_number;

    return$this;

    }

    publicfunctiongetBusinessName()

    {

    return$this-\&gt;container[&#39;business\_name&#39;];

    }

    publicfunctionsetBusinessName($business\_name)

    {

    $this-\&gt;container[&#39;business\_name&#39;] = $business\_name;

    return$this;

    }

    publicfunctiongetCustomerNumber()

    {

    return$this-\&gt;container[&#39;customer\_number&#39;];

    }

    publicfunctionsetCustomerNumber($customer\_number)

    {

    $this-\&gt;container[&#39;customer\_number&#39;] = $customer\_number;

    return$this;

    }

    publicfunctiongetReferenceNote()

    {

    return$this-\&gt;container[&#39;reference\_note&#39;];

    }

    publicfunctionsetReferenceNote($reference\_note)

    {

    $this-\&gt;container[&#39;reference\_note&#39;] = $reference\_note;

    return$this;

    }

    publicfunctiongetDefaultSecCode()

    {

    return$this-\&gt;container[&#39;default\_sec\_code&#39;];

    }

    publicfunctionsetDefaultSecCode($default\_sec\_code)

    {

    $this-\&gt;container[&#39;default\_sec\_code&#39;] = $default\_sec\_code;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# CheckTransactionType

    \&lt;?php

    namespaceSwagger\Client\Model;

    use \Swagger\Client\ObjectSerializer;

    classCheckTransactionType

    {

    const UNKNOWN = &#39;Unknown&#39;;

    const AUTHORIZE = &#39;Authorize&#39;;

    const VOID = &#39;Void&#39;;

    const OVERRIDE = &#39;Override&#39;;

    const PAYROLL = &#39;Payroll&#39;;

    const RECURRING = &#39;Recurring&#39;;

    const REFUND = &#39;Refund&#39;;

    publicstaticfunctiongetAllowableEnumValues()

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

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classContactimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;Contact&#39;;

    protectedstatic$swaggerTypes = [

    &#39;first\_name&#39; =\&gt; &#39;string&#39;,

    &#39;last\_name&#39; =\&gt; &#39;string&#39;,

    &#39;name&#39; =\&gt; &#39;string&#39;,

    &#39;title&#39; =\&gt; &#39;string&#39;,

    &#39;phone&#39; =\&gt; &#39;string&#39;,

    &#39;email&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;first\_name&#39; =\&gt; null,

    &#39;last\_name&#39; =\&gt; null,

    &#39;name&#39; =\&gt; null,

    &#39;title&#39; =\&gt; null,

    &#39;phone&#39; =\&gt; null,

    &#39;email&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;first\_name&#39; =\&gt; &#39;FirstName&#39;,

    &#39;last\_name&#39; =\&gt; &#39;LastName&#39;,

    &#39;name&#39; =\&gt; &#39;Name&#39;,

    &#39;title&#39; =\&gt; &#39;Title&#39;,

    &#39;phone&#39; =\&gt; &#39;Phone&#39;,

    &#39;email&#39; =\&gt; &#39;Email&#39;

    ];

    protectedstatic$setters = [

    &#39;first\_name&#39; =\&gt; &#39;setFirstName&#39;,

    &#39;last\_name&#39; =\&gt; &#39;setLastName&#39;,

    &#39;name&#39; =\&gt; &#39;setName&#39;,

    &#39;title&#39; =\&gt; &#39;setTitle&#39;,

    &#39;phone&#39; =\&gt; &#39;setPhone&#39;,

    &#39;email&#39; =\&gt; &#39;setEmail&#39;

    ];

    protectedstatic$getters = [

    &#39;first\_name&#39; =\&gt; &#39;getFirstName&#39;,

    &#39;last\_name&#39; =\&gt; &#39;getLastName&#39;,

    &#39;name&#39; =\&gt; &#39;getName&#39;,

    &#39;title&#39; =\&gt; &#39;getTitle&#39;,

    &#39;phone&#39; =\&gt; &#39;getPhone&#39;,

    &#39;email&#39; =\&gt; &#39;getEmail&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;first\_name&#39;] = isset($data[&#39;first\_name&#39;]) ? $data[&#39;first\_name&#39;] : null;

    $this-\&gt;container[&#39;last\_name&#39;] = isset($data[&#39;last\_name&#39;]) ? $data[&#39;last\_name&#39;] : null;

    $this-\&gt;container[&#39;name&#39;] = isset($data[&#39;name&#39;]) ? $data[&#39;name&#39;] : null;

    $this-\&gt;container[&#39;title&#39;] = isset($data[&#39;title&#39;]) ? $data[&#39;title&#39;] : null;

    $this-\&gt;container[&#39;phone&#39;] = isset($data[&#39;phone&#39;]) ? $data[&#39;phone&#39;] : null;

    $this-\&gt;container[&#39;email&#39;] = isset($data[&#39;email&#39;]) ? $data[&#39;email&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetFirstName()

    {

    return$this-\&gt;container[&#39;first\_name&#39;];

    }

    publicfunctionsetFirstName($first\_name)

    {

    $this-\&gt;container[&#39;first\_name&#39;] = $first\_name;

    return$this;

    }

    publicfunctiongetLastName()

    {

    return$this-\&gt;container[&#39;last\_name&#39;];

    }

    publicfunctionsetLastName($last\_name)

    {

    $this-\&gt;container[&#39;last\_name&#39;] = $last\_name;

    return$this;

    }

    publicfunctiongetName()

    {

    return$this-\&gt;container[&#39;name&#39;];

    }

    publicfunctionsetName($name)

    {

    $this-\&gt;container[&#39;name&#39;] = $name;

    return$this;

    }

    publicfunctiongetTitle()

    {

    return$this-\&gt;container[&#39;title&#39;];

    }

    publicfunctionsetTitle($title)

    {

    $this-\&gt;container[&#39;title&#39;] = $title;

    return$this;

    }

    publicfunctiongetPhone()

    {

    return$this-\&gt;container[&#39;phone&#39;];

    }

    publicfunctionsetPhone($phone)

    {

    $this-\&gt;container[&#39;phone&#39;] = $phone;

    return$this;

    }

    publicfunctiongetEmail()

    {

    return$this-\&gt;container[&#39;email&#39;];

    }

    publicfunctionsetEmail($email)

    {

    $this-\&gt;container[&#39;email&#39;] = $email;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# CreditCardTransactionSettings

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classCreditCardTransactionSettingsimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;CreditCardTransactionSettings&#39;;

    protectedstatic$swaggerTypes = [

    &#39;cvv&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;contact\_name&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;email\_address&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;phone&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;fax&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;billing\_address&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;billing\_address2&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;billing\_city&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;billing\_state&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;billing\_zip&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;po\_number&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;business\_name&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;reference\_note&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;sales\_tax&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;card\_tracks&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;card\_zip&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;card\_address&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;,

    &#39;item\_description&#39; =\&gt; &#39;string&#39;,

    &#39;default\_transaction\_type&#39; =\&gt; &#39;\Swagger\Client\Model\TransactionType&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;cvv&#39; =\&gt; null,

    &#39;contact\_name&#39; =\&gt; null,

    &#39;contact\_title&#39; =\&gt; null,

    &#39;email\_address&#39; =\&gt; null,

    &#39;phone&#39; =\&gt; null,

    &#39;fax&#39; =\&gt; null,

    &#39;billing\_address&#39; =\&gt; null,

    &#39;billing\_address2&#39; =\&gt; null,

    &#39;billing\_city&#39; =\&gt; null,

    &#39;billing\_state&#39; =\&gt; null,

    &#39;billing\_zip&#39; =\&gt; null,

    &#39;po\_number&#39; =\&gt; null,

    &#39;invoice\_number&#39; =\&gt; null,

    &#39;business\_name&#39; =\&gt; null,

    &#39;customer\_number&#39; =\&gt; null,

    &#39;reference\_note&#39; =\&gt; null,

    &#39;sales\_tax&#39; =\&gt; null,

    &#39;tax\_exempt&#39; =\&gt; null,

    &#39;card\_tracks&#39; =\&gt; null,

    &#39;card\_zip&#39; =\&gt; null,

    &#39;card\_address&#39; =\&gt; null,

    &#39;item\_description&#39; =\&gt; null,

    &#39;default\_transaction\_type&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;cvv&#39; =\&gt; &#39;CVV&#39;,

    &#39;contact\_name&#39; =\&gt; &#39;ContactName&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;ContactTitle&#39;,

    &#39;email\_address&#39; =\&gt; &#39;EmailAddress&#39;,

    &#39;phone&#39; =\&gt; &#39;Phone&#39;,

    &#39;fax&#39; =\&gt; &#39;Fax&#39;,

    &#39;billing\_address&#39; =\&gt; &#39;BillingAddress&#39;,

    &#39;billing\_address2&#39; =\&gt; &#39;BillingAddress2&#39;,

    &#39;billing\_city&#39; =\&gt; &#39;BillingCity&#39;,

    &#39;billing\_state&#39; =\&gt; &#39;BillingState&#39;,

    &#39;billing\_zip&#39; =\&gt; &#39;BillingZip&#39;,

    &#39;po\_number&#39; =\&gt; &#39;PONumber&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;InvoiceNumber&#39;,

    &#39;business\_name&#39; =\&gt; &#39;BusinessName&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;CustomerNumber&#39;,

    &#39;reference\_note&#39; =\&gt; &#39;ReferenceNote&#39;,

    &#39;sales\_tax&#39; =\&gt; &#39;SalesTax&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;TaxExempt&#39;,

    &#39;card\_tracks&#39; =\&gt; &#39;CardTracks&#39;,

    &#39;card\_zip&#39; =\&gt; &#39;CardZip&#39;,

    &#39;card\_address&#39; =\&gt; &#39;CardAddress&#39;,

    &#39;item\_description&#39; =\&gt; &#39;ItemDescription&#39;,

    &#39;default\_transaction\_type&#39; =\&gt; &#39;DefaultTransactionType&#39;

    ];

    protectedstatic$setters = [

    &#39;cvv&#39; =\&gt; &#39;setCvv&#39;,

    &#39;contact\_name&#39; =\&gt; &#39;setContactName&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;setContactTitle&#39;,

    &#39;email\_address&#39; =\&gt; &#39;setEmailAddress&#39;,

    &#39;phone&#39; =\&gt; &#39;setPhone&#39;,

    &#39;fax&#39; =\&gt; &#39;setFax&#39;,

    &#39;billing\_address&#39; =\&gt; &#39;setBillingAddress&#39;,

    &#39;billing\_address2&#39; =\&gt; &#39;setBillingAddress2&#39;,

    &#39;billing\_city&#39; =\&gt; &#39;setBillingCity&#39;,

    &#39;billing\_state&#39; =\&gt; &#39;setBillingState&#39;,

    &#39;billing\_zip&#39; =\&gt; &#39;setBillingZip&#39;,

    &#39;po\_number&#39; =\&gt; &#39;setPoNumber&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;setInvoiceNumber&#39;,

    &#39;business\_name&#39; =\&gt; &#39;setBusinessName&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;setCustomerNumber&#39;,

    &#39;reference\_note&#39; =\&gt; &#39;setReferenceNote&#39;,

    &#39;sales\_tax&#39; =\&gt; &#39;setSalesTax&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;setTaxExempt&#39;,

    &#39;card\_tracks&#39; =\&gt; &#39;setCardTracks&#39;,

    &#39;card\_zip&#39; =\&gt; &#39;setCardZip&#39;,

    &#39;card\_address&#39; =\&gt; &#39;setCardAddress&#39;,

    &#39;item\_description&#39; =\&gt; &#39;setItemDescription&#39;,

    &#39;default\_transaction\_type&#39; =\&gt; &#39;setDefaultTransactionType&#39;

    ];

    protectedstatic$getters = [

    &#39;cvv&#39; =\&gt; &#39;getCvv&#39;,

    &#39;contact\_name&#39; =\&gt; &#39;getContactName&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;getContactTitle&#39;,

    &#39;email\_address&#39; =\&gt; &#39;getEmailAddress&#39;,

    &#39;phone&#39; =\&gt; &#39;getPhone&#39;,

    &#39;fax&#39; =\&gt; &#39;getFax&#39;,

    &#39;billing\_address&#39; =\&gt; &#39;getBillingAddress&#39;,

    &#39;billing\_address2&#39; =\&gt; &#39;getBillingAddress2&#39;,

    &#39;billing\_city&#39; =\&gt; &#39;getBillingCity&#39;,

    &#39;billing\_state&#39; =\&gt; &#39;getBillingState&#39;,

    &#39;billing\_zip&#39; =\&gt; &#39;getBillingZip&#39;,

    &#39;po\_number&#39; =\&gt; &#39;getPoNumber&#39;,

    &#39;invoice\_number&#39; =\&gt; &#39;getInvoiceNumber&#39;,

    &#39;business\_name&#39; =\&gt; &#39;getBusinessName&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;getCustomerNumber&#39;,

    &#39;reference\_note&#39; =\&gt; &#39;getReferenceNote&#39;,

    &#39;sales\_tax&#39; =\&gt; &#39;getSalesTax&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;getTaxExempt&#39;,

    &#39;card\_tracks&#39; =\&gt; &#39;getCardTracks&#39;,

    &#39;card\_zip&#39; =\&gt; &#39;getCardZip&#39;,

    &#39;card\_address&#39; =\&gt; &#39;getCardAddress&#39;,

    &#39;item\_description&#39; =\&gt; &#39;getItemDescription&#39;,

    &#39;default\_transaction\_type&#39; =\&gt; &#39;getDefaultTransactionType&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;cvv&#39;] = isset($data[&#39;cvv&#39;]) ? $data[&#39;cvv&#39;] : null;

    $this-\&gt;container[&#39;contact\_name&#39;] = isset($data[&#39;contact\_name&#39;]) ? $data[&#39;contact\_name&#39;] : null;

    $this-\&gt;container[&#39;contact\_title&#39;] = isset($data[&#39;contact\_title&#39;]) ? $data[&#39;contact\_title&#39;] : null;

    $this-\&gt;container[&#39;email\_address&#39;] = isset($data[&#39;email\_address&#39;]) ? $data[&#39;email\_address&#39;] : null;

    $this-\&gt;container[&#39;phone&#39;] = isset($data[&#39;phone&#39;]) ? $data[&#39;phone&#39;] : null;

    $this-\&gt;container[&#39;fax&#39;] = isset($data[&#39;fax&#39;]) ? $data[&#39;fax&#39;] : null;

    $this-\&gt;container[&#39;billing\_address&#39;] = isset($data[&#39;billing\_address&#39;]) ? $data[&#39;billing\_address&#39;] : null;

    $this-\&gt;container[&#39;billing\_address2&#39;] = isset($data[&#39;billing\_address2&#39;]) ? $data[&#39;billing\_address2&#39;] : null;

    $this-\&gt;container[&#39;billing\_city&#39;] = isset($data[&#39;billing\_city&#39;]) ? $data[&#39;billing\_city&#39;] : null;

    $this-\&gt;container[&#39;billing\_state&#39;] = isset($data[&#39;billing\_state&#39;]) ? $data[&#39;billing\_state&#39;] : null;

    $this-\&gt;container[&#39;billing\_zip&#39;] = isset($data[&#39;billing\_zip&#39;]) ? $data[&#39;billing\_zip&#39;] : null;

    $this-\&gt;container[&#39;po\_number&#39;] = isset($data[&#39;po\_number&#39;]) ? $data[&#39;po\_number&#39;] : null;

    $this-\&gt;container[&#39;invoice\_number&#39;] = isset($data[&#39;invoice\_number&#39;]) ? $data[&#39;invoice\_number&#39;] : null;

    $this-\&gt;container[&#39;business\_name&#39;] = isset($data[&#39;business\_name&#39;]) ? $data[&#39;business\_name&#39;] : null;

    $this-\&gt;container[&#39;customer\_number&#39;] = isset($data[&#39;customer\_number&#39;]) ? $data[&#39;customer\_number&#39;] : null;

    $this-\&gt;container[&#39;reference\_note&#39;] = isset($data[&#39;reference\_note&#39;]) ? $data[&#39;reference\_note&#39;] : null;

    $this-\&gt;container[&#39;sales\_tax&#39;] = isset($data[&#39;sales\_tax&#39;]) ? $data[&#39;sales\_tax&#39;] : null;

    $this-\&gt;container[&#39;tax\_exempt&#39;] = isset($data[&#39;tax\_exempt&#39;]) ? $data[&#39;tax\_exempt&#39;] : null;

    $this-\&gt;container[&#39;card\_tracks&#39;] = isset($data[&#39;card\_tracks&#39;]) ? $data[&#39;card\_tracks&#39;] : null;

    $this-\&gt;container[&#39;card\_zip&#39;] = isset($data[&#39;card\_zip&#39;]) ? $data[&#39;card\_zip&#39;] : null;

    $this-\&gt;container[&#39;card\_address&#39;] = isset($data[&#39;card\_address&#39;]) ? $data[&#39;card\_address&#39;] : null;

    $this-\&gt;container[&#39;item\_description&#39;] = isset($data[&#39;item\_description&#39;]) ? $data[&#39;item\_description&#39;] : null;

    $this-\&gt;container[&#39;default\_transaction\_type&#39;] = isset($data[&#39;default\_transaction\_type&#39;]) ? $data[&#39;default\_transaction\_type&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetCvv()

    {

    return$this-\&gt;container[&#39;cvv&#39;];

    }

    publicfunctionsetCvv($cvv)

    {

    $this-\&gt;container[&#39;cvv&#39;] = $cvv;

    return$this;

    }

    publicfunctiongetContactName()

    {

    return$this-\&gt;container[&#39;contact\_name&#39;];

    }

    publicfunctionsetContactName($contact\_name)

    {

    $this-\&gt;container[&#39;contact\_name&#39;] = $contact\_name;

    return$this;

    }

    publicfunctiongetContactTitle()

    {

    return$this-\&gt;container[&#39;contact\_title&#39;];

    }

    publicfunctionsetContactTitle($contact\_title)

    {

    $this-\&gt;container[&#39;contact\_title&#39;] = $contact\_title;

    return$this;

    }

    publicfunctiongetEmailAddress()

    {

    return$this-\&gt;container[&#39;email\_address&#39;];

    }

    publicfunctionsetEmailAddress($email\_address)

    {

    $this-\&gt;container[&#39;email\_address&#39;] = $email\_address;

    return$this;

    }

    publicfunctiongetPhone()

    {

    return$this-\&gt;container[&#39;phone&#39;];

    }

    publicfunctionsetPhone($phone)

    {

    $this-\&gt;container[&#39;phone&#39;] = $phone;

    return$this;

    }

    publicfunctiongetFax()

    {

    return$this-\&gt;container[&#39;fax&#39;];

    }

    publicfunctionsetFax($fax)

    {

    $this-\&gt;container[&#39;fax&#39;] = $fax;

    return$this;

    }

    publicfunctiongetBillingAddress()

    {

    return$this-\&gt;container[&#39;billing\_address&#39;];

    }

    publicfunctionsetBillingAddress($billing\_address)

    {

    $this-\&gt;container[&#39;billing\_address&#39;] = $billing\_address;

    return$this;

    }

    publicfunctiongetBillingAddress2()

    {

    return$this-\&gt;container[&#39;billing\_address2&#39;];

    }

    publicfunctionsetBillingAddress2($billing\_address2)

    {

    $this-\&gt;container[&#39;billing\_address2&#39;] = $billing\_address2;

    return$this;

    }

    publicfunctiongetBillingCity()

    {

    return$this-\&gt;container[&#39;billing\_city&#39;];

    }

    publicfunctionsetBillingCity($billing\_city)

    {

    $this-\&gt;container[&#39;billing\_city&#39;] = $billing\_city;

    return$this;

    }

    publicfunctiongetBillingState()

    {

    return$this-\&gt;container[&#39;billing\_state&#39;];

    }

    publicfunctionsetBillingState($billing\_state)

    {

    $this-\&gt;container[&#39;billing\_state&#39;] = $billing\_state;

    return$this;

    }

    publicfunctiongetBillingZip()

    {

    return$this-\&gt;container[&#39;billing\_zip&#39;];

    }

    publicfunctionsetBillingZip($billing\_zip)

    {

    $this-\&gt;container[&#39;billing\_zip&#39;] = $billing\_zip;

    return$this;

    }

    publicfunctiongetPoNumber()

    {

    return$this-\&gt;container[&#39;po\_number&#39;];

    }

    publicfunctionsetPoNumber($po\_number)

    {

    $this-\&gt;container[&#39;po\_number&#39;] = $po\_number;

    return$this;

    }

    publicfunctiongetInvoiceNumber()

    {

    return$this-\&gt;container[&#39;invoice\_number&#39;];

    }

    publicfunctionsetInvoiceNumber($invoice\_number)

    {

    $this-\&gt;container[&#39;invoice\_number&#39;] = $invoice\_number;

    return$this;

    }

    publicfunctiongetBusinessName()

    {

    return$this-\&gt;container[&#39;business\_name&#39;];

    }

    publicfunctionsetBusinessName($business\_name)

    {

    $this-\&gt;container[&#39;business\_name&#39;] = $business\_name;

    return$this;

    }

    publicfunctiongetCustomerNumber()

    {

    return$this-\&gt;container[&#39;customer\_number&#39;];

    }

    publicfunctionsetCustomerNumber($customer\_number)

    {

    $this-\&gt;container[&#39;customer\_number&#39;] = $customer\_number;

    return$this;

    }

    publicfunctiongetReferenceNote()

    {

    return$this-\&gt;container[&#39;reference\_note&#39;];

    }

    publicfunctionsetReferenceNote($reference\_note)

    {

    $this-\&gt;container[&#39;reference\_note&#39;] = $reference\_note;

    return$this;

    }

    publicfunctiongetSalesTax()

    {

    return$this-\&gt;container[&#39;sales\_tax&#39;];

    }

    publicfunctionsetSalesTax($sales\_tax)

    {

    $this-\&gt;container[&#39;sales\_tax&#39;] = $sales\_tax;

    return$this;

    }

    publicfunctiongetTaxExempt()

    {

    return$this-\&gt;container[&#39;tax\_exempt&#39;];

    }

    publicfunctionsetTaxExempt($tax\_exempt)

    {

    $this-\&gt;container[&#39;tax\_exempt&#39;] = $tax\_exempt;

    return$this;

    }

    publicfunctiongetCardTracks()

    {

    return$this-\&gt;container[&#39;card\_tracks&#39;];

    }

    publicfunctionsetCardTracks($card\_tracks)

    {

    $this-\&gt;container[&#39;card\_tracks&#39;] = $card\_tracks;

    return$this;

    }

    publicfunctiongetCardZip()

    {

    return$this-\&gt;container[&#39;card\_zip&#39;];

    }

    publicfunctionsetCardZip($card\_zip)

    {

    $this-\&gt;container[&#39;card\_zip&#39;] = $card\_zip;

    return$this;

    }

    publicfunctiongetCardAddress()

    {

    return$this-\&gt;container[&#39;card\_address&#39;];

    }

    publicfunctionsetCardAddress($card\_address)

    {

    $this-\&gt;container[&#39;card\_address&#39;] = $card\_address;

    return$this;

    }

    publicfunctiongetItemDescription()

    {

    return$this-\&gt;container[&#39;item\_description&#39;];

    }

    publicfunctionsetItemDescription($item\_description)

    {

    $this-\&gt;container[&#39;item\_description&#39;] = $item\_description;

    return$this;

    }

    publicfunctiongetDefaultTransactionType()

    {

    return$this-\&gt;container[&#39;default\_transaction\_type&#39;];

    }

    publicfunctionsetDefaultTransactionType($default\_transaction\_type)

    {

    $this-\&gt;container[&#39;default\_transaction\_type&#39;] = $default\_transaction\_type;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# CVVPresenceType

    \&lt;?php

    namespaceSwagger\Client\Model;

    use \Swagger\Client\ObjectSerializer;

    classCVVPresenceType

    {

    const NORMAL = &#39;Normal&#39;;

    const BYPASS = &#39;Bypass&#39;;

    const ILLEGIBLE = &#39;Illegible&#39;;

    const NOT\_AVAILABLE = &#39;NotAvailable&#39;;

    publicstaticfunctiongetAllowableEnumValues()

    {

    return [

    self::NORMAL,

    self::BYPASS,

    self::ILLEGIBLE,

    self::NOT\_AVAILABLE,

    ];

    }

    }

    # EmailReceipt

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classEmailReceiptimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;EmailReceipt&#39;;

    protectedstatic$swaggerTypes = [

    &#39;transaction\_id&#39; =\&gt; &#39;string&#39;,

    &#39;to\_addresses&#39; =\&gt; &#39;string&#39;,

    &#39;subject&#39; =\&gt; &#39;string&#39;,

    &#39;header&#39; =\&gt; &#39;string&#39;,

    &#39;footer&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;transaction\_id&#39; =\&gt; null,

    &#39;to\_addresses&#39; =\&gt; null,

    &#39;subject&#39; =\&gt; null,

    &#39;header&#39; =\&gt; null,

    &#39;footer&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;transaction\_id&#39; =\&gt; &#39;TransactionID&#39;,

    &#39;to\_addresses&#39; =\&gt; &#39;ToAddresses&#39;,

    &#39;subject&#39; =\&gt; &#39;Subject&#39;,

    &#39;header&#39; =\&gt; &#39;Header&#39;,

    &#39;footer&#39; =\&gt; &#39;Footer&#39;

    ];

    protectedstatic$setters = [

    &#39;transaction\_id&#39; =\&gt; &#39;setTransactionId&#39;,

    &#39;to\_addresses&#39; =\&gt; &#39;setToAddresses&#39;,

    &#39;subject&#39; =\&gt; &#39;setSubject&#39;,

    &#39;header&#39; =\&gt; &#39;setHeader&#39;,

    &#39;footer&#39; =\&gt; &#39;setFooter&#39;

    ];

    protectedstatic$getters = [

    &#39;transaction\_id&#39; =\&gt; &#39;getTransactionId&#39;,

    &#39;to\_addresses&#39; =\&gt; &#39;getToAddresses&#39;,

    &#39;subject&#39; =\&gt; &#39;getSubject&#39;,

    &#39;header&#39; =\&gt; &#39;getHeader&#39;,

    &#39;footer&#39; =\&gt; &#39;getFooter&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;transaction\_id&#39;] = isset($data[&#39;transaction\_id&#39;]) ? $data[&#39;transaction\_id&#39;] : null;

    $this-\&gt;container[&#39;to\_addresses&#39;] = isset($data[&#39;to\_addresses&#39;]) ? $data[&#39;to\_addresses&#39;] : null;

    $this-\&gt;container[&#39;subject&#39;] = isset($data[&#39;subject&#39;]) ? $data[&#39;subject&#39;] : null;

    $this-\&gt;container[&#39;header&#39;] = isset($data[&#39;header&#39;]) ? $data[&#39;header&#39;] : null;

    $this-\&gt;container[&#39;footer&#39;] = isset($data[&#39;footer&#39;]) ? $data[&#39;footer&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetTransactionId()

    {

    return$this-\&gt;container[&#39;transaction\_id&#39;];

    }

    publicfunctionsetTransactionId($transaction\_id)

    {

    $this-\&gt;container[&#39;transaction\_id&#39;] = $transaction\_id;

    return$this;

    }

    publicfunctiongetToAddresses()

    {

    return$this-\&gt;container[&#39;to\_addresses&#39;];

    }

    publicfunctionsetToAddresses($to\_addresses)

    {

    $this-\&gt;container[&#39;to\_addresses&#39;] = $to\_addresses;

    return$this;

    }

    publicfunctiongetSubject()

    {

    return$this-\&gt;container[&#39;subject&#39;];

    }

    publicfunctionsetSubject($subject)

    {

    $this-\&gt;container[&#39;subject&#39;] = $subject;

    return$this;

    }

    publicfunctiongetHeader()

    {

    return$this-\&gt;container[&#39;header&#39;];

    }

    publicfunctionsetHeader($header)

    {

    $this-\&gt;container[&#39;header&#39;] = $header;

    return$this;

    }

    publicfunctiongetFooter()

    {

    return$this-\&gt;container[&#39;footer&#39;];

    }

    publicfunctionsetFooter($footer)

    {

    $this-\&gt;container[&#39;footer&#39;] = $footer;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# FieldAccess

    \&lt;?php

    namespaceSwagger\Client\Model;

    use \Swagger\Client\ObjectSerializer;

    classFieldAccess

    {

    const DISABLED = &#39;Disabled&#39;;

    const ENABLED = &#39;Enabled&#39;;

    const REQUIRED = &#39;Required&#39;;

    publicstaticfunctiongetAllowableEnumValues()

    {

    return [

    self::DISABLED,

    self::ENABLED,

    self::REQUIRED,

    ];

    }

    }

# FieldInfo

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classFieldInfoimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;FieldInfo&#39;;

    protectedstatic$swaggerTypes = [

    &#39;access&#39; =\&gt; &#39;\Swagger\Client\Model\FieldAccess&#39;,

    &#39;default&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;access&#39; =\&gt; null,

    &#39;default&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;access&#39; =\&gt; &#39;Access&#39;,

    &#39;default&#39; =\&gt; &#39;Default&#39;

    ];

    protectedstatic$setters = [

    &#39;access&#39; =\&gt; &#39;setAccess&#39;,

    &#39;default&#39; =\&gt; &#39;setDefault&#39;

    ];

    protectedstatic$getters = [

    &#39;access&#39; =\&gt; &#39;getAccess&#39;,

    &#39;default&#39; =\&gt; &#39;getDefault&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;access&#39;] = isset($data[&#39;access&#39;]) ? $data[&#39;access&#39;] : null;

    $this-\&gt;container[&#39;default&#39;] = isset($data[&#39;default&#39;]) ? $data[&#39;default&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetAccess()

    {

    return$this-\&gt;container[&#39;access&#39;];

    }

    publicfunctionsetAccess($access)

    {

    $this-\&gt;container[&#39;access&#39;] = $access;

    return$this;

    }

    publicfunctiongetDefault()

    {

    return$this-\&gt;container[&#39;default&#39;];

    }

    publicfunctionsetDefault($default)

    {

    $this-\&gt;container[&#39;default&#39;] = $default;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# QueryTransaction

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classQueryTransactionimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;QueryTransaction&#39;;

    protectedstatic$swaggerTypes = [

    &#39;tran\_sequence&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_batch&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_modified&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_processed&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_settled&#39; =\&gt; &#39;string&#39;,

    &#39;submit\_time&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_amt&#39; =\&gt; &#39;double&#39;,

    &#39;tran\_tax&#39; =\&gt; &#39;double&#39;,

    &#39;tran\_inv&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_po&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_c\_num&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;string&#39;,

    &#39;card\_num&#39; =\&gt; &#39;string&#39;,

    &#39;card\_name&#39; =\&gt; &#39;string&#39;,

    &#39;card\_exp&#39; =\&gt; &#39;string&#39;,

    &#39;avs\_street&#39; =\&gt; &#39;string&#39;,

    &#39;avs\_zip&#39; =\&gt; &#39;string&#39;,

    &#39;cvv\_num&#39; =\&gt; &#39;string&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;string&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;string&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;string&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;string&#39;,

    &#39;avs\_code&#39; =\&gt; &#39;string&#39;,

    &#39;avs\_resp&#39; =\&gt; &#39;string&#39;,

    &#39;cvv\_code&#39; =\&gt; &#39;string&#39;,

    &#39;cvv\_resp&#39; =\&gt; &#39;string&#39;,

    &#39;items&#39; =\&gt; &#39;\Swagger\Client\Model\TransactionItem[]&#39;,

    &#39;business\_name&#39; =\&gt; &#39;string&#39;,

    &#39;business\_address&#39; =\&gt; &#39;string&#39;,

    &#39;business\_address2&#39; =\&gt; &#39;string&#39;,

    &#39;business\_city&#39; =\&gt; &#39;string&#39;,

    &#39;business\_state&#39; =\&gt; &#39;string&#39;,

    &#39;business\_zip&#39; =\&gt; &#39;string&#39;,

    &#39;business\_country&#39; =\&gt; &#39;string&#39;,

    &#39;business\_website&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_first\_name&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_last\_name&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_phone&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_fax&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_email&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;string&#39;,

    &#39;ip&#39; =\&gt; &#39;string&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;bool&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;tran\_sequence&#39; =\&gt; null,

    &#39;tran\_batch&#39; =\&gt; null,

    &#39;tran\_modified&#39; =\&gt; null,

    &#39;tran\_processed&#39; =\&gt; null,

    &#39;tran\_settled&#39; =\&gt; null,

    &#39;submit\_time&#39; =\&gt; null,

    &#39;tran\_type&#39; =\&gt; null,

    &#39;tran\_amt&#39; =\&gt; &#39;double&#39;,

    &#39;tran\_tax&#39; =\&gt; &#39;double&#39;,

    &#39;tran\_inv&#39; =\&gt; null,

    &#39;tran\_po&#39; =\&gt; null,

    &#39;tran\_c\_num&#39; =\&gt; null,

    &#39;tran\_note&#39; =\&gt; null,

    &#39;card\_num&#39; =\&gt; null,

    &#39;card\_name&#39; =\&gt; null,

    &#39;card\_exp&#39; =\&gt; null,

    &#39;avs\_street&#39; =\&gt; null,

    &#39;avs\_zip&#39; =\&gt; null,

    &#39;cvv\_num&#39; =\&gt; null,

    &#39;proc\_id&#39; =\&gt; null,

    &#39;proc\_resp&#39; =\&gt; null,

    &#39;proc\_code&#39; =\&gt; null,

    &#39;proc\_mess&#39; =\&gt; null,

    &#39;avs\_code&#39; =\&gt; null,

    &#39;avs\_resp&#39; =\&gt; null,

    &#39;cvv\_code&#39; =\&gt; null,

    &#39;cvv\_resp&#39; =\&gt; null,

    &#39;items&#39; =\&gt; null,

    &#39;business\_name&#39; =\&gt; null,

    &#39;business\_address&#39; =\&gt; null,

    &#39;business\_address2&#39; =\&gt; null,

    &#39;business\_city&#39; =\&gt; null,

    &#39;business\_state&#39; =\&gt; null,

    &#39;business\_zip&#39; =\&gt; null,

    &#39;business\_country&#39; =\&gt; null,

    &#39;business\_website&#39; =\&gt; null,

    &#39;contact\_first\_name&#39; =\&gt; null,

    &#39;contact\_last\_name&#39; =\&gt; null,

    &#39;contact\_phone&#39; =\&gt; null,

    &#39;contact\_fax&#39; =\&gt; null,

    &#39;contact\_email&#39; =\&gt; null,

    &#39;contact\_title&#39; =\&gt; null,

    &#39;ip&#39; =\&gt; null,

    &#39;tax\_exempt&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;tran\_sequence&#39; =\&gt; &#39;Tran\_Sequence&#39;,

    &#39;tran\_batch&#39; =\&gt; &#39;Tran\_Batch&#39;,

    &#39;tran\_modified&#39; =\&gt; &#39;Tran\_Modified&#39;,

    &#39;tran\_processed&#39; =\&gt; &#39;Tran\_Processed&#39;,

    &#39;tran\_settled&#39; =\&gt; &#39;Tran\_Settled&#39;,

    &#39;submit\_time&#39; =\&gt; &#39;Submit\_Time&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;Tran\_Type&#39;,

    &#39;tran\_amt&#39; =\&gt; &#39;Tran\_Amt&#39;,

    &#39;tran\_tax&#39; =\&gt; &#39;Tran\_Tax&#39;,

    &#39;tran\_inv&#39; =\&gt; &#39;Tran\_Inv&#39;,

    &#39;tran\_po&#39; =\&gt; &#39;Tran\_PO&#39;,

    &#39;tran\_c\_num&#39; =\&gt; &#39;Tran\_CNum&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;Tran\_Note&#39;,

    &#39;card\_num&#39; =\&gt; &#39;Card\_Num&#39;,

    &#39;card\_name&#39; =\&gt; &#39;Card\_Name&#39;,

    &#39;card\_exp&#39; =\&gt; &#39;Card\_Exp&#39;,

    &#39;avs\_street&#39; =\&gt; &#39;AVS\_Street&#39;,

    &#39;avs\_zip&#39; =\&gt; &#39;AVS\_Zip&#39;,

    &#39;cvv\_num&#39; =\&gt; &#39;CVV\_Num&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;Proc\_ID&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;Proc\_Resp&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;Proc\_Code&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;Proc\_Mess&#39;,

    &#39;avs\_code&#39; =\&gt; &#39;AVS\_Code&#39;,

    &#39;avs\_resp&#39; =\&gt; &#39;AVS\_Resp&#39;,

    &#39;cvv\_code&#39; =\&gt; &#39;CVV\_Code&#39;,

    &#39;cvv\_resp&#39; =\&gt; &#39;CVV\_Resp&#39;,

    &#39;items&#39; =\&gt; &#39;Items&#39;,

    &#39;business\_name&#39; =\&gt; &#39;Business\_Name&#39;,

    &#39;business\_address&#39; =\&gt; &#39;Business\_Address&#39;,

    &#39;business\_address2&#39; =\&gt; &#39;Business\_Address2&#39;,

    &#39;business\_city&#39; =\&gt; &#39;Business\_City&#39;,

    &#39;business\_state&#39; =\&gt; &#39;Business\_State&#39;,

    &#39;business\_zip&#39; =\&gt; &#39;Business\_Zip&#39;,

    &#39;business\_country&#39; =\&gt; &#39;Business\_Country&#39;,

    &#39;business\_website&#39; =\&gt; &#39;Business\_Website&#39;,

    &#39;contact\_first\_name&#39; =\&gt; &#39;Contact\_FirstName&#39;,

    &#39;contact\_last\_name&#39; =\&gt; &#39;Contact\_LastName&#39;,

    &#39;contact\_phone&#39; =\&gt; &#39;Contact\_Phone&#39;,

    &#39;contact\_fax&#39; =\&gt; &#39;Contact\_Fax&#39;,

    &#39;contact\_email&#39; =\&gt; &#39;Contact\_Email&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;Contact\_Title&#39;,

    &#39;ip&#39; =\&gt; &#39;IP&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;TaxExempt&#39;

    ];

    protectedstatic$setters = [

    &#39;tran\_sequence&#39; =\&gt; &#39;setTranSequence&#39;,

    &#39;tran\_batch&#39; =\&gt; &#39;setTranBatch&#39;,

    &#39;tran\_modified&#39; =\&gt; &#39;setTranModified&#39;,

    &#39;tran\_processed&#39; =\&gt; &#39;setTranProcessed&#39;,

    &#39;tran\_settled&#39; =\&gt; &#39;setTranSettled&#39;,

    &#39;submit\_time&#39; =\&gt; &#39;setSubmitTime&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;setTranType&#39;,

    &#39;tran\_amt&#39; =\&gt; &#39;setTranAmt&#39;,

    &#39;tran\_tax&#39; =\&gt; &#39;setTranTax&#39;,

    &#39;tran\_inv&#39; =\&gt; &#39;setTranInv&#39;,

    &#39;tran\_po&#39; =\&gt; &#39;setTranPo&#39;,

    &#39;tran\_c\_num&#39; =\&gt; &#39;setTranCNum&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;setTranNote&#39;,

    &#39;card\_num&#39; =\&gt; &#39;setCardNum&#39;,

    &#39;card\_name&#39; =\&gt; &#39;setCardName&#39;,

    &#39;card\_exp&#39; =\&gt; &#39;setCardExp&#39;,

    &#39;avs\_street&#39; =\&gt; &#39;setAvsStreet&#39;,

    &#39;avs\_zip&#39; =\&gt; &#39;setAvsZip&#39;,

    &#39;cvv\_num&#39; =\&gt; &#39;setCvvNum&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;setProcId&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;setProcResp&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;setProcCode&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;setProcMess&#39;,

    &#39;avs\_code&#39; =\&gt; &#39;setAvsCode&#39;,

    &#39;avs\_resp&#39; =\&gt; &#39;setAvsResp&#39;,

    &#39;cvv\_code&#39; =\&gt; &#39;setCvvCode&#39;,

    &#39;cvv\_resp&#39; =\&gt; &#39;setCvvResp&#39;,

    &#39;items&#39; =\&gt; &#39;setItems&#39;,

    &#39;business\_name&#39; =\&gt; &#39;setBusinessName&#39;,

    &#39;business\_address&#39; =\&gt; &#39;setBusinessAddress&#39;,

    &#39;business\_address2&#39; =\&gt; &#39;setBusinessAddress2&#39;,

    &#39;business\_city&#39; =\&gt; &#39;setBusinessCity&#39;,

    &#39;business\_state&#39; =\&gt; &#39;setBusinessState&#39;,

    &#39;business\_zip&#39; =\&gt; &#39;setBusinessZip&#39;,

    &#39;business\_country&#39; =\&gt; &#39;setBusinessCountry&#39;,

    &#39;business\_website&#39; =\&gt; &#39;setBusinessWebsite&#39;,

    &#39;contact\_first\_name&#39; =\&gt; &#39;setContactFirstName&#39;,

    &#39;contact\_last\_name&#39; =\&gt; &#39;setContactLastName&#39;,

    &#39;contact\_phone&#39; =\&gt; &#39;setContactPhone&#39;,

    &#39;contact\_fax&#39; =\&gt; &#39;setContactFax&#39;,

    &#39;contact\_email&#39; =\&gt; &#39;setContactEmail&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;setContactTitle&#39;,

    &#39;ip&#39; =\&gt; &#39;setIp&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;setTaxExempt&#39;

    ];

    protectedstatic$getters = [

    &#39;tran\_sequence&#39; =\&gt; &#39;getTranSequence&#39;,

    &#39;tran\_batch&#39; =\&gt; &#39;getTranBatch&#39;,

    &#39;tran\_modified&#39; =\&gt; &#39;getTranModified&#39;,

    &#39;tran\_processed&#39; =\&gt; &#39;getTranProcessed&#39;,

    &#39;tran\_settled&#39; =\&gt; &#39;getTranSettled&#39;,

    &#39;submit\_time&#39; =\&gt; &#39;getSubmitTime&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;getTranType&#39;,

    &#39;tran\_amt&#39; =\&gt; &#39;getTranAmt&#39;,

    &#39;tran\_tax&#39; =\&gt; &#39;getTranTax&#39;,

    &#39;tran\_inv&#39; =\&gt; &#39;getTranInv&#39;,

    &#39;tran\_po&#39; =\&gt; &#39;getTranPo&#39;,

    &#39;tran\_c\_num&#39; =\&gt; &#39;getTranCNum&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;getTranNote&#39;,

    &#39;card\_num&#39; =\&gt; &#39;getCardNum&#39;,

    &#39;card\_name&#39; =\&gt; &#39;getCardName&#39;,

    &#39;card\_exp&#39; =\&gt; &#39;getCardExp&#39;,

    &#39;avs\_street&#39; =\&gt; &#39;getAvsStreet&#39;,

    &#39;avs\_zip&#39; =\&gt; &#39;getAvsZip&#39;,

    &#39;cvv\_num&#39; =\&gt; &#39;getCvvNum&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;getProcId&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;getProcResp&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;getProcCode&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;getProcMess&#39;,

    &#39;avs\_code&#39; =\&gt; &#39;getAvsCode&#39;,

    &#39;avs\_resp&#39; =\&gt; &#39;getAvsResp&#39;,

    &#39;cvv\_code&#39; =\&gt; &#39;getCvvCode&#39;,

    &#39;cvv\_resp&#39; =\&gt; &#39;getCvvResp&#39;,

    &#39;items&#39; =\&gt; &#39;getItems&#39;,

    &#39;business\_name&#39; =\&gt; &#39;getBusinessName&#39;,

    &#39;business\_address&#39; =\&gt; &#39;getBusinessAddress&#39;,

    &#39;business\_address2&#39; =\&gt; &#39;getBusinessAddress2&#39;,

    &#39;business\_city&#39; =\&gt; &#39;getBusinessCity&#39;,

    &#39;business\_state&#39; =\&gt; &#39;getBusinessState&#39;,

    &#39;business\_zip&#39; =\&gt; &#39;getBusinessZip&#39;,

    &#39;business\_country&#39; =\&gt; &#39;getBusinessCountry&#39;,

    &#39;business\_website&#39; =\&gt; &#39;getBusinessWebsite&#39;,

    &#39;contact\_first\_name&#39; =\&gt; &#39;getContactFirstName&#39;,

    &#39;contact\_last\_name&#39; =\&gt; &#39;getContactLastName&#39;,

    &#39;contact\_phone&#39; =\&gt; &#39;getContactPhone&#39;,

    &#39;contact\_fax&#39; =\&gt; &#39;getContactFax&#39;,

    &#39;contact\_email&#39; =\&gt; &#39;getContactEmail&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;getContactTitle&#39;,

    &#39;ip&#39; =\&gt; &#39;getIp&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;getTaxExempt&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;tran\_sequence&#39;] = isset($data[&#39;tran\_sequence&#39;]) ? $data[&#39;tran\_sequence&#39;] : null;

    $this-\&gt;container[&#39;tran\_batch&#39;] = isset($data[&#39;tran\_batch&#39;]) ? $data[&#39;tran\_batch&#39;] : null;

    $this-\&gt;container[&#39;tran\_modified&#39;] = isset($data[&#39;tran\_modified&#39;]) ? $data[&#39;tran\_modified&#39;] : null;

    $this-\&gt;container[&#39;tran\_processed&#39;] = isset($data[&#39;tran\_processed&#39;]) ? $data[&#39;tran\_processed&#39;] : null;

    $this-\&gt;container[&#39;tran\_settled&#39;] = isset($data[&#39;tran\_settled&#39;]) ? $data[&#39;tran\_settled&#39;] : null;

    $this-\&gt;container[&#39;submit\_time&#39;] = isset($data[&#39;submit\_time&#39;]) ? $data[&#39;submit\_time&#39;] : null;

    $this-\&gt;container[&#39;tran\_type&#39;] = isset($data[&#39;tran\_type&#39;]) ? $data[&#39;tran\_type&#39;] : null;

    $this-\&gt;container[&#39;tran\_amt&#39;] = isset($data[&#39;tran\_amt&#39;]) ? $data[&#39;tran\_amt&#39;] : null;

    $this-\&gt;container[&#39;tran\_tax&#39;] = isset($data[&#39;tran\_tax&#39;]) ? $data[&#39;tran\_tax&#39;] : null;

    $this-\&gt;container[&#39;tran\_inv&#39;] = isset($data[&#39;tran\_inv&#39;]) ? $data[&#39;tran\_inv&#39;] : null;

    $this-\&gt;container[&#39;tran\_po&#39;] = isset($data[&#39;tran\_po&#39;]) ? $data[&#39;tran\_po&#39;] : null;

    $this-\&gt;container[&#39;tran\_c\_num&#39;] = isset($data[&#39;tran\_c\_num&#39;]) ? $data[&#39;tran\_c\_num&#39;] : null;

    $this-\&gt;container[&#39;tran\_note&#39;] = isset($data[&#39;tran\_note&#39;]) ? $data[&#39;tran\_note&#39;] : null;

    $this-\&gt;container[&#39;card\_num&#39;] = isset($data[&#39;card\_num&#39;]) ? $data[&#39;card\_num&#39;] : null;

    $this-\&gt;container[&#39;card\_name&#39;] = isset($data[&#39;card\_name&#39;]) ? $data[&#39;card\_name&#39;] : null;

    $this-\&gt;container[&#39;card\_exp&#39;] = isset($data[&#39;card\_exp&#39;]) ? $data[&#39;card\_exp&#39;] : null;

    $this-\&gt;container[&#39;avs\_street&#39;] = isset($data[&#39;avs\_street&#39;]) ? $data[&#39;avs\_street&#39;] : null;

    $this-\&gt;container[&#39;avs\_zip&#39;] = isset($data[&#39;avs\_zip&#39;]) ? $data[&#39;avs\_zip&#39;] : null;

    $this-\&gt;container[&#39;cvv\_num&#39;] = isset($data[&#39;cvv\_num&#39;]) ? $data[&#39;cvv\_num&#39;] : null;

    $this-\&gt;container[&#39;proc\_id&#39;] = isset($data[&#39;proc\_id&#39;]) ? $data[&#39;proc\_id&#39;] : null;

    $this-\&gt;container[&#39;proc\_resp&#39;] = isset($data[&#39;proc\_resp&#39;]) ? $data[&#39;proc\_resp&#39;] : null;

    $this-\&gt;container[&#39;proc\_code&#39;] = isset($data[&#39;proc\_code&#39;]) ? $data[&#39;proc\_code&#39;] : null;

    $this-\&gt;container[&#39;proc\_mess&#39;] = isset($data[&#39;proc\_mess&#39;]) ? $data[&#39;proc\_mess&#39;] : null;

    $this-\&gt;container[&#39;avs\_code&#39;] = isset($data[&#39;avs\_code&#39;]) ? $data[&#39;avs\_code&#39;] : null;

    $this-\&gt;container[&#39;avs\_resp&#39;] = isset($data[&#39;avs\_resp&#39;]) ? $data[&#39;avs\_resp&#39;] : null;

    $this-\&gt;container[&#39;cvv\_code&#39;] = isset($data[&#39;cvv\_code&#39;]) ? $data[&#39;cvv\_code&#39;] : null;

    $this-\&gt;container[&#39;cvv\_resp&#39;] = isset($data[&#39;cvv\_resp&#39;]) ? $data[&#39;cvv\_resp&#39;] : null;

    $this-\&gt;container[&#39;items&#39;] = isset($data[&#39;items&#39;]) ? $data[&#39;items&#39;] : null;

    $this-\&gt;container[&#39;business\_name&#39;] = isset($data[&#39;business\_name&#39;]) ? $data[&#39;business\_name&#39;] : null;

    $this-\&gt;container[&#39;business\_address&#39;] = isset($data[&#39;business\_address&#39;]) ? $data[&#39;business\_address&#39;] : null;

    $this-\&gt;container[&#39;business\_address2&#39;] = isset($data[&#39;business\_address2&#39;]) ? $data[&#39;business\_address2&#39;] : null;

    $this-\&gt;container[&#39;business\_city&#39;] = isset($data[&#39;business\_city&#39;]) ? $data[&#39;business\_city&#39;] : null;

    $this-\&gt;container[&#39;business\_state&#39;] = isset($data[&#39;business\_state&#39;]) ? $data[&#39;business\_state&#39;] : null;

    $this-\&gt;container[&#39;business\_zip&#39;] = isset($data[&#39;business\_zip&#39;]) ? $data[&#39;business\_zip&#39;] : null;

    $this-\&gt;container[&#39;business\_country&#39;] = isset($data[&#39;business\_country&#39;]) ? $data[&#39;business\_country&#39;] : null;

    $this-\&gt;container[&#39;business\_website&#39;] = isset($data[&#39;business\_website&#39;]) ? $data[&#39;business\_website&#39;] : null;

    $this-\&gt;container[&#39;contact\_first\_name&#39;] = isset($data[&#39;contact\_first\_name&#39;]) ? $data[&#39;contact\_first\_name&#39;] : null;

    $this-\&gt;container[&#39;contact\_last\_name&#39;] = isset($data[&#39;contact\_last\_name&#39;]) ? $data[&#39;contact\_last\_name&#39;] : null;

    $this-\&gt;container[&#39;contact\_phone&#39;] = isset($data[&#39;contact\_phone&#39;]) ? $data[&#39;contact\_phone&#39;] : null;

    $this-\&gt;container[&#39;contact\_fax&#39;] = isset($data[&#39;contact\_fax&#39;]) ? $data[&#39;contact\_fax&#39;] : null;

    $this-\&gt;container[&#39;contact\_email&#39;] = isset($data[&#39;contact\_email&#39;]) ? $data[&#39;contact\_email&#39;] : null;

    $this-\&gt;container[&#39;contact\_title&#39;] = isset($data[&#39;contact\_title&#39;]) ? $data[&#39;contact\_title&#39;] : null;

    $this-\&gt;container[&#39;ip&#39;] = isset($data[&#39;ip&#39;]) ? $data[&#39;ip&#39;] : null;

    $this-\&gt;container[&#39;tax\_exempt&#39;] = isset($data[&#39;tax\_exempt&#39;]) ? $data[&#39;tax\_exempt&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetTranSequence()

    {

    return$this-\&gt;container[&#39;tran\_sequence&#39;];

    }

    publicfunctionsetTranSequence($tran\_sequence)

    {

    $this-\&gt;container[&#39;tran\_sequence&#39;] = $tran\_sequence;

    return$this;

    }

    publicfunctiongetTranBatch()

    {

    return$this-\&gt;container[&#39;tran\_batch&#39;];

    }

    publicfunctionsetTranBatch($tran\_batch)

    {

    $this-\&gt;container[&#39;tran\_batch&#39;] = $tran\_batch;

    return$this;

    }

    publicfunctiongetTranModified()

    {

    return$this-\&gt;container[&#39;tran\_modified&#39;];

    }

    publicfunctionsetTranModified($tran\_modified)

    {

    $this-\&gt;container[&#39;tran\_modified&#39;] = $tran\_modified;

    return$this;

    }

    publicfunctiongetTranProcessed()

    {

    return$this-\&gt;container[&#39;tran\_processed&#39;];

    }

    publicfunctionsetTranProcessed($tran\_processed)

    {

    $this-\&gt;container[&#39;tran\_processed&#39;] = $tran\_processed;

    return$this;

    }

    publicfunctiongetTranSettled()

    {

    return$this-\&gt;container[&#39;tran\_settled&#39;];

    }

    publicfunctionsetTranSettled($tran\_settled)

    {

    $this-\&gt;container[&#39;tran\_settled&#39;] = $tran\_settled;

    return$this;

    }

    publicfunctiongetSubmitTime()

    {

    return$this-\&gt;container[&#39;submit\_time&#39;];

    }

    publicfunctionsetSubmitTime($submit\_time)

    {

    $this-\&gt;container[&#39;submit\_time&#39;] = $submit\_time;

    return$this;

    }

    publicfunctiongetTranType()

    {

    return$this-\&gt;container[&#39;tran\_type&#39;];

    }

    publicfunctionsetTranType($tran\_type)

    {

    $this-\&gt;container[&#39;tran\_type&#39;] = $tran\_type;

    return$this;

    }

    publicfunctiongetTranAmt()

    {

    return$this-\&gt;container[&#39;tran\_amt&#39;];

    }

    publicfunctionsetTranAmt($tran\_amt)

    {

    $this-\&gt;container[&#39;tran\_amt&#39;] = $tran\_amt;

    return$this;

    }

    publicfunctiongetTranTax()

    {

    return$this-\&gt;container[&#39;tran\_tax&#39;];

    }

    publicfunctionsetTranTax($tran\_tax)

    {

    $this-\&gt;container[&#39;tran\_tax&#39;] = $tran\_tax;

    return$this;

    }

    publicfunctiongetTranInv()

    {

    return$this-\&gt;container[&#39;tran\_inv&#39;];

    }

    publicfunctionsetTranInv($tran\_inv)

    {

    $this-\&gt;container[&#39;tran\_inv&#39;] = $tran\_inv;

    return$this;

    }

    publicfunctiongetTranPo()

    {

    return$this-\&gt;container[&#39;tran\_po&#39;];

    }

    publicfunctionsetTranPo($tran\_po)

    {

    $this-\&gt;container[&#39;tran\_po&#39;] = $tran\_po;

    return$this;

    }

    publicfunctiongetTranCNum()

    {

    return$this-\&gt;container[&#39;tran\_c\_num&#39;];

    }

    publicfunctionsetTranCNum($tran\_c\_num)

    {

    $this-\&gt;container[&#39;tran\_c\_num&#39;] = $tran\_c\_num;

    return$this;

    }

    publicfunctiongetTranNote()

    {

    return$this-\&gt;container[&#39;tran\_note&#39;];

    }

    publicfunctionsetTranNote($tran\_note)

    {

    $this-\&gt;container[&#39;tran\_note&#39;] = $tran\_note;

    return$this;

    }

    publicfunctiongetCardNum()

    {

    return$this-\&gt;container[&#39;card\_num&#39;];

    }

    publicfunctionsetCardNum($card\_num)

    {

    $this-\&gt;container[&#39;card\_num&#39;] = $card\_num;

    return$this;

    }

    publicfunctiongetCardName()

    {

    return$this-\&gt;container[&#39;card\_name&#39;];

    }

    publicfunctionsetCardName($card\_name)

    {

    $this-\&gt;container[&#39;card\_name&#39;] = $card\_name;

    return$this;

    }

    publicfunctiongetCardExp()

    {

    return$this-\&gt;container[&#39;card\_exp&#39;];

    }

    publicfunctionsetCardExp($card\_exp)

    {

    $this-\&gt;container[&#39;card\_exp&#39;] = $card\_exp;

    return$this;

    }

    publicfunctiongetAvsStreet()

    {

    return$this-\&gt;container[&#39;avs\_street&#39;];

    }

    publicfunctionsetAvsStreet($avs\_street)

    {

    $this-\&gt;container[&#39;avs\_street&#39;] = $avs\_street;

    return$this;

    }

    publicfunctiongetAvsZip()

    {

    return$this-\&gt;container[&#39;avs\_zip&#39;];

    }

    publicfunctionsetAvsZip($avs\_zip)

    {

    $this-\&gt;container[&#39;avs\_zip&#39;] = $avs\_zip;

    return$this;

    }

    publicfunctiongetCvvNum()

    {

    return$this-\&gt;container[&#39;cvv\_num&#39;];

    }

    publicfunctionsetCvvNum($cvv\_num)

    {

    $this-\&gt;container[&#39;cvv\_num&#39;] = $cvv\_num;

    return$this;

    }

    publicfunctiongetProcId()

    {

    return$this-\&gt;container[&#39;proc\_id&#39;];

    }

    publicfunctionsetProcId($proc\_id)

    {

    $this-\&gt;container[&#39;proc\_id&#39;] = $proc\_id;

    return$this;

    }

    publicfunctiongetProcResp()

    {

    return$this-\&gt;container[&#39;proc\_resp&#39;];

    }

    publicfunctionsetProcResp($proc\_resp)

    {

    $this-\&gt;container[&#39;proc\_resp&#39;] = $proc\_resp;

    return$this;

    }

    publicfunctiongetProcCode()

    {

    return$this-\&gt;container[&#39;proc\_code&#39;];

    }

    publicfunctionsetProcCode($proc\_code)

    {

    $this-\&gt;container[&#39;proc\_code&#39;] = $proc\_code;

    return$this;

    }

    publicfunctiongetProcMess()

    {

    return$this-\&gt;container[&#39;proc\_mess&#39;];

    }

    publicfunctionsetProcMess($proc\_mess)

    {

    $this-\&gt;container[&#39;proc\_mess&#39;] = $proc\_mess;

    return$this;

    }

    publicfunctiongetAvsCode()

    {

    return$this-\&gt;container[&#39;avs\_code&#39;];

    }

    publicfunctionsetAvsCode($avs\_code)

    {

    $this-\&gt;container[&#39;avs\_code&#39;] = $avs\_code;

    return$this;

    }

    publicfunctiongetAvsResp()

    {

    return$this-\&gt;container[&#39;avs\_resp&#39;];

    }

    publicfunctionsetAvsResp($avs\_resp)

    {

    $this-\&gt;container[&#39;avs\_resp&#39;] = $avs\_resp;

    return$this;

    }

    publicfunctiongetCvvCode()

    {

    return$this-\&gt;container[&#39;cvv\_code&#39;];

    }

    publicfunctionsetCvvCode($cvv\_code)

    {

    $this-\&gt;container[&#39;cvv\_code&#39;] = $cvv\_code;

    return$this;

    }

    publicfunctiongetCvvResp()

    {

    return$this-\&gt;container[&#39;cvv\_resp&#39;];

    }

    publicfunctionsetCvvResp($cvv\_resp)

    {

    $this-\&gt;container[&#39;cvv\_resp&#39;] = $cvv\_resp;

    return$this;

    }

    publicfunctiongetItems()

    {

    return$this-\&gt;container[&#39;items&#39;];

    }

    publicfunctionsetItems($items)

    {

    $this-\&gt;container[&#39;items&#39;] = $items;

    return$this;

    }

    publicfunctiongetBusinessName()

    {

    return$this-\&gt;container[&#39;business\_name&#39;];

    }

    publicfunctionsetBusinessName($business\_name)

    {

    $this-\&gt;container[&#39;business\_name&#39;] = $business\_name;

    return$this;

    }

    publicfunctiongetBusinessAddress()

    {

    return$this-\&gt;container[&#39;business\_address&#39;];

    }

    publicfunctionsetBusinessAddress($business\_address)

    {

    $this-\&gt;container[&#39;business\_address&#39;] = $business\_address;

    return$this;

    }

    publicfunctiongetBusinessAddress2()

    {

    return$this-\&gt;container[&#39;business\_address2&#39;];

    }

    publicfunctionsetBusinessAddress2($business\_address2)

    {

    $this-\&gt;container[&#39;business\_address2&#39;] = $business\_address2;

    return$this;

    }

    publicfunctiongetBusinessCity()

    {

    return$this-\&gt;container[&#39;business\_city&#39;];

    }

    publicfunctionsetBusinessCity($business\_city)

    {

    $this-\&gt;container[&#39;business\_city&#39;] = $business\_city;

    return$this;

    }

    publicfunctiongetBusinessState()

    {

    return$this-\&gt;container[&#39;business\_state&#39;];

    }

    publicfunctionsetBusinessState($business\_state)

    {

    $this-\&gt;container[&#39;business\_state&#39;] = $business\_state;

    return$this;

    }

    publicfunctiongetBusinessZip()

    {

    return$this-\&gt;container[&#39;business\_zip&#39;];

    }

    publicfunctionsetBusinessZip($business\_zip)

    {

    $this-\&gt;container[&#39;business\_zip&#39;] = $business\_zip;

    return$this;

    }

    publicfunctiongetBusinessCountry()

    {

    return$this-\&gt;container[&#39;business\_country&#39;];

    }

    publicfunctionsetBusinessCountry($business\_country)

    {

    $this-\&gt;container[&#39;business\_country&#39;] = $business\_country;

    return$this;

    }

    publicfunctiongetBusinessWebsite()

    {

    return$this-\&gt;container[&#39;business\_website&#39;];

    }

    publicfunctionsetBusinessWebsite($business\_website)

    {

    $this-\&gt;container[&#39;business\_website&#39;] = $business\_website;

    return$this;

    }

    publicfunctiongetContactFirstName()

    {

    return$this-\&gt;container[&#39;contact\_first\_name&#39;];

    }

    publicfunctionsetContactFirstName($contact\_first\_name)

    {

    $this-\&gt;container[&#39;contact\_first\_name&#39;] = $contact\_first\_name;

    return$this;

    }

    publicfunctiongetContactLastName()

    {

    return$this-\&gt;container[&#39;contact\_last\_name&#39;];

    }

    publicfunctionsetContactLastName($contact\_last\_name)

    {

    $this-\&gt;container[&#39;contact\_last\_name&#39;] = $contact\_last\_name;

    return$this;

    }

    publicfunctiongetContactPhone()

    {

    return$this-\&gt;container[&#39;contact\_phone&#39;];

    }

    publicfunctionsetContactPhone($contact\_phone)

    {

    $this-\&gt;container[&#39;contact\_phone&#39;] = $contact\_phone;

    return$this;

    }

    publicfunctiongetContactFax()

    {

    return$this-\&gt;container[&#39;contact\_fax&#39;];

    }

    publicfunctionsetContactFax($contact\_fax)

    {

    $this-\&gt;container[&#39;contact\_fax&#39;] = $contact\_fax;

    return$this;

    }

    publicfunctiongetContactEmail()

    {

    return$this-\&gt;container[&#39;contact\_email&#39;];

    }

    publicfunctionsetContactEmail($contact\_email)

    {

    $this-\&gt;container[&#39;contact\_email&#39;] = $contact\_email;

    return$this;

    }

    publicfunctiongetContactTitle()

    {

    return$this-\&gt;container[&#39;contact\_title&#39;];

    }

    publicfunctionsetContactTitle($contact\_title)

    {

    $this-\&gt;container[&#39;contact\_title&#39;] = $contact\_title;

    return$this;

    }

    publicfunctiongetIp()

    {

    return$this-\&gt;container[&#39;ip&#39;];

    }

    publicfunctionsetIp($ip)

    {

    $this-\&gt;container[&#39;ip&#39;] = $ip;

    return$this;

    }

    publicfunctiongetTaxExempt()

    {

    return$this-\&gt;container[&#39;tax\_exempt&#39;];

    }

    publicfunctionsetTaxExempt($tax\_exempt)

    {

    $this-\&gt;container[&#39;tax\_exempt&#39;] = $tax\_exempt;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# Receipt

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classReceiptimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;Receipt&#39;;

    protectedstatic$swaggerTypes = [

    &#39;header&#39; =\&gt; &#39;\Swagger\Client\Model\ReceiptCustomLines&#39;,

    &#39;footer&#39; =\&gt; &#39;\Swagger\Client\Model\ReceiptCustomLines&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;header&#39; =\&gt; null,

    &#39;footer&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;header&#39; =\&gt; &#39;Header&#39;,

    &#39;footer&#39; =\&gt; &#39;Footer&#39;

    ];

    protectedstatic$setters = [

    &#39;header&#39; =\&gt; &#39;setHeader&#39;,

    &#39;footer&#39; =\&gt; &#39;setFooter&#39;

    ];

    protectedstatic$getters = [

    &#39;header&#39; =\&gt; &#39;getHeader&#39;,

    &#39;footer&#39; =\&gt; &#39;getFooter&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;header&#39;] = isset($data[&#39;header&#39;]) ? $data[&#39;header&#39;] : null;

    $this-\&gt;container[&#39;footer&#39;] = isset($data[&#39;footer&#39;]) ? $data[&#39;footer&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetHeader()

    {

    return$this-\&gt;container[&#39;header&#39;];

    }

    publicfunctionsetHeader($header)

    {

    $this-\&gt;container[&#39;header&#39;] = $header;

    return$this;

    }

    publicfunctiongetFooter()

    {

    return$this-\&gt;container[&#39;footer&#39;];

    }

    publicfunctionsetFooter($footer)

    {

    $this-\&gt;container[&#39;footer&#39;] = $footer;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# ReceiptCustomLines

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classReceiptCustomLinesimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;ReceiptCustomLines&#39;;

    protectedstatic$swaggerTypes = [

    &#39;custom\_line1&#39; =\&gt; &#39;string&#39;,

    &#39;custom\_line2&#39; =\&gt; &#39;string&#39;,

    &#39;custom\_line3&#39; =\&gt; &#39;string&#39;,

    &#39;custom\_line4&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;custom\_line1&#39; =\&gt; null,

    &#39;custom\_line2&#39; =\&gt; null,

    &#39;custom\_line3&#39; =\&gt; null,

    &#39;custom\_line4&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;custom\_line1&#39; =\&gt; &#39;CustomLine1&#39;,

    &#39;custom\_line2&#39; =\&gt; &#39;CustomLine2&#39;,

    &#39;custom\_line3&#39; =\&gt; &#39;CustomLine3&#39;,

    &#39;custom\_line4&#39; =\&gt; &#39;CustomLine4&#39;

    ];

    protectedstatic$setters = [

    &#39;custom\_line1&#39; =\&gt; &#39;setCustomLine1&#39;,

    &#39;custom\_line2&#39; =\&gt; &#39;setCustomLine2&#39;,

    &#39;custom\_line3&#39; =\&gt; &#39;setCustomLine3&#39;,

    &#39;custom\_line4&#39; =\&gt; &#39;setCustomLine4&#39;

    ];

    protectedstatic$getters = [

    &#39;custom\_line1&#39; =\&gt; &#39;getCustomLine1&#39;,

    &#39;custom\_line2&#39; =\&gt; &#39;getCustomLine2&#39;,

    &#39;custom\_line3&#39; =\&gt; &#39;getCustomLine3&#39;,

    &#39;custom\_line4&#39; =\&gt; &#39;getCustomLine4&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;custom\_line1&#39;] = isset($data[&#39;custom\_line1&#39;]) ? $data[&#39;custom\_line1&#39;] : null;

    $this-\&gt;container[&#39;custom\_line2&#39;] = isset($data[&#39;custom\_line2&#39;]) ? $data[&#39;custom\_line2&#39;] : null;

    $this-\&gt;container[&#39;custom\_line3&#39;] = isset($data[&#39;custom\_line3&#39;]) ? $data[&#39;custom\_line3&#39;] : null;

    $this-\&gt;container[&#39;custom\_line4&#39;] = isset($data[&#39;custom\_line4&#39;]) ? $data[&#39;custom\_line4&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetCustomLine1()

    {

    return$this-\&gt;container[&#39;custom\_line1&#39;];

    }

    publicfunctionsetCustomLine1($custom\_line1)

    {

    $this-\&gt;container[&#39;custom\_line1&#39;] = $custom\_line1;

    return$this;

    }

    publicfunctiongetCustomLine2()

    {

    return$this-\&gt;container[&#39;custom\_line2&#39;];

    }

    publicfunctionsetCustomLine2($custom\_line2)

    {

    $this-\&gt;container[&#39;custom\_line2&#39;] = $custom\_line2;

    return$this;

    }

    publicfunctiongetCustomLine3()

    {

    return$this-\&gt;container[&#39;custom\_line3&#39;];

    }

    publicfunctionsetCustomLine3($custom\_line3)

    {

    $this-\&gt;container[&#39;custom\_line3&#39;] = $custom\_line3;

    return$this;

    }

    publicfunctiongetCustomLine4()

    {

    return$this-\&gt;container[&#39;custom\_line4&#39;];

    }

    publicfunctionsetCustomLine4($custom\_line4)

    {

    $this-\&gt;container[&#39;custom\_line4&#39;] = $custom\_line4;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# Record

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classRecordimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;Record&#39;;

    protectedstatic$swaggerTypes = [

    &#39;response&#39; =\&gt; &#39;\Swagger\Client\Model\Response&#39;,

    &#39;id&#39; =\&gt; &#39;int&#39;,

    &#39;reference&#39; =\&gt; &#39;string&#39;,

    &#39;business&#39; =\&gt; &#39;\Swagger\Client\Model\Business&#39;,

    &#39;contact&#39; =\&gt; &#39;\Swagger\Client\Model\Contact&#39;,

    &#39;po&#39; =\&gt; &#39;string&#39;,

    &#39;invoice&#39; =\&gt; &#39;string&#39;,

    &#39;customer&#39; =\&gt; &#39;string&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;bool&#39;,

    &#39;note&#39; =\&gt; &#39;string&#39;,

    &#39;credit\_cards&#39; =\&gt; &#39;\Swagger\Client\Model\VaultCreditCard[]&#39;,

    &#39;checks&#39; =\&gt; &#39;\Swagger\Client\Model\VaultCheck[]&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;response&#39; =\&gt; null,

    &#39;id&#39; =\&gt; &#39;int32&#39;,

    &#39;reference&#39; =\&gt; null,

    &#39;business&#39; =\&gt; null,

    &#39;contact&#39; =\&gt; null,

    &#39;po&#39; =\&gt; null,

    &#39;invoice&#39; =\&gt; null,

    &#39;customer&#39; =\&gt; null,

    &#39;tax\_exempt&#39; =\&gt; null,

    &#39;note&#39; =\&gt; null,

    &#39;credit\_cards&#39; =\&gt; null,

    &#39;checks&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;response&#39; =\&gt; &#39;Response&#39;,

    &#39;id&#39; =\&gt; &#39;ID&#39;,

    &#39;reference&#39; =\&gt; &#39;Reference&#39;,

    &#39;business&#39; =\&gt; &#39;Business&#39;,

    &#39;contact&#39; =\&gt; &#39;Contact&#39;,

    &#39;po&#39; =\&gt; &#39;PO&#39;,

    &#39;invoice&#39; =\&gt; &#39;Invoice&#39;,

    &#39;customer&#39; =\&gt; &#39;Customer&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;TaxExempt&#39;,

    &#39;note&#39; =\&gt; &#39;Note&#39;,

    &#39;credit\_cards&#39; =\&gt; &#39;CreditCards&#39;,

    &#39;checks&#39; =\&gt; &#39;Checks&#39;

    ];

    protectedstatic$setters = [

    &#39;response&#39; =\&gt; &#39;setResponse&#39;,

    &#39;id&#39; =\&gt; &#39;setId&#39;,

    &#39;reference&#39; =\&gt; &#39;setReference&#39;,

    &#39;business&#39; =\&gt; &#39;setBusiness&#39;,

    &#39;contact&#39; =\&gt; &#39;setContact&#39;,

    &#39;po&#39; =\&gt; &#39;setPo&#39;,

    &#39;invoice&#39; =\&gt; &#39;setInvoice&#39;,

    &#39;customer&#39; =\&gt; &#39;setCustomer&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;setTaxExempt&#39;,

    &#39;note&#39; =\&gt; &#39;setNote&#39;,

    &#39;credit\_cards&#39; =\&gt; &#39;setCreditCards&#39;,

    &#39;checks&#39; =\&gt; &#39;setChecks&#39;

    ];

    protectedstatic$getters = [

    &#39;response&#39; =\&gt; &#39;getResponse&#39;,

    &#39;id&#39; =\&gt; &#39;getId&#39;,

    &#39;reference&#39; =\&gt; &#39;getReference&#39;,

    &#39;business&#39; =\&gt; &#39;getBusiness&#39;,

    &#39;contact&#39; =\&gt; &#39;getContact&#39;,

    &#39;po&#39; =\&gt; &#39;getPo&#39;,

    &#39;invoice&#39; =\&gt; &#39;getInvoice&#39;,

    &#39;customer&#39; =\&gt; &#39;getCustomer&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;getTaxExempt&#39;,

    &#39;note&#39; =\&gt; &#39;getNote&#39;,

    &#39;credit\_cards&#39; =\&gt; &#39;getCreditCards&#39;,

    &#39;checks&#39; =\&gt; &#39;getChecks&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;response&#39;] = isset($data[&#39;response&#39;]) ? $data[&#39;response&#39;] : null;

    $this-\&gt;container[&#39;id&#39;] = isset($data[&#39;id&#39;]) ? $data[&#39;id&#39;] : null;

    $this-\&gt;container[&#39;reference&#39;] = isset($data[&#39;reference&#39;]) ? $data[&#39;reference&#39;] : null;

    $this-\&gt;container[&#39;business&#39;] = isset($data[&#39;business&#39;]) ? $data[&#39;business&#39;] : null;

    $this-\&gt;container[&#39;contact&#39;] = isset($data[&#39;contact&#39;]) ? $data[&#39;contact&#39;] : null;

    $this-\&gt;container[&#39;po&#39;] = isset($data[&#39;po&#39;]) ? $data[&#39;po&#39;] : null;

    $this-\&gt;container[&#39;invoice&#39;] = isset($data[&#39;invoice&#39;]) ? $data[&#39;invoice&#39;] : null;

    $this-\&gt;container[&#39;customer&#39;] = isset($data[&#39;customer&#39;]) ? $data[&#39;customer&#39;] : null;

    $this-\&gt;container[&#39;tax\_exempt&#39;] = isset($data[&#39;tax\_exempt&#39;]) ? $data[&#39;tax\_exempt&#39;] : null;

    $this-\&gt;container[&#39;note&#39;] = isset($data[&#39;note&#39;]) ? $data[&#39;note&#39;] : null;

    $this-\&gt;container[&#39;credit\_cards&#39;] = isset($data[&#39;credit\_cards&#39;]) ? $data[&#39;credit\_cards&#39;] : null;

    $this-\&gt;container[&#39;checks&#39;] = isset($data[&#39;checks&#39;]) ? $data[&#39;checks&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetResponse()

    {

    return$this-\&gt;container[&#39;response&#39;];

    }

    publicfunctionsetResponse($response)

    {

    $this-\&gt;container[&#39;response&#39;] = $response;

    return$this;

    }

    publicfunctiongetId()

    {

    return$this-\&gt;container[&#39;id&#39;];

    }

    publicfunctionsetId($id)

    {

    $this-\&gt;container[&#39;id&#39;] = $id;

    return$this;

    }

    publicfunctiongetReference()

    {

    return$this-\&gt;container[&#39;reference&#39;];

    }

    publicfunctionsetReference($reference)

    {

    $this-\&gt;container[&#39;reference&#39;] = $reference;

    return$this;

    }

    publicfunctiongetBusiness()

    {

    return$this-\&gt;container[&#39;business&#39;];

    }

    publicfunctionsetBusiness($business)

    {

    $this-\&gt;container[&#39;business&#39;] = $business;

    return$this;

    }

    publicfunctiongetContact()

    {

    return$this-\&gt;container[&#39;contact&#39;];

    }

    publicfunctionsetContact($contact)

    {

    $this-\&gt;container[&#39;contact&#39;] = $contact;

    return$this;

    }

    publicfunctiongetPo()

    {

    return$this-\&gt;container[&#39;po&#39;];

    }

    publicfunctionsetPo($po)

    {

    $this-\&gt;container[&#39;po&#39;] = $po;

    return$this;

    }

    publicfunctiongetInvoice()

    {

    return$this-\&gt;container[&#39;invoice&#39;];

    }

    publicfunctionsetInvoice($invoice)

    {

    $this-\&gt;container[&#39;invoice&#39;] = $invoice;

    return$this;

    }

    publicfunctiongetCustomer()

    {

    return$this-\&gt;container[&#39;customer&#39;];

    }

    publicfunctionsetCustomer($customer)

    {

    $this-\&gt;container[&#39;customer&#39;] = $customer;

    return$this;

    }

    publicfunctiongetTaxExempt()

    {

    return$this-\&gt;container[&#39;tax\_exempt&#39;];

    }

    publicfunctionsetTaxExempt($tax\_exempt)

    {

    $this-\&gt;container[&#39;tax\_exempt&#39;] = $tax\_exempt;

    return$this;

    }

    publicfunctiongetNote()

    {

    return$this-\&gt;container[&#39;note&#39;];

    }

    publicfunctionsetNote($note)

    {

    $this-\&gt;container[&#39;note&#39;] = $note;

    return$this;

    }

    publicfunctiongetCreditCards()

    {

    return$this-\&gt;container[&#39;credit\_cards&#39;];

    }

    publicfunctionsetCreditCards($credit\_cards)

    {

    $this-\&gt;container[&#39;credit\_cards&#39;] = $credit\_cards;

    return$this;

    }

    publicfunctiongetChecks()

    {

    return$this-\&gt;container[&#39;checks&#39;];

    }

    publicfunctionsetChecks($checks)

    {

    $this-\&gt;container[&#39;checks&#39;] = $checks;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# Response

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classResponseimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;Response&#39;;

    protectedstatic$swaggerTypes = [

    &#39;error&#39; =\&gt; &#39;bool&#39;,

    &#39;message&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;error&#39; =\&gt; null,

    &#39;message&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;error&#39; =\&gt; &#39;Error&#39;,

    &#39;message&#39; =\&gt; &#39;Message&#39;

    ];

    protectedstatic$setters = [

    &#39;error&#39; =\&gt; &#39;setError&#39;,

    &#39;message&#39; =\&gt; &#39;setMessage&#39;

    ];

    protectedstatic$getters = [

    &#39;error&#39; =\&gt; &#39;getError&#39;,

    &#39;message&#39; =\&gt; &#39;getMessage&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;error&#39;] = isset($data[&#39;error&#39;]) ? $data[&#39;error&#39;] : null;

    $this-\&gt;container[&#39;message&#39;] = isset($data[&#39;message&#39;]) ? $data[&#39;message&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetError()

    {

    return$this-\&gt;container[&#39;error&#39;];

    }

    publicfunctionsetError($error)

    {

    $this-\&gt;container[&#39;error&#39;] = $error;

    return$this;

    }

    publicfunctiongetMessage()

    {

    return$this-\&gt;container[&#39;message&#39;];

    }

    publicfunctionsetMessage($message)

    {

    $this-\&gt;container[&#39;message&#39;] = $message;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# SearchVault

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classSearchVaultimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;SearchVault&#39;;

    protectedstatic$swaggerTypes = [

    &#39;reference&#39; =\&gt; &#39;string&#39;,

    &#39;business\_name&#39; =\&gt; &#39;string&#39;,

    &#39;first\_name&#39; =\&gt; &#39;string&#39;,

    &#39;last\_name&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;reference&#39; =\&gt; null,

    &#39;business\_name&#39; =\&gt; null,

    &#39;first\_name&#39; =\&gt; null,

    &#39;last\_name&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;reference&#39; =\&gt; &#39;Reference&#39;,

    &#39;business\_name&#39; =\&gt; &#39;BusinessName&#39;,

    &#39;first\_name&#39; =\&gt; &#39;FirstName&#39;,

    &#39;last\_name&#39; =\&gt; &#39;LastName&#39;

    ];

    protectedstatic$setters = [

    &#39;reference&#39; =\&gt; &#39;setReference&#39;,

    &#39;business\_name&#39; =\&gt; &#39;setBusinessName&#39;,

    &#39;first\_name&#39; =\&gt; &#39;setFirstName&#39;,

    &#39;last\_name&#39; =\&gt; &#39;setLastName&#39;

    ];

    protectedstatic$getters = [

    &#39;reference&#39; =\&gt; &#39;getReference&#39;,

    &#39;business\_name&#39; =\&gt; &#39;getBusinessName&#39;,

    &#39;first\_name&#39; =\&gt; &#39;getFirstName&#39;,

    &#39;last\_name&#39; =\&gt; &#39;getLastName&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;reference&#39;] = isset($data[&#39;reference&#39;]) ? $data[&#39;reference&#39;] : null;

    $this-\&gt;container[&#39;business\_name&#39;] = isset($data[&#39;business\_name&#39;]) ? $data[&#39;business\_name&#39;] : null;

    $this-\&gt;container[&#39;first\_name&#39;] = isset($data[&#39;first\_name&#39;]) ? $data[&#39;first\_name&#39;] : null;

    $this-\&gt;container[&#39;last\_name&#39;] = isset($data[&#39;last\_name&#39;]) ? $data[&#39;last\_name&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetReference()

    {

    return$this-\&gt;container[&#39;reference&#39;];

    }

    publicfunctionsetReference($reference)

    {

    $this-\&gt;container[&#39;reference&#39;] = $reference;

    return$this;

    }

    publicfunctiongetBusinessName()

    {

    return$this-\&gt;container[&#39;business\_name&#39;];

    }

    publicfunctionsetBusinessName($business\_name)

    {

    $this-\&gt;container[&#39;business\_name&#39;] = $business\_name;

    return$this;

    }

    publicfunctiongetFirstName()

    {

    return$this-\&gt;container[&#39;first\_name&#39;];

    }

    publicfunctionsetFirstName($first\_name)

    {

    $this-\&gt;container[&#39;first\_name&#39;] = $first\_name;

    return$this;

    }

    publicfunctiongetLastName()

    {

    return$this-\&gt;container[&#39;last\_name&#39;];

    }

    publicfunctionsetLastName($last\_name)

    {

    $this-\&gt;container[&#39;last\_name&#39;] = $last\_name;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# Settings

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classSettingsimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;Settings&#39;;

    protectedstatic$swaggerTypes = [

    &#39;credit\_card\_transaction\_settings&#39; =\&gt; &#39;\Swagger\Client\Model\CreditCardTransactionSettings&#39;,

    &#39;check\_transaction\_settings&#39; =\&gt; &#39;\Swagger\Client\Model\CheckTransactionSettings&#39;,

    &#39;business&#39; =\&gt; &#39;\Swagger\Client\Model\Business&#39;,

    &#39;main\_contact&#39; =\&gt; &#39;\Swagger\Client\Model\Contact&#39;,

    &#39;receipt40&#39; =\&gt; &#39;\Swagger\Client\Model\Receipt&#39;,

    &#39;receipt80&#39; =\&gt; &#39;\Swagger\Client\Model\Receipt&#39;,

    &#39;print\_signature\_line&#39; =\&gt; &#39;bool&#39;,

    &#39;response&#39; =\&gt; &#39;\Swagger\Client\Model\Response&#39;,

    &#39;account\_id&#39; =\&gt; &#39;string&#39;,

    &#39;copy\_email\_receipt&#39; =\&gt; &#39;\Swagger\Client\Model\FieldInfo&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;credit\_card\_transaction\_settings&#39; =\&gt; null,

    &#39;check\_transaction\_settings&#39; =\&gt; null,

    &#39;business&#39; =\&gt; null,

    &#39;main\_contact&#39; =\&gt; null,

    &#39;receipt40&#39; =\&gt; null,

    &#39;receipt80&#39; =\&gt; null,

    &#39;print\_signature\_line&#39; =\&gt; null,

    &#39;response&#39; =\&gt; null,

    &#39;account\_id&#39; =\&gt; null,

    &#39;copy\_email\_receipt&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;credit\_card\_transaction\_settings&#39; =\&gt; &#39;CreditCardTransactionSettings&#39;,

    &#39;check\_transaction\_settings&#39; =\&gt; &#39;CheckTransactionSettings&#39;,

    &#39;business&#39; =\&gt; &#39;Business&#39;,

    &#39;main\_contact&#39; =\&gt; &#39;MainContact&#39;,

    &#39;receipt40&#39; =\&gt; &#39;Receipt40&#39;,

    &#39;receipt80&#39; =\&gt; &#39;Receipt80&#39;,

    &#39;print\_signature\_line&#39; =\&gt; &#39;PrintSignatureLine&#39;,

    &#39;response&#39; =\&gt; &#39;Response&#39;,

    &#39;account\_id&#39; =\&gt; &#39;AccountID&#39;,

    &#39;copy\_email\_receipt&#39; =\&gt; &#39;CopyEmailReceipt&#39;

    ];

    protectedstatic$setters = [

    &#39;credit\_card\_transaction\_settings&#39; =\&gt; &#39;setCreditCardTransactionSettings&#39;,

    &#39;check\_transaction\_settings&#39; =\&gt; &#39;setCheckTransactionSettings&#39;,

    &#39;business&#39; =\&gt; &#39;setBusiness&#39;,

    &#39;main\_contact&#39; =\&gt; &#39;setMainContact&#39;,

    &#39;receipt40&#39; =\&gt; &#39;setReceipt40&#39;,

    &#39;receipt80&#39; =\&gt; &#39;setReceipt80&#39;,

    &#39;print\_signature\_line&#39; =\&gt; &#39;setPrintSignatureLine&#39;,

    &#39;response&#39; =\&gt; &#39;setResponse&#39;,

    &#39;account\_id&#39; =\&gt; &#39;setAccountId&#39;,

    &#39;copy\_email\_receipt&#39; =\&gt; &#39;setCopyEmailReceipt&#39;

    ];

    protectedstatic$getters = [

    &#39;credit\_card\_transaction\_settings&#39; =\&gt; &#39;getCreditCardTransactionSettings&#39;,

    &#39;check\_transaction\_settings&#39; =\&gt; &#39;getCheckTransactionSettings&#39;,

    &#39;business&#39; =\&gt; &#39;getBusiness&#39;,

    &#39;main\_contact&#39; =\&gt; &#39;getMainContact&#39;,

    &#39;receipt40&#39; =\&gt; &#39;getReceipt40&#39;,

    &#39;receipt80&#39; =\&gt; &#39;getReceipt80&#39;,

    &#39;print\_signature\_line&#39; =\&gt; &#39;getPrintSignatureLine&#39;,

    &#39;response&#39; =\&gt; &#39;getResponse&#39;,

    &#39;account\_id&#39; =\&gt; &#39;getAccountId&#39;,

    &#39;copy\_email\_receipt&#39; =\&gt; &#39;getCopyEmailReceipt&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;credit\_card\_transaction\_settings&#39;] = isset($data[&#39;credit\_card\_transaction\_settings&#39;]) ? $data[&#39;credit\_card\_transaction\_settings&#39;] : null;

    $this-\&gt;container[&#39;check\_transaction\_settings&#39;] = isset($data[&#39;check\_transaction\_settings&#39;]) ? $data[&#39;check\_transaction\_settings&#39;] : null;

    $this-\&gt;container[&#39;business&#39;] = isset($data[&#39;business&#39;]) ? $data[&#39;business&#39;] : null;

    $this-\&gt;container[&#39;main\_contact&#39;] = isset($data[&#39;main\_contact&#39;]) ? $data[&#39;main\_contact&#39;] : null;

    $this-\&gt;container[&#39;receipt40&#39;] = isset($data[&#39;receipt40&#39;]) ? $data[&#39;receipt40&#39;] : null;

    $this-\&gt;container[&#39;receipt80&#39;] = isset($data[&#39;receipt80&#39;]) ? $data[&#39;receipt80&#39;] : null;

    $this-\&gt;container[&#39;print\_signature\_line&#39;] = isset($data[&#39;print\_signature\_line&#39;]) ? $data[&#39;print\_signature\_line&#39;] : null;

    $this-\&gt;container[&#39;response&#39;] = isset($data[&#39;response&#39;]) ? $data[&#39;response&#39;] : null;

    $this-\&gt;container[&#39;account\_id&#39;] = isset($data[&#39;account\_id&#39;]) ? $data[&#39;account\_id&#39;] : null;

    $this-\&gt;container[&#39;copy\_email\_receipt&#39;] = isset($data[&#39;copy\_email\_receipt&#39;]) ? $data[&#39;copy\_email\_receipt&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetCreditCardTransactionSettings()

    {

    return$this-\&gt;container[&#39;credit\_card\_transaction\_settings&#39;];

    }

    publicfunctionsetCreditCardTransactionSettings($credit\_card\_transaction\_settings)

    {

    $this-\&gt;container[&#39;credit\_card\_transaction\_settings&#39;] = $credit\_card\_transaction\_settings;

    return$this;

    }

    publicfunctiongetCheckTransactionSettings()

    {

    return$this-\&gt;container[&#39;check\_transaction\_settings&#39;];

    }

    publicfunctionsetCheckTransactionSettings($check\_transaction\_settings)

    {

    $this-\&gt;container[&#39;check\_transaction\_settings&#39;] = $check\_transaction\_settings;

    return$this;

    }

    publicfunctiongetBusiness()

    {

    return$this-\&gt;container[&#39;business&#39;];

    }

    publicfunctionsetBusiness($business)

    {

    $this-\&gt;container[&#39;business&#39;] = $business;

    return$this;

    }

    publicfunctiongetMainContact()

    {

    return$this-\&gt;container[&#39;main\_contact&#39;];

    }

    publicfunctionsetMainContact($main\_contact)

    {

    $this-\&gt;container[&#39;main\_contact&#39;] = $main\_contact;

    return$this;

    }

    publicfunctiongetReceipt40()

    {

    return$this-\&gt;container[&#39;receipt40&#39;];

    }

    publicfunctionsetReceipt40($receipt40)

    {

    $this-\&gt;container[&#39;receipt40&#39;] = $receipt40;

    return$this;

    }

    publicfunctiongetReceipt80()

    {

    return$this-\&gt;container[&#39;receipt80&#39;];

    }

    publicfunctionsetReceipt80($receipt80)

    {

    $this-\&gt;container[&#39;receipt80&#39;] = $receipt80;

    return$this;

    }

    publicfunctiongetPrintSignatureLine()

    {

    return$this-\&gt;container[&#39;print\_signature\_line&#39;];

    }

    publicfunctionsetPrintSignatureLine($print\_signature\_line)

    {

    $this-\&gt;container[&#39;print\_signature\_line&#39;] = $print\_signature\_line;

    return$this;

    }

    publicfunctiongetResponse()

    {

    return$this-\&gt;container[&#39;response&#39;];

    }

    publicfunctionsetResponse($response)

    {

    $this-\&gt;container[&#39;response&#39;] = $response;

    return$this;

    }

    publicfunctiongetAccountId()

    {

    return$this-\&gt;container[&#39;account\_id&#39;];

    }

    publicfunctionsetAccountId($account\_id)

    {

    $this-\&gt;container[&#39;account\_id&#39;] = $account\_id;

    return$this;

    }

    publicfunctiongetCopyEmailReceipt()

    {

    return$this-\&gt;container[&#39;copy\_email\_receipt&#39;];

    }

    publicfunctionsetCopyEmailReceipt($copy\_email\_receipt)

    {

    $this-\&gt;container[&#39;copy\_email\_receipt&#39;] = $copy\_email\_receipt;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# TerminalSettings

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classTerminalSettingsimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;TerminalSettings&#39;;

    protectedstatic$swaggerTypes = [

    &#39;id&#39; =\&gt; &#39;int&#39;,

    &#39;terminal\_id&#39; =\&gt; &#39;int&#39;,

    &#39;sec\_code&#39; =\&gt; &#39;string&#39;,

    &#39;gateway\_terminal&#39; =\&gt; &#39;bool&#39;,

    &#39;consumer\_credits&#39; =\&gt; &#39;bool&#39;,

    &#39;dl\_required&#39; =\&gt; &#39;bool&#39;,

    &#39;check\_verify&#39; =\&gt; &#39;bool&#39;,

    &#39;identity\_verify&#39; =\&gt; &#39;bool&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;id&#39; =\&gt; &#39;int32&#39;,

    &#39;terminal\_id&#39; =\&gt; &#39;int32&#39;,

    &#39;sec\_code&#39; =\&gt; null,

    &#39;gateway\_terminal&#39; =\&gt; null,

    &#39;consumer\_credits&#39; =\&gt; null,

    &#39;dl\_required&#39; =\&gt; null,

    &#39;check\_verify&#39; =\&gt; null,

    &#39;identity\_verify&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;id&#39; =\&gt; &#39;ID&#39;,

    &#39;terminal\_id&#39; =\&gt; &#39;Terminal\_ID&#39;,

    &#39;sec\_code&#39; =\&gt; &#39;SEC\_Code&#39;,

    &#39;gateway\_terminal&#39; =\&gt; &#39;Gateway\_Terminal&#39;,

    &#39;consumer\_credits&#39; =\&gt; &#39;Consumer\_Credits&#39;,

    &#39;dl\_required&#39; =\&gt; &#39;DL\_Required&#39;,

    &#39;check\_verify&#39; =\&gt; &#39;Check\_Verify&#39;,

    &#39;identity\_verify&#39; =\&gt; &#39;Identity\_Verify&#39;

    ];

    protectedstatic$setters = [

    &#39;id&#39; =\&gt; &#39;setId&#39;,

    &#39;terminal\_id&#39; =\&gt; &#39;setTerminalId&#39;,

    &#39;sec\_code&#39; =\&gt; &#39;setSecCode&#39;,

    &#39;gateway\_terminal&#39; =\&gt; &#39;setGatewayTerminal&#39;,

    &#39;consumer\_credits&#39; =\&gt; &#39;setConsumerCredits&#39;,

    &#39;dl\_required&#39; =\&gt; &#39;setDlRequired&#39;,

    &#39;check\_verify&#39; =\&gt; &#39;setCheckVerify&#39;,

    &#39;identity\_verify&#39; =\&gt; &#39;setIdentityVerify&#39;

    ];

    protectedstatic$getters = [

    &#39;id&#39; =\&gt; &#39;getId&#39;,

    &#39;terminal\_id&#39; =\&gt; &#39;getTerminalId&#39;,

    &#39;sec\_code&#39; =\&gt; &#39;getSecCode&#39;,

    &#39;gateway\_terminal&#39; =\&gt; &#39;getGatewayTerminal&#39;,

    &#39;consumer\_credits&#39; =\&gt; &#39;getConsumerCredits&#39;,

    &#39;dl\_required&#39; =\&gt; &#39;getDlRequired&#39;,

    &#39;check\_verify&#39; =\&gt; &#39;getCheckVerify&#39;,

    &#39;identity\_verify&#39; =\&gt; &#39;getIdentityVerify&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;id&#39;] = isset($data[&#39;id&#39;]) ? $data[&#39;id&#39;] : null;

    $this-\&gt;container[&#39;terminal\_id&#39;] = isset($data[&#39;terminal\_id&#39;]) ? $data[&#39;terminal\_id&#39;] : null;

    $this-\&gt;container[&#39;sec\_code&#39;] = isset($data[&#39;sec\_code&#39;]) ? $data[&#39;sec\_code&#39;] : null;

    $this-\&gt;container[&#39;gateway\_terminal&#39;] = isset($data[&#39;gateway\_terminal&#39;]) ? $data[&#39;gateway\_terminal&#39;] : null;

    $this-\&gt;container[&#39;consumer\_credits&#39;] = isset($data[&#39;consumer\_credits&#39;]) ? $data[&#39;consumer\_credits&#39;] : null;

    $this-\&gt;container[&#39;dl\_required&#39;] = isset($data[&#39;dl\_required&#39;]) ? $data[&#39;dl\_required&#39;] : null;

    $this-\&gt;container[&#39;check\_verify&#39;] = isset($data[&#39;check\_verify&#39;]) ? $data[&#39;check\_verify&#39;] : null;

    $this-\&gt;container[&#39;identity\_verify&#39;] = isset($data[&#39;identity\_verify&#39;]) ? $data[&#39;identity\_verify&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetId()

    {

    return$this-\&gt;container[&#39;id&#39;];

    }

    publicfunctionsetId($id)

    {

    $this-\&gt;container[&#39;id&#39;] = $id;

    return$this;

    }

    publicfunctiongetTerminalId()

    {

    return$this-\&gt;container[&#39;terminal\_id&#39;];

    }

    publicfunctionsetTerminalId($terminal\_id)

    {

    $this-\&gt;container[&#39;terminal\_id&#39;] = $terminal\_id;

    return$this;

    }

    publicfunctiongetSecCode()

    {

    return$this-\&gt;container[&#39;sec\_code&#39;];

    }

    publicfunctionsetSecCode($sec\_code)

    {

    $this-\&gt;container[&#39;sec\_code&#39;] = $sec\_code;

    return$this;

    }

    publicfunctiongetGatewayTerminal()

    {

    return$this-\&gt;container[&#39;gateway\_terminal&#39;];

    }

    publicfunctionsetGatewayTerminal($gateway\_terminal)

    {

    $this-\&gt;container[&#39;gateway\_terminal&#39;] = $gateway\_terminal;

    return$this;

    }

    publicfunctiongetConsumerCredits()

    {

    return$this-\&gt;container[&#39;consumer\_credits&#39;];

    }

    publicfunctionsetConsumerCredits($consumer\_credits)

    {

    $this-\&gt;container[&#39;consumer\_credits&#39;] = $consumer\_credits;

    return$this;

    }

    publicfunctiongetDlRequired()

    {

    return$this-\&gt;container[&#39;dl\_required&#39;];

    }

    publicfunctionsetDlRequired($dl\_required)

    {

    $this-\&gt;container[&#39;dl\_required&#39;] = $dl\_required;

    return$this;

    }

    publicfunctiongetCheckVerify()

    {

    return$this-\&gt;container[&#39;check\_verify&#39;];

    }

    publicfunctionsetCheckVerify($check\_verify)

    {

    $this-\&gt;container[&#39;check\_verify&#39;] = $check\_verify;

    return$this;

    }

    publicfunctiongetIdentityVerify()

    {

    return$this-\&gt;container[&#39;identity\_verify&#39;];

    }

    publicfunctionsetIdentityVerify($identity\_verify)

    {

    $this-\&gt;container[&#39;identity\_verify&#39;] = $identity\_verify;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# Transaction

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classTransactionimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;Transaction&#39;;

    protectedstatic$swaggerTypes = [

    &#39;submit\_time&#39; =\&gt; &#39;\DateTime&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_amt&#39; =\&gt; &#39;double&#39;,

    &#39;tran\_tax&#39; =\&gt; &#39;double&#39;,

    &#39;tran\_inv&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_po&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_c\_num&#39; =\&gt; &#39;string&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;string&#39;,

    &#39;card\_num&#39; =\&gt; &#39;string&#39;,

    &#39;card\_name&#39; =\&gt; &#39;string&#39;,

    &#39;card\_exp&#39; =\&gt; &#39;string&#39;,

    &#39;card\_type&#39; =\&gt; &#39;string&#39;,

    &#39;avs\_street&#39; =\&gt; &#39;string&#39;,

    &#39;avs\_zip&#39; =\&gt; &#39;string&#39;,

    &#39;cvv\_num&#39; =\&gt; &#39;string&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;string&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;string&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;string&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;string&#39;,

    &#39;avs\_code&#39; =\&gt; &#39;string&#39;,

    &#39;avs\_resp&#39; =\&gt; &#39;string&#39;,

    &#39;cvv\_code&#39; =\&gt; &#39;string&#39;,

    &#39;cvv\_resp&#39; =\&gt; &#39;string&#39;,

    &#39;items&#39; =\&gt; &#39;\Swagger\Client\Model\TransactionItem[]&#39;,

    &#39;business\_name&#39; =\&gt; &#39;string&#39;,

    &#39;business\_address&#39; =\&gt; &#39;string&#39;,

    &#39;business\_address2&#39; =\&gt; &#39;string&#39;,

    &#39;business\_city&#39; =\&gt; &#39;string&#39;,

    &#39;business\_state&#39; =\&gt; &#39;string&#39;,

    &#39;business\_zip&#39; =\&gt; &#39;string&#39;,

    &#39;business\_country&#39; =\&gt; &#39;string&#39;,

    &#39;business\_website&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_first\_name&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_last\_name&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_phone&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_fax&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_email&#39; =\&gt; &#39;string&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;string&#39;,

    &#39;ip&#39; =\&gt; &#39;string&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;bool&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;submit\_time&#39; =\&gt; &#39;date-time&#39;,

    &#39;tran\_type&#39; =\&gt; null,

    &#39;tran\_amt&#39; =\&gt; &#39;double&#39;,

    &#39;tran\_tax&#39; =\&gt; &#39;double&#39;,

    &#39;tran\_inv&#39; =\&gt; null,

    &#39;tran\_po&#39; =\&gt; null,

    &#39;tran\_c\_num&#39; =\&gt; null,

    &#39;tran\_note&#39; =\&gt; null,

    &#39;card\_num&#39; =\&gt; null,

    &#39;card\_name&#39; =\&gt; null,

    &#39;card\_exp&#39; =\&gt; null,

    &#39;card\_type&#39; =\&gt; null,

    &#39;avs\_street&#39; =\&gt; null,

    &#39;avs\_zip&#39; =\&gt; null,

    &#39;cvv\_num&#39; =\&gt; null,

    &#39;proc\_id&#39; =\&gt; null,

    &#39;proc\_resp&#39; =\&gt; null,

    &#39;proc\_code&#39; =\&gt; null,

    &#39;proc\_mess&#39; =\&gt; null,

    &#39;avs\_code&#39; =\&gt; null,

    &#39;avs\_resp&#39; =\&gt; null,

    &#39;cvv\_code&#39; =\&gt; null,

    &#39;cvv\_resp&#39; =\&gt; null,

    &#39;items&#39; =\&gt; null,

    &#39;business\_name&#39; =\&gt; null,

    &#39;business\_address&#39; =\&gt; null,

    &#39;business\_address2&#39; =\&gt; null,

    &#39;business\_city&#39; =\&gt; null,

    &#39;business\_state&#39; =\&gt; null,

    &#39;business\_zip&#39; =\&gt; null,

    &#39;business\_country&#39; =\&gt; null,

    &#39;business\_website&#39; =\&gt; null,

    &#39;contact\_first\_name&#39; =\&gt; null,

    &#39;contact\_last\_name&#39; =\&gt; null,

    &#39;contact\_phone&#39; =\&gt; null,

    &#39;contact\_fax&#39; =\&gt; null,

    &#39;contact\_email&#39; =\&gt; null,

    &#39;contact\_title&#39; =\&gt; null,

    &#39;ip&#39; =\&gt; null,

    &#39;tax\_exempt&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;submit\_time&#39; =\&gt; &#39;Submit\_Time&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;Tran\_Type&#39;,

    &#39;tran\_amt&#39; =\&gt; &#39;Tran\_Amt&#39;,

    &#39;tran\_tax&#39; =\&gt; &#39;Tran\_Tax&#39;,

    &#39;tran\_inv&#39; =\&gt; &#39;Tran\_Inv&#39;,

    &#39;tran\_po&#39; =\&gt; &#39;Tran\_PO&#39;,

    &#39;tran\_c\_num&#39; =\&gt; &#39;Tran\_CNum&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;Tran\_Note&#39;,

    &#39;card\_num&#39; =\&gt; &#39;Card\_Num&#39;,

    &#39;card\_name&#39; =\&gt; &#39;Card\_Name&#39;,

    &#39;card\_exp&#39; =\&gt; &#39;Card\_Exp&#39;,

    &#39;card\_type&#39; =\&gt; &#39;Card\_Type&#39;,

    &#39;avs\_street&#39; =\&gt; &#39;AVS\_Street&#39;,

    &#39;avs\_zip&#39; =\&gt; &#39;AVS\_Zip&#39;,

    &#39;cvv\_num&#39; =\&gt; &#39;CVV\_Num&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;Proc\_ID&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;Proc\_Resp&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;Proc\_Code&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;Proc\_Mess&#39;,

    &#39;avs\_code&#39; =\&gt; &#39;AVS\_Code&#39;,

    &#39;avs\_resp&#39; =\&gt; &#39;AVS\_Resp&#39;,

    &#39;cvv\_code&#39; =\&gt; &#39;CVV\_Code&#39;,

    &#39;cvv\_resp&#39; =\&gt; &#39;CVV\_Resp&#39;,

    &#39;items&#39; =\&gt; &#39;Items&#39;,

    &#39;business\_name&#39; =\&gt; &#39;Business\_Name&#39;,

    &#39;business\_address&#39; =\&gt; &#39;Business\_Address&#39;,

    &#39;business\_address2&#39; =\&gt; &#39;Business\_Address2&#39;,

    &#39;business\_city&#39; =\&gt; &#39;Business\_City&#39;,

    &#39;business\_state&#39; =\&gt; &#39;Business\_State&#39;,

    &#39;business\_zip&#39; =\&gt; &#39;Business\_Zip&#39;,

    &#39;business\_country&#39; =\&gt; &#39;Business\_Country&#39;,

    &#39;business\_website&#39; =\&gt; &#39;Business\_Website&#39;,

    &#39;contact\_first\_name&#39; =\&gt; &#39;Contact\_FirstName&#39;,

    &#39;contact\_last\_name&#39; =\&gt; &#39;Contact\_LastName&#39;,

    &#39;contact\_phone&#39; =\&gt; &#39;Contact\_Phone&#39;,

    &#39;contact\_fax&#39; =\&gt; &#39;Contact\_Fax&#39;,

    &#39;contact\_email&#39; =\&gt; &#39;Contact\_Email&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;Contact\_Title&#39;,

    &#39;ip&#39; =\&gt; &#39;IP&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;TaxExempt&#39;

    ];

    protectedstatic$setters = [

    &#39;submit\_time&#39; =\&gt; &#39;setSubmitTime&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;setTranType&#39;,

    &#39;tran\_amt&#39; =\&gt; &#39;setTranAmt&#39;,

    &#39;tran\_tax&#39; =\&gt; &#39;setTranTax&#39;,

    &#39;tran\_inv&#39; =\&gt; &#39;setTranInv&#39;,

    &#39;tran\_po&#39; =\&gt; &#39;setTranPo&#39;,

    &#39;tran\_c\_num&#39; =\&gt; &#39;setTranCNum&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;setTranNote&#39;,

    &#39;card\_num&#39; =\&gt; &#39;setCardNum&#39;,

    &#39;card\_name&#39; =\&gt; &#39;setCardName&#39;,

    &#39;card\_exp&#39; =\&gt; &#39;setCardExp&#39;,

    &#39;card\_type&#39; =\&gt; &#39;setCardType&#39;,

    &#39;avs\_street&#39; =\&gt; &#39;setAvsStreet&#39;,

    &#39;avs\_zip&#39; =\&gt; &#39;setAvsZip&#39;,

    &#39;cvv\_num&#39; =\&gt; &#39;setCvvNum&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;setProcId&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;setProcResp&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;setProcCode&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;setProcMess&#39;,

    &#39;avs\_code&#39; =\&gt; &#39;setAvsCode&#39;,

    &#39;avs\_resp&#39; =\&gt; &#39;setAvsResp&#39;,

    &#39;cvv\_code&#39; =\&gt; &#39;setCvvCode&#39;,

    &#39;cvv\_resp&#39; =\&gt; &#39;setCvvResp&#39;,

    &#39;items&#39; =\&gt; &#39;setItems&#39;,

    &#39;business\_name&#39; =\&gt; &#39;setBusinessName&#39;,

    &#39;business\_address&#39; =\&gt; &#39;setBusinessAddress&#39;,

    &#39;business\_address2&#39; =\&gt; &#39;setBusinessAddress2&#39;,

    &#39;business\_city&#39; =\&gt; &#39;setBusinessCity&#39;,

    &#39;business\_state&#39; =\&gt; &#39;setBusinessState&#39;,

    &#39;business\_zip&#39; =\&gt; &#39;setBusinessZip&#39;,

    &#39;business\_country&#39; =\&gt; &#39;setBusinessCountry&#39;,

    &#39;business\_website&#39; =\&gt; &#39;setBusinessWebsite&#39;,

    &#39;contact\_first\_name&#39; =\&gt; &#39;setContactFirstName&#39;,

    &#39;contact\_last\_name&#39; =\&gt; &#39;setContactLastName&#39;,

    &#39;contact\_phone&#39; =\&gt; &#39;setContactPhone&#39;,

    &#39;contact\_fax&#39; =\&gt; &#39;setContactFax&#39;,

    &#39;contact\_email&#39; =\&gt; &#39;setContactEmail&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;setContactTitle&#39;,

    &#39;ip&#39; =\&gt; &#39;setIp&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;setTaxExempt&#39;

    ];

    protectedstatic$getters = [

    &#39;submit\_time&#39; =\&gt; &#39;getSubmitTime&#39;,

    &#39;tran\_type&#39; =\&gt; &#39;getTranType&#39;,

    &#39;tran\_amt&#39; =\&gt; &#39;getTranAmt&#39;,

    &#39;tran\_tax&#39; =\&gt; &#39;getTranTax&#39;,

    &#39;tran\_inv&#39; =\&gt; &#39;getTranInv&#39;,

    &#39;tran\_po&#39; =\&gt; &#39;getTranPo&#39;,

    &#39;tran\_c\_num&#39; =\&gt; &#39;getTranCNum&#39;,

    &#39;tran\_note&#39; =\&gt; &#39;getTranNote&#39;,

    &#39;card\_num&#39; =\&gt; &#39;getCardNum&#39;,

    &#39;card\_name&#39; =\&gt; &#39;getCardName&#39;,

    &#39;card\_exp&#39; =\&gt; &#39;getCardExp&#39;,

    &#39;card\_type&#39; =\&gt; &#39;getCardType&#39;,

    &#39;avs\_street&#39; =\&gt; &#39;getAvsStreet&#39;,

    &#39;avs\_zip&#39; =\&gt; &#39;getAvsZip&#39;,

    &#39;cvv\_num&#39; =\&gt; &#39;getCvvNum&#39;,

    &#39;proc\_id&#39; =\&gt; &#39;getProcId&#39;,

    &#39;proc\_resp&#39; =\&gt; &#39;getProcResp&#39;,

    &#39;proc\_code&#39; =\&gt; &#39;getProcCode&#39;,

    &#39;proc\_mess&#39; =\&gt; &#39;getProcMess&#39;,

    &#39;avs\_code&#39; =\&gt; &#39;getAvsCode&#39;,

    &#39;avs\_resp&#39; =\&gt; &#39;getAvsResp&#39;,

    &#39;cvv\_code&#39; =\&gt; &#39;getCvvCode&#39;,

    &#39;cvv\_resp&#39; =\&gt; &#39;getCvvResp&#39;,

    &#39;items&#39; =\&gt; &#39;getItems&#39;,

    &#39;business\_name&#39; =\&gt; &#39;getBusinessName&#39;,

    &#39;business\_address&#39; =\&gt; &#39;getBusinessAddress&#39;,

    &#39;business\_address2&#39; =\&gt; &#39;getBusinessAddress2&#39;,

    &#39;business\_city&#39; =\&gt; &#39;getBusinessCity&#39;,

    &#39;business\_state&#39; =\&gt; &#39;getBusinessState&#39;,

    &#39;business\_zip&#39; =\&gt; &#39;getBusinessZip&#39;,

    &#39;business\_country&#39; =\&gt; &#39;getBusinessCountry&#39;,

    &#39;business\_website&#39; =\&gt; &#39;getBusinessWebsite&#39;,

    &#39;contact\_first\_name&#39; =\&gt; &#39;getContactFirstName&#39;,

    &#39;contact\_last\_name&#39; =\&gt; &#39;getContactLastName&#39;,

    &#39;contact\_phone&#39; =\&gt; &#39;getContactPhone&#39;,

    &#39;contact\_fax&#39; =\&gt; &#39;getContactFax&#39;,

    &#39;contact\_email&#39; =\&gt; &#39;getContactEmail&#39;,

    &#39;contact\_title&#39; =\&gt; &#39;getContactTitle&#39;,

    &#39;ip&#39; =\&gt; &#39;getIp&#39;,

    &#39;tax\_exempt&#39; =\&gt; &#39;getTaxExempt&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;submit\_time&#39;] = isset($data[&#39;submit\_time&#39;]) ? $data[&#39;submit\_time&#39;] : null;

    $this-\&gt;container[&#39;tran\_type&#39;] = isset($data[&#39;tran\_type&#39;]) ? $data[&#39;tran\_type&#39;] : null;

    $this-\&gt;container[&#39;tran\_amt&#39;] = isset($data[&#39;tran\_amt&#39;]) ? $data[&#39;tran\_amt&#39;] : null;

    $this-\&gt;container[&#39;tran\_tax&#39;] = isset($data[&#39;tran\_tax&#39;]) ? $data[&#39;tran\_tax&#39;] : null;

    $this-\&gt;container[&#39;tran\_inv&#39;] = isset($data[&#39;tran\_inv&#39;]) ? $data[&#39;tran\_inv&#39;] : null;

    $this-\&gt;container[&#39;tran\_po&#39;] = isset($data[&#39;tran\_po&#39;]) ? $data[&#39;tran\_po&#39;] : null;

    $this-\&gt;container[&#39;tran\_c\_num&#39;] = isset($data[&#39;tran\_c\_num&#39;]) ? $data[&#39;tran\_c\_num&#39;] : null;

    $this-\&gt;container[&#39;tran\_note&#39;] = isset($data[&#39;tran\_note&#39;]) ? $data[&#39;tran\_note&#39;] : null;

    $this-\&gt;container[&#39;card\_num&#39;] = isset($data[&#39;card\_num&#39;]) ? $data[&#39;card\_num&#39;] : null;

    $this-\&gt;container[&#39;card\_name&#39;] = isset($data[&#39;card\_name&#39;]) ? $data[&#39;card\_name&#39;] : null;

    $this-\&gt;container[&#39;card\_exp&#39;] = isset($data[&#39;card\_exp&#39;]) ? $data[&#39;card\_exp&#39;] : null;

    $this-\&gt;container[&#39;card\_type&#39;] = isset($data[&#39;card\_type&#39;]) ? $data[&#39;card\_type&#39;] : null;

    $this-\&gt;container[&#39;avs\_street&#39;] = isset($data[&#39;avs\_street&#39;]) ? $data[&#39;avs\_street&#39;] : null;

    $this-\&gt;container[&#39;avs\_zip&#39;] = isset($data[&#39;avs\_zip&#39;]) ? $data[&#39;avs\_zip&#39;] : null;

    $this-\&gt;container[&#39;cvv\_num&#39;] = isset($data[&#39;cvv\_num&#39;]) ? $data[&#39;cvv\_num&#39;] : null;

    $this-\&gt;container[&#39;proc\_id&#39;] = isset($data[&#39;proc\_id&#39;]) ? $data[&#39;proc\_id&#39;] : null;

    $this-\&gt;container[&#39;proc\_resp&#39;] = isset($data[&#39;proc\_resp&#39;]) ? $data[&#39;proc\_resp&#39;] : null;

    $this-\&gt;container[&#39;proc\_code&#39;] = isset($data[&#39;proc\_code&#39;]) ? $data[&#39;proc\_code&#39;] : null;

    $this-\&gt;container[&#39;proc\_mess&#39;] = isset($data[&#39;proc\_mess&#39;]) ? $data[&#39;proc\_mess&#39;] : null;

    $this-\&gt;container[&#39;avs\_code&#39;] = isset($data[&#39;avs\_code&#39;]) ? $data[&#39;avs\_code&#39;] : null;

    $this-\&gt;container[&#39;avs\_resp&#39;] = isset($data[&#39;avs\_resp&#39;]) ? $data[&#39;avs\_resp&#39;] : null;

    $this-\&gt;container[&#39;cvv\_code&#39;] = isset($data[&#39;cvv\_code&#39;]) ? $data[&#39;cvv\_code&#39;] : null;

    $this-\&gt;container[&#39;cvv\_resp&#39;] = isset($data[&#39;cvv\_resp&#39;]) ? $data[&#39;cvv\_resp&#39;] : null;

    $this-\&gt;container[&#39;items&#39;] = isset($data[&#39;items&#39;]) ? $data[&#39;items&#39;] : null;

    $this-\&gt;container[&#39;business\_name&#39;] = isset($data[&#39;business\_name&#39;]) ? $data[&#39;business\_name&#39;] : null;

    $this-\&gt;container[&#39;business\_address&#39;] = isset($data[&#39;business\_address&#39;]) ? $data[&#39;business\_address&#39;] : null;

    $this-\&gt;container[&#39;business\_address2&#39;] = isset($data[&#39;business\_address2&#39;]) ? $data[&#39;business\_address2&#39;] : null;

    $this-\&gt;container[&#39;business\_city&#39;] = isset($data[&#39;business\_city&#39;]) ? $data[&#39;business\_city&#39;] : null;

    $this-\&gt;container[&#39;business\_state&#39;] = isset($data[&#39;business\_state&#39;]) ? $data[&#39;business\_state&#39;] : null;

    $this-\&gt;container[&#39;business\_zip&#39;] = isset($data[&#39;business\_zip&#39;]) ? $data[&#39;business\_zip&#39;] : null;

    $this-\&gt;container[&#39;business\_country&#39;] = isset($data[&#39;business\_country&#39;]) ? $data[&#39;business\_country&#39;] : null;

    $this-\&gt;container[&#39;business\_website&#39;] = isset($data[&#39;business\_website&#39;]) ? $data[&#39;business\_website&#39;] : null;

    $this-\&gt;container[&#39;contact\_first\_name&#39;] = isset($data[&#39;contact\_first\_name&#39;]) ? $data[&#39;contact\_first\_name&#39;] : null;

    $this-\&gt;container[&#39;contact\_last\_name&#39;] = isset($data[&#39;contact\_last\_name&#39;]) ? $data[&#39;contact\_last\_name&#39;] : null;

    $this-\&gt;container[&#39;contact\_phone&#39;] = isset($data[&#39;contact\_phone&#39;]) ? $data[&#39;contact\_phone&#39;] : null;

    $this-\&gt;container[&#39;contact\_fax&#39;] = isset($data[&#39;contact\_fax&#39;]) ? $data[&#39;contact\_fax&#39;] : null;

    $this-\&gt;container[&#39;contact\_email&#39;] = isset($data[&#39;contact\_email&#39;]) ? $data[&#39;contact\_email&#39;] : null;

    $this-\&gt;container[&#39;contact\_title&#39;] = isset($data[&#39;contact\_title&#39;]) ? $data[&#39;contact\_title&#39;] : null;

    $this-\&gt;container[&#39;ip&#39;] = isset($data[&#39;ip&#39;]) ? $data[&#39;ip&#39;] : null;

    $this-\&gt;container[&#39;tax\_exempt&#39;] = isset($data[&#39;tax\_exempt&#39;]) ? $data[&#39;tax\_exempt&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetSubmitTime()

    {

    return$this-\&gt;container[&#39;submit\_time&#39;];

    }

    publicfunctionsetSubmitTime($submit\_time)

    {

    $this-\&gt;container[&#39;submit\_time&#39;] = $submit\_time;

    return$this;

    }

    publicfunctiongetTranType()

    {

    return$this-\&gt;container[&#39;tran\_type&#39;];

    }

    publicfunctionsetTranType($tran\_type)

    {

    $this-\&gt;container[&#39;tran\_type&#39;] = $tran\_type;

    return$this;

    }

    publicfunctiongetTranAmt()

    {

    return$this-\&gt;container[&#39;tran\_amt&#39;];

    }

    publicfunctionsetTranAmt($tran\_amt)

    {

    $this-\&gt;container[&#39;tran\_amt&#39;] = $tran\_amt;

    return$this;

    }

    publicfunctiongetTranTax()

    {

    return$this-\&gt;container[&#39;tran\_tax&#39;];

    }

    publicfunctionsetTranTax($tran\_tax)

    {

    $this-\&gt;container[&#39;tran\_tax&#39;] = $tran\_tax;

    return$this;

    }

    publicfunctiongetTranInv()

    {

    return$this-\&gt;container[&#39;tran\_inv&#39;];

    }

    publicfunctionsetTranInv($tran\_inv)

    {

    $this-\&gt;container[&#39;tran\_inv&#39;] = $tran\_inv;

    return$this;

    }

    publicfunctiongetTranPo()

    {

    return$this-\&gt;container[&#39;tran\_po&#39;];

    }

    publicfunctionsetTranPo($tran\_po)

    {

    $this-\&gt;container[&#39;tran\_po&#39;] = $tran\_po;

    return$this;

    }

    publicfunctiongetTranCNum()

    {

    return$this-\&gt;container[&#39;tran\_c\_num&#39;];

    }

    publicfunctionsetTranCNum($tran\_c\_num)

    {

    $this-\&gt;container[&#39;tran\_c\_num&#39;] = $tran\_c\_num;

    return$this;

    }

    publicfunctiongetTranNote()

    {

    return$this-\&gt;container[&#39;tran\_note&#39;];

    }

    publicfunctionsetTranNote($tran\_note)

    {

    $this-\&gt;container[&#39;tran\_note&#39;] = $tran\_note;

    return$this;

    }

    publicfunctiongetCardNum()

    {

    return$this-\&gt;container[&#39;card\_num&#39;];

    }

    publicfunctionsetCardNum($card\_num)

    {

    $this-\&gt;container[&#39;card\_num&#39;] = $card\_num;

    return$this;

    }

    publicfunctiongetCardName()

    {

    return$this-\&gt;container[&#39;card\_name&#39;];

    }

    publicfunctionsetCardName($card\_name)

    {

    $this-\&gt;container[&#39;card\_name&#39;] = $card\_name;

    return$this;

    }

    publicfunctiongetCardExp()

    {

    return$this-\&gt;container[&#39;card\_exp&#39;];

    }

    publicfunctionsetCardExp($card\_exp)

    {

    $this-\&gt;container[&#39;card\_exp&#39;] = $card\_exp;

    return$this;

    }

    publicfunctiongetCardType()

    {

    return$this-\&gt;container[&#39;card\_type&#39;];

    }

    publicfunctionsetCardType($card\_type)

    {

    $this-\&gt;container[&#39;card\_type&#39;] = $card\_type;

    return$this;

    }

    publicfunctiongetAvsStreet()

    {

    return$this-\&gt;container[&#39;avs\_street&#39;];

    }

    publicfunctionsetAvsStreet($avs\_street)

    {

    $this-\&gt;container[&#39;avs\_street&#39;] = $avs\_street;

    return$this;

    }

    publicfunctiongetAvsZip()

    {

    return$this-\&gt;container[&#39;avs\_zip&#39;];

    }

    publicfunctionsetAvsZip($avs\_zip)

    {

    $this-\&gt;container[&#39;avs\_zip&#39;] = $avs\_zip;

    return$this;

    }

    publicfunctiongetCvvNum()

    {

    return$this-\&gt;container[&#39;cvv\_num&#39;];

    }

    publicfunctionsetCvvNum($cvv\_num)

    {

    $this-\&gt;container[&#39;cvv\_num&#39;] = $cvv\_num;

    return$this;

    }

    publicfunctiongetProcId()

    {

    return$this-\&gt;container[&#39;proc\_id&#39;];

    }

    publicfunctionsetProcId($proc\_id)

    {

    $this-\&gt;container[&#39;proc\_id&#39;] = $proc\_id;

    return$this;

    }

    publicfunctiongetProcResp()

    {

    return$this-\&gt;container[&#39;proc\_resp&#39;];

    }

    publicfunctionsetProcResp($proc\_resp)

    {

    $this-\&gt;container[&#39;proc\_resp&#39;] = $proc\_resp;

    return$this;

    }

    publicfunctiongetProcCode()

    {

    return$this-\&gt;container[&#39;proc\_code&#39;];

    }

    publicfunctionsetProcCode($proc\_code)

    {

    $this-\&gt;container[&#39;proc\_code&#39;] = $proc\_code;

    return$this;

    }

    publicfunctiongetProcMess()

    {

    return$this-\&gt;container[&#39;proc\_mess&#39;];

    }

    publicfunctionsetProcMess($proc\_mess)

    {

    $this-\&gt;container[&#39;proc\_mess&#39;] = $proc\_mess;

    return$this;

    }

    publicfunctiongetAvsCode()

    {

    return$this-\&gt;container[&#39;avs\_code&#39;];

    }

    publicfunctionsetAvsCode($avs\_code)

    {

    $this-\&gt;container[&#39;avs\_code&#39;] = $avs\_code;

    return$this;

    }

    publicfunctiongetAvsResp()

    {

    return$this-\&gt;container[&#39;avs\_resp&#39;];

    }

    publicfunctionsetAvsResp($avs\_resp)

    {

    $this-\&gt;container[&#39;avs\_resp&#39;] = $avs\_resp;

    return$this;

    }

    publicfunctiongetCvvCode()

    {

    return$this-\&gt;container[&#39;cvv\_code&#39;];

    }

    publicfunctionsetCvvCode($cvv\_code)

    {

    $this-\&gt;container[&#39;cvv\_code&#39;] = $cvv\_code;

    return$this;

    }

    publicfunctiongetCvvResp()

    {

    return$this-\&gt;container[&#39;cvv\_resp&#39;];

    }

    publicfunctionsetCvvResp($cvv\_resp)

    {

    $this-\&gt;container[&#39;cvv\_resp&#39;] = $cvv\_resp;

    return$this;

    }

    publicfunctiongetItems()

    {

    return$this-\&gt;container[&#39;items&#39;];

    }

    publicfunctionsetItems($items)

    {

    $this-\&gt;container[&#39;items&#39;] = $items;

    return$this;

    }

    publicfunctiongetBusinessName()

    {

    return$this-\&gt;container[&#39;business\_name&#39;];

    }

    publicfunctionsetBusinessName($business\_name)

    {

    $this-\&gt;container[&#39;business\_name&#39;] = $business\_name;

    return$this;

    }

    publicfunctiongetBusinessAddress()

    {

    return$this-\&gt;container[&#39;business\_address&#39;];

    }

    publicfunctionsetBusinessAddress($business\_address)

    {

    $this-\&gt;container[&#39;business\_address&#39;] = $business\_address;

    return$this;

    }

    publicfunctiongetBusinessAddress2()

    {

    return$this-\&gt;container[&#39;business\_address2&#39;];

    }

    publicfunctionsetBusinessAddress2($business\_address2)

    {

    $this-\&gt;container[&#39;business\_address2&#39;] = $business\_address2;

    return$this;

    }

    publicfunctiongetBusinessCity()

    {

    return$this-\&gt;container[&#39;business\_city&#39;];

    }

    publicfunctionsetBusinessCity($business\_city)

    {

    $this-\&gt;container[&#39;business\_city&#39;] = $business\_city;

    return$this;

    }

    publicfunctiongetBusinessState()

    {

    return$this-\&gt;container[&#39;business\_state&#39;];

    }

    publicfunctionsetBusinessState($business\_state)

    {

    $this-\&gt;container[&#39;business\_state&#39;] = $business\_state;

    return$this;

    }

    publicfunctiongetBusinessZip()

    {

    return$this-\&gt;container[&#39;business\_zip&#39;];

    }

    publicfunctionsetBusinessZip($business\_zip)

    {

    $this-\&gt;container[&#39;business\_zip&#39;] = $business\_zip;

    return$this;

    }

    publicfunctiongetBusinessCountry()

    {

    return$this-\&gt;container[&#39;business\_country&#39;];

    }

    publicfunctionsetBusinessCountry($business\_country)

    {

    $this-\&gt;container[&#39;business\_country&#39;] = $business\_country;

    return$this;

    }

    publicfunctiongetBusinessWebsite()

    {

    return$this-\&gt;container[&#39;business\_website&#39;];

    }

    publicfunctionsetBusinessWebsite($business\_website)

    {

    $this-\&gt;container[&#39;business\_website&#39;] = $business\_website;

    return$this;

    }

    publicfunctiongetContactFirstName()

    {

    return$this-\&gt;container[&#39;contact\_first\_name&#39;];

    }

    publicfunctionsetContactFirstName($contact\_first\_name)

    {

    $this-\&gt;container[&#39;contact\_first\_name&#39;] = $contact\_first\_name;

    return$this;

    }

    publicfunctiongetContactLastName()

    {

    return$this-\&gt;container[&#39;contact\_last\_name&#39;];

    }

    publicfunctionsetContactLastName($contact\_last\_name)

    {

    $this-\&gt;container[&#39;contact\_last\_name&#39;] = $contact\_last\_name;

    return$this;

    }

    publicfunctiongetContactPhone()

    {

    return$this-\&gt;container[&#39;contact\_phone&#39;];

    }

    publicfunctionsetContactPhone($contact\_phone)

    {

    $this-\&gt;container[&#39;contact\_phone&#39;] = $contact\_phone;

    return$this;

    }

    publicfunctiongetContactFax()

    {

    return$this-\&gt;container[&#39;contact\_fax&#39;];

    }

    publicfunctionsetContactFax($contact\_fax)

    {

    $this-\&gt;container[&#39;contact\_fax&#39;] = $contact\_fax;

    return$this;

    }

    publicfunctiongetContactEmail()

    {

    return$this-\&gt;container[&#39;contact\_email&#39;];

    }

    publicfunctionsetContactEmail($contact\_email)

    {

    $this-\&gt;container[&#39;contact\_email&#39;] = $contact\_email;

    return$this;

    }

    publicfunctiongetContactTitle()

    {

    return$this-\&gt;container[&#39;contact\_title&#39;];

    }

    publicfunctionsetContactTitle($contact\_title)

    {

    $this-\&gt;container[&#39;contact\_title&#39;] = $contact\_title;

    return$this;

    }

    publicfunctiongetIp()

    {

    return$this-\&gt;container[&#39;ip&#39;];

    }

    publicfunctionsetIp($ip)

    {

    $this-\&gt;container[&#39;ip&#39;] = $ip;

    return$this;

    }

    publicfunctiongetTaxExempt()

    {

    return$this-\&gt;container[&#39;tax\_exempt&#39;];

    }

    publicfunctionsetTaxExempt($tax\_exempt)

    {

    $this-\&gt;container[&#39;tax\_exempt&#39;] = $tax\_exempt;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# TransactionItem

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classTransactionItemimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;TransactionItem&#39;;

    protectedstatic$swaggerTypes = [

    &#39;tax\_included&#39; =\&gt; &#39;bool&#39;,

    &#39;credit&#39; =\&gt; &#39;bool&#39;,

    &#39;extended\_amount&#39; =\&gt; &#39;double&#39;,

    &#39;item\_number&#39; =\&gt; &#39;string&#39;,

    &#39;unit\_cost&#39; =\&gt; &#39;double&#39;,

    &#39;quantity&#39; =\&gt; &#39;int&#39;,

    &#39;description&#39; =\&gt; &#39;string&#39;,

    &#39;discount&#39; =\&gt; &#39;double&#39;,

    &#39;tax&#39; =\&gt; &#39;double&#39;,

    &#39;commodity\_code&#39; =\&gt; &#39;string&#39;,

    &#39;unit\_of\_measure&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;tax\_included&#39; =\&gt; null,

    &#39;credit&#39; =\&gt; null,

    &#39;extended\_amount&#39; =\&gt; &#39;double&#39;,

    &#39;item\_number&#39; =\&gt; null,

    &#39;unit\_cost&#39; =\&gt; &#39;double&#39;,

    &#39;quantity&#39; =\&gt; &#39;int32&#39;,

    &#39;description&#39; =\&gt; null,

    &#39;discount&#39; =\&gt; &#39;double&#39;,

    &#39;tax&#39; =\&gt; &#39;double&#39;,

    &#39;commodity\_code&#39; =\&gt; null,

    &#39;unit\_of\_measure&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;tax\_included&#39; =\&gt; &#39;TaxIncluded&#39;,

    &#39;credit&#39; =\&gt; &#39;Credit&#39;,

    &#39;extended\_amount&#39; =\&gt; &#39;ExtendedAmount&#39;,

    &#39;item\_number&#39; =\&gt; &#39;ItemNumber&#39;,

    &#39;unit\_cost&#39; =\&gt; &#39;UnitCost&#39;,

    &#39;quantity&#39; =\&gt; &#39;Quantity&#39;,

    &#39;description&#39; =\&gt; &#39;Description&#39;,

    &#39;discount&#39; =\&gt; &#39;Discount&#39;,

    &#39;tax&#39; =\&gt; &#39;Tax&#39;,

    &#39;commodity\_code&#39; =\&gt; &#39;CommodityCode&#39;,

    &#39;unit\_of\_measure&#39; =\&gt; &#39;UnitOfMeasure&#39;

    ];

    protectedstatic$setters = [

    &#39;tax\_included&#39; =\&gt; &#39;setTaxIncluded&#39;,

    &#39;credit&#39; =\&gt; &#39;setCredit&#39;,

    &#39;extended\_amount&#39; =\&gt; &#39;setExtendedAmount&#39;,

    &#39;item\_number&#39; =\&gt; &#39;setItemNumber&#39;,

    &#39;unit\_cost&#39; =\&gt; &#39;setUnitCost&#39;,

    &#39;quantity&#39; =\&gt; &#39;setQuantity&#39;,

    &#39;description&#39; =\&gt; &#39;setDescription&#39;,

    &#39;discount&#39; =\&gt; &#39;setDiscount&#39;,

    &#39;tax&#39; =\&gt; &#39;setTax&#39;,

    &#39;commodity\_code&#39; =\&gt; &#39;setCommodityCode&#39;,

    &#39;unit\_of\_measure&#39; =\&gt; &#39;setUnitOfMeasure&#39;

    ];

    protectedstatic$getters = [

    &#39;tax\_included&#39; =\&gt; &#39;getTaxIncluded&#39;,

    &#39;credit&#39; =\&gt; &#39;getCredit&#39;,

    &#39;extended\_amount&#39; =\&gt; &#39;getExtendedAmount&#39;,

    &#39;item\_number&#39; =\&gt; &#39;getItemNumber&#39;,

    &#39;unit\_cost&#39; =\&gt; &#39;getUnitCost&#39;,

    &#39;quantity&#39; =\&gt; &#39;getQuantity&#39;,

    &#39;description&#39; =\&gt; &#39;getDescription&#39;,

    &#39;discount&#39; =\&gt; &#39;getDiscount&#39;,

    &#39;tax&#39; =\&gt; &#39;getTax&#39;,

    &#39;commodity\_code&#39; =\&gt; &#39;getCommodityCode&#39;,

    &#39;unit\_of\_measure&#39; =\&gt; &#39;getUnitOfMeasure&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;tax\_included&#39;] = isset($data[&#39;tax\_included&#39;]) ? $data[&#39;tax\_included&#39;] : null;

    $this-\&gt;container[&#39;credit&#39;] = isset($data[&#39;credit&#39;]) ? $data[&#39;credit&#39;] : null;

    $this-\&gt;container[&#39;extended\_amount&#39;] = isset($data[&#39;extended\_amount&#39;]) ? $data[&#39;extended\_amount&#39;] : null;

    $this-\&gt;container[&#39;item\_number&#39;] = isset($data[&#39;item\_number&#39;]) ? $data[&#39;item\_number&#39;] : null;

    $this-\&gt;container[&#39;unit\_cost&#39;] = isset($data[&#39;unit\_cost&#39;]) ? $data[&#39;unit\_cost&#39;] : null;

    $this-\&gt;container[&#39;quantity&#39;] = isset($data[&#39;quantity&#39;]) ? $data[&#39;quantity&#39;] : null;

    $this-\&gt;container[&#39;description&#39;] = isset($data[&#39;description&#39;]) ? $data[&#39;description&#39;] : null;

    $this-\&gt;container[&#39;discount&#39;] = isset($data[&#39;discount&#39;]) ? $data[&#39;discount&#39;] : null;

    $this-\&gt;container[&#39;tax&#39;] = isset($data[&#39;tax&#39;]) ? $data[&#39;tax&#39;] : null;

    $this-\&gt;container[&#39;commodity\_code&#39;] = isset($data[&#39;commodity\_code&#39;]) ? $data[&#39;commodity\_code&#39;] : null;

    $this-\&gt;container[&#39;unit\_of\_measure&#39;] = isset($data[&#39;unit\_of\_measure&#39;]) ? $data[&#39;unit\_of\_measure&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetTaxIncluded()

    {

    return$this-\&gt;container[&#39;tax\_included&#39;];

    }

    publicfunctionsetTaxIncluded($tax\_included)

    {

    $this-\&gt;container[&#39;tax\_included&#39;] = $tax\_included;

    return$this;

    }

    publicfunctiongetCredit()

    {

    return$this-\&gt;container[&#39;credit&#39;];

    }

    publicfunctionsetCredit($credit)

    {

    $this-\&gt;container[&#39;credit&#39;] = $credit;

    return$this;

    }

    publicfunctiongetExtendedAmount()

    {

    return$this-\&gt;container[&#39;extended\_amount&#39;];

    }

    publicfunctionsetExtendedAmount($extended\_amount)

    {

    $this-\&gt;container[&#39;extended\_amount&#39;] = $extended\_amount;

    return$this;

    }

    publicfunctiongetItemNumber()

    {

    return$this-\&gt;container[&#39;item\_number&#39;];

    }

    publicfunctionsetItemNumber($item\_number)

    {

    $this-\&gt;container[&#39;item\_number&#39;] = $item\_number;

    return$this;

    }

    publicfunctiongetUnitCost()

    {

    return$this-\&gt;container[&#39;unit\_cost&#39;];

    }

    publicfunctionsetUnitCost($unit\_cost)

    {

    $this-\&gt;container[&#39;unit\_cost&#39;] = $unit\_cost;

    return$this;

    }

    publicfunctiongetQuantity()

    {

    return$this-\&gt;container[&#39;quantity&#39;];

    }

    publicfunctionsetQuantity($quantity)

    {

    $this-\&gt;container[&#39;quantity&#39;] = $quantity;

    return$this;

    }

    publicfunctiongetDescription()

    {

    return$this-\&gt;container[&#39;description&#39;];

    }

    publicfunctionsetDescription($description)

    {

    $this-\&gt;container[&#39;description&#39;] = $description;

    return$this;

    }

    publicfunctiongetDiscount()

    {

    return$this-\&gt;container[&#39;discount&#39;];

    }

    publicfunctionsetDiscount($discount)

    {

    $this-\&gt;container[&#39;discount&#39;] = $discount;

    return$this;

    }

    publicfunctiongetTax()

    {

    return$this-\&gt;container[&#39;tax&#39;];

    }

    publicfunctionsetTax($tax)

    {

    $this-\&gt;container[&#39;tax&#39;] = $tax;

    return$this;

    }

    publicfunctiongetCommodityCode()

    {

    return$this-\&gt;container[&#39;commodity\_code&#39;];

    }

    publicfunctionsetCommodityCode($commodity\_code)

    {

    $this-\&gt;container[&#39;commodity\_code&#39;] = $commodity\_code;

    return$this;

    }

    publicfunctiongetUnitOfMeasure()

    {

    return$this-\&gt;container[&#39;unit\_of\_measure&#39;];

    }

    publicfunctionsetUnitOfMeasure($unit\_of\_measure)

    {

    $this-\&gt;container[&#39;unit\_of\_measure&#39;] = $unit\_of\_measure;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# TransactionType

    \&lt;?php

    namespaceSwagger\Client\Model;

    use \Swagger\Client\ObjectSerializer;

    classTransactionType

    {

    const SALE = &#39;Sale&#39;;

    const CREDIT = &#39;Credit&#39;;

    const AUTHORIZATION = &#39;Authorization&#39;;

    const PRE\_AUTH = &#39;PreAuth&#39;;

    const POST\_AUTH = &#39;PostAuth&#39;;

    const FORCE\_AUTH = &#39;ForceAuth&#39;;

    const VOID = &#39;Void&#39;;

    const QUERY = &#39;Query&#39;;

    const VERIFY = &#39;Verify&#39;;

    const MARK = &#39;Mark&#39;;

    const \_RETURN = &#39;Return&#39;;

    const \_USE = &#39;Use&#39;;

    publicstaticfunctiongetAllowableEnumValues()

    {

    return [

    self::SALE,

    self::CREDIT,

    self::AUTHORIZATION,

    self::PRE\_AUTH,

    self::POST\_AUTH,

    self::FORCE\_AUTH,

    self::VOID,

    self::QUERY,

    self::VERIFY,

    self::MARK,

    self::\_RETURN,

    self::\_USE,

    ];

    }

    }

# UpdateTransactionInfo

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classUpdateTransactionInfoimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;UpdateTransactionInfo&#39;;

    protectedstatic$swaggerTypes = [

    &#39;invoice\_number&#39; =\&gt; &#39;string&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;string&#39;,

    &#39;po\_number&#39; =\&gt; &#39;string&#39;,

    &#39;note&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;invoice\_number&#39; =\&gt; null,

    &#39;customer\_number&#39; =\&gt; null,

    &#39;po\_number&#39; =\&gt; null,

    &#39;note&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;invoice\_number&#39; =\&gt; &#39;InvoiceNumber&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;CustomerNumber&#39;,

    &#39;po\_number&#39; =\&gt; &#39;PONumber&#39;,

    &#39;note&#39; =\&gt; &#39;Note&#39;

    ];

    protectedstatic$setters = [

    &#39;invoice\_number&#39; =\&gt; &#39;setInvoiceNumber&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;setCustomerNumber&#39;,

    &#39;po\_number&#39; =\&gt; &#39;setPoNumber&#39;,

    &#39;note&#39; =\&gt; &#39;setNote&#39;

    ];

    protectedstatic$getters = [

    &#39;invoice\_number&#39; =\&gt; &#39;getInvoiceNumber&#39;,

    &#39;customer\_number&#39; =\&gt; &#39;getCustomerNumber&#39;,

    &#39;po\_number&#39; =\&gt; &#39;getPoNumber&#39;,

    &#39;note&#39; =\&gt; &#39;getNote&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;invoice\_number&#39;] = isset($data[&#39;invoice\_number&#39;]) ? $data[&#39;invoice\_number&#39;] : null;

    $this-\&gt;container[&#39;customer\_number&#39;] = isset($data[&#39;customer\_number&#39;]) ? $data[&#39;customer\_number&#39;] : null;

    $this-\&gt;container[&#39;po\_number&#39;] = isset($data[&#39;po\_number&#39;]) ? $data[&#39;po\_number&#39;] : null;

    $this-\&gt;container[&#39;note&#39;] = isset($data[&#39;note&#39;]) ? $data[&#39;note&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetInvoiceNumber()

    {

    return$this-\&gt;container[&#39;invoice\_number&#39;];

    }

    publicfunctionsetInvoiceNumber($invoice\_number)

    {

    $this-\&gt;container[&#39;invoice\_number&#39;] = $invoice\_number;

    return$this;

    }

    publicfunctiongetCustomerNumber()

    {

    return$this-\&gt;container[&#39;customer\_number&#39;];

    }

    publicfunctionsetCustomerNumber($customer\_number)

    {

    $this-\&gt;container[&#39;customer\_number&#39;] = $customer\_number;

    return$this;

    }

    publicfunctiongetPoNumber()

    {

    return$this-\&gt;container[&#39;po\_number&#39;];

    }

    publicfunctionsetPoNumber($po\_number)

    {

    $this-\&gt;container[&#39;po\_number&#39;] = $po\_number;

    return$this;

    }

    publicfunctiongetNote()

    {

    return$this-\&gt;container[&#39;note&#39;];

    }

    publicfunctionsetNote($note)

    {

    $this-\&gt;container[&#39;note&#39;] = $note;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# VaultCheck

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classVaultCheckimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;VaultCheck&#39;;

    protectedstatic$swaggerTypes = [

    &#39;response&#39; =\&gt; &#39;\Swagger\Client\Model\Response&#39;,

    &#39;check\_id&#39; =\&gt; &#39;int&#39;,

    &#39;main&#39; =\&gt; &#39;bool&#39;,

    &#39;check\_routing&#39; =\&gt; &#39;string&#39;,

    &#39;check\_account&#39; =\&gt; &#39;string&#39;,

    &#39;check\_number&#39; =\&gt; &#39;string&#39;,

    &#39;check\_first\_name&#39; =\&gt; &#39;string&#39;,

    &#39;check\_last\_name&#39; =\&gt; &#39;string&#39;,

    &#39;note&#39; =\&gt; &#39;string&#39;,

    &#39;masked\_routing&#39; =\&gt; &#39;string&#39;,

    &#39;masked\_account&#39; =\&gt; &#39;string&#39;,

    &#39;account\_type&#39; =\&gt; &#39;string&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;response&#39; =\&gt; null,

    &#39;check\_id&#39; =\&gt; &#39;int32&#39;,

    &#39;main&#39; =\&gt; null,

    &#39;check\_routing&#39; =\&gt; null,

    &#39;check\_account&#39; =\&gt; null,

    &#39;check\_number&#39; =\&gt; null,

    &#39;check\_first\_name&#39; =\&gt; null,

    &#39;check\_last\_name&#39; =\&gt; null,

    &#39;note&#39; =\&gt; null,

    &#39;masked\_routing&#39; =\&gt; null,

    &#39;masked\_account&#39; =\&gt; null,

    &#39;account\_type&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;response&#39; =\&gt; &#39;Response&#39;,

    &#39;check\_id&#39; =\&gt; &#39;CheckID&#39;,

    &#39;main&#39; =\&gt; &#39;Main&#39;,

    &#39;check\_routing&#39; =\&gt; &#39;CheckRouting&#39;,

    &#39;check\_account&#39; =\&gt; &#39;CheckAccount&#39;,

    &#39;check\_number&#39; =\&gt; &#39;CheckNumber&#39;,

    &#39;check\_first\_name&#39; =\&gt; &#39;CheckFirstName&#39;,

    &#39;check\_last\_name&#39; =\&gt; &#39;CheckLastName&#39;,

    &#39;note&#39; =\&gt; &#39;Note&#39;,

    &#39;masked\_routing&#39; =\&gt; &#39;MaskedRouting&#39;,

    &#39;masked\_account&#39; =\&gt; &#39;MaskedAccount&#39;,

    &#39;account\_type&#39; =\&gt; &#39;AccountType&#39;

    ];

    protectedstatic$setters = [

    &#39;response&#39; =\&gt; &#39;setResponse&#39;,

    &#39;check\_id&#39; =\&gt; &#39;setCheckId&#39;,

    &#39;main&#39; =\&gt; &#39;setMain&#39;,

    &#39;check\_routing&#39; =\&gt; &#39;setCheckRouting&#39;,

    &#39;check\_account&#39; =\&gt; &#39;setCheckAccount&#39;,

    &#39;check\_number&#39; =\&gt; &#39;setCheckNumber&#39;,

    &#39;check\_first\_name&#39; =\&gt; &#39;setCheckFirstName&#39;,

    &#39;check\_last\_name&#39; =\&gt; &#39;setCheckLastName&#39;,

    &#39;note&#39; =\&gt; &#39;setNote&#39;,

    &#39;masked\_routing&#39; =\&gt; &#39;setMaskedRouting&#39;,

    &#39;masked\_account&#39; =\&gt; &#39;setMaskedAccount&#39;,

    &#39;account\_type&#39; =\&gt; &#39;setAccountType&#39;

    ];

    protectedstatic$getters = [

    &#39;response&#39; =\&gt; &#39;getResponse&#39;,

    &#39;check\_id&#39; =\&gt; &#39;getCheckId&#39;,

    &#39;main&#39; =\&gt; &#39;getMain&#39;,

    &#39;check\_routing&#39; =\&gt; &#39;getCheckRouting&#39;,

    &#39;check\_account&#39; =\&gt; &#39;getCheckAccount&#39;,

    &#39;check\_number&#39; =\&gt; &#39;getCheckNumber&#39;,

    &#39;check\_first\_name&#39; =\&gt; &#39;getCheckFirstName&#39;,

    &#39;check\_last\_name&#39; =\&gt; &#39;getCheckLastName&#39;,

    &#39;note&#39; =\&gt; &#39;getNote&#39;,

    &#39;masked\_routing&#39; =\&gt; &#39;getMaskedRouting&#39;,

    &#39;masked\_account&#39; =\&gt; &#39;getMaskedAccount&#39;,

    &#39;account\_type&#39; =\&gt; &#39;getAccountType&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;response&#39;] = isset($data[&#39;response&#39;]) ? $data[&#39;response&#39;] : null;

    $this-\&gt;container[&#39;check\_id&#39;] = isset($data[&#39;check\_id&#39;]) ? $data[&#39;check\_id&#39;] : null;

    $this-\&gt;container[&#39;main&#39;] = isset($data[&#39;main&#39;]) ? $data[&#39;main&#39;] : null;

    $this-\&gt;container[&#39;check\_routing&#39;] = isset($data[&#39;check\_routing&#39;]) ? $data[&#39;check\_routing&#39;] : null;

    $this-\&gt;container[&#39;check\_account&#39;] = isset($data[&#39;check\_account&#39;]) ? $data[&#39;check\_account&#39;] : null;

    $this-\&gt;container[&#39;check\_number&#39;] = isset($data[&#39;check\_number&#39;]) ? $data[&#39;check\_number&#39;] : null;

    $this-\&gt;container[&#39;check\_first\_name&#39;] = isset($data[&#39;check\_first\_name&#39;]) ? $data[&#39;check\_first\_name&#39;] : null;

    $this-\&gt;container[&#39;check\_last\_name&#39;] = isset($data[&#39;check\_last\_name&#39;]) ? $data[&#39;check\_last\_name&#39;] : null;

    $this-\&gt;container[&#39;note&#39;] = isset($data[&#39;note&#39;]) ? $data[&#39;note&#39;] : null;

    $this-\&gt;container[&#39;masked\_routing&#39;] = isset($data[&#39;masked\_routing&#39;]) ? $data[&#39;masked\_routing&#39;] : null;

    $this-\&gt;container[&#39;masked\_account&#39;] = isset($data[&#39;masked\_account&#39;]) ? $data[&#39;masked\_account&#39;] : null;

    $this-\&gt;container[&#39;account\_type&#39;] = isset($data[&#39;account\_type&#39;]) ? $data[&#39;account\_type&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetResponse()

    {

    return$this-\&gt;container[&#39;response&#39;];

    }

    publicfunctionsetResponse($response)

    {

    $this-\&gt;container[&#39;response&#39;] = $response;

    return$this;

    }

    publicfunctiongetCheckId()

    {

    return$this-\&gt;container[&#39;check\_id&#39;];

    }

    publicfunctionsetCheckId($check\_id)

    {

    $this-\&gt;container[&#39;check\_id&#39;] = $check\_id;

    return$this;

    }

    publicfunctiongetMain()

    {

    return$this-\&gt;container[&#39;main&#39;];

    }

    publicfunctionsetMain($main)

    {

    $this-\&gt;container[&#39;main&#39;] = $main;

    return$this;

    }

    publicfunctiongetCheckRouting()

    {

    return$this-\&gt;container[&#39;check\_routing&#39;];

    }

    publicfunctionsetCheckRouting($check\_routing)

    {

    $this-\&gt;container[&#39;check\_routing&#39;] = $check\_routing;

    return$this;

    }

    publicfunctiongetCheckAccount()

    {

    return$this-\&gt;container[&#39;check\_account&#39;];

    }

    publicfunctionsetCheckAccount($check\_account)

    {

    $this-\&gt;container[&#39;check\_account&#39;] = $check\_account;

    return$this;

    }

    publicfunctiongetCheckNumber()

    {

    return$this-\&gt;container[&#39;check\_number&#39;];

    }

    publicfunctionsetCheckNumber($check\_number)

    {

    $this-\&gt;container[&#39;check\_number&#39;] = $check\_number;

    return$this;

    }

    publicfunctiongetCheckFirstName()

    {

    return$this-\&gt;container[&#39;check\_first\_name&#39;];

    }

    publicfunctionsetCheckFirstName($check\_first\_name)

    {

    $this-\&gt;container[&#39;check\_first\_name&#39;] = $check\_first\_name;

    return$this;

    }

    publicfunctiongetCheckLastName()

    {

    return$this-\&gt;container[&#39;check\_last\_name&#39;];

    }

    publicfunctionsetCheckLastName($check\_last\_name)

    {

    $this-\&gt;container[&#39;check\_last\_name&#39;] = $check\_last\_name;

    return$this;

    }

    publicfunctiongetNote()

    {

    return$this-\&gt;container[&#39;note&#39;];

    }

    publicfunctionsetNote($note)

    {

    $this-\&gt;container[&#39;note&#39;] = $note;

    return$this;

    }

    publicfunctiongetMaskedRouting()

    {

    return$this-\&gt;container[&#39;masked\_routing&#39;];

    }

    publicfunctionsetMaskedRouting($masked\_routing)

    {

    $this-\&gt;container[&#39;masked\_routing&#39;] = $masked\_routing;

    return$this;

    }

    publicfunctiongetMaskedAccount()

    {

    return$this-\&gt;container[&#39;masked\_account&#39;];

    }

    publicfunctionsetMaskedAccount($masked\_account)

    {

    $this-\&gt;container[&#39;masked\_account&#39;] = $masked\_account;

    return$this;

    }

    publicfunctiongetAccountType()

    {

    return$this-\&gt;container[&#39;account\_type&#39;];

    }

    publicfunctionsetAccountType($account\_type)

    {

    $this-\&gt;container[&#39;account\_type&#39;] = $account\_type;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }

# VaultCreditCard

    \&lt;?php

    namespaceSwagger\Client\Model;

    use\ArrayAccess;

    use \Swagger\Client\ObjectSerializer;

    classVaultCreditCardimplementsModelInterface, ArrayAccess

    {

    const DISCRIMINATOR = null;

    protectedstatic$swaggerModelName = &#39;VaultCreditCard&#39;;

    protectedstatic$swaggerTypes = [

    &#39;magnetic\_tracks&#39; =\&gt; &#39;string&#39;,

    &#39;track1&#39; =\&gt; &#39;string&#39;,

    &#39;track2&#39; =\&gt; &#39;string&#39;,

    &#39;number&#39; =\&gt; &#39;string&#39;,

    &#39;masked\_number&#39; =\&gt; &#39;string&#39;,

    &#39;holder&#39; =\&gt; &#39;string&#39;,

    &#39;exp\_date&#39; =\&gt; &#39;string&#39;,

    &#39;cvv&#39; =\&gt; &#39;string&#39;,

    &#39;address&#39; =\&gt; &#39;string&#39;,

    &#39;city&#39; =\&gt; &#39;string&#39;,

    &#39;state&#39; =\&gt; &#39;string&#39;,

    &#39;zip&#39; =\&gt; &#39;string&#39;,

    &#39;swiped&#39; =\&gt; &#39;bool&#39;,

    &#39;type\_string&#39; =\&gt; &#39;string&#39;,

    &#39;cvv\_type&#39; =\&gt; &#39;\Swagger\Client\Model\CVVPresenceType&#39;,

    &#39;not\_present&#39; =\&gt; &#39;bool&#39;,

    &#39;response&#39; =\&gt; &#39;\Swagger\Client\Model\Response&#39;,

    &#39;card\_id&#39; =\&gt; &#39;int&#39;,

    &#39;note&#39; =\&gt; &#39;string&#39;,

    &#39;main&#39; =\&gt; &#39;bool&#39;

    ];

    protectedstatic$swaggerFormats = [

    &#39;magnetic\_tracks&#39; =\&gt; null,

    &#39;track1&#39; =\&gt; null,

    &#39;track2&#39; =\&gt; null,

    &#39;number&#39; =\&gt; null,

    &#39;masked\_number&#39; =\&gt; null,

    &#39;holder&#39; =\&gt; null,

    &#39;exp\_date&#39; =\&gt; null,

    &#39;cvv&#39; =\&gt; null,

    &#39;address&#39; =\&gt; null,

    &#39;city&#39; =\&gt; null,

    &#39;state&#39; =\&gt; null,

    &#39;zip&#39; =\&gt; null,

    &#39;swiped&#39; =\&gt; null,

    &#39;type\_string&#39; =\&gt; null,

    &#39;cvv\_type&#39; =\&gt; null,

    &#39;not\_present&#39; =\&gt; null,

    &#39;response&#39; =\&gt; null,

    &#39;card\_id&#39; =\&gt; &#39;int32&#39;,

    &#39;note&#39; =\&gt; null,

    &#39;main&#39; =\&gt; null

    ];

    publicstaticfunctionswaggerTypes()

    {

    returnself::$swaggerTypes;

    }

    publicstaticfunctionswaggerFormats()

    {

    returnself::$swaggerFormats;

    }

    protectedstatic$attributeMap = [

    &#39;magnetic\_tracks&#39; =\&gt; &#39;MagneticTracks&#39;,

    &#39;track1&#39; =\&gt; &#39;Track1&#39;,

    &#39;track2&#39; =\&gt; &#39;Track2&#39;,

    &#39;number&#39; =\&gt; &#39;Number&#39;,

    &#39;masked\_number&#39; =\&gt; &#39;MaskedNumber&#39;,

    &#39;holder&#39; =\&gt; &#39;Holder&#39;,

    &#39;exp\_date&#39; =\&gt; &#39;ExpDate&#39;,

    &#39;cvv&#39; =\&gt; &#39;CVV&#39;,

    &#39;address&#39; =\&gt; &#39;Address&#39;,

    &#39;city&#39; =\&gt; &#39;City&#39;,

    &#39;state&#39; =\&gt; &#39;State&#39;,

    &#39;zip&#39; =\&gt; &#39;ZIP&#39;,

    &#39;swiped&#39; =\&gt; &#39;Swiped&#39;,

    &#39;type\_string&#39; =\&gt; &#39;TypeString&#39;,

    &#39;cvv\_type&#39; =\&gt; &#39;CVVType&#39;,

    &#39;not\_present&#39; =\&gt; &#39;NotPresent&#39;,

    &#39;response&#39; =\&gt; &#39;Response&#39;,

    &#39;card\_id&#39; =\&gt; &#39;CardID&#39;,

    &#39;note&#39; =\&gt; &#39;Note&#39;,

    &#39;main&#39; =\&gt; &#39;Main&#39;

    ];

    protectedstatic$setters = [

    &#39;magnetic\_tracks&#39; =\&gt; &#39;setMagneticTracks&#39;,

    &#39;track1&#39; =\&gt; &#39;setTrack1&#39;,

    &#39;track2&#39; =\&gt; &#39;setTrack2&#39;,

    &#39;number&#39; =\&gt; &#39;setNumber&#39;,

    &#39;masked\_number&#39; =\&gt; &#39;setMaskedNumber&#39;,

    &#39;holder&#39; =\&gt; &#39;setHolder&#39;,

    &#39;exp\_date&#39; =\&gt; &#39;setExpDate&#39;,

    &#39;cvv&#39; =\&gt; &#39;setCvv&#39;,

    &#39;address&#39; =\&gt; &#39;setAddress&#39;,

    &#39;city&#39; =\&gt; &#39;setCity&#39;,

    &#39;state&#39; =\&gt; &#39;setState&#39;,

    &#39;zip&#39; =\&gt; &#39;setZip&#39;,

    &#39;swiped&#39; =\&gt; &#39;setSwiped&#39;,

    &#39;type\_string&#39; =\&gt; &#39;setTypeString&#39;,

    &#39;cvv\_type&#39; =\&gt; &#39;setCvvType&#39;,

    &#39;not\_present&#39; =\&gt; &#39;setNotPresent&#39;,

    &#39;response&#39; =\&gt; &#39;setResponse&#39;,

    &#39;card\_id&#39; =\&gt; &#39;setCardId&#39;,

    &#39;note&#39; =\&gt; &#39;setNote&#39;,

    &#39;main&#39; =\&gt; &#39;setMain&#39;

    ];

    protectedstatic$getters = [

    &#39;magnetic\_tracks&#39; =\&gt; &#39;getMagneticTracks&#39;,

    &#39;track1&#39; =\&gt; &#39;getTrack1&#39;,

    &#39;track2&#39; =\&gt; &#39;getTrack2&#39;,

    &#39;number&#39; =\&gt; &#39;getNumber&#39;,

    &#39;masked\_number&#39; =\&gt; &#39;getMaskedNumber&#39;,

    &#39;holder&#39; =\&gt; &#39;getHolder&#39;,

    &#39;exp\_date&#39; =\&gt; &#39;getExpDate&#39;,

    &#39;cvv&#39; =\&gt; &#39;getCvv&#39;,

    &#39;address&#39; =\&gt; &#39;getAddress&#39;,

    &#39;city&#39; =\&gt; &#39;getCity&#39;,

    &#39;state&#39; =\&gt; &#39;getState&#39;,

    &#39;zip&#39; =\&gt; &#39;getZip&#39;,

    &#39;swiped&#39; =\&gt; &#39;getSwiped&#39;,

    &#39;type\_string&#39; =\&gt; &#39;getTypeString&#39;,

    &#39;cvv\_type&#39; =\&gt; &#39;getCvvType&#39;,

    &#39;not\_present&#39; =\&gt; &#39;getNotPresent&#39;,

    &#39;response&#39; =\&gt; &#39;getResponse&#39;,

    &#39;card\_id&#39; =\&gt; &#39;getCardId&#39;,

    &#39;note&#39; =\&gt; &#39;getNote&#39;,

    &#39;main&#39; =\&gt; &#39;getMain&#39;

    ];

    publicstaticfunctionattributeMap()

    {

    returnself::$attributeMap;

    }

    publicstaticfunctionsetters()

    {

    returnself::$setters;

    }

    publicstaticfunctiongetters()

    {

    returnself::$getters;

    }

    publicfunctiongetModelName()

    {

    returnself::$swaggerModelName;

    }

    protected$container = [];

    publicfunction\_\_construct(array$data = null)

    {

    $this-\&gt;container[&#39;magnetic\_tracks&#39;] = isset($data[&#39;magnetic\_tracks&#39;]) ? $data[&#39;magnetic\_tracks&#39;] : null;

    $this-\&gt;container[&#39;track1&#39;] = isset($data[&#39;track1&#39;]) ? $data[&#39;track1&#39;] : null;

    $this-\&gt;container[&#39;track2&#39;] = isset($data[&#39;track2&#39;]) ? $data[&#39;track2&#39;] : null;

    $this-\&gt;container[&#39;number&#39;] = isset($data[&#39;number&#39;]) ? $data[&#39;number&#39;] : null;

    $this-\&gt;container[&#39;masked\_number&#39;] = isset($data[&#39;masked\_number&#39;]) ? $data[&#39;masked\_number&#39;] : null;

    $this-\&gt;container[&#39;holder&#39;] = isset($data[&#39;holder&#39;]) ? $data[&#39;holder&#39;] : null;

    $this-\&gt;container[&#39;exp\_date&#39;] = isset($data[&#39;exp\_date&#39;]) ? $data[&#39;exp\_date&#39;] : null;

    $this-\&gt;container[&#39;cvv&#39;] = isset($data[&#39;cvv&#39;]) ? $data[&#39;cvv&#39;] : null;

    $this-\&gt;container[&#39;address&#39;] = isset($data[&#39;address&#39;]) ? $data[&#39;address&#39;] : null;

    $this-\&gt;container[&#39;city&#39;] = isset($data[&#39;city&#39;]) ? $data[&#39;city&#39;] : null;

    $this-\&gt;container[&#39;state&#39;] = isset($data[&#39;state&#39;]) ? $data[&#39;state&#39;] : null;

    $this-\&gt;container[&#39;zip&#39;] = isset($data[&#39;zip&#39;]) ? $data[&#39;zip&#39;] : null;

    $this-\&gt;container[&#39;swiped&#39;] = isset($data[&#39;swiped&#39;]) ? $data[&#39;swiped&#39;] : null;

    $this-\&gt;container[&#39;type\_string&#39;] = isset($data[&#39;type\_string&#39;]) ? $data[&#39;type\_string&#39;] : null;

    $this-\&gt;container[&#39;cvv\_type&#39;] = isset($data[&#39;cvv\_type&#39;]) ? $data[&#39;cvv\_type&#39;] : null;

    $this-\&gt;container[&#39;not\_present&#39;] = isset($data[&#39;not\_present&#39;]) ? $data[&#39;not\_present&#39;] : null;

    $this-\&gt;container[&#39;response&#39;] = isset($data[&#39;response&#39;]) ? $data[&#39;response&#39;] : null;

    $this-\&gt;container[&#39;card\_id&#39;] = isset($data[&#39;card\_id&#39;]) ? $data[&#39;card\_id&#39;] : null;

    $this-\&gt;container[&#39;note&#39;] = isset($data[&#39;note&#39;]) ? $data[&#39;note&#39;] : null;

    $this-\&gt;container[&#39;main&#39;] = isset($data[&#39;main&#39;]) ? $data[&#39;main&#39;] : null;

    }

    publicfunctionlistInvalidProperties()

    {

    $invalidProperties = [];

    return$invalidProperties;

    }

    publicfunctionvalid()

    {

    returncount($this-\&gt;listInvalidProperties()) === 0;

    }

    publicfunctiongetMagneticTracks()

    {

    return$this-\&gt;container[&#39;magnetic\_tracks&#39;];

    }

    publicfunctionsetMagneticTracks($magnetic\_tracks)

    {

    $this-\&gt;container[&#39;magnetic\_tracks&#39;] = $magnetic\_tracks;

    return$this;

    }

    publicfunctiongetTrack1()

    {

    return$this-\&gt;container[&#39;track1&#39;];

    }

    publicfunctionsetTrack1($track1)

    {

    $this-\&gt;container[&#39;track1&#39;] = $track1;

    return$this;

    }

    publicfunctiongetTrack2()

    {

    return$this-\&gt;container[&#39;track2&#39;];

    }

    publicfunctionsetTrack2($track2)

    {

    $this-\&gt;container[&#39;track2&#39;] = $track2;

    return$this;

    }

    publicfunctiongetNumber()

    {

    return$this-\&gt;container[&#39;number&#39;];

    }

    publicfunctionsetNumber($number)

    {

    $this-\&gt;container[&#39;number&#39;] = $number;

    return$this;

    }

    publicfunctiongetMaskedNumber()

    {

    return$this-\&gt;container[&#39;masked\_number&#39;];

    }

    publicfunctionsetMaskedNumber($masked\_number)

    {

    $this-\&gt;container[&#39;masked\_number&#39;] = $masked\_number;

    return$this;

    }

    publicfunctiongetHolder()

    {

    return$this-\&gt;container[&#39;holder&#39;];

    }

    publicfunctionsetHolder($holder)

    {

    $this-\&gt;container[&#39;holder&#39;] = $holder;

    return$this;

    }

    publicfunctiongetExpDate()

    {

    return$this-\&gt;container[&#39;exp\_date&#39;];

    }

    publicfunctionsetExpDate($exp\_date)

    {

    $this-\&gt;container[&#39;exp\_date&#39;] = $exp\_date;

    return$this;

    }

    publicfunctiongetCvv()

    {

    return$this-\&gt;container[&#39;cvv&#39;];

    }

    publicfunctionsetCvv($cvv)

    {

    $this-\&gt;container[&#39;cvv&#39;] = $cvv;

    return$this;

    }

    publicfunctiongetAddress()

    {

    return$this-\&gt;container[&#39;address&#39;];

    }

    publicfunctionsetAddress($address)

    {

    $this-\&gt;container[&#39;address&#39;] = $address;

    return$this;

    }

    publicfunctiongetCity()

    {

    return$this-\&gt;container[&#39;city&#39;];

    }

    publicfunctionsetCity($city)

    {

    $this-\&gt;container[&#39;city&#39;] = $city;

    return$this;

    }

    publicfunctiongetState()

    {

    return$this-\&gt;container[&#39;state&#39;];

    }

    publicfunctionsetState($state)

    {

    $this-\&gt;container[&#39;state&#39;] = $state;

    return$this;

    }

    publicfunctiongetZip()

    {

    return$this-\&gt;container[&#39;zip&#39;];

    }

    publicfunctionsetZip($zip)

    {

    $this-\&gt;container[&#39;zip&#39;] = $zip;

    return$this;

    }

    publicfunctiongetSwiped()

    {

    return$this-\&gt;container[&#39;swiped&#39;];

    }

    publicfunctionsetSwiped($swiped)

    {

    $this-\&gt;container[&#39;swiped&#39;] = $swiped;

    return$this;

    }

    publicfunctiongetTypeString()

    {

    return$this-\&gt;container[&#39;type\_string&#39;];

    }

    publicfunctionsetTypeString($type\_string)

    {

    $this-\&gt;container[&#39;type\_string&#39;] = $type\_string;

    return$this;

    }

    publicfunctiongetCvvType()

    {

    return$this-\&gt;container[&#39;cvv\_type&#39;];

    }

    publicfunctionsetCvvType($cvv\_type)

    {

    $this-\&gt;container[&#39;cvv\_type&#39;] = $cvv\_type;

    return$this;

    }

    publicfunctiongetNotPresent()

    {

    return$this-\&gt;container[&#39;not\_present&#39;];

    }

    publicfunctionsetNotPresent($not\_present)

    {

    $this-\&gt;container[&#39;not\_present&#39;] = $not\_present;

    return$this;

    }

    publicfunctiongetResponse()

    {

    return$this-\&gt;container[&#39;response&#39;];

    }

    publicfunctionsetResponse($response)

    {

    $this-\&gt;container[&#39;response&#39;] = $response;

    return$this;

    }

    publicfunctiongetCardId()

    {

    return$this-\&gt;container[&#39;card\_id&#39;];

    }

    publicfunctionsetCardId($card\_id)

    {

    $this-\&gt;container[&#39;card\_id&#39;] = $card\_id;

    return$this;

    }

    publicfunctiongetNote()

    {

    return$this-\&gt;container[&#39;note&#39;];

    }

    publicfunctionsetNote($note)

    {

    $this-\&gt;container[&#39;note&#39;] = $note;

    return$this;

    }

    publicfunctiongetMain()

    {

    return$this-\&gt;container[&#39;main&#39;];

    }

    publicfunctionsetMain($main)

    {

    $this-\&gt;container[&#39;main&#39;] = $main;

    return$this;

    }

    publicfunctionoffsetExists($offset)

    {

    returnisset($this-\&gt;container[$offset]);

    }

    publicfunctionoffsetGet($offset)

    {

    returnisset($this-\&gt;container[$offset]) ? $this-\&gt;container[$offset] : null;

    }

    publicfunctionoffsetSet($offset, $value)

    {

    if (is\_null($offset)) {

    $this-\&gt;container[] = $value;

    } else {

    $this-\&gt;container[$offset] = $value;

    }

    }

    publicfunctionoffsetUnset($offset)

    {

    unset($this-\&gt;container[$offset]);

    }

    publicfunction\_\_toString()

    {

    if (defined(&#39;JSON\_PRETTY\_PRINT&#39;)) { // use JSON pretty print

    returnjson\_encode(

    ObjectSerializer::sanitizeForSerialization($this),

    JSON\_PRETTY\_PRINT

    );

    }

    returnjson\_encode(ObjectSerializer::sanitizeForSerialization($this));

    }

    }
