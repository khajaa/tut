
##iPhone - nib (xib) and Interface Designer

###Initializing nib coder or programatically created view
```objective-c
 // This is the case in the example as provided.  See also initWithFrame:.
 - (id)initWithCoder:(NSCoder *)coder {
 	
 	if (self = [super initWithCoder:coder]) {
 		[self initMainView];
 	}
 	return self;
 }
 
 // If you were to create the view programmatically, you would use initWithFrame:.
 // You want to make sure the placard view is set up in this case as well (as in initWithCoder:).
 - (id)initWithFrame:(CGRect)frame {
 	
 	if (self = [super initWithFrame:frame]) {
 		[self initMainView];
 	}
 	return self;
 }
 ```


