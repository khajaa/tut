
##iPhone - GameKit

###GameKitTestViewController.h
```macos
 #import <UIKit/UIKit.h>
 #import <GameKit/GameKit.h>
 
 @interface GameKitTestViewController : UIViewController<GKPeerPickerControllerDelegate,GKSessionDelegate> {
 	GKPeerPickerController *mPicker;
 	GKSession *mSession;
 	IBOutlet UITextField *mTextField;
 	IBOutlet UITextView *mTextView;
 	NSMutableArray *mPeers;
 	int mCount;
 }
 
 -(IBAction) connectClicked:(id)sender;
 -(IBAction) sendData:(id)sender;
 @property (retain) GKSession *mSession;
 @end
 
 ```
###GameKitTestViewController.m
```macos
 @implementation GameKitTestViewController
 @synthesize mSession;
 
 - (void)viewDidLoad {
     [super viewDidLoad];
 	mPicker=[[GKPeerPickerController alloc] init];
 	mPicker.delegate=self;
 	mPicker.connectionTypesMask = GKPeerPickerConnectionTypeNearby | GKPeerPickerConnectionTypeOnline;
 	mPeers=[[NSMutableArray alloc] init];
 	mCount=0;
 }
 
 - (void)dealloc {
 	[mPeers release];
     [super dealloc];
 }
 
 #pragma mark Events
 -(IBAction) connectClicked:(id)sender{
 	//Show the connector
 	[mPicker show];
 }
 
 #pragma mark PeerPickerControllerDelegate stuff
 
 //Notifies delegate that a connection type was chosen by the user.
 - (void)peerPickerController:(GKPeerPickerController *)picker didSelectConnectionType:(GKPeerPickerConnectionType)type{
 	if (type == GKPeerPickerConnectionTypeOnline) {
         picker.delegate = nil;
         [picker dismiss];
         [picker autorelease];
 		// Implement your own internet user interface here.
     }
 }
 
 //Notifies delegate that the connection type is requesting a GKSession object.
 // You should return a valid GKSession object for use by the picker. If this method is not implemented or returns 'nil', a default GKSession is created on the delegate's behalf.
 - (GKSession *)peerPickerController:(GKPeerPickerController *)picker sessionForConnectionType:(GKPeerPickerConnectionType)type{	
 	//UIApplication *app=[UIApplication sharedApplication];
 	NSString *txt=mTextField.text;
 	
 	GKSession* session = [[GKSession alloc] initWithSessionID:@"gavi" displayName:txt sessionMode:GKSessionModePeer];
     [session autorelease];
     return session;
 }
 
 //Notifies delegate that the peer was connected to a GKSession.
 - (void)peerPickerController:(GKPeerPickerController *)picker didConnectPeer:(NSString *)peerID toSession:(GKSession *)session{
 	NSLog(@"Connected from %@",peerID);	
 	// Use a retaining property to take ownership of the session.
     self.mSession = session;
 	// Assumes our object will also become the session's delegate.
     session.delegate = self;
     [session setDataReceiveHandler: self withContext:nil];
 	// Remove the picker.
     picker.delegate = nil;
     [picker dismiss];
     [picker autorelease];
 	// Start your game.
 }
 
 -(IBAction) sendData:(id)sender{
 	mCount++;
 	NSString *str=[NSString stringWithFormat:@"Hello SaiBaba %d",mCount];
 	[mSession sendData:[str dataUsingEncoding: NSASCIIStringEncoding] toPeers:mPeers withDataMode:GKSendDataReliable error:nil];
 }
 
 - (void) receiveData:(NSData *)data fromPeer:(NSString *)peer inSession: (GKSession *)session context:(void *)context{
     // Read the bytes in data and perform an application-specific action.	
 	NSString* aStr;
 	aStr = [[NSString alloc] initWithData:data encoding:NSASCIIStringEncoding];
 	NSLog(@"Received Data from %@",peer);
 	mTextView.text=aStr;
 }
 
 // Notifies delegate that the user cancelled the picker.
 - (void)peerPickerControllerDidCancel:(GKPeerPickerController *)picker{}
 
 #pragma mark GameSessionDelegate stuff
 
 //Indicates a state change for the given peer.
 - (void)session:(GKSession *)session peer:(NSString *)peerID didChangeState:(GKPeerConnectionState)state{	
 	switch (state){
         case GKPeerStateConnected:{
 			NSString *str=[NSString stringWithFormat:@"%@\n%@%@",mTextView.text,@"Connected from pier ",peerID];
 			mTextView.text= str;
 			NSLog(str);
 			[mPeers addObject:peerID];
 			break;
 		}
         case GKPeerStateDisconnected:{
 			[mPeers removeObject:peerID];
 			
 			NSString *str=[NSString stringWithFormat:@"%@\n%@%@",mTextView.text,@"DisConnected from pier ",peerID];
 			mTextView.text= str;
 			NSLog(str);
 			break;
 		}
     }
 }
 @end
 ```



