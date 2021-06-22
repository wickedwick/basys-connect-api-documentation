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
    public partial class Record :  IEquatable<Record>, IValidatableObject
    {
        public Record(Response response = default(Response), int? iD = default(int?), string reference = default(string), Business business = default(Business), Contact contact = default(Contact), string pO = default(string), string invoice = default(string), string customer = default(string), bool? taxExempt = default(bool?), string note = default(string), List<VaultCreditCard> creditCards = default(List<VaultCreditCard>), List<VaultCheck> checks = default(List<VaultCheck>))
        {
            this.Response = response;
            this.ID = iD;
            this.Reference = reference;
            this.Business = business;
            this.Contact = contact;
            this.PO = pO;
            this.Invoice = invoice;
            this.Customer = customer;
            this.TaxExempt = taxExempt;
            this.Note = note;
            this.CreditCards = creditCards;
            this.Checks = checks;
        }

        [DataMember(Name="Response", EmitDefaultValue=false)]
        public Response Response { get; set; }

        [DataMember(Name="ID", EmitDefaultValue=false)]
        public int? ID { get; set; }

        [DataMember(Name="Reference", EmitDefaultValue=false)]
        public string Reference { get; set; }

        [DataMember(Name="Business", EmitDefaultValue=false)]
        public Business Business { get; set; }

        [DataMember(Name="Contact", EmitDefaultValue=false)]
        public Contact Contact { get; set; }

        [DataMember(Name="PO", EmitDefaultValue=false)]
        public string PO { get; set; }

        [DataMember(Name="Invoice", EmitDefaultValue=false)]
        public string Invoice { get; set; }

        [DataMember(Name="Customer", EmitDefaultValue=false)]
        public string Customer { get; set; }

        [DataMember(Name="TaxExempt", EmitDefaultValue=false)]
        public bool? TaxExempt { get; set; }

        [DataMember(Name="Note", EmitDefaultValue=false)]
        public string Note { get; set; }

        [DataMember(Name="CreditCards", EmitDefaultValue=false)]
        public List<VaultCreditCard> CreditCards { get; set; }

        [DataMember(Name="Checks", EmitDefaultValue=false)]
        public List<VaultCheck> Checks { get; set; }
    }
}
