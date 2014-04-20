
##iPhone - TabBar


###Setup the second tab
+Create 
++SecondViewController.h
++SecondView.h
+Open MainWindow.nib and set the second controller to "SecondViewController"
+Open SecondView.nib and set below
++File's Owner = SecondViewController.h
++Connect "view" in the File's owner to the View below
++View = SecondView.h

Write IBAction in SecondViewController now.

###Know when the user click the tab
Add this callback in Controller

```macos
 NSLog(@"View came back to the first page");
 }
 ```
##Hide / Show TabBar

In initialization part, set notification for rotation

```macos
 	[[NSNotificationCenter defaultCenter] addObserver:self selector:@selector(didOrientation:) name:@"UIDeviceOrientationDidChangeNotification" object:nil];		
 
 		
 		
 
 
 ```
Call back to detect orientation
```macos
 	
 	if (self.tabBarController.selectedIndex != 0) {
 		return;
 	}
 	
     UIInterfaceOrientation interfaceOrientation = [[object object] orientation];
 	
     if (interfaceOrientation == UIInterfaceOrientationPortrait || interfaceOrientation == UIInterfaceOrientationPortraitUpsideDown) {
 		[self displayTabBar:true];
     } 
 	else {    
 		[self displayTabBar:false];
 	}
 }
 
 
 ```
```macos
 	[UIView beginAnimations:nil context:NULL];
 	[UIView setAnimationDuration:0.5];
 	
 	
 	
 	for(UIView *view in self.tabBarController.view.subviews)
 	{
 		NSLog(@"%@", view);
 		
 		if([view isKindOfClass:[UITabBar class]])
 		{
 			
 			if (val) {
 				[view setFrame:CGRectMake(view.frame.origin.x, 431, view.frame.size.width, view.frame.size.height)];
 			} else {
 				[view setFrame:CGRectMake(view.frame.origin.x, 480, view.frame.size.width, view.frame.size.height)];
 			}
 		} else {
 			if (val) {
 				[view setFrame:CGRectMake(view.frame.origin.x, view.frame.origin.y, view.frame.size.width, 431)];
 			} else {
 				[view setFrame:CGRectMake(view.frame.origin.x, view.frame.origin.y, view.frame.size.width, 480)];
 			}
 			
 		}
 	}
 	
 	[UIView commitAnimations];	
 }
 ```



