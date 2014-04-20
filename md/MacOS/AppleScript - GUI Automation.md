
##AppleScript - GUI Automation


###Inspector
```objective-c
 ```
###Delay
```objective-c
 ```
###Wait until
```objective-c
 delay 0.1
 end repeat
 ```
###Keyboard
```objective-c
 key code 124 -- right arrow Key
 key code 126 -- up arrow Key
 key code 125 -- down arrow Key
 key code 36 - return
 keystroke tab
 key code 123 - tab
 ```
###Click ok in the dialog
```objective-c
 	click button "OK" of sheet 1
 end if
 ```
###Click Check Box in a list

```objective-c
 click checkbox "Change picture:" of group 1 of tab group 1 of window "Desktop & Screen Saver"
 ```
```objective-c
 			display dialog "its' zero"
 		else
 			display dialog "its' NOt zero"
 		end if
 ```
###Open / Close System Pref
```objective-c
 		activate
 		set current pane to pane "com.apple.preferences.sharing"
 	end tell
 ```

```objective-c
 		tell application "System Preferences" to quit
 	end ignoring
 ```
###Exception
```objective-c
 	--
 end try
 ```




