
##Xml

###Reading Simple XML file
```csharp
 ```
```csharp
 	Hashtable table = new Hashtable();
 	XmlTextReader reader = new XmlTextReader(inputFile);
 
 	// Read the Start Element
 	reader.ReadStartElement("parameters");
 
 	while (reader.Read()) {
 		if (reader.NodeType == XmlNodeType.Element) {
 			table[reader.GetAttribute("key")] = reader.Value;
 		}
 	}
 	reader.Close();
 
 	return table;
 }
 ```
sample xml file
```csharp
 <parameters>
   <parameter key="Campus">POST</parameter>
   <parameter key="EmplID">100240977</parameter>
 </parameters>
 ```



