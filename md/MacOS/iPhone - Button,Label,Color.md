
##Button and Label


###Create a custom RGB color
```objective-c
 ```
###Button and Label with touch event sample code
+Add Button and Label in interface
+In initWithFrame method, set properties.
+Set touch event at select argument (sayHello)
+Implement callback when it's pressed


###MyView.h
```objective-c
 #import <Foundation/Foundation.h>
 @interface MyView : UIView {
 	UILabel *myLabel;
 	UIButton *myBtn;
 }
 @end
 ```

###MyView.m
```objective-c
 /*
 Creating a UIColor with Preset Component Values
 + blackColor  
 + darkGrayColor  
 + lightGrayColor  
 + whiteColor  
 + grayColor  
 + redColor  
 + greenColor  
 + blueColor  
 + cyanColor  
 + yellowColor  
 + magentaColor  
 + orangeColor  
 + purpleColor  
 + brownColor  
 + clearColor  
 */
 @implementation MyView
 - initWithFrame:(CGRect)frame {
 	
 	if (self = [super initWithFrame:frame]) {
 		
 		self.backgroundColor =[UIColor darkGrayColor];
 		
 		// Create a button ----------------------------------------------
 		CGRect btnRect = CGRectMake(10, 10, 300, 40);
 		myBtn = [[[UIButton alloc] initWithFrame:btnRect] autorelease];
 		[myBtn setTitle:@"This is a UIButton. Press me." forStates:UIControlStateNormal];	
 		[myBtn setTitleColor:[UIColor blackColor] forStates:UIControlStateNormal];
 		myBtn.backgroundColor = [UIColor greenColor];	
 		// Add callback, sayHello function
 		[myBtn addTarget:self action:@selector(sayHello:) forControlEvents:UIControlEventTouchUpInside];
 		[self addSubview:myBtn];
 		
 		// Create a Label ----------------------------------------------
 		CGRect lblRect = CGRectMake(10,80,300,60);
 		myLabel = [[[UILabel alloc] initWithFrame:lblRect] autorelease];
 		myLabel.backgroundColor = [UIColor blueColor];	
 		[myLabel setText:@"This is a UILabel"];
 		[myLabel setTextAlignment:UITextAlignmentCenter];
 		[self addSubview:myLabel];	
 	
 	}
 	return self;
 }
 
 - (void)sayHello:(id)sender{
 	[myBtn setTitle:@"button was pressed!" forStates:UIControlStateNormal];
 	[myLabel setText:@"Hello"];
 	self.backgroundColor =[UIColor brownColor];
 }
 
 @end
 
 -(void)dealloc{
 [myBtn release];
 [myLabel release];
 [self release];
 [super dealloc];
 }
 ```




###Font Example
```objective-c
 ```
Here is list
-American Typewriter
-American Typewriter Condensed
-Arial
-Arial Rounded MT Bold
-Courier New
-Georgia
-Helvetica
-Marker Felt
-Times New Roman
-Trebuchet MS
-Verdana
-Zapfino
```objective-c
     Font name: HiraKakuProN-W3
 Family name: Courier
     Font name: Courier
     Font name: Courier-BoldOblique
     Font name: Courier-Oblique
     Font name: Courier-Bold
 Family name: Arial
     Font name: ArialMT
     Font name: Arial-BoldMT
     Font name: Arial-BoldItalicMT
     Font name: Arial-ItalicMT
 Family name: STHeiti TC
     Font name: STHeitiTC-Light
     Font name: STHeitiTC-Medium
 Family name: AppleGothic
     Font name: AppleGothic
 Family name: Courier New
     Font name: CourierNewPS-BoldMT
     Font name: CourierNewPS-ItalicMT
     Font name: CourierNewPS-BoldItalicMT
     Font name: CourierNewPSMT
 Family name: Zapfino
     Font name: Zapfino
 Family name: Hiragino Kaku Gothic ProN W6
     Font name: HiraKakuProN-W6
 Family name: Arial Unicode MS
     Font name: ArialUnicodeMS
 Family name: STHeiti SC
     Font name: STHeitiSC-Medium
     Font name: STHeitiSC-Light
 Family name: American Typewriter
     Font name: AmericanTypewriter
     Font name: AmericanTypewriter-Bold
 Family name: Helvetica
     Font name: Helvetica-Oblique
     Font name: Helvetica-BoldOblique
     Font name: Helvetica
     Font name: Helvetica-Bold
 Family name: Marker Felt
     Font name: MarkerFelt-Thin
 Family name: Helvetica Neue
     Font name: HelveticaNeue
     Font name: HelveticaNeue-Bold
 Family name: DB LCD Temp
     Font name: DBLCDTempBlack
 Family name: Verdana
     Font name: Verdana-Bold
     Font name: Verdana-BoldItalic
     Font name: Verdana
     Font name: Verdana-Italic
 Family name: Times New Roman
     Font name: TimesNewRomanPSMT
     Font name: TimesNewRomanPS-BoldMT
     Font name: TimesNewRomanPS-BoldItalicMT
     Font name: TimesNewRomanPS-ItalicMT
 Family name: Georgia
     Font name: Georgia-Bold
     Font name: Georgia
     Font name: Georgia-BoldItalic
     Font name: Georgia-Italic
 Family name: STHeiti J
     Font name: STHeitiJ-Medium
     Font name: STHeitiJ-Light
 Family name: Arial Rounded MT Bold
     Font name: ArialRoundedMTBold
 Family name: Trebuchet MS
     Font name: TrebuchetMS-Italic
     Font name: TrebuchetMS
     Font name: Trebuchet-BoldItalic
     Font name: TrebuchetMS-Bold
 Family name: STHeiti K
     Font name: STHeitiK-Medium
     Font name: STHeitiK-Light





