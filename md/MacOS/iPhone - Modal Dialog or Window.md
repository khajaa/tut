
##iPhone - Modal Dialog or Window


###Navigation and Modal View

```objective-c
 [appDelegate.navigationController presentModalViewController:controller animated:YES];
 [controller release];
 ```
###Popup
```objective-c
 //controller.delegate = self;
 //controller.modalTransitionStyle = UIModalTransitionStyleCoverVertical;
 [self presentModalViewController:controller animated:YES];
 [controller release];
 ```
In the popup view controller
```objective-c
 //[mWebView stopLoading]; // if you are loading or processing something, remove all
 [self dismissModalViewControllerAnimated:YES];
 } 
 ```


