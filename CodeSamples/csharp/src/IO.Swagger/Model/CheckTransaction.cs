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
    public partial class CheckTransaction :  IEquatable<CheckTransaction>, IValidatableObject
    {
        public CheckTransaction(string terminalID = default(string), string accountNumber = default(string), CheckAccountType accountType = default(CheckAccountType), string checkNumber = default(string), string routingNumber = default(string), string mICRData = default(string), string firstName = default(string), string lastName = default(string), string companyName = default(string), string address1 = default(string), string address2 = default(string), string city = default(string), string state = default(string), string zip = default(string), string phoneNumber = default(string), string dLNumber = default(string), string dLState = default(string), string courtesyCardID = default(string), string sSN4 = default(string), string dOBYear = default(string), string checkAmount = default(string), CheckTransactionType tranType = default(CheckTransactionType), string procID = default(string), string iPAddress = default(string), string customerNumber = default(string), string pONumber = default(string), string invoiceNumber = default(string), string tranNote = default(string), string emailAddress = default(string), string sECCode = default(string), string procResp = default(string), string procCode = default(string), string procMess = default(string))
        {
            this.TerminalID = terminalID;
            this.AccountNumber = accountNumber;
            this.AccountType = accountType;
            this.CheckNumber = checkNumber;
            this.RoutingNumber = routingNumber;
            this.MICRData = mICRData;
            this.FirstName = firstName;
            this.LastName = lastName;
            this.CompanyName = companyName;
            this.Address1 = address1;
            this.Address2 = address2;
            this.City = city;
            this.State = state;
            this.Zip = zip;
            this.PhoneNumber = phoneNumber;
            this.DLNumber = dLNumber;
            this.DLState = dLState;
            this.CourtesyCardID = courtesyCardID;
            this.SSN4 = sSN4;
            this.DOBYear = dOBYear;
            this.CheckAmount = checkAmount;
            this.TranType = tranType;
            this.ProcID = procID;
            this.IPAddress = iPAddress;
            this.CustomerNumber = customerNumber;
            this.PONumber = pONumber;
            this.InvoiceNumber = invoiceNumber;
            this.TranNote = tranNote;
            this.EmailAddress = emailAddress;
            this.SECCode = sECCode;
            this.ProcResp = procResp;
            this.ProcCode = procCode;
            this.ProcMess = procMess;
        }

        [DataMember(Name="Terminal_ID", EmitDefaultValue=false)]
        public string TerminalID { get; set; }

        [DataMember(Name="Account_Number", EmitDefaultValue=false)]
        public string AccountNumber { get; set; }

        [DataMember(Name="Account_Type", EmitDefaultValue=false)]
        public CheckAccountType AccountType { get; set; }

        [DataMember(Name="Check_Number", EmitDefaultValue=false)]
        public string CheckNumber { get; set; }

        [DataMember(Name="Routing_Number", EmitDefaultValue=false)]
        public string RoutingNumber { get; set; }

        [DataMember(Name="MICR_Data", EmitDefaultValue=false)]
        public string MICRData { get; set; }

        [DataMember(Name="First_Name", EmitDefaultValue=false)]
        public string FirstName { get; set; }

        [DataMember(Name="Last_Name", EmitDefaultValue=false)]
        public string LastName { get; set; }

        [DataMember(Name="Company_Name", EmitDefaultValue=false)]
        public string CompanyName { get; set; }

        [DataMember(Name="Address1", EmitDefaultValue=false)]
        public string Address1 { get; set; }

        [DataMember(Name="Address2", EmitDefaultValue=false)]
        public string Address2 { get; set; }

        [DataMember(Name="City", EmitDefaultValue=false)]
        public string City { get; set; }

        [DataMember(Name="State", EmitDefaultValue=false)]
        public string State { get; set; }

        [DataMember(Name="Zip", EmitDefaultValue=false)]
        public string Zip { get; set; }

        [DataMember(Name="Phone_Number", EmitDefaultValue=false)]
        public string PhoneNumber { get; set; }

        [DataMember(Name="DL_Number", EmitDefaultValue=false)]
        public string DLNumber { get; set; }

        [DataMember(Name="DL_State", EmitDefaultValue=false)]
        public string DLState { get; set; }

        [DataMember(Name="Courtesy_Card_ID", EmitDefaultValue=false)]
        public string CourtesyCardID { get; set; }

        [DataMember(Name="SSN4", EmitDefaultValue=false)]
        public string SSN4 { get; set; }

        [DataMember(Name="DOB_Year", EmitDefaultValue=false)]
        public string DOBYear { get; set; }

        [DataMember(Name="Check_Amount", EmitDefaultValue=false)]
        public string CheckAmount { get; set; }

        [DataMember(Name="Tran_Type", EmitDefaultValue=false)]
        public CheckTransactionType TranType { get; set; }

        [DataMember(Name="Proc_ID", EmitDefaultValue=false)]
        public string ProcID { get; set; }

        [DataMember(Name="IP_Address", EmitDefaultValue=false)]
        public string IPAddress { get; set; }

        [DataMember(Name="CustomerNumber", EmitDefaultValue=false)]
        public string CustomerNumber { get; set; }

        [DataMember(Name="PONumber", EmitDefaultValue=false)]
        public string PONumber { get; set; }

        [DataMember(Name="InvoiceNumber", EmitDefaultValue=false)]
        public string InvoiceNumber { get; set; }

        [DataMember(Name="TranNote", EmitDefaultValue=false)]
        public string TranNote { get; set; }

        [DataMember(Name="EmailAddress", EmitDefaultValue=false)]
        public string EmailAddress { get; set; }

        [DataMember(Name="SEC_Code", EmitDefaultValue=false)]
        public string SECCode { get; set; }

        [DataMember(Name="Proc_Resp", EmitDefaultValue=false)]
        public string ProcResp { get; set; }

        [DataMember(Name="Proc_Code", EmitDefaultValue=false)]
        public string ProcCode { get; set; }

        [DataMember(Name="Proc_Mess", EmitDefaultValue=false)]
        public string ProcMess { get; set; }
    }
}
