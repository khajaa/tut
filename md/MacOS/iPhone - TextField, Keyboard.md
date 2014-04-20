
##iPhone - TextField, Keyboard

###Hide Keyboard
Click the textfield control and connect the delegate to  your controller class.
Then implement this callback
```macos
 [textField resignFirstResponder];
 	return YES;
 }
 ```


