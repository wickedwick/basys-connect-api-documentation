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
    [DataContract]
    public partial class ReceiptCustomLines :  IEquatable<ReceiptCustomLines>, IValidatableObject
    {
        public ReceiptCustomLines(string customLine1 = default(string), string customLine2 = default(string), string customLine3 = default(string), string customLine4 = default(string))
        {
            this.CustomLine1 = customLine1;
            this.CustomLine2 = customLine2;
            this.CustomLine3 = customLine3;
            this.CustomLine4 = customLine4;
        }

        [DataMember(Name="CustomLine1", EmitDefaultValue=false)]
        public string CustomLine1 { get; set; }

        [DataMember(Name="CustomLine2", EmitDefaultValue=false)]
        public string CustomLine2 { get; set; }

        [DataMember(Name="CustomLine3", EmitDefaultValue=false)]
        public string CustomLine3 { get; set; }

        [DataMember(Name="CustomLine4", EmitDefaultValue=false)]
        public string CustomLine4 { get; set; }
    }
}
