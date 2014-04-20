
##iPhone - Interface Builder and Hello World

###Interface Builder - Hello World 
Interface builder is XCode module that allows you to edit GUI parts via intuitive designer; such as, inspector, document designer, and so on. This helps you to define user interface quickly and much more organized project.
.nib or .xib is placed in Resorce folder and that's the file you work on for this.

- Outlet - outlet is connection between control (e.g. UIButton) and your code in view file (e.g. MainView.h & MainView.m)
- Action - action is coming with control (e.g. UIButton) and you will connect this action in nib (xib) file and method in .m file.

###Steps and Example project - HelloIB
+Create New Project of Cocoa Touch Utility
+Go to Resources folder, and double click MainView.xib
+You will get screen like this picture 1. Left most window it's called document window. Next one is inspector. Next one is where you drop something from the right most library. If you adding .xib file manually, you need to drop .h file in this document window. Then you will add NSMainNibFile attribute with your MainWindow class name (mostly it's called MainWindow).
+Drag and Drop label and button from library window (picture 2).
+Click each control and set name "mylabel" and "mybutton"
+You can specify some parameters in attribute window such as default value for text
+Since you drop label and button, let's make outlet for them. Add IBOutlet member variables into your MainView and setup properties and synthesized values. 
```macos
 IBOutlet UILabel *mylabel;
 ```
```macos
 @property (nonatomic, retain) UILabel *mylabel;
 ```
```macos
 @synthesize mylabel;
 ```
+Add action with + button and name it "myaction:" in MainView's action 
+Drag the myaction into XCode, MainView.h after class declaretion (see picture 3)
```macos
 ```
+Go to connector window and pull myaction dot on the button, and select "touch down" (see picture 5)
+Implement inside myaction function in .m file
+build and run


picture 1


picture 2


picture 3


picture 4


picture 5


###Sample Code
MainView.h
```macos
 
 @interface MainView : UIView {
 	IBOutlet UILabel *mylabel;
 	IBOutlet UIButton *mybutton;
 }
 - (IBAction)myaction:(id)sender;
 @property (nonatomic, retain) UIButton *mybutton;
 @property (nonatomic, retain) UILabel *mylabel;
 @end
 
 ```
```macos
 
 @implementation MainView
 @synthesize mybutton;
 @synthesize mylabel;
 
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
 	[mylabel release];
 	[mybutton release];
 	[super dealloc];
 }
 
 - (IBAction)myaction:(id)sender {
 	[self.mylabel setText:@"hello good job"];
 }
 
 @end
 
 ```



