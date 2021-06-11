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
    public partial class Address :  IEquatable<Address>, IValidatableObject
    {
        public Address(string addressLine1 = default(string), string addressLine2 = default(string), string city = default(string), string state = default(string), string zipCode = default(string))
        {
            this.AddressLine1 = addressLine1;
            this.AddressLine2 = addressLine2;
            this.City = city;
            this.State = state;
            this.ZipCode = zipCode;
        }

        [DataMember(Name="AddressLine1", EmitDefaultValue=false)]
        public string AddressLine1 { get; set; }

        [DataMember(Name="AddressLine2", EmitDefaultValue=false)]
        public string AddressLine2 { get; set; }

        [DataMember(Name="City", EmitDefaultValue=false)]
        public string City { get; set; }

        [DataMember(Name="State", EmitDefaultValue=false)]
        public string State { get; set; }

        [DataMember(Name="ZipCode", EmitDefaultValue=false)]
        public string ZipCode { get; set; }
    }
}
