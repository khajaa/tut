
##MacOS - Settings plist property list file read and write


###Creating
```applescript
 	-- let's use user's document folder as default
 	set theEmptyPListData to "
 		<?xml version=\"1.0\" encoding=\"UTF-8\"?>
 		<!DOCTYPE plist PUBLIC \"-//Apple//DTD PLIST 1.0//EN\" \"http://www.apple.com/DTDs/PropertyList-1.0.dtd\">
 		<plist version=\"1.0\">
 		<dict>
 			<key>SelectedDirectory</key>
 			<string></string>
 		</dict>
 		</plist>
 		"
 	
 	set thePListFile to open for access thePListPath with write permission
 	set eof of thePListFile to 0
 	write theEmptyPListData to thePListFile starting at eof
 	close access thePListFile
 end create_settings
 
 ```
###Reading the settings file
```applescript
 set thePListPath to POSIX path of (theOutputFolder & "settings.plist")
 tell application "System Events"
 	tell property list file thePListPath
 		tell contents
 			set mMyPath to value of property list item "SelectedDirectory"
 			-- mMyPath is a property variable
 			--display dialog mMyPath
 		end tell
 	end tell
 end tell
 
 ```
```applescript
 set thePListPath to POSIX path of (theOutputFolder & "settings.plist")
 tell application "System Events"
 	tell property list file thePListPath
 		tell contents
 			set value of property list item "SelectedDirectory" to "/Application/AperatureScience"
 		end tell
 	end tell
 end tell
 ```


