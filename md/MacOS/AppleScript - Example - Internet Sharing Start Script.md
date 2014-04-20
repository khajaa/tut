
##AppleScript - Example - Internet Sharing Start Script

###Example Script
```macos
 
 try
 	if isRunning("InternetSharing") then
 		do shell script "launchctl unload -w /System/Library/LaunchDaemons/com.apple.InternetSharing.plist" with administrator privileges
 		
 		if isRunning("InternetSharing") then
 			error "Internet Connection Sharing was Not Disabled"
 		else
 			my growlnote("Success", "Internet Connection Sharing Disabled")
 		end if
 		
 	else
 		do shell script "launchctl load -w /System/Library/LaunchDaemons/com.apple.InternetSharing.plist" with administrator privileges
 		
 		if isRunning("InternetSharing") then
 			my growlnote("Success", "Internet Connection Sharing Enabled")
 		else
 			error "Internet Connection Sharing was Not Enabled"
 		end if
 		
 	end if
 	
 on error errMsg
 	my growlnote("Error", errMsg)
 	
 end try
 
 on isRunning(processName)
 	try
 		return 0 < length of (do shell script "ps ax | grep -v grep | grep " & processName)
 	on error
 		return false
 	end try
 end isRunning
 
 on register_growl()
 	try
 		tell application "GrowlHelperApp"
 			set the notificationsList to {"Success", "Warning", "Error"}
 			register as application "Toggle Internet Connection Sharing" all notifications notificationsList default notifications notificationsList icon of application "Sharing"
 		end tell
 	end try
 end register_growl
 
 on growlnote(growltype, str)
 	try
 		tell application "GrowlHelperApp"
 			notify with name growltype title growltype description str application name "Toggle Internet Connection Sharing"
 		end tell
 	end try
 end growlnote
 
 ```
###Example 2
```macos
     activate
     reveal (pane id "com.apple.preferences.sharing")
 end tell
 
 tell application "System Events"
     tell process "System Preferences"
         try
             click checkbox of row 11 of table 1 of scroll area of group 1 of window "Sharing"
 
             if checkbox of row 11 of table 1 of scroll area of group 1 of window "Sharing" is equal to 1 then
                 repeat until sheet of window 1 exists
                     delay 0.5
                 end repeat
 
             end if
 
             if (sheet of window 1 exists) then
                 click button "Start" of sheet of window 1
 
             end if
 
             tell application "System Preferences" to quit
             activate (display dialog "Internet Sharing preferences sucessfully flipped")
 
         on error
 
             activate
             display dialog "something went wrong in automation but you are probably in the right menu..."
             return false
         end try
 
     end tell
 
 end tell
 
 ```
###Reference

http://stackoverflow.com/questions/2704889/how-to-start-stop-internet-sharing-using-apple-script



