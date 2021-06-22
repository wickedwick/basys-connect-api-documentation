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
    public partial class Batch :  IEquatable<Batch>, IValidatableObject
    {
        public Batch(string batchNumber = default(string), DateTime? started = default(DateTime?), DateTime? completed = default(DateTime?), string salesCount = default(string), double? salesSum = default(double?), string returnCount = default(string), double? returnSum = default(double?), bool? batchError = default(bool?))
        {
            this.BatchNumber = batchNumber;
            this.Started = started;
            this.Completed = completed;
            this.SalesCount = salesCount;
            this.SalesSum = salesSum;
            this.ReturnCount = returnCount;
            this.ReturnSum = returnSum;
            this.BatchError = batchError;
        }

        [DataMember(Name="BatchNumber", EmitDefaultValue=false)]
        public string BatchNumber { get; set; }

        [DataMember(Name="Started", EmitDefaultValue=false)]
        public DateTime? Started { get; set; }

        [DataMember(Name="Completed", EmitDefaultValue=false)]
        public DateTime? Completed { get; set; }

        [DataMember(Name="SalesCount", EmitDefaultValue=false)]
        public string SalesCount { get; set; }

        [DataMember(Name="SalesSum", EmitDefaultValue=false)]
        public double? SalesSum { get; set; }

        [DataMember(Name="ReturnCount", EmitDefaultValue=false)]
        public string ReturnCount { get; set; }

        [DataMember(Name="ReturnSum", EmitDefaultValue=false)]
        public double? ReturnSum { get; set; }

        [DataMember(Name="BatchError", EmitDefaultValue=false)]
        public bool? BatchError { get; set; }
    }
}
