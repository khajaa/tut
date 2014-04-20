
##Install and Hello World

###Install SDK and runtime
Get Runtime and Samples
http://labs.adobe.com/downloads/air.html

Get Latest SDK from
http://labs.adobe.com/downloads/airsdk.html

Unzip & place it in 
```air
 ```
Add c:\air\bin\ into PATh or do
```air
 ```
in command line.

###Hello World
You need two files:

AIRHelloWorld.xml
```air
 
 <application xmlns="http://ns.adobe.com/air/application/1.0.M4"
 	appId="com.oreilly.AIRHelloWorld"
 	version="1.0">
 	<name>AIRHelloWorld</name>
 	<title>AIRHelloWorld Installer</title>
 	<description>Simple Hello World Example using HTML</description>
 	<copyright></copyright>
 	<rootContent 
 		systemChrome="standard" 
 		transparent="false" 
 		visible="true">AIRHelloWorld.html</rootContent>
 </application>
 ```
AIRHelloWorld.html
```air
 <head>
     <title>AIRHelloWorld</title>
     <script>
         function init()
         {
             runtime.trace("init function called");
         }
     </script>
 </head>
 <body onload="init()">
     <div align="center">Hello World</div>
 </body>
 </html>
 ```
###Testing
In command line
```air
 ```

###Installing Aptana
http://www.aptana.com/air/

+Create a project (assume the project name is Test1).
+External Tools
-Location
```air
 ```
```air
 ```
```air
 ```
Setting UTF-8 for the editor
+Right click on Project
+Property->Information->Text File Encode->Other->UTF-8

!!Building Package
```air
 ```
or in Aptana, setup another external tool
-Location
```air
 ```
```air
 ```
```air
 ```



