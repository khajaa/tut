
##AppleScript - Interface Builder and GUI Controls

###IB Outlet
```objective-c
 property selectedPathLabel : missing value
 property toggleButton : missing value
 ```
Connect from delegate in IB, and then use them like
```objective-c
 toggleButton's setTitle_("Stop Sharing")
 ```
###IB Action 

don't forget the underscore!
```objective-c
 --
 end myButtonClick_	
 ```


