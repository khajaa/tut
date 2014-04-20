
##01 - Hello World,  Setup Server

###Prerequirements
IIS 5.0
Windows XP Home Edition does not have IIS.
Upgrade to Professional Version.

###Visual Studio
+Create New Project > ASP.NET
--e.g. Project name Hello
+and the project location should be in
```aspx-cs
 ```
+Double click Button
+In source view, insert line below
```aspx-cs
 ```
--Control Panel>Administrative Tools>Internet Information Service >
expand > Right click on ''Default Web Site'' and select ''Start''
+Go to IE and type
```aspx-cs
 ```
###Sample Code

```aspx-cs
 // by Kiichi
 using System;
 using System.Web;
 using System.Web.UI;
 using System.Web.UI.WebControls;
 
 namespace LIU {
 	public class Hello : System.Web.UI.Page{
 		protected Label label;
 		protected void ClickIt(object sender, System.EventArgs e) {
 			label.Text = "Hello World";
 		}
 	}
 }
 ```
```aspx-cs
 <%@ Page language="c#" Codebehind="Hello.cs" AutoEventWireup="false" Inherits="LIU.Hello" %>
 <html>
 	<head>
 		<title>Hello World</title>
 	</head>
 	<body>
 		<form method="post" runat="server">
 			<asp:Label id=label text="Please Click" runat=Server />
 			<br>
 			<asp:Button onclick=ClickIt text="Submit" runat=Server />
 		</form>
 	</body>
 </html>
 
 ```
###Command Line and .Net SDK Framework

+Create a folder under c:\Inetpub\www (e.g. hello)
+Go to Control Panel > Administrative Tools > Internet Information Server
+Right click on folder > Property
//#ref(csharp_iis_01.jpg)
+Click Create Button and it turns to Remove Button
//#ref(csharp_iis_02.jpg)
+Make sure the icon changed
//#ref(csharp_iis_03.jpg)
+Compile Hello.cs (Same sources from above)
```aspx-cs
 ```

###WebMatrix
Download the software from 
http://www.asp.net/webmatrix/
This IDE is looks like VS.NET. Nice WYSWIG editor and integrated
web server. It is only available for web applications and no Intellisence.

When you created an application, just hit start button. You will see
a icon of server in the task tray.

Test Server Free Hosting (With MS SQL Database)
http://europe.webmatrixhosting.net/

###Mono
Mono provides SDK and Virtual Machine that compatible with both windows and Linux.
http://www.mono-project.com/

Compile Command and Options are same.
```aspx-cs
 ```

###NAnt
Download and Install NAnt from 
http://nant.sourceforge.net/

Source Code download


Make sure you add nant.exe into PATH environment variable.
Then 
create ''default.build'' file

You can build like
```aspx-cs
 nant deploy
 ```

This is a sample build file
```aspx-cs
 <project name="Hello" default="run">
 
 	<!-- ################################################################################ -->
 	<property name="basename" value="Hello"/>
 	<property name="debug" value="true"/>
 
 	<!-- ################################################################################ -->
 	<target name="build">
 		<!-- Setup all directories -->
 		<mkdir dir="bin/" />
 
 		<!-- Compile -->
 		<csc target="library" output="bin/${basename}.dll">
 			<sources>
 				<include name="*.cs" />
 			</sources>
 		</csc>
 	</target>
 
 	<!-- ################################################################################ -->
 	<target name="deploy">
 		<!-- Setup all directories -->
 		<mkdir dir="deploy/" />
 		<mkdir dir="deploy/bin" />
 
 		<!-- Copy *.aspx files -->
 		<copy todir="deploy">
 			<fileset basedir=".">
 				<include name="*.aspx"/>
 			</fileset>
 		</copy>
 
 		<!-- Copy *.dll files -->
 		<copy todir="deploy/bin">
 			<fileset basedir="bin/">
 				<include name="*.dll"/>
 			</fileset>
 		</copy>
 	</target>
 
 	<!-- ################################################################################ -->
 	<target name="clean">
 		<delete>
 			<fileset>
 				<include name="deploy/*"/>
 				<include name="deploy/bin/*"/>
 				<include name="bin/*"/>
 			</fileset>
 		</delete>
 	</target>
 
 	<!-- ################################################################################ -->
 	<target name="run" depends="build">
 		<!--	<exec program="firefox http://localhost/${basename}" /> -->
 	</target>
 </project>
 
 ```
###Trouble Shooting
If you have an access error message on ASP.NET Temporary folder, do this
```aspx-cs
 ```
```aspx-cs
 ```
```aspx-cs
 ```


