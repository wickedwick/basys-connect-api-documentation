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
    public enum CheckAccountType
    {
        [EnumMember(Value = "Unknown")]
        Unknown = 1,

        [EnumMember(Value = "Checking")]
        Checking = 2,

        [EnumMember(Value = "Savings")]
        Savings = 3
    }
}
