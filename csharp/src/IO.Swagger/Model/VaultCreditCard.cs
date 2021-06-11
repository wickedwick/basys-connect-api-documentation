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
    public partial class VaultCreditCard :  IEquatable<VaultCreditCard>, IValidatableObject
    {
        public VaultCreditCard(string magneticTracks = default(string), string track1 = default(string), string track2 = default(string), string number = default(string), string maskedNumber = default(string), string holder = default(string), string expDate = default(string), string cVV = default(string), string address = default(string), string city = default(string), string state = default(string), string zIP = default(string), bool? swiped = default(bool?), string typeString = default(string), CVVPresenceType cVVType = default(CVVPresenceType), bool? notPresent = default(bool?), Response response = default(Response), int? cardID = default(int?), string note = default(string), bool? main = default(bool?))
        {
            this.MagneticTracks = magneticTracks;
            this.Track1 = track1;
            this.Track2 = track2;
            this.Number = number;
            this.MaskedNumber = maskedNumber;
            this.Holder = holder;
            this.ExpDate = expDate;
            this.CVV = cVV;
            this.Address = address;
            this.City = city;
            this.State = state;
            this.ZIP = zIP;
            this.Swiped = swiped;
            this.TypeString = typeString;
            this.CVVType = cVVType;
            this.NotPresent = notPresent;
            this.Response = response;
            this.CardID = cardID;
            this.Note = note;
            this.Main = main;
        }

        [DataMember(Name="MagneticTracks", EmitDefaultValue=false)]
        public string MagneticTracks { get; set; }

        [DataMember(Name="Track1", EmitDefaultValue=false)]
        public string Track1 { get; set; }

        [DataMember(Name="Track2", EmitDefaultValue=false)]
        public string Track2 { get; set; }

        [DataMember(Name="Number", EmitDefaultValue=false)]
        public string Number { get; set; }

        [DataMember(Name="MaskedNumber", EmitDefaultValue=false)]
        public string MaskedNumber { get; set; }

        [DataMember(Name="Holder", EmitDefaultValue=false)]
        public string Holder { get; set; }

        [DataMember(Name="ExpDate", EmitDefaultValue=false)]
        public string ExpDate { get; set; }

        [DataMember(Name="CVV", EmitDefaultValue=false)]
        public string CVV { get; set; }

        [DataMember(Name="Address", EmitDefaultValue=false)]
        public string Address { get; set; }

        [DataMember(Name="City", EmitDefaultValue=false)]
        public string City { get; set; }

        [DataMember(Name="State", EmitDefaultValue=false)]
        public string State { get; set; }

        [DataMember(Name="ZIP", EmitDefaultValue=false)]
        public string ZIP { get; set; }

        [DataMember(Name="Swiped", EmitDefaultValue=false)]
        public bool? Swiped { get; set; }

        [DataMember(Name="TypeString", EmitDefaultValue=false)]
        public string TypeString { get; set; }

        [DataMember(Name="CVVType", EmitDefaultValue=false)]
        public CVVPresenceType CVVType { get; set; }

        [DataMember(Name="NotPresent", EmitDefaultValue=false)]
        public bool? NotPresent { get; set; }

        [DataMember(Name="Response", EmitDefaultValue=false)]
        public Response Response { get; set; }

        [DataMember(Name="CardID", EmitDefaultValue=false)]
        public int? CardID { get; set; }

        [DataMember(Name="Note", EmitDefaultValue=false)]
        public string Note { get; set; }

        [DataMember(Name="Main", EmitDefaultValue=false)]
        public bool? Main { get; set; }
    }
}
