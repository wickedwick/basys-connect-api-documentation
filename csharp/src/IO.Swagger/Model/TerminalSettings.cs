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
    public partial class TerminalSettings :  IEquatable<TerminalSettings>, IValidatableObject
    {
        public TerminalSettings(int? iD = default(int?), int? terminalID = default(int?), string sECCode = default(string), bool? gatewayTerminal = default(bool?), bool? consumerCredits = default(bool?), bool? dLRequired = default(bool?), bool? checkVerify = default(bool?), bool? identityVerify = default(bool?))
        {
            this.ID = iD;
            this.TerminalID = terminalID;
            this.SECCode = sECCode;
            this.GatewayTerminal = gatewayTerminal;
            this.ConsumerCredits = consumerCredits;
            this.DLRequired = dLRequired;
            this.CheckVerify = checkVerify;
            this.IdentityVerify = identityVerify;
        }

        [DataMember(Name="ID", EmitDefaultValue=false)]
        public int? ID { get; set; }

        [DataMember(Name="Terminal_ID", EmitDefaultValue=false)]
        public int? TerminalID { get; set; }

        [DataMember(Name="SEC_Code", EmitDefaultValue=false)]
        public string SECCode { get; set; }

        [DataMember(Name="Gateway_Terminal", EmitDefaultValue=false)]
        public bool? GatewayTerminal { get; set; }

        [DataMember(Name="Consumer_Credits", EmitDefaultValue=false)]
        public bool? ConsumerCredits { get; set; }

        [DataMember(Name="DL_Required", EmitDefaultValue=false)]
        public bool? DLRequired { get; set; }

        [DataMember(Name="Check_Verify", EmitDefaultValue=false)]
        public bool? CheckVerify { get; set; }

        [DataMember(Name="Identity_Verify", EmitDefaultValue=false)]
        public bool? IdentityVerify { get; set; }
    }
}
