
##Cassini

###My memo to setup VS.NET to develop ASP.NET without IIS
+Download Cassini from here
http://www.asp.net/Projects/Cassini/Download/Default.aspx?tabindex=0&tabid=1
+Control Panel>Administrative Tools>MS .NET configuration>Assembly Cache>Add Assembly>Choose cassini.dll 
+Create New Class Library Project
+Add Reference to System.Web.dll
+Right Click>Property on Project
++Configuration Properties > Build page>Output Path setting = bin\
++Configuration Properties > Debugging page>Debug Mode setting = Program
++Configuration Properties > Debugging page>Start Application setting=(Path)\CassiniWebServer.exe 
++Configuration Properties > Debugging page>Command Line Arguments = "c:\project\csharp...(Path to project folder)" 80
+Add new HTML file and rename it as Default.aspx
+Since there is no wizard, maybe you should copy .aspx and .cs file from my own template
+Restart VS.NET




