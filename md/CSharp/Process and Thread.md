
##Process and Thread

###Process simple example
```csharp
 ```
```csharp
 ```
This is example of Process and this read buffer from stdout
```csharp
 ```
```csharp
 psi.FileName = "mybatch.bat"; // encode.bat
 
 psi.RedirectStandardInput = false;
 psi.RedirectStandardOutput = true;
  psi.UseShellExecute = false;
 psi.CreateNoWindow = true;
 Process p = Process.Start(psi);
 
 char[] buff = new char[1];
 
 // Read buffer from process's stdout
 while (p.StandardOutput.Read(buff, 0,1) != 0) {
 	// Spin indicator function, for example = {'/','--','\','|'}
 	Spin();
 }
 p.WaitForExit();
 p.Dispose();
 ```

###Process Redirect Input / Output
```csharp
 		Process p = new Process();
 		StreamWriter sw;
 		StreamReader sr;
 		StreamReader err;
 		ProcessStartInfo psI = new ProcessStartInfo(@"C:\someprogram_ask_userinput.exe", "-start");
 		psI.UseShellExecute = false;
 		psI.RedirectStandardInput = true;
 		psI.RedirectStandardOutput = true;
 		psI.RedirectStandardError = true;
 		psI.CreateNoWindow = true;
 		p.StartInfo = psI;
 		p.Start();
 		sw = p.StandardInput;
 		sr = p.StandardOutput;
 		sw.AutoFlush = true;
                        // Simulate user input (console in)
 		sw.WriteLine("1");
 		sw.WriteLine("2");
 		File.WriteAllText("log.txt",sr.ReadToEnd());
 		File.WriteAllText("error.txt",sr.ReadToEnd());
 	} 
 ```

###Thread
Include Threading namespace
```csharp
 ```
and call another method in ThreadStart class
```csharp
 private void btnProcess_Click(object sender, System.EventArgs e) {
  Thread th = new Thread(new ThreadStart(ThreadProc));
  th.Start();
 }
 private void ThreadProc() {
 // Some processes
 }
 ```
If you add the Thread as a member variable, you can clean it up in Dispose method
```csharp
 ```
In Dispose method
```csharp
 if (mThread != null) {
 mThread.Interrupt();
 mThread.Abort();
 mThread = null;
 }
 ```



