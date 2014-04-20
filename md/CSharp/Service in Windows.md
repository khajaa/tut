
##Service in Windows

###Creating Installer
+New Project
+Select Windows Installer
+Right Click and add "Installer Class"
Add this code in the constructor
```csharp
 ServiceProcessInstaller spi = new ServiceProcessInstaller();
 
 si.ServiceName = "MyService"; // this must match the ServiceName specified in WindowsService1.
 si.DisplayName = "My Crystal Report to Pdf Service"; // this will be displayed in the Services Manager.
 si.Description = "This service checks db table for every 15 sec and generate pdf for user";
 si.StartType = ServiceStartMode.Automatic;
 this.Installers.Add(si);
 
 spi.Account = System.ServiceProcess.ServiceAccount.LocalSystem; // run under the system account.
 spi.Password = null;
 spi.Username = null;
 this.Installers.Add(spi);
 ```
###Testing
This is a script to uninstall / install
use installutil.exe tool 
```csharp
 set PATH=C:\WINDOWS\Microsoft.NET\Framework\v2.0.50727
 installutil.exe /u MyService.exe
 installutil.exe MyService.exe
 pause
 ```
###Example
Service Program
```csharp
 using System.Collections.Generic;
 using System.ComponentModel;
 using System.Data;
 using System.Diagnostics;
 using System.ServiceProcess;
 using System.Text;
 using System.IO;
 using System.Timers;
 namespace LIUAdmissionsReportService {
 	public partial class LIUCRService : ServiceBase {
 		private Timer mTimer;
 		public LIUCRService() {
 			InitializeComponent();
 			mTimer = new Timer();
 			
 		}		
 
 		protected override void OnStart(string[] args) {
 			// Create elapse event
 			mTimer.Elapsed += new ElapsedEventHandler(mTimer_Elapsed);
 			mTimer.Interval = 1000; //every one sec
 			mTimer.Enabled = true;  // start
 
 			File.WriteAllText("c:\\temp.txt", "");//truncate
 			File.AppendAllText("c:\\temp.txt", "started\n");
 		}
 
 
 		protected override void OnStop() {
 			File.AppendAllText("c:\\temp.txt", "sttoped\n");
 		}
 
 		void mTimer_Elapsed(object sender, ElapsedEventArgs e) {
 			File.AppendAllText("c:\\temp.txt", DateTime.Now.ToString() + "\n");
 		}
 	}
 }
 
 ```


Installer Program
```csharp
 using System.Collections.Generic;
 using System.ComponentModel;
 using System.Configuration.Install;
 using System.ServiceProcess;
 
 namespace LIUAdmissionsReportService {
 	[RunInstaller(true)]
 	public partial class LIUCRServiceInstaller : Installer {
 		public LIUCRServiceInstaller() {
 			InitializeComponent();
 
 			ServiceInstaller si = new ServiceInstaller();
 			ServiceProcessInstaller spi = new ServiceProcessInstaller();
 
 			si.ServiceName = "LIUCRService"; // this must match the ServiceName specified in WindowsService1.
 			si.DisplayName = "LIU Crystal Report to Pdf Service"; // this will be displayed in the Services Manager.
 			si.Description = DateTime.Now.ToString() + " This service ...";
 			//si.StartType = ServiceStartMode.Automatic;			
 			this.Installers.Add(si);
 
 			spi.Account = System.ServiceProcess.ServiceAccount.LocalSystem; // run under the system account.
 			spi.Username = null;
 			spi.Password = null;
 			this.Installers.Add(spi);
 		}
 	}
 }
 
 ```




