
##Mobile - HelloWorld


###J2ME development steps
+Compile
+Preverify
+Create Jar
+Create Manifest
+Create Jad
+Emulate
+Deploy

###Download
Download J2ME Wireless Toolkit from here
http://java.sun.com/j2me/download.html

Assume you installed this at
```java
 ```
For all scripts below, change the toolkit's path.

Sample program of this Tutorial


###Setup Environment Variables
Add this value if you want
```java
 ```
###Set up & Write a java program
First, let's setup a package for your project. Go to your project
dirctory and create
```java
 ```
and put Hello.java int this directory.
```java
 package com.j2me.myapp;
 
 import javax.microedition.lcdui.Alert;
 import javax.microedition.lcdui.Display;
 import javax.microedition.midlet.MIDlet;
 
 public class Hello extends MIDlet {
 Alert alert;
 public Hello() {
 	alert = new Alert("My First Application");
 	alert.setString("Hello World!");
 }
 
 public void startApp() {
 	Display.getDisplay(this).setCurrent(alert);
 }
 
 public void pauseApp() {
 }
 
 public void destroyApp(boolean unconditional) {
 }
 }
 ```
###build.bat
Create build.bat in your project dirctory.
```java
 echo ==================== Compiling ... ==========================
 javac -bootclasspath c:\WTK22\lib\cldcapi11.jar;c:\WTK22\lib\midpapi20.jar com\j2me\myapp\Hello.java
 echo ==================== Preverifying ... ==========================
 preverify -classpath c:\WTK22\lib\cldcapi11.jar;c:\WTK22\lib\midpapi20.jar com.j2me.myapp.Hello
 echo ==================== Creating .jar File ... ==========================
 jar cvfm output\Hello.jar Manifest.mf .\com
 echo ==================== Copying .jad File ... ==========================
 copy Hello.jad output\Hello.jad
 ```
###Manifest.mf
```java
 MIDlet-Version: 1.0.0
 MIDlet-Vendor: Kiichi Takeuchi
 ```
###jad file
```java
 MIDlet-Name: Hello
 MIDlet-Version: 1.0.0
 MIDlet-Vendor: Kiichi Takeuchi
 MIDlet-Jar-URL: Hello.jar
 MIDlet-Jar-Size: 1685
 MicroEdition-Profile: MIDP-2.0
 MicroEdition-Configuration: CLDC-1.1
 ```
:Note|In line MIDlet-Jar-Size: 1685,
replace 1685 to any number of bytes of your jar file

:Note2|Be careful spaces after MIDlet-Name. You should
perfectly match this name to name in Manifest.

If you have trouble with the latest version, try 1.1
```java
 ```
###run.bat
```java
 c:\WTK22\bin\emulator.exe -Xdescriptor output\Hello.jad 
 ```
###Deploy
Create a html file
```java
   Click <a href="DateTimeApp.jad">here</a> to download 
 </HTML>
 ```
:Note|tomcat is ok, but for apache, add these lines in mime.types file
```java
 application/java-archive jar
 ```
:Note2|You can arrange your jar file location by changing the following line in jad file
```java
 ```
###Build Everything with KToolBar
+From Start Menu, lounch KToolBar.
+Click New Project
--Project Name: Hello
--MDIlet Class Name: com.j2me.myapp.Hello
+CLDC1.1
+Check Off Optional
+Copy your source code into c:\WTK2.2\Apps\Hello\src\com\j2me\myapp
+Project > Package > Create Package
+Project > Run

###Project File Download
-Manually Compile Version

-KTool Project Version





