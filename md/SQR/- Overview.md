
##- Overview

###Overview
SQR is one of PeopleSoft script language. 

Requrements:

-pshome
-PeopleTools - Application Designer
-sqrexpress
--Setup Tips
---get latest pshome and setup the pass
---sqrw (e.g. c:\pshome\PT849\bin\sqr\ORA\binw\sqrw.exe)
---log file (if it shows error, create a empty file in the directory. e.g. c:\sfperrorlog\error.log)


%%%Work flow:%%%
-Lookup Page in PS (Control - Shift - J)
-Check the table in Application designer
-Open the script file in sqrexpress
-Modify Code
-Hit Check (Syntax Check)
-Place on the directory
-Hit Run (!) or run the process on the PS

###Tips
-Use SHOW command to debug

Common architecture could be like

```sqr
   DO PROC_1
   DO PROC_2
   ...
 FROM SOME_TABLE
 WHERE ...
 
 
 PROC_1 ...
 ...
 ...
 PROC_2 ...
 ...
 ...
 ...
 ```

















