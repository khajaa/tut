
##IO, File, Directory

###Text File IO

```csharp
 ```
Sample1
```csharp
 string buf = "";
 while ((buf = sr.ReadLine()) != null) {
 Console.WriteLine(buf);
 }
 ```
Sample2
```csharp
 string str = "";
 while (sr.Peek() > -1) {
 str += sr.ReadLine() + "\r\n"; // or use sr.ReadToEnd();
 }
 sr.Close();
 ```
Write
```csharp
 StreamWriter sw = new StreamWriter(@"C:\test.txt", false,
 			System.Text.Encoding.GetEncoding("utf-8"));
 sw.WriteLine("This is one line");
 sw.Close();
 ```
:Note|Encoding is optional. Default is utf-8.


###Set stdout to file
Set stdout to file descriptor
```csharp
 sw.AutoFlush = true;
 // thread safe wrapper
 System.IO.TextWriter tw = System.IO.TextWriter.Synchronized(sw);
 Console.SetOut(tw);
 ```
Bring back to console
```csharp
 standard.AutoFlush = true;
 Console.SetOut(standard);
 ```
Useful function examples
```csharp
 // Set All Console Output to Log.txt
 StreamWriter stream = new StreamWriter("Log.txt");
 stream.AutoFlush = true;
 Console.SetOut(TextWriter.Synchronized(stream));
 return stream;
 }
 ```
```csharp
 public static void SetConsoleDescriptor(StreamWriter stream) {
 // Back to console
 stream.Close();
 StreamWriter sw = new StreamWriter(Console.OpenStandardOutput());
 sw.AutoFlush = true;
 Console.SetOut(sw);
 }
 ```

###File Size
```csharp
 fi.Length();
 ```
###Directory List
This is example to get directory name recursively
```csharp
 using System.IO;
 namespace LIU {
 public class PrintDirectory {
 	public static void Print(string path) {
 		if (Directory.Exists(path)) {
 			string[] dirList = Directory.GetDirectories(path);
 			foreach (string dir in dirList) {
 				Console.WriteLine(dir);
 				Print(dir);
 			}
 		}
 	}
 }
 }
 ```
###File List
```csharp
 ```

###Get Special Directory
```csharp
 ```
###Select Folder
```csharp
 fbd.Description = "Select a folder";
 fbd.RootFolder = Environment.SpecialFolder.Desktop;
 fbd.SelectedPath = @"C:\";
 fbd.ShowNewFolderButton = true;
 if (fbd.ShowDialog(this) == DialogResult.OK) {
     MessageBox.Show(fbd.SelectedPath);
 }
 ```
###Open File Dialog
```csharp
 of.Filter = "BMP(*.bmp)|*.bmp|All File Types(*.*)|*.*";
 of.RestoreDirectory = true;
 string path = "";
 if (of.ShowDialog() == DialogResult.OK) {
 path = of.FileName;
 }
 ```
###Save File Dialog 
:Warning|This is not thread safe!

```csharp
 sfd.FileName = "NewFile.txt";
 sfd.InitialDirectory = @"C:\";
 sfd.Filter =
 	"Text File(*.txt;*.log)|*.txt;*.log|All Files(*.*)|*.*";
 sfd.FilterIndex = 1;
 sfd.Title = "Save File As";
 sfd.RestoreDirectory = true;
 sfd.OverwritePrompt = true;
 sfd.CheckPathExists = true;
 if (sfd.ShowDialog() == DialogResult.OK) {
 	//Console.WriteLine(sfd.FileName);
 }
 ```
###Extension
```csharp
 // using System.IO;
 if (Path.GetExtension(mDestFile) != ".sql") {
 	if (!Path.HasExtension(mDestFile)) {
 		mDestFile += ".sql";
 	}
 	else {
 		mDestFile = Path.ChangeExtension(mDestFile, ".sql");
 	}
 }
 
 ```

###Folder Browser Dialog - select directory
```csharp
 fbd.Description = "Select a destination folder";
 fbd.RootFolder = Environment.SpecialFolder.Desktop;
 fbd.SelectedPath = @"C:\";
 fbd.ShowNewFolderButton = true;
 if (fbd.ShowDialog() == DialogResult.OK) {
 textBox1.Text = fbd.SelectedPath;
 }
 ```
###Shortcut
+Add Reference -> Windows Script Host Object Model -> Select

```csharp
 ```
```csharp
 IWshShortcut link = (IWshShortcut)shell.CreateShortcut(@"c:\test.lnk");
 link.TargetPath = @"C:\mydir\myprog.exe";
 link.Save();
 ```
Set
```csharp
 ```

###Path Operation
Everything is in System.IO.Path class.
e.g.
```csharp
 Path.Combine(path, fileName);
 Path.ChangeExtention(path, ext);
 ```
etc...

###Open File with related extention
```csharp
 Process p = Process.Start(@"C:\test.txt");
 // Wait
 p.WaitForExit(); 
 // or if you do not wait
 p.EnableRaisingEvents = true;
 p.Exited += new EventHandler(procOnExit);
 // and create a method to handle this event
 private void procOnExit(object sender, EventArgs e) {
    MessageBox.Show("Finished");
 }
 ```
###Executable Path - Path of itself (exe path)
Use
```csharp
 ```
```csharp
 ```
Application is under
```csharp
 ```
or
```csharp
 ```
###Temp File Path
```csharp
 ```


