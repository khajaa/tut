
##iPhone - Audio, Sound


###Tips

Convert iMovie' sound track e.g. iLife's music into mp3







###AVAudioPlayer (recommended)

```objective-c
 [player play];
 ```
You need to add 
```objective-c
 ```
alos add 
```objective-c
 ```
in the resouce folder.

###Play while screen lock
```objective-c
 [[AVAudioSession sharedInstance] setDelegate: self];    
 // Allow the app sound to continue to play when the screen is locked.
 [[AVAudioSession sharedInstance] setCategory:AVAudioSessionCategoryPlayback  error:nil];
 ```

###Quick way to load sound from website using web browser
```objective-c
 ```
###Callback

```objective-c
 AudioServicesAddSystemSoundCompletion (_soundID,NULL,NULL,
 	completionCallback,
 	(void*) self);
 AudioServicesPlaySystemSound(_soundID);
 }
 
 static void completionCallback (SystemSoundID  mySSID, void* myself) {
 //NSLog(@"completion Callback");
 AudioServicesRemoveSystemSoundCompletion (mySSID);
 [(SoundEffect*)myself release];
 }
 ```
###Sample Play Sound (System Sound)
This is example to use AudioService. This framework is for playing sound less than 5 seconds.

-Make sure to include the refernce and the sound file.
++Right Click -> Add -> Existing Framework -> AudioToolbox.AudioServices
++Right Click -> Add -> Existing Files -> Select sound file (e.g. boring.wav)

MyView.h
```objective-c
 #import <AudioToolbox/AudioServices.h>
 
 @interface MyView : UIView {
 	UInt32 mSoundID;
 }
 
 @end
 ```
MyView.m
```objective-c
 
 @implementation MyView
 - viewDidLoad{
 AudioServicesCreateSystemSoundID((CFURLRef)[NSURL fileURLWithPath: [[NSBundle mainBundle] pathForResource:@"hello.wav" ofType:nil]], &mSoundID); 
 }
 
 - (void) play {
 	AudioServicesPlaySystemSound(mSoundID);
 }
 
 - (void) vibrate: (id)sender {
 	AudioServicesPlaySystemSound(kSystemSoundID_Vibrate);
 }
 ```
```objective-c
   AudioServicesRemoveSystemSoundCompletion(mSoundID);
   [super dealloc];
  
 }
 
 ```



