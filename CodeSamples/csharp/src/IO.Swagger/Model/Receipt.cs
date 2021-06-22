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
    public partial class Receipt :  IEquatable<Receipt>, IValidatableObject
    {
        public Receipt(ReceiptCustomLines header = default(ReceiptCustomLines), ReceiptCustomLines footer = default(ReceiptCustomLines))
        {
            this.Header = header;
            this.Footer = footer;
        }

        [DataMember(Name="Header", EmitDefaultValue=false)]
        public ReceiptCustomLines Header { get; set; }

        [DataMember(Name="Footer", EmitDefaultValue=false)]
        public ReceiptCustomLines Footer { get; set; }
    }
}
