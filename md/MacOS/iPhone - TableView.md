
##iPhone - TableView


###Remove Background
```objective-c
 mTableView.backgroundView = nil;
 ```
###Change Cell Background Color
```objective-c
    cell.backgroundColor = [UIColor grayColor];
 }
 ```

###Cell Height

```objective-c
 ```
###Avoid Selction

```objective-c
 ```

###Edit
```objective-c
 ```
###Concept
You need one TableView and you need to bind those
-delegate
-dataSource

Then, implement the interface UITableViewDelegate and UITableViewDataSource.

:Note|It's same thing that you drag and drop TableViewController in IB and set up one Controller class (You can connect delegate and dataSource too). But in this example, I'm setting delegate and dataSource to the View itself. Ideally, you might want to separate those into another class like controller.

###Custom Cell

1. Add .xib file that contains UITableViewCell only
2. Add a class that inherits from UITableViewCell
3. Set the class name in IB's TableViewCell itself (not owner)
3. Add IBOutlet to assign values


Calling the custom cell
```objective-c
    
    static NSString *CellIdentifier = @"CustomCell";
 
    CustomCell *cell = (CustomCell *) [tableView dequeueReusableCellWithIdentifier:CellIdentifier];
    if (cell == nil) {
 
 	NSArray *topLevelObjects = [[NSBundle mainBundle] loadNibNamed:@"CustomCell" owner:self options:nil];
 	
 	for (id currentObject in topLevelObjects){
 		if ([currentObject isKindOfClass:[UITableViewCell class]]){
 			cell =  (CustomCell *) currentObject;
 			break;
 		}
 	}
 }
 	
 cell.capitalLabel.text = [capitals objectAtIndex:indexPath.row];
 cell.stateLabel.text = [states objectAtIndex:indexPath.row];
 
    return cell;
 }
 ```

Old tutorial below

###Example without Controller
MainView.h
```objective-c
 NSMutableArray	*mMusicList;
 IBOutlet UITableView *mMusicTable;
 }
 ```
MainView.m
```objective-c
 
 @implementation MainView
 
 - (void)awakeFromNib{	
 mMusicList = [[NSMutableArray alloc] init];
 [mMusicList addObject:[NSDictionary dictionaryWithObjectsAndKeys:
 					 @"Fast Lane", @"title",
 					 @"http://xxkitesttest/dftjekaljfdaodkafjaljal.mp3", @"url",
 					 nil]];
 [mMusicList addObject:[NSDictionary dictionaryWithObjectsAndKeys:
 					 @"Deep Breath", @"title",
 					 @"http://xxkitesttest/dfjalfa.mp3", @"url",
 					 nil]];
 [mMusicList addObject:[NSDictionary dictionaryWithObjectsAndKeys:
 					 @"Trance Action", @"title",
 					 @"http://xxkitesttest/fkdlajflajfa.mp3", @"url",
 					 nil]];
 mMusicTable.delegate = self;
 mMusicTable.dataSource = self;
 }
 
 //-----------------------------------------------------------------------------------------------------------------------
 - (UITableViewCellAccessoryType)tableView:(UITableView *)tableView accessoryTypeForRowWithIndexPath:(NSIndexPath *)indexPath {
 //return UITableViewCellAccessoryDisclosureIndicator;
 return UITableViewCellAccessoryNone;
 }
 
 //-----------------------------------------------------------------------------------------------------------------------
 - (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView {
 return 1;
 }
 
 //-----------------------------------------------------------------------------------------------------------------------
 - (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath {
 //NSString *urlPath = [[menuList objectAtIndex: indexPath.row] objectForKey:@"url"];
 //[webview loadRequest:[NSURLRequest requestWithURL:[NSURL URLWithString:urlPath]]]; 
 }
 
 //------------------------------------------------------------------------------------------------------------------------ 
 - (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section {
 return [mMusicList count];
 }
 
 //-----------------------------------------------------------------------------------------------------------------------
 - (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath {
 UITableViewCell *cell = [mMusicTable dequeueReusableCellWithIdentifier:@"MyCellIdentifier"];
 if (cell == nil) {
 	cell = [[[UITableViewCell alloc] initWithFrame:CGRectZero reuseIdentifier:@"MyCellIdentifier"] autorelease];
 }	
 cell.text = [[mMusicList objectAtIndex:arc4random()%[mMusicList count]] objectForKey:@"title"];
 return cell;
 }
 
 @end
 ```


###Custom Cell Example

DictCell.h
```objective-c
 @interface DictCell : UITableViewCell {
 	UILabel *lblTitle;
 	UILabel *lblDesc;
 }
 -(void) setData:(NSString *) title description:(NSString *) description ;
 @property (nonatomic, retain) UILabel *lblTitle;
 @property (nonatomic, retain) UILabel *lblDesc;
 
 @end
 ```
DictCell.m 
```objective-c
 
 @implementation DictCell
 
 @synthesize lblTitle;
 @synthesize lblDesc;
 
 - (id)initWithFrame:(CGRect)frame reuseIdentifier:(NSString *)reuseIdentifier {
     if (self = [super initWithFrame:frame reuseIdentifier:reuseIdentifier]) {
 		lblTitle = [[UILabel alloc]  initWithFrame:CGRectMake(5.0f,2.0f, 315.0f,22.0f)];
 		[lblTitle setFont:[UIFont fontWithName:@"Times New Roman" size:16.0f]];
 		[self.contentView addSubview:lblTitle];
 		
 		lblDesc = [[UILabel alloc]  initWithFrame:CGRectMake(5.0f, 25.0f, 310, 53.0f)];
 		[lblDesc setLineBreakMode:UILineBreakModeWordWrap];
 		lblDesc.numberOfLines = 10;
 		[lblDesc setFont:[UIFont fontWithName:@"Times New Roman" size:10.0f]];
 		[lblDesc setTextColor:[UIColor darkGrayColor]];	
 		[self.contentView addSubview:lblDesc];
 		
 		[lblTitle release];
 		[lblDesc release];	
     }
     return self;
 }
 
 
 - (void)setSelected:(BOOL)selected animated:(BOOL)animated {
 	// no selection here       
     //[super setSelected:selected animated:animated];
 }
 
 
 - (void)dealloc {
 	[lblTitle release];
 	[lblDesc release];
     [super dealloc];
 }
 
 -(void) setData:(NSString *) title description:(NSString *) description {
 	lblTitle.text = title;
 	lblDesc.text = description;
 }
 
 @end
 ```

Usage Example
```objective-c
 	DictCell *cell = (DictCell*)[tableView dequeueReusableCellWithIdentifier:@"MyCellIdentifier"];
 	if (cell == nil) {
 		cell = [[[DictCell alloc] initWithFrame:CGRectZero reuseIdentifier:@"MyCellIdentifier"] autorelease];
 	}
 	
 	// get the view controller's info dictionary based on the indexPath's row
 	[cell setData: [[mResultArray objectAtIndex:indexPath.row] objectForKey:@"word"] 
 description:[[mResultArray objectAtIndex:indexPath.row] objectForKey:@"meaning"]];
 	return cell;
 }
 ```

###Editing Table
```objective-c
 ```



