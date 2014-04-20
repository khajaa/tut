
##Registry

###Namespace
```csharp
 ```
```csharp
 MessageBox.Show((string)key.GetValue("TrackPointSrv"));
 ```
###Set Registry Value
First, open key and
```csharp
 ```
```csharp
 ```
-RunOnce - run before shell starts
-RunOnceEx - run after explorer starts
++Create a folder (Key) like 0001
++Create string and set value to your exe path. put double quotes.

```csharp
 @"Software\Microsoft\Windows\CurrentVersion\RunOnceEx\00001");
 // Exe File check
 if ( !File.Exists(Directory.GetCurrentDirectory() + "\\" + "StartUpPatchJob.exe") ) {
 // Exit
 }
 key.SetValue("KaraokeChamp", "\"" + Directory.GetCurrentDirectory() + "\\" 
 + "StartUpPatchJob.exe\"");
 ```

###Reference
http://msdn.microsoft.com/library/default.asp?url=/library/en-us/xpehelp/html/xeconrunoncerequest.asp

http://support.microsoft.com/?kbid=232509&sd=RMVP




