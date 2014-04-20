
##iPhone - Modal Dialog or Window


###Navigation and Modal View

```macos
 [appDelegate.navigationController presentModalViewController:controller animated:YES];
 [controller release];
 ```
###Popup
```macos
 //controller.delegate = self;
 //controller.modalTransitionStyle = UIModalTransitionStyleCoverVertical;
 [self presentModalViewController:controller animated:YES];
 [controller release];
 ```
In the popup view controller
```macos
 //[mWebView stopLoading]; // if you are loading or processing something, remove all
 [self dismissModalViewControllerAnimated:YES];
 } 
 ```


