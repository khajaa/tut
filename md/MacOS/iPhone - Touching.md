
##iPhone - Touching

###For any kind of custom UIView
Make sure enable user interaction
```macos
 ```
###Example
MyView.h
```macos
 
 @interface MyView : UIView {
 	UILabel *lblMsg;
 }
 
 @end
 
 #import "MyView.h"
 ```
MyView.m
```macos
 - (id)initWithFrame:(CGRect)frame {	
 	if (self = [super initWithFrame:frame]) {
 		CGRect rect = CGRectMake(50,50,250,30);
 		lblMsg = [[[UILabel alloc] initWithFrame:rect] autorelease];
 		[lblMsg setText:@"Double Click or drag me"];
 		[self addSubview:lblMsg];
 	}
 	return self;
 }
 
 - (void)dealloc {
 	[lblMsg release];
 	[super dealloc];	
 }
 
 - (void)touchesBegan:(NSSet *)touches withEvent:(UIEvent *)event {
 	// We only support single touches, so anyObject retrieves just that touch from touches
 	UITouch *touch = [touches anyObject];
 	
 	// Only move if touch is in the label and two finger touch
 	if ([touch tapCount] == 2) {
 		[lblMsg setText:@"Double Clicked"];
 		return;
 	}
 	
 }
 
 
 - (void)touchesMoved:(NSSet *)touches withEvent:(UIEvent *)event {	
 	UITouch *touch = [touches anyObject];
 	// If you have another view in MyView, you can find out the touch
 	// occured on the view or the other one
 	//if ([touch view] != otherView) {
 	//}
 	CGPoint location = [touch locationInView:self];
 	lblMsg.center = location;		
 	return;
 	
 }
 
 - (void)touchesEnded:(NSSet *)touches withEvent:(UIEvent *)event {	
 	//UITouch *touch = [touches anyObject];	
 	//Disable user interaction so subsequent touches don't interfere with animation
 	//self.userInteractionEnabled = NO;
 	//[lblMsg setText:@"Touching is done!"];
 	return;
 }
 @end
 ```

Get all touch
```macos
 ```
Count how many touches 
```macos
 
 ```



