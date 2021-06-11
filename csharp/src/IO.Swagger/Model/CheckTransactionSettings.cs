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
    public partial class CheckTransactionSettings :  IEquatable<CheckTransactionSettings>, IValidatableObject
    {
        public CheckTransactionSettings(FieldInfo reader = default(FieldInfo), FieldInfo contactName = default(FieldInfo), FieldInfo contactTitle = default(FieldInfo), FieldInfo emailAddress = default(FieldInfo), string phoneDefault = default(string), FieldInfo fax = default(FieldInfo), string billingAddressDefault = default(string), FieldInfo billingAddress2 = default(FieldInfo), string billingCityDefault = default(string), string billingStateDefault = default(string), string billingZipDefault = default(string), FieldInfo pONumber = default(FieldInfo), FieldInfo invoiceNumber = default(FieldInfo), FieldInfo businessName = default(FieldInfo), FieldInfo customerNumber = default(FieldInfo), FieldInfo referenceNote = default(FieldInfo), string defaultSECCode = default(string))
        {
            this.Reader = reader;
            this.ContactName = contactName;
            this.ContactTitle = contactTitle;
            this.EmailAddress = emailAddress;
            this.PhoneDefault = phoneDefault;
            this.Fax = fax;
            this.BillingAddressDefault = billingAddressDefault;
            this.BillingAddress2 = billingAddress2;
            this.BillingCityDefault = billingCityDefault;
            this.BillingStateDefault = billingStateDefault;
            this.BillingZipDefault = billingZipDefault;
            this.PONumber = pONumber;
            this.InvoiceNumber = invoiceNumber;
            this.BusinessName = businessName;
            this.CustomerNumber = customerNumber;
            this.ReferenceNote = referenceNote;
            this.DefaultSECCode = defaultSECCode;
        }

        [DataMember(Name="Reader", EmitDefaultValue=false)]
        public FieldInfo Reader { get; set; }

        [DataMember(Name="ContactName", EmitDefaultValue=false)]
        public FieldInfo ContactName { get; set; }

        [DataMember(Name="ContactTitle", EmitDefaultValue=false)]
        public FieldInfo ContactTitle { get; set; }

        [DataMember(Name="EmailAddress", EmitDefaultValue=false)]
        public FieldInfo EmailAddress { get; set; }

        [DataMember(Name="PhoneDefault", EmitDefaultValue=false)]
        public string PhoneDefault { get; set; }

        [DataMember(Name="Fax", EmitDefaultValue=false)]
        public FieldInfo Fax { get; set; }

        [DataMember(Name="BillingAddressDefault", EmitDefaultValue=false)]
        public string BillingAddressDefault { get; set; }

        [DataMember(Name="BillingAddress2", EmitDefaultValue=false)]
        public FieldInfo BillingAddress2 { get; set; }

        [DataMember(Name="BillingCityDefault", EmitDefaultValue=false)]
        public string BillingCityDefault { get; set; }

        [DataMember(Name="BillingStateDefault", EmitDefaultValue=false)]
        public string BillingStateDefault { get; set; }

        [DataMember(Name="BillingZipDefault", EmitDefaultValue=false)]
        public string BillingZipDefault { get; set; }

        [DataMember(Name="PONumber", EmitDefaultValue=false)]
        public FieldInfo PONumber { get; set; }

        [DataMember(Name="InvoiceNumber", EmitDefaultValue=false)]
        public FieldInfo InvoiceNumber { get; set; }

        [DataMember(Name="BusinessName", EmitDefaultValue=false)]
        public FieldInfo BusinessName { get; set; }

        [DataMember(Name="CustomerNumber", EmitDefaultValue=false)]
        public FieldInfo CustomerNumber { get; set; }

        [DataMember(Name="ReferenceNote", EmitDefaultValue=false)]
        public FieldInfo ReferenceNote { get; set; }

        [DataMember(Name="DefaultSECCode", EmitDefaultValue=false)]
        public string DefaultSECCode { get; set; }
    }
}
