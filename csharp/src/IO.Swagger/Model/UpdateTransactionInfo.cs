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
    public partial class UpdateTransactionInfo :  IEquatable<UpdateTransactionInfo>, IValidatableObject
    {
        public UpdateTransactionInfo(string invoiceNumber = default(string), string customerNumber = default(string), string pONumber = default(string), string note = default(string))
        {
            this.InvoiceNumber = invoiceNumber;
            this.CustomerNumber = customerNumber;
            this.PONumber = pONumber;
            this.Note = note;
        }

        [DataMember(Name="InvoiceNumber", EmitDefaultValue=false)]
        public string InvoiceNumber { get; set; }

        [DataMember(Name="CustomerNumber", EmitDefaultValue=false)]
        public string CustomerNumber { get; set; }

        [DataMember(Name="PONumber", EmitDefaultValue=false)]
        public string PONumber { get; set; }

        [DataMember(Name="Note", EmitDefaultValue=false)]
        public string Note { get; set; }
    }
}
