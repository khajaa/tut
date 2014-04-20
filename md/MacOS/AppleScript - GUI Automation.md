
##AppleScript - GUI Automation


###Inspector
```macos
 ```
###Delay
```macos
 ```
###Wait until
```macos
 delay 0.1
 end repeat
 ```
###Keyboard
```macos
 key code 124 -- right arrow Key
 key code 126 -- up arrow Key
 key code 125 -- down arrow Key
 key code 36 - return
 keystroke tab
 key code 123 - tab
 ```
###Click ok in the dialog
```macos
 	click button "OK" of sheet 1
 end if
 ```
###Click Check Box in a list

```macos
 click checkbox "Change picture:" of group 1 of tab group 1 of window "Desktop & Screen Saver"
 ```
```macos
 			display dialog "its' zero"
 		else
 			display dialog "its' NOt zero"
 		end if
 ```
###Open / Close System Pref
```macos
 		activate
 		set current pane to pane "com.apple.preferences.sharing"
 	end tell
 ```

```macos
 		tell application "System Preferences" to quit
 	end ignoring
 ```
###Exception
```macos
 	--
 end try
 ```



