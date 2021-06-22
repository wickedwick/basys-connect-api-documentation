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
    public partial class SearchVault :  IEquatable<SearchVault>, IValidatableObject
    {
        public SearchVault(string reference = default(string), string businessName = default(string), string firstName = default(string), string lastName = default(string))
        {
            this.Reference = reference;
            this.BusinessName = businessName;
            this.FirstName = firstName;
            this.LastName = lastName;
        }

        [DataMember(Name="Reference", EmitDefaultValue=false)]
        public string Reference { get; set; }

        [DataMember(Name="BusinessName", EmitDefaultValue=false)]
        public string BusinessName { get; set; }

        [DataMember(Name="FirstName", EmitDefaultValue=false)]
        public string FirstName { get; set; }

        [DataMember(Name="LastName", EmitDefaultValue=false)]
        public string LastName { get; set; }
    }
}
