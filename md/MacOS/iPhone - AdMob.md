
##iPhone - AdMob


###Get the Product name
    NSDictionary *infoPList = [[NSBundle mainBundle] infoDictionary];
    NSString *appName = [infoPList objectForKey:@"CFBundleDisplayName"];    
    // Create iAD Banner on top of AdMob Banner
    if ([appName isEqualToString:@"ScaryCamera"]) {}

###Trouble Shooting

If you get Object Referene $.... AdMobView not found error, add

```macos
 ```
Also make sure your Owner keeps the reference to the retained reference

```macos
  AdViewController *adViewController;
 }
 @property (nonatomic,retain) IBOutlet AdViewController *adViewController;
 ```
This procedure is not listed in the manual. If you do not add this, it will crush.



###Setup

Create an account at
http://www.admob.com/

Go to Add iPhone Site / App (make sure click app)

Get PublisherID

Download SDK and sample codes

###Steps
-Copy following files
--libAdMobSimulator.a
--libAdMobDevice.a
--AdMobDelegateProtocol.h
--AdMobView.h
--AdViewController.h
--AdViewController.m

Note: If you are building app higher than 3.0, use 
--libAdMobSimulator3_0.a
--libAdMobDevice3_0.a

-Add following framworks
--AddressBook.framework
--CoreLocation.framework
--QuartzCore.framework
-Change following methods in AdViewController.m
--publisherId
--mayAskForLocation
--useTestAd
-Integrate it in IB
--Drag and Drop UIView size should be like 320x48 or 480x48
--Drag and Drop ViewController
--Specify the class to AdViewController
--Set link of the view to the UIView above












