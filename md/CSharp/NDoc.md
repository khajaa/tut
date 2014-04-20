
##NDoc

###Using NDoc with .NET 2.0

NDoc is Documentation Generator from the comment of your C# code. Since it still does not work for .NET 2.0, you have to do some work around.

Solution:
Create NDocGui.exe.config file under bin folder where your NDocGui.exe file is located. The contents should be like this:
```csharp
 <startup>
 <supportedruntime version="v2.0.50727">
 <supportedruntime version="v1.1.4322">
 <requiredruntime version="v1.1.4322">
 </requiredruntime>
 </supportedruntime>
 ```

After you install NDoc, make sure to install HTML Help Workshop. You need to configure your project in Visual Studio 2005 in order to generate only your comments as a xml file. Set
''Right click on the project ->property->Build tab->check XML Document file''

Requirements:
-NDoc
-HTML Help Workshop

Sample Comment:
```csharp
 /// Concat everything to file
 /// </summary>
 /// <param name="fileName">File name to save
 public void Save(string fileName) {
 ```


