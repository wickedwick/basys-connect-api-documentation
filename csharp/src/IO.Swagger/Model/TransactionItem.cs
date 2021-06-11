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
    public partial class TransactionItem :  IEquatable<TransactionItem>, IValidatableObject
    {
         public TransactionItem(bool? taxIncluded = default(bool?), bool? credit = default(bool?), double? extendedAmount = default(double?), string itemNumber = default(string), double? unitCost = default(double?), int? quantity = default(int?), string description = default(string), double? discount = default(double?), double? tax = default(double?), string commodityCode = default(string), string unitOfMeasure = default(string))
        {
            this.TaxIncluded = taxIncluded;
            this.Credit = credit;
            this.ExtendedAmount = extendedAmount;
            this.ItemNumber = itemNumber;
            this.UnitCost = unitCost;
            this.Quantity = quantity;
            this.Description = description;
            this.Discount = discount;
            this.Tax = tax;
            this.CommodityCode = commodityCode;
            this.UnitOfMeasure = unitOfMeasure;
        }

        [DataMember(Name="TaxIncluded", EmitDefaultValue=false)]
        public bool? TaxIncluded { get; set; }

        [DataMember(Name="Credit", EmitDefaultValue=false)]
        public bool? Credit { get; set; }

        [DataMember(Name="ExtendedAmount", EmitDefaultValue=false)]
        public double? ExtendedAmount { get; set; }

        [DataMember(Name="ItemNumber", EmitDefaultValue=false)]
        public string ItemNumber { get; set; }

        [DataMember(Name="UnitCost", EmitDefaultValue=false)]
        public double? UnitCost { get; set; }

        [DataMember(Name="Quantity", EmitDefaultValue=false)]
        public int? Quantity { get; set; }

        [DataMember(Name="Description", EmitDefaultValue=false)]
        public string Description { get; set; }

        [DataMember(Name="Discount", EmitDefaultValue=false)]
        public double? Discount { get; set; }

        [DataMember(Name="Tax", EmitDefaultValue=false)]
        public double? Tax { get; set; }

        [DataMember(Name="CommodityCode", EmitDefaultValue=false)]
        public string CommodityCode { get; set; }

        [DataMember(Name="UnitOfMeasure", EmitDefaultValue=false)]
        public string UnitOfMeasure { get; set; }
    }
}
