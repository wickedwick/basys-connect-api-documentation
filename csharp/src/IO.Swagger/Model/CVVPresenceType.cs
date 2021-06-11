using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using System.ComponentModel.DataAnnotations;
using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

namespace IO.Swagger.Model
{
    [JsonConverter(typeof(StringEnumConverter))]
    public enum CVVPresenceType
    {
        [EnumMember(Value = "Normal")]
        Normal = 1,

        [EnumMember(Value = "Bypass")]
        Bypass = 2,

        [EnumMember(Value = "Illegible")]
        Illegible = 3,

        [EnumMember(Value = "NotAvailable")]
        NotAvailable = 4
    }
}
