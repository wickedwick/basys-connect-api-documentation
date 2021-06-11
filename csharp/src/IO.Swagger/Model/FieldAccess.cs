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
    public enum FieldAccess
    {
        [EnumMember(Value = "Disabled")]
        Disabled = 1,

        [EnumMember(Value = "Enabled")]
        Enabled = 2,

        [EnumMember(Value = "Required")]
        Required = 3
    }
}
