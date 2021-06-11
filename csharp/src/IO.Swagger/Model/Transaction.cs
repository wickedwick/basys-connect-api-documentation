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
    public partial class Transaction :  IEquatable<Transaction>, IValidatableObject
    {
        public Transaction(DateTime? submitTime = default(DateTime?), string tranType = default(string), double? tranAmt = default(double?), double? tranTax = default(double?), string tranInv = default(string), string tranPO = default(string), string tranCNum = default(string), string tranNote = default(string), string cardNum = default(string), string cardName = default(string), string cardExp = default(string), string cardType = default(string), string aVSStreet = default(string), string aVSZip = default(string), string cVVNum = default(string), string procID = default(string), string procResp = default(string), string procCode = default(string), string procMess = default(string), string aVSCode = default(string), string aVSResp = default(string), string cVVCode = default(string), string cVVResp = default(string), List<TransactionItem> items = default(List<TransactionItem>), string businessName = default(string), string businessAddress = default(string), string businessAddress2 = default(string), string businessCity = default(string), string businessState = default(string), string businessZip = default(string), string businessCountry = default(string), string businessWebsite = default(string), string contactFirstName = default(string), string contactLastName = default(string), string contactPhone = default(string), string contactFax = default(string), string contactEmail = default(string), string contactTitle = default(string), string iP = default(string), bool? taxExempt = default(bool?))
        {
            this.SubmitTime = submitTime;
            this.TranType = tranType;
            this.TranAmt = tranAmt;
            this.TranTax = tranTax;
            this.TranInv = tranInv;
            this.TranPO = tranPO;
            this.TranCNum = tranCNum;
            this.TranNote = tranNote;
            this.CardNum = cardNum;
            this.CardName = cardName;
            this.CardExp = cardExp;
            this.CardType = cardType;
            this.AVSStreet = aVSStreet;
            this.AVSZip = aVSZip;
            this.CVVNum = cVVNum;
            this.ProcID = procID;
            this.ProcResp = procResp;
            this.ProcCode = procCode;
            this.ProcMess = procMess;
            this.AVSCode = aVSCode;
            this.AVSResp = aVSResp;
            this.CVVCode = cVVCode;
            this.CVVResp = cVVResp;
            this.Items = items;
            this.BusinessName = businessName;
            this.BusinessAddress = businessAddress;
            this.BusinessAddress2 = businessAddress2;
            this.BusinessCity = businessCity;
            this.BusinessState = businessState;
            this.BusinessZip = businessZip;
            this.BusinessCountry = businessCountry;
            this.BusinessWebsite = businessWebsite;
            this.ContactFirstName = contactFirstName;
            this.ContactLastName = contactLastName;
            this.ContactPhone = contactPhone;
            this.ContactFax = contactFax;
            this.ContactEmail = contactEmail;
            this.ContactTitle = contactTitle;
            this.IP = iP;
            this.TaxExempt = taxExempt;
        }

        [DataMember(Name="Submit_Time", EmitDefaultValue=false)]
        public DateTime? SubmitTime { get; set; }

        [DataMember(Name="Tran_Type", EmitDefaultValue=false)]
        public string TranType { get; set; }

        [DataMember(Name="Tran_Amt", EmitDefaultValue=false)]
        public double? TranAmt { get; set; }

        [DataMember(Name="Tran_Tax", EmitDefaultValue=false)]
        public double? TranTax { get; set; }

        [DataMember(Name="Tran_Inv", EmitDefaultValue=false)]
        public string TranInv { get; set; }

        [DataMember(Name="Tran_PO", EmitDefaultValue=false)]
        public string TranPO { get; set; }

        [DataMember(Name="Tran_CNum", EmitDefaultValue=false)]
        public string TranCNum { get; set; }

        [DataMember(Name="Tran_Note", EmitDefaultValue=false)]
        public string TranNote { get; set; }

        [DataMember(Name="Card_Num", EmitDefaultValue=false)]
        public string CardNum { get; set; }

        [DataMember(Name="Card_Name", EmitDefaultValue=false)]
        public string CardName { get; set; }

        [DataMember(Name="Card_Exp", EmitDefaultValue=false)]
        public string CardExp { get; set; }

        [DataMember(Name="Card_Type", EmitDefaultValue=false)]
        public string CardType { get; set; }

        [DataMember(Name="AVS_Street", EmitDefaultValue=false)]
        public string AVSStreet { get; set; }

        [DataMember(Name="AVS_Zip", EmitDefaultValue=false)]
        public string AVSZip { get; set; }

        [DataMember(Name="CVV_Num", EmitDefaultValue=false)]
        public string CVVNum { get; set; }

        [DataMember(Name="Proc_ID", EmitDefaultValue=false)]
        public string ProcID { get; set; }

        [DataMember(Name="Proc_Resp", EmitDefaultValue=false)]
        public string ProcResp { get; set; }

        [DataMember(Name="Proc_Code", EmitDefaultValue=false)]
        public string ProcCode { get; set; }

        [DataMember(Name="Proc_Mess", EmitDefaultValue=false)]
        public string ProcMess { get; set; }

        [DataMember(Name="AVS_Code", EmitDefaultValue=false)]
        public string AVSCode { get; set; }

        [DataMember(Name="AVS_Resp", EmitDefaultValue=false)]
        public string AVSResp { get; set; }

        [DataMember(Name="CVV_Code", EmitDefaultValue=false)]
        public string CVVCode { get; set; }

        [DataMember(Name="CVV_Resp", EmitDefaultValue=false)]
        public string CVVResp { get; set; }

        [DataMember(Name="Items", EmitDefaultValue=false)]
        public List<TransactionItem> Items { get; set; }

        [DataMember(Name="Business_Name", EmitDefaultValue=false)]
        public string BusinessName { get; set; }

        [DataMember(Name="Business_Address", EmitDefaultValue=false)]
        public string BusinessAddress { get; set; }

        [DataMember(Name="Business_Address2", EmitDefaultValue=false)]
        public string BusinessAddress2 { get; set; }

        [DataMember(Name="Business_City", EmitDefaultValue=false)]
        public string BusinessCity { get; set; }

        [DataMember(Name="Business_State", EmitDefaultValue=false)]
        public string BusinessState { get; set; }

        [DataMember(Name="Business_Zip", EmitDefaultValue=false)]
        public string BusinessZip { get; set; }

        [DataMember(Name="Business_Country", EmitDefaultValue=false)]
        public string BusinessCountry { get; set; }

        [DataMember(Name="Business_Website", EmitDefaultValue=false)]
        public string BusinessWebsite { get; set; }

        [DataMember(Name="Contact_FirstName", EmitDefaultValue=false)]
        public string ContactFirstName { get; set; }

        [DataMember(Name="Contact_LastName", EmitDefaultValue=false)]
        public string ContactLastName { get; set; }

        [DataMember(Name="Contact_Phone", EmitDefaultValue=false)]
        public string ContactPhone { get; set; }

        [DataMember(Name="Contact_Fax", EmitDefaultValue=false)]
        public string ContactFax { get; set; }

        [DataMember(Name="Contact_Email", EmitDefaultValue=false)]
        public string ContactEmail { get; set; }

        [DataMember(Name="Contact_Title", EmitDefaultValue=false)]
        public string ContactTitle { get; set; }

        [DataMember(Name="IP", EmitDefaultValue=false)]
        public string IP { get; set; }

        [DataMember(Name="TaxExempt", EmitDefaultValue=false)]
        public bool? TaxExempt { get; set; }
    }
}
