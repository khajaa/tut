
##Custom Event and Progress Bar

###Introduction
In this tutorial, I will create one custom event that is used to update progress bar status. A program runs heavy process (Let's say exporting something) and it will generate a new event every loop. If the main windows form catch the event, it will update the progess bar. Since the exporting process is runnind under another thread, this will not bother while it is running.

###ProgressEventHandler.cs
This file contains only one prototype of the delegation method
```csharp
 namespace MySpace {
 	public delegate void ProgressEventHandler(int current,int max);
 }
 ```
###Converter.cs
Let's assume that you are building some kind of converter. Every step of the loop generates Progress Event and you pass the two parameters:current and max.
```csharp
 namespace MySpace {
 	public class Conv {
 		public event ProgressEventHandler Progress;
 
 		public void Export() {
 			for (int i=0; i<100; i++) {
 				System.Threading.Thread.Sleep(300);
 				Progress(i+1,100); // Generate My Event!
 			}
 		}
 	} // eoc
 } // eons
 ```
###Form1.cs
This is a main form that contains one ProgressBar and one Button. It runs a exporting thread and update the progress bar depends on the custom event.

Use Thread class
```csharp
 ```
In constructor
```csharp
 mConv.Progress += new ProgressEventHandler(mConv_Progress); // add event handler
 ```
and create a thread
```csharp
 	Thread th = new Thread(new ThreadStart(ThreadProc));
 	th.Start();
 }
 
 private void ThreadProc() {
 	mConv.Export();
 }
 ```
Update the status. This is a delegate method that you register at the constructor
```csharp
 	// pbTotal is ProgressBar
 	pbTotal.Maximum = max;
 	pbTotal.Value = current;
 	this.Text = ((current*100/max)).ToString()+"%";
 }
 ```



