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
    public partial class Settings :  IEquatable<Settings>, IValidatableObject
    {
        public Settings(CreditCardTransactionSettings creditCardTransactionSettings = default(CreditCardTransactionSettings), CheckTransactionSettings checkTransactionSettings = default(CheckTransactionSettings), Business business = default(Business), Contact mainContact = default(Contact), Receipt receipt40 = default(Receipt), Receipt receipt80 = default(Receipt), bool? printSignatureLine = default(bool?), Response response = default(Response), string accountID = default(string), FieldInfo copyEmailReceipt = default(FieldInfo))
        {
            this.CreditCardTransactionSettings = creditCardTransactionSettings;
            this.CheckTransactionSettings = checkTransactionSettings;
            this.Business = business;
            this.MainContact = mainContact;
            this.Receipt40 = receipt40;
            this.Receipt80 = receipt80;
            this.PrintSignatureLine = printSignatureLine;
            this.Response = response;
            this.AccountID = accountID;
            this.CopyEmailReceipt = copyEmailReceipt;
        }

        [DataMember(Name="CreditCardTransactionSettings", EmitDefaultValue=false)]
        public CreditCardTransactionSettings CreditCardTransactionSettings { get; set; }

        [DataMember(Name="CheckTransactionSettings", EmitDefaultValue=false)]
        public CheckTransactionSettings CheckTransactionSettings { get; set; }

        [DataMember(Name="Business", EmitDefaultValue=false)]
        public Business Business { get; set; }

        [DataMember(Name="MainContact", EmitDefaultValue=false)]
        public Contact MainContact { get; set; }

        [DataMember(Name="Receipt40", EmitDefaultValue=false)]
        public Receipt Receipt40 { get; set; }

        [DataMember(Name="Receipt80", EmitDefaultValue=false)]
        public Receipt Receipt80 { get; set; }

        [DataMember(Name="PrintSignatureLine", EmitDefaultValue=false)]
        public bool? PrintSignatureLine { get; set; }

        [DataMember(Name="Response", EmitDefaultValue=false)]
        public Response Response { get; set; }

        [DataMember(Name="AccountID", EmitDefaultValue=false)]
        public string AccountID { get; set; }

        [DataMember(Name="CopyEmailReceipt", EmitDefaultValue=false)]
        public FieldInfo CopyEmailReceipt { get; set; }
    }
}
