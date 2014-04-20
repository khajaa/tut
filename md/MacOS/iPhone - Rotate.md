
##iPhone - Rotate


###Detect Orientation - Customize
```macos
 //...
 [[UIDevice currentDevice] beginGeneratingDeviceOrientationNotifications];
    [[NSNotificationCenter defaultCenter] addObserver:self selector:@selector(orientationChanged:)
 												 name:UIDeviceOrientationDidChangeNotification object:nil];
 }
 
 - (void)orientationChanged:(NSNotification *)notification{
    // We must add a delay here, otherwise we'll swap in the new view
    // too quickly and we'll get an animation glitch
    //[self performSelector:@selector(updateLandscapeView) withObject:nil afterDelay:0];
 if (UIDeviceOrientationIsLandscape([UIDevice currentDevice].orientation)){		
 //UIDeviceOrientation deviceOrientation = [UIDevice currentDevice].orientation;
 	// if (deviceOrientation == UIDevice... do something here
 }
 ```
###Rotation fix in code
turn on this in each controller
```macos
 return YES;
 }
 ```
```macos
 UIInterfaceOrientation toOrientation= self.interfaceOrientation; 
 // portrait
 if (toOrientation== UIInterfaceOrientationPortrait || toOrientation== UIInterfaceOrientationPortraitUpsideDown)   {	
 	//
 }
 // landscape
 else {
 	//
 }
 }
 ```
###Initial Orientation

in info.plist

```macos
 ```
Start type in and use auto-complete

```macos
 Portrait (bottom home button)
 Landscape (left home button)
 Landscape (right home button)
 ```


