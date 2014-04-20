
##iPhone - Picker

###
Note:
If you connect datasource and delegate from PickerView, you do not need Delegate implementation here. Just fill in the functions.

MainView.h
```macos
 
 @interface MainView : UIView <UIPickerViewDelegate>{
 	IBOutlet UIPickerView *myPickerView;
 	NSArray	*pickerViewArray;
 }
 - (void)initMainView;
 @end
 ```

MainView.m
```macos
 
 @implementation MainView
 - (void)awakeFromNib{
 	pickerViewArray = [[NSArray arrayWithObjects:
 						@"Cat",
 						@"Dog",
 						@"Monkey", 
 						@"Something1",
 						@"Something2",
 						@"Something3",
 						@"Something4",
 						@"Something5",
 						nil] retain];
 	myPickerView.delegate = self;
 	myPickerView.showsSelectionIndicator = YES; // Default is NO
 }
 
 - (id)initWithCoder:(NSCoder *)coder {
 	if (self = [super initWithCoder:coder]) {
 		[self initMainView];
 	}
 	return self;
 }
 
 - (id)initWithFrame:(CGRect)frame {
 	if (self = [super initWithFrame:frame]) {
 		[self initMainView];
 	}
 	return self;
 }
 
 - (void)initMainView{
 }
 
 - (void)drawRect:(CGRect)rect {
     // Drawing code
 }
 
 - (void)dealloc {
 	[pickerViewArray release];
 	[myPickerView release];
     [super dealloc];
 }
 
 - (void)pickerView:(UIPickerView *)pickerView didSelectRow:(NSInteger)row inComponent:(NSInteger)component{
 	printf("selected %d\n",row);
 }
 
 - (NSString *)pickerView:(UIPickerView *)pickerView titleForRow:(NSInteger)row forComponent:(NSInteger)component{
 	return [pickerViewArray objectAtIndex:row];
 }
 
 //- (CGFloat)pickerView:(UIPickerView *)pickerView widthForComponent:(NSInteger)component{
 //	return 300;
 //}
 
 //- (CGFloat)pickerView:(UIPickerView *)pickerView rowHeightForComponent:(NSInteger)component{
 //	return 40.0;
 //}
 
 - (NSInteger)pickerView:(UIPickerView *)pickerView numberOfRowsInComponent:(NSInteger)component{
 	return [pickerViewArray count];
 }
 
 - (NSInteger)numberOfComponentsInPickerView:(UIPickerView *)pickerView{
 	return 1;
 }
 
 @end
 ```
###Rebind Picker
```macos
 ```
This is useful if you have multiple pickers



