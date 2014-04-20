
##Configuration

###Creating Configuration File
+Right Click on Solution
+Add New Item
+Application Configuration File
+Insert example below
```csharp
 <configuration>
 <appSettings>
 <add key="Key1" value="Value1" />
 <add key="Key2" value="Value2" />
 <add key="Key3" value="Value3" />
 </appSettings>
 </configuration>
 ```
###Using Configuration Value
```csharp
 string val2 = System.Configuration.ConfigurationSettings.AppSettings["Key2"];
 string val3 = System.Configuration.ConfigurationSettings.AppSettings["Key3"];
 label1.Text = val1 + val2 + val3; 
 ```



