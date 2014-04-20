
##iPhone - User Preference

###Example for Rate me popup
```objective-c
 NSLog(@"%d",count);	
 if (count == 0 || count % 3 == 0) {
 	UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Thank You!" message:I18N_FEEDBACK
 												   delegate:self cancelButtonTitle:@"No" otherButtonTitles:@"Yes!", nil];
 	[alert show];  
 }	
 count++;
 [UserPref setInt:@"COUNT" val:count];
 ```
```objective-c
 if (buttonIndex == 0){
 	NSLog(@"cancel");
 }
 else {
 	[[UIApplication sharedApplication] openURL:[NSURL URLWithString:@"http://iphone.objectgraph.com/mopic/itunes/"]];
 	NSLog(@"ok");
 }
 }
 ```
```objective-c
 #define I18N_FEEDBACK ((IS_JP)? @"Rate now" : @"I hope you like it. Would you like to give some feedbacks?")
 ```
MainView.h
```objective-c
 
 @interface MainView : UIView {
 	IBOutlet UIButton *btnSave;
 	IBOutlet UIButton *btnLoad;
 	IBOutlet UILabel *lblOutput;
 	IBOutlet UITextField *tfInput;
 }
 - (IBAction)loadVal:(id)sender;
 - (IBAction)saveVal:(id)sender;
 @property (nonatomic, retain) UIButton *btnSave;
 @property (nonatomic, retain) UIButton *btnLoad;
 @property (nonatomic, retain) UILabel *lblOutput;
 @property (nonatomic, retain) UITextField *tfInput;
 @end
 
 ```
```objective-c
 
 @implementation MainView
 
 @synthesize btnLoad;
 @synthesize btnSave;
 @synthesize lblOutput;
 @synthesize tfInput;
 
 
 - (id)initWithFrame:(CGRect)frame {
 	if (self = [super initWithFrame:frame]) {
 		// Initialization code
 	}
 	return self;
 }
 
 - (void)drawRect:(CGRect)rect {
 	// Drawing code
 }
 
 - (void)dealloc {
 	[super dealloc];
 }
 
 - (IBAction)loadVal:(id)sender{	
 	CFStringRef myKey = CFSTR("myPref");
 	CFStringRef myVal;
 	// Read the preference.
 	myVal = (CFStringRef)CFPreferencesCopyAppValue(myKey, kCFPreferencesCurrentApplication);	
 	NSString *tmp = (NSString *)myVal;
 	[lblOutput setText:tmp];
 	// When finished with value, you must release it
 	CFRelease(myVal);
 	[tmp release];
 }
 
 - (IBAction)saveVal:(id)sender{
 	CFStringRef myKey = CFSTR("myPref");
 	CFStringRef myVal = (CFStringRef)tfInput.text;	
 	CFPreferencesSetAppValue(myKey, myVal, kCFPreferencesCurrentApplication);	
 	// Write out the preference data.
 	CFPreferencesAppSynchronize(kCFPreferencesCurrentApplication);
 }
 
 
 @end
 ```
###Updating Number Example 

```objective-c
 CFNumberRef tempScore;
 int highScore;
  
 // Look for the preference.
 tempScore = (CFNumberRef)CFPreferencesCopyAppValue(highScoreKey, kCFPreferencesCurrentApplication);
  
 // If the preference exists, update it. If not, create it.
 if (tempScore) {
     // Numbers come out of preferences as CFNumber objects.
     if (!CFNumberGetValue(tempScore, kCFNumberIntType, &highScore)) {
         highScore = 0;
     }
     CFRelease(tempScore);
  
     printf("The old high score was %d.", highScore);
 }
 else {
     // No previous value.
     printf("There is no old high score.");
     highScore = 0;
 }
  
 highScore += 5;
  
 // Create the CFNumber to pass to the preference API.
 tempScore = CFNumberCreate(NULL, kCFNumberIntType, &highScore);
  
 // Set the preference value, or update it if it already exists.
 CFPreferencesSetAppValue(highScoreKey, tempScore,
         kCFPreferencesCurrentApplication);
  
 // Release the CFNumber.
 CFRelease(tempScore);
  
 // Write out the preferences.
 CFPreferencesAppSynchronize(kCFPreferencesCurrentApplication);
 
 ```



