
##Misc

###Host name and IP address
```csharp
 System.Net.Dns.GetHostAddresses(hostName)[0].ToString();
 ```
###Get MAC Address
```csharp
 public static string GetMacAddress() {
 	string retStr = "";
 	ManagementClass oMClass = new ManagementClass ("Win32_NetworkAdapterConfiguration");
 	ManagementObjectCollection colMObj = oMClass.GetInstances();
 	foreach(ManagementObject objMO in colMObj) {
 		if (objMO["MacAddress"] != null) {
 			retStr = objMO["MacAddress"].ToString();
 			break;
 		}
 	}			
 	return retStr;
 }
 ```


###Assembly Version
  System.Reflection.Assembly.GetExecutingAssembly().GetName().Version.Trim();

###Avoid Multiple Instance
```csharp
 System.Diagnostics.Process.GetCurrentProcess().ProcessName).Length > 1) {
 Application.Exit();
 return;
 }
 ```




