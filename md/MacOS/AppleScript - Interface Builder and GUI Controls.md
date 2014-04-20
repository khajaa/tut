
##AppleScript - Interface Builder and GUI Controls

###IB Outlet
```macos
 property selectedPathLabel : missing value
 property toggleButton : missing value
 ```
Connect from delegate in IB, and then use them like
```macos
 toggleButton's setTitle_("Stop Sharing")
 ```
###IB Action 

don't forget the underscore!
```macos
 --
 end myButtonClick_	
 ```


