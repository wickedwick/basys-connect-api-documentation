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
    public partial class VaultCheck :  IEquatable<VaultCheck>, IValidatableObject
    {
        public VaultCheck(Response response = default(Response), int? checkID = default(int?), bool? main = default(bool?), string checkRouting = default(string), string checkAccount = default(string), string checkNumber = default(string), string checkFirstName = default(string), string checkLastName = default(string), string note = default(string), string maskedRouting = default(string), string maskedAccount = default(string), string accountType = default(string))
        {
            this.Response = response;
            this.CheckID = checkID;
            this.Main = main;
            this.CheckRouting = checkRouting;
            this.CheckAccount = checkAccount;
            this.CheckNumber = checkNumber;
            this.CheckFirstName = checkFirstName;
            this.CheckLastName = checkLastName;
            this.Note = note;
            this.MaskedRouting = maskedRouting;
            this.MaskedAccount = maskedAccount;
            this.AccountType = accountType;
        }

        [DataMember(Name="Response", EmitDefaultValue=false)]
        public Response Response { get; set; }

        [DataMember(Name="CheckID", EmitDefaultValue=false)]
        public int? CheckID { get; set; }

        [DataMember(Name="Main", EmitDefaultValue=false)]
        public bool? Main { get; set; }

        [DataMember(Name="CheckRouting", EmitDefaultValue=false)]
        public string CheckRouting { get; set; }

        [DataMember(Name="CheckAccount", EmitDefaultValue=false)]
        public string CheckAccount { get; set; }

        [DataMember(Name="CheckNumber", EmitDefaultValue=false)]
        public string CheckNumber { get; set; }

        [DataMember(Name="CheckFirstName", EmitDefaultValue=false)]
        public string CheckFirstName { get; set; }

        [DataMember(Name="CheckLastName", EmitDefaultValue=false)]
        public string CheckLastName { get; set; }

        [DataMember(Name="Note", EmitDefaultValue=false)]
        public string Note { get; set; }

        [DataMember(Name="MaskedRouting", EmitDefaultValue=false)]
        public string MaskedRouting { get; set; }

        [DataMember(Name="MaskedAccount", EmitDefaultValue=false)]
        public string MaskedAccount { get; set; }

        [DataMember(Name="AccountType", EmitDefaultValue=false)]
        public string AccountType { get; set; }
    }
}
