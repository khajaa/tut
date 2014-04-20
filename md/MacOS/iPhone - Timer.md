
##iPhone - Timer


###Example

```macos
 								 target:self
 							   selector:@selector(tick:)
 							   userInfo:nil
 								repeats:YES];
 ```
```macos
 ```
###Example

MainView.h
```macos
 @interface MainView : UIView {
 	NSTimer *mTimer;
 }
 -(void)startTimer;
 -(void)stopTimer;
 -(void)ticked;	
 @end
 
 ```
MainView.m
```macos
 
 - (void)startTimer {
 mTimer = [NSTimer scheduledTimerWithTimeInterval:3 target:self selector:@selector(ticked) userInfo:nil repeats:YES];
 }
 
 - (void)stopTimer {
 if (mTimer) {
 	[mTimer invalidate];
 	mTimer = nil;
 }
 }
 
 -(void)ticked{
 // do something	
 }
 
 ```
###Quick Solution to perform selector
   [self performSelector: @selector(doSomething)
             withObject: nil
             afterDelay: 1.0];




