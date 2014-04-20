
##iPhone - Cocos2d

###Installation

1. Download source
http://code.google.com/p/cocos2d-iphone/

2. Run install script
```objective-c
 ```

:Note|for Box2D, one of the file name is corrupted. Fix 
```objective-c
 ```
###Accelerormeter
```objective-c
 	[[UIAccelerometer sharedAccelerometer] setUpdateInterval:(1.0 / 30)];
 ```
```objective-c
 static float prevX=0;//, prevY=0;
 	
 float accelX = acceleration.x * kFilterFactor + (1- kFilterFactor)*prevX;
 //float accelY = acceleration.y * kFilterFactor + (1- kFilterFactor)*prevY;
 	
 prevX = accelX;
 //prevY = accelY;
 NSLog(@"accX = %f",accelX);	
 }
 ```






