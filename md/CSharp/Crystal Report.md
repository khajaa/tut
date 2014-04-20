
##Crystal Report

###Multiple Parameters
```csharp
 ```
###Merge XML data and Crystal Example
```csharp
 using System.Collections;
 using System.Collections.Generic;
 using System.Xml;
 using System.Text;
 using System.Configuration;
 using CrystalDecisions.Web;
 using CrystalDecisions.CrystalReports.Engine;
 using CrystalDecisions.Shared;
 
 namespace LIU.CrystalMerge {
 	class Program {
 		static void Main(string[] args) {
 			string crpFile = args[0];
 			string criteriaFile = args[1];
 			string dbFile = args[2];
 			string outputFile = args[3];
 
 			string username = "";
 			string password = "";
 			string server = "";
 			string database = "";
 
 			// Read Criteria from XML
 			Hashtable criteria = GetParameters(criteriaFile);
 			Hashtable dbinfo = GetParameters(dbFile);
 
 			// Load .rpt file
 			ReportDocument reportDoc = new ReportDocument();
 			reportDoc.Load(crpFile);
 
 			// Set db info if it's avaliable
 			if (dbinfo.ContainsKey("Username")) {
 				username = dbinfo["Username"].ToString();
 			}
 			if (dbinfo.ContainsKey("Password")) {
 				password = dbinfo["Password"].ToString();
 			}
 			if (dbinfo.ContainsKey("Server")) {
 				server = dbinfo["Server"].ToString();
 			}
 			if (dbinfo.ContainsKey("Database")) {
 				database = dbinfo["Database"].ToString();
 			}
 
 			if (server != "") {
 				reportDoc.SetDatabaseLogon(username, password, server, database);
 			}
 			else {
 				reportDoc.SetDatabaseLogon(username, password);
 			}
 
 			// Set all parameters from xml file
 			foreach (string key in criteria.Keys) {
 				//Console.WriteLine(key + " - " + criteria[key].ToString());
 				reportDoc.SetParameterValue(key, criteria[key].ToString());
 			}
 
 			// Dump in a target dir
 			reportDoc.ExportToDisk(ExportFormatType.PortableDocFormat, outputFile);
 		}
 
 		public static Hashtable GetParameters(string inputFile) {
 			Hashtable table = new Hashtable();
 			XmlTextReader reader = new XmlTextReader(inputFile);
 
 			// Read the Start Element
 			reader.ReadStartElement("parameters");
 
 			while (reader.Read()) {
 				if (reader.NodeType == XmlNodeType.Element) {
 					table[reader.GetAttribute("key")] = reader.ReadString();
 				}
 			}
 			reader.Close();
 
 			return table;
 		}
 	}// eoc
 }// eons
 
 ```
db.xml
```csharp
 <parameters>
   <parameter key="Username">hello</parameter>
   <parameter key="Password">world</parameter>
 </parameters>
 ```

input.xml
```csharp
 <parameters>
   <parameter key="Campus">AAAA</parameter>
   <parameter key="EmplID">111111111</parameter>
 </parameters>
 ```



