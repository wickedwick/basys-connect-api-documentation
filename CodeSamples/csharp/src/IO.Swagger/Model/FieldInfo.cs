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
    public partial class FieldInfo :  IEquatable<FieldInfo>, IValidatableObject
    {
        public FieldInfo(FieldAccess access = default(FieldAccess), string _default = default(string))
        {
            this.Access = access;
            this._Default = _default;
        }

        [DataMember(Name="Access", EmitDefaultValue=false)]
        public FieldAccess Access { get; set; }

        [DataMember(Name="Default", EmitDefaultValue=false)]
        public string _Default { get; set; }
    }
}
