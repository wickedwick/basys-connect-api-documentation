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
    public enum TransactionType
    {
        [EnumMember(Value = "Sale")]
        Sale = 1,

        [EnumMember(Value = "Credit")]
        Credit = 2,

        [EnumMember(Value = "Authorization")]
        Authorization = 3,

        [EnumMember(Value = "PreAuth")]
        PreAuth = 4,

        [EnumMember(Value = "PostAuth")]
        PostAuth = 5,

        [EnumMember(Value = "ForceAuth")]
        ForceAuth = 6,

        [EnumMember(Value = "Void")]
        Void = 7,

        [EnumMember(Value = "Query")]
        Query = 8,

        [EnumMember(Value = "Verify")]
        Verify = 9,

        [EnumMember(Value = "Mark")]
        Mark = 10,

        [EnumMember(Value = "Return")]
        Return = 11,

        [EnumMember(Value = "Use")]
        Use = 12
    }
}
