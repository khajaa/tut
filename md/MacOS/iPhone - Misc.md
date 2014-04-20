
##iPhone - Misc


###Detect Retina Display
```macos
 	CGFloat scale = [[UIScreen mainScreen] scale];
 	if (scale > 1.0) {
 		// hello
 	}
 }
 ```
###iOS version

```macos
 if (version >= 3.0)
    {
    // iPhone 3.0 code here
    }


###Detecting iPhone or iPad
```macos
     // The device is an iPad running iPhone 3.2 or later.
 }
 else {
     // The device is an iPhone or iPod touch.
 }
 ```
###Taking Screenshot on Simulator

```macos
 ```
This will copy a image into the clipboard

###Default Screen for iPad
```macos
 Default-PortraitUpsideDown.png 	768w x 1004h
 Default-Landscape.png ** 	1024w x 748h
 Default-LandscapeLeft.png 	1024w x 748h
 Default-LandscapeRight.png 	1024w x 748h
 ```
Startup Orientation Example

For iPhone
```macos
 <string>UIInterfaceOrientationPortrait</string>
 ```
```macos
 <string>UIInterfaceOrientationLandscapeRight</string>
 ```
###Main UI Orientation

```macos
 <array>
 	<string>UIInterfaceOrientationPortrait</string>
 	<string>UIInterfaceOrientationPortraitUpsideDown</string>
 	<string>UIInterfaceOrientationLandscapeLeft</string>
 	<string>UIInterfaceOrientationLandscapeRight</string>
 </array>
 ```


###Access delegate
```macos
 ```
###Code Sigining Error
Key chain -> Login -> Set as Default

###Compile in older version

Go to target -> baseSDK -> 2.0

###Avoid ScreenLock
```macos
 ```
To let it go sleep, 
```macos
 ```
###Allow play audio during screen lock
```macos
 [[AVAudioSession sharedInstance] setDelegate: self];    
 // Allow the app sound to continue to play when the screen is locked.
 [[AVAudioSession sharedInstance] setCategory:AVAudioSessionCategoryPlayback error:nil];
 ```

###Hide Status Bar
```macos
 ```
or (this is obsolete)
```macos
 ```
New way: You need to edit the value with text editor

    <key>UIStatusBarHidden</key>
    <true/>


###Turn on Proximity Sensing (turn off screen when your face close to iphone)
```macos
 ```
###Device Unique ID
```macos
 ```

###Icon Badge Number
Add this under AppDelegete, 


```macos
 //...
 [application setApplicationIconBadgeNumber:25];
 ```
###Startup PNG
Place
```macos
 ```

###Avoid Grossy Icon
```macos
 ```
###Conditional Compile
```macos
 NSLog(@"Simulator!");
 #else
 NSLog(@"Device!");
 #endif
 ```
###Conditional Define
```macos
 ```
###Fix Landscape mode
```macos
 ```
###Get Screen Size
```macos
 ```
###Symbolic Link 3.0 to 3.0.1 
```macos
 ```

###Read info.plist info

```macos
 [mainBundle objectForInfoDictionaryKey:@"myCustomKey"]
 [mainBundle objectForInfoDictionaryKey:@"CFBundleVersion"]
 [mainBundle bundleIdentifier]
 ```
```macos
 ```
###Checking System Version
```macos
 // 2.x
 if ([[sysVersion substringToIndex:2] isEqualToString:@"2."]) {
 }
 // 3.x or higher
 else {}
 ```

###Uninstall XCode
```macos
 ```



