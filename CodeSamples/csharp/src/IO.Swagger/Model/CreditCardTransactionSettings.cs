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
    public partial class CreditCardTransactionSettings :  IEquatable<CreditCardTransactionSettings>, IValidatableObject
    {
        public CreditCardTransactionSettings(FieldInfo cVV = default(FieldInfo), FieldInfo contactName = default(FieldInfo), FieldInfo contactTitle = default(FieldInfo), FieldInfo emailAddress = default(FieldInfo), FieldInfo phone = default(FieldInfo), FieldInfo fax = default(FieldInfo), FieldInfo billingAddress = default(FieldInfo), FieldInfo billingAddress2 = default(FieldInfo), FieldInfo billingCity = default(FieldInfo), FieldInfo billingState = default(FieldInfo), FieldInfo billingZip = default(FieldInfo), FieldInfo pONumber = default(FieldInfo), FieldInfo invoiceNumber = default(FieldInfo), FieldInfo businessName = default(FieldInfo), FieldInfo customerNumber = default(FieldInfo), FieldInfo referenceNote = default(FieldInfo), FieldInfo salesTax = default(FieldInfo), FieldInfo taxExempt = default(FieldInfo), FieldInfo cardTracks = default(FieldInfo), FieldInfo cardZip = default(FieldInfo), FieldInfo cardAddress = default(FieldInfo), string itemDescription = default(string), TransactionType defaultTransactionType = default(TransactionType))
        {
            this.CVV = cVV;
            this.ContactName = contactName;
            this.ContactTitle = contactTitle;
            this.EmailAddress = emailAddress;
            this.Phone = phone;
            this.Fax = fax;
            this.BillingAddress = billingAddress;
            this.BillingAddress2 = billingAddress2;
            this.BillingCity = billingCity;
            this.BillingState = billingState;
            this.BillingZip = billingZip;
            this.PONumber = pONumber;
            this.InvoiceNumber = invoiceNumber;
            this.BusinessName = businessName;
            this.CustomerNumber = customerNumber;
            this.ReferenceNote = referenceNote;
            this.SalesTax = salesTax;
            this.TaxExempt = taxExempt;
            this.CardTracks = cardTracks;
            this.CardZip = cardZip;
            this.CardAddress = cardAddress;
            this.ItemDescription = itemDescription;
            this.DefaultTransactionType = defaultTransactionType;
        }

        [DataMember(Name="CVV", EmitDefaultValue=false)]
        public FieldInfo CVV { get; set; }

        [DataMember(Name="ContactName", EmitDefaultValue=false)]
        public FieldInfo ContactName { get; set; }

        [DataMember(Name="ContactTitle", EmitDefaultValue=false)]
        public FieldInfo ContactTitle { get; set; }

        [DataMember(Name="EmailAddress", EmitDefaultValue=false)]
        public FieldInfo EmailAddress { get; set; }

        [DataMember(Name="Phone", EmitDefaultValue=false)]
        public FieldInfo Phone { get; set; }

        [DataMember(Name="Fax", EmitDefaultValue=false)]
        public FieldInfo Fax { get; set; }

        [DataMember(Name="BillingAddress", EmitDefaultValue=false)]
        public FieldInfo BillingAddress { get; set; }

        [DataMember(Name="BillingAddress2", EmitDefaultValue=false)]
        public FieldInfo BillingAddress2 { get; set; }

        [DataMember(Name="BillingCity", EmitDefaultValue=false)]
        public FieldInfo BillingCity { get; set; }

        [DataMember(Name="BillingState", EmitDefaultValue=false)]
        public FieldInfo BillingState { get; set; }

        [DataMember(Name="BillingZip", EmitDefaultValue=false)]
        public FieldInfo BillingZip { get; set; }

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

        [DataMember(Name="SalesTax", EmitDefaultValue=false)]
        public FieldInfo SalesTax { get; set; }

        [DataMember(Name="TaxExempt", EmitDefaultValue=false)]
        public FieldInfo TaxExempt { get; set; }

        [DataMember(Name="CardTracks", EmitDefaultValue=false)]
        public FieldInfo CardTracks { get; set; }

        [DataMember(Name="CardZip", EmitDefaultValue=false)]
        public FieldInfo CardZip { get; set; }

        [DataMember(Name="CardAddress", EmitDefaultValue=false)]
        public FieldInfo CardAddress { get; set; }

        [DataMember(Name="ItemDescription", EmitDefaultValue=false)]
        public string ItemDescription { get; set; }

        [DataMember(Name="DefaultTransactionType", EmitDefaultValue=false)]
        public TransactionType DefaultTransactionType { get; set; }
    }
}
