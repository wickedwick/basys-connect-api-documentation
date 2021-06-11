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
        public enum CheckTransactionType
    {
        [EnumMember(Value = "Unknown")]
        Unknown = 1,
        [EnumMember(Value = "Authorize")]
        Authorize = 2,

        [EnumMember(Value = "Void")]
        Void = 3,

        [EnumMember(Value = "Override")]
        Override = 4,

        [EnumMember(Value = "Payroll")]
        Payroll = 5,

        [EnumMember(Value = "Recurring")]
        Recurring = 6,

        [EnumMember(Value = "Refund")]
        Refund = 7    }
}
