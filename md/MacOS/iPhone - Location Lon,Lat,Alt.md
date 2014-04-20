
##iPhone - Location Lon,Lat,Alt

###Introduction
Basically, you need to use
```objective-c
 ```
So let's initialize 
```objective-c
 ```
```objective-c
 ```

###Sample Code - MyLonLat
MyView.h
```objective-c
 
 @interface MyView : UIView {
 	UILabel *lblPosition;
 }
 
 -(void)setLonLat:(float)lon Lat:(float)lat Alt:(float)alt;
 
 @end
 ```
MyView.m 
```objective-c
 @implementation MyView
 
 - (id)initWithFrame:(CGRect)frame {
     if (self = [super initWithFrame:frame]) {
 		self.backgroundColor = [UIColor lightGrayColor];
         CGRect rect = CGRectMake(10,10,300,50);
 		lblPosition = [[[UILabel alloc] initWithFrame:rect] autorelease];
 		[lblPosition setText:@"Getting Position..."];
 		[self addSubview:lblPosition];
     }
     return self;
 }
 
 
 - (void)drawRect:(CGRect)rect {
     // Drawing code.
 }
 
 
 - (void)dealloc {
 	[lblPosition release];
 	[super dealloc];
 }
 
 
 -(void)setLonLat:(float)lon Lat:(float)lat Alt:(float)alt{
 	NSString *str = [[NSString alloc] initWithFormat:@"(%.2f,%.2f,%.2f)",lon,lat,alt];
 	[lblPosition setText:str];
 }
 
 @end
 ```

MyLonLatAppDelegate.h 
```objective-c
 #import <CoreLocation/CLError.h>
 #import <CoreLocation/CoreLocation.h>
 #import <CoreLocation/CLLocation.h>
 #import <CoreLocation/CLLocationManager.h>
 #import <CoreLocation/CLLocationManagerDelegate.h>
 
 @class MyView;
 
 @interface MyLonLatAppDelegate : NSObject <CLLocationManagerDelegate>{
 	IBOutlet UIWindow *window;
 	IBOutlet MyView *contentView;
 	CLLocationManager *locationManager;
 }
 
 @property (nonatomic, retain) UIWindow *window;
 @property (nonatomic, retain) MyView *contentView;
 
 @end
 ```

MyLonLatAppDelegate.m 
```objective-c
 #import "MyView.h"
 
 @implementation MyLonLatAppDelegate
 
 @synthesize window;
 @synthesize contentView;
 
 
 - (void)applicationDidFinishLaunching:(UIApplication *)application {	
 	// Create window
 	self.window = [[[UIWindow alloc] initWithFrame:[[UIScreen mainScreen] bounds]] autorelease];
     
     // Set up content view
 	self.contentView = [[[MyView alloc] initWithFrame:[[UIScreen mainScreen] applicationFrame]] autorelease];
 	[window addSubview:contentView];
 	
 	locationManager =  [[CLLocationManager alloc] init];
     locationManager.delegate = self;
     locationManager.distanceFilter = 1000;  // 1 kilometer
     locationManager.desiredAccuracy = kCLLocationAccuracyKilometer;
     [locationManager startUpdatingLocation];
 	
 	[window makeKeyAndVisible];
 }
 
 
 - (void)dealloc {
 	[contentView release];
 	[window release];
 	[super dealloc];
 }
 
 - (void)locationManager:(CLLocationManager *)manager didUpdateToLocation:(CLLocation *)newLocation fromLocation:(CLLocation *)oldLocation{
 	[contentView setLonLat:newLocation.coordinate.latitude Lat:newLocation.coordinate.longitude Alt:newLocation.altitude];
 [locationManager stopUpdatingLocation];
 }
 
 - (void)locationManager:(CLLocationManager *)manager didFailWithError:(NSError *)error{
 	[contentView setLonLat:-1.0f Lat:-1.0f Alt:-1.0f];
 }
 
 @end
 
 ```



