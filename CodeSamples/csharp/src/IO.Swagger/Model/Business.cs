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
    public partial class Business :  IEquatable<Business>, IValidatableObject
    {
        public Business(Address address = default(Address), string name = default(string), string phone = default(string), string fax = default(string), string webSite = default(string))
        {
            this.Address = address;
            this.Name = name;
            this.Phone = phone;
            this.Fax = fax;
            this.WebSite = webSite;
        }

        [DataMember(Name="Address", EmitDefaultValue=false)]
        public Address Address { get; set; }

        [DataMember(Name="Name", EmitDefaultValue=false)]
        public string Name { get; set; }

        [DataMember(Name="Phone", EmitDefaultValue=false)]
        public string Phone { get; set; }

        [DataMember(Name="Fax", EmitDefaultValue=false)]
        public string Fax { get; set; }

        [DataMember(Name="WebSite", EmitDefaultValue=false)]
        public string WebSite { get; set; }
    }
}
