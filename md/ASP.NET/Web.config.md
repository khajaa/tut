
##Web.config

###Timeout
Web.Confi
```aspx-cs
  <system.web>
   <httpRuntime executionTimeout="90" maxRequestLength="4096"
 useFullyQualifiedRedirectUrl="false"
 minFreeThreads="8"
 minLocalRequestFreeThreads="4"
 appRequestQueueLimit="100" />
  </system.web>
 </configuration> 
 ```
%SystemRoot%\Microsoft.NET\Framework\%VersionNumber%\CONFIG\ 
```aspx-cs
  executionTimeout="90" 
  maxRequestLength="4096" 
  useFullyQualifiedRedirectUrl="false" 
  minFreeThreads="8" 
  minLocalRequestFreeThreads="4" 
  appRequestQueueLimit="100" />
 			
 ```

###Global Setting - Default Value for All Pages
```aspx-cs
 <configuration>
 <system.web>
    <pages buffer="true" maintainScrollPositionOnPostBack="true">
      <namespaces>
        <add namespace ="System.Web" />
        <add namespace="System.Text"/>
      </namespaces>
    </pages>  
 </system.web>
 </configuration>
 ```
###Connection String at .NET 2.0
```aspx-cs
 	<appSettings/>
   <connectionStrings>
     <add name="MyServer" connectionString="server=myserver;UID=myserver;Password=test;Initial Catalog=test"/>
   </connectionStrings>
   
   other configuration etc ...
 </configuration>
 ```
Add Reference->System.Configuration.dll
  ConnectionStringSettingsCollection connectionStrings = ConfigurationManager.ConnectionStrings;
  connectionStrings["MyServer"].ToString();

###Application setting
You can set values into global variable
```aspx-cs
 <add key="ErrorEmail" value="info@xxki.com"/>
 <add key="ConnectionString" 
        value="Server=myserver.com;User Id=kiichi;Password=test;Initial Catalog=MYDB"/>
 <add key="SmtpServer" value="mymailserver.com"/>
 </appSettings>
 ```
```aspx-cs
 ```


