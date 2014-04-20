
##iPhone - Dialog

###Dialog Examples
```macos
 UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"UIAlertView" message:@"<Alert message>"
 						delegate:self cancelButtonTitle:@"OK" otherButtonTitles: nil];
 [alert show];	
 [alert release];
 
 ```
```macos
 ```

```macos
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



```macos
 {
 // open a alert with an OK and cancel button
 UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"UIAlertView" message:@"<Alert message>"
 						delegate:self cancelButtonTitle:@"Cancel" otherButtonTitles:@"OK", nil];
 [alert show];
 [alert release];
 }
 ```
```macos
 {
 // open an alert with two custom buttons
 UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"UIAlertView" message:@"<Alert message>"
 						delegate:self cancelButtonTitle:@"Cancel" otherButtonTitles:@"Button1", @"Button2", nil];
 [alert show];
 [alert release];
 }
 ```




###Action Sheet

```macos
 UIActionSheet *actionSheet = [[UIActionSheet alloc] initWithTitle:[NSString stringWithFormat:@"Game Over! You reached %d meters!",mCount]
 														 delegate:self cancelButtonTitle:@"Cancel" destructiveButtonTitle:nil
 												otherButtonTitles:@"Start New Game", @"Upload Score",nil];
 actionSheet.actionSheetStyle = UIActionSheetStyleDefault;
 //actionSheet.destructiveButtonIndex = 1;	// make the second button red (destructive)
 [actionSheet showInView:self]; // show from our table view (pops up in the middle of the table)
 [actionSheet release];
 ```
```macos
 }
 ```






