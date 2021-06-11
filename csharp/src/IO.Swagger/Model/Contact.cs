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
    public partial class Contact :  IEquatable<Contact>, IValidatableObject
    {
        public Contact(string firstName = default(string), string lastName = default(string), string name = default(string), string title = default(string), string phone = default(string), string email = default(string))
        {
            this.FirstName = firstName;
            this.LastName = lastName;
            this.Name = name;
            this.Title = title;
            this.Phone = phone;
            this.Email = email;
        }

        [DataMember(Name="FirstName", EmitDefaultValue=false)]
        public string FirstName { get; set; }

        [DataMember(Name="LastName", EmitDefaultValue=false)]
        public string LastName { get; set; }

        [DataMember(Name="Name", EmitDefaultValue=false)]
        public string Name { get; set; }

        [DataMember(Name="Title", EmitDefaultValue=false)]
        public string Title { get; set; }

        [DataMember(Name="Phone", EmitDefaultValue=false)]
        public string Phone { get; set; }

        [DataMember(Name="Email", EmitDefaultValue=false)]
        public string Email { get; set; }
    }
}
