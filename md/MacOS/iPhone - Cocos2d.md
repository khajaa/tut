
##iPhone - Cocos2d

###Installation

1. Download source
http://code.google.com/p/cocos2d-iphone/

2. Run install script
```macos
 ```

:Note|for Box2D, one of the file name is corrupted. Fix 
```macos
 ```
###Accelerormeter
```macos
 	[[UIAccelerometer sharedAccelerometer] setUpdateInterval:(1.0 / 30)];
 ```
```macos
 static float prevX=0;//, prevY=0;
 	
 float accelX = acceleration.x * kFilterFactor + (1- kFilterFactor)*prevX;
 //float accelY = acceleration.y * kFilterFactor + (1- kFilterFactor)*prevY;
 	
 prevX = accelX;
 //prevY = accelY;
 NSLog(@"accX = %f",accelX);	
 }
 ```






