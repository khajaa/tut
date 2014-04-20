
##Installer


###Using Visual Studio Installer - Deploying on Web
%%%Setting Version%%%
+Click on Installer project and see property window (not right click & property)
+Remove Previous Version = True
+Make sure to change version everytime

%%%Download URL setting%%%
+Right Click on Installer Project
+Property
+Installation URL is blank
+Prerequesties -> Check .NET 2.0 Framework
+Check Download Prerequesties from following location
```csharp
 ```


###Using IExpress
```csharp
 ```
Make sure to check "Long File Name" (default is short file name)
When you rebuild
```csharp
 ```
Specify setup.exe

###Summary
The best way to package .net app is using both ways above. So you can make everything in one file, and you have control on prerequesties.

###Note
-When you create a shortcut, always makesure to set working foler as Application folder. Otherwise, your shortcut mess up your file I/O.




