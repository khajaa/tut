
##iPhone - Dialog

###Dialog Examples
```objective-c
 UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"UIAlertView" message:@"<Alert message>"
 						delegate:self cancelButtonTitle:@"OK" otherButtonTitles: nil];
 [alert show];	
 [alert release];
 
 ```
```objective-c
 ```

```objective-c
 // the user clicked one of the OK/Cancel buttons
 if (buttonIndex == 0)
 {
 	NSLog(@"cancel");
 }
 else
 {
 	NSLog(@"ok");
 }
 }
 ```



```objective-c
 {
 // open a alert with an OK and cancel button
 UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"UIAlertView" message:@"<Alert message>"
 						delegate:self cancelButtonTitle:@"Cancel" otherButtonTitles:@"OK", nil];
 [alert show];
 [alert release];
 }
 ```
```objective-c
 {
 // open an alert with two custom buttons
 UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"UIAlertView" message:@"<Alert message>"
 						delegate:self cancelButtonTitle:@"Cancel" otherButtonTitles:@"Button1", @"Button2", nil];
 [alert show];
 [alert release];
 }
 ```




###Action Sheet

```objective-c
 UIActionSheet *actionSheet = [[UIActionSheet alloc] initWithTitle:[NSString stringWithFormat:@"Game Over! You reached %d meters!",mCount]
 														 delegate:self cancelButtonTitle:@"Cancel" destructiveButtonTitle:nil
 												otherButtonTitles:@"Start New Game", @"Upload Score",nil];
 actionSheet.actionSheetStyle = UIActionSheetStyleDefault;
 //actionSheet.destructiveButtonIndex = 1;	// make the second button red (destructive)
 [actionSheet showInView:self]; // show from our table view (pops up in the middle of the table)
 [actionSheet release];
 ```
```objective-c
 }
 ```






