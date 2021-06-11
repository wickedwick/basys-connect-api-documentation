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
    public partial class EmailReceipt :  IEquatable<EmailReceipt>, IValidatableObject
    {
        public EmailReceipt(string transactionID = default(string), string toAddresses = default(string), string subject = default(string), string header = default(string), string footer = default(string))
        {
            this.TransactionID = transactionID;
            this.ToAddresses = toAddresses;
            this.Subject = subject;
            this.Header = header;
            this.Footer = footer;
        }

        [DataMember(Name="TransactionID", EmitDefaultValue=false)]
        public string TransactionID { get; set; }

        [DataMember(Name="ToAddresses", EmitDefaultValue=false)]
        public string ToAddresses { get; set; }

        [DataMember(Name="Subject", EmitDefaultValue=false)]
        public string Subject { get; set; }

        [DataMember(Name="Header", EmitDefaultValue=false)]
        public string Header { get; set; }

        [DataMember(Name="Footer", EmitDefaultValue=false)]
        public string Footer { get; set; }
    }
}
