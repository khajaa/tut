
##Compiler

###Reference
###Debug Option
###Trace Option
```csharp
 using System.Diagnostics;
 public class TraceMain {
 public static int Main(string[] args) {
    Trace.Listeners.Add(new TextWriterTraceListener(Console.Out));
    Trace.AutoFlush = true;
    Trace.Indent();
    Trace.WriteLine("Entering Main");
    Console.WriteLine("Hello World.");
    Trace.WriteLine("Exiting Main"); 
    Trace.Unindent();
    return 0;
 }
 }
 ```
###Mono

###Complie .NET 1.1 in Visual Studion 2005
+Download MSBee http://www.codeplex.com/MSBee/Release/ProjectReleases.aspx?ReleaseId=18
+Add this line in project file after the first import line
```csharp
 ```
You can just unzip MSBee and put in same folder, and specify the absolute path too.




