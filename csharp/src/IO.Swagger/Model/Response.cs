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
    public partial class Response :  IEquatable<Response>, IValidatableObject
    {
        public Response(bool? error = default(bool?), string message = default(string))
        {
            this.Error = error;
            this.Message = message;
        }

        [DataMember(Name="Error", EmitDefaultValue=false)]
        public bool? Error { get; set; }

        [DataMember(Name="Message", EmitDefaultValue=false)]
        public string Message { get; set; }
    }
}
