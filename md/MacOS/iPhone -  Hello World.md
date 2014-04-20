
##iPhone -  Hello World

###Download Source


###HelloWorldAppDelegete.h
```objective-c
 
 @class MyView;
 
 @interface HelloWorldAppDelegate : NSObject {
     UIWindow *window;
     MyView *contentView;
 	
 	UILabel  *myLabel; // add this
 }
 
 @property (nonatomic, retain) UIWindow *window;
 @property (nonatomic, retain) MyView *contentView;
 
 @property (nonatomic, retain) UILabel *myLabel;  // add this
 @end
 ```
###HelloWorldAppDelegete.m
```objective-c
 #import "MyView.h"
 
 @implementation HelloWorldAppDelegate
 
 @synthesize window;
 @synthesize contentView;
 @synthesize myLabel; // Add this
 
 - (void)applicationDidFinishLaunching:(UIApplication *)application {	
 	// Create window
 	self.window = [[[UIWindow alloc] initWithFrame:[[UIScreen mainScreen] bounds]] autorelease];
     
     // Set up content view
 	self.contentView = [[[MyView alloc] initWithFrame:[[UIScreen mainScreen] applicationFrame]] autorelease];
 	[window addSubview:contentView];
 	
 	//----------------------- ADDITIONAL CODE START -----------------------------
 	// Label Size and Position
 	CGFloat width = 150;
 	CGFloat height = 100;
 	CGFloat x = 320/2 - width/2;
 	CGFloat y = 480/2 - height/2;
 	CGRect rect = CGRectMake(x , y, width, height);
 	
 	// Create Label
 	self.myLabel = [[[UILabel alloc] initWithFrame:rect] autorelease];
 	[myLabel setText:@"Hello from iPhone"];
 	[myLabel setTextAlignment:UITextAlignmentCenter];
 	[contentView addSubview:myLabel];	
     //----------------------- ADDITIONAL CODE END -----------------------------
 
 	// Show window
 	[window makeKeyAndVisible];
 }
 
 - (void)dealloc {
 	[myLabel release];
 	[contentView release];
 	[window release];
 	[super dealloc];
 }
 
 @end
 ```




