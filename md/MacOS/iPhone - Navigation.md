
##iPhone - Navigation




These are note to add NavigationController manually



###In delegate
```objective-c
   IBOutlet UINavigationController*  navigationController;
 // ...
 }
 @property (nonatomic, retain) UINavigationController *navigationController;
 @end
 ```

```objective-c
 //[window addSubview:viewController.view];	
 [window addSubview:navigationController.view];
 [window makeKeyAndVisible];
 }
 ```
###in ib

-drag and drop navigationcontroller






###pushing a view
```objective-c
 GeoGearsAppDelegate *appDelegate = (GeoGearsAppDelegate *)[[UIApplication sharedApplication] delegate];
 
 appDelegate.navigationController.navigationBarHidden = true;
 // extra trick hide and show
 mSearchBar.hidden = true;
 [appDelegate.navigationController pushViewController:anotherViewController animated:YES];
 
 //[self.navigationController pushViewController:anotherViewController animated:YES];
 [anotherViewController release];
 ```

###additional workaround - hide and show navigation bar

if you want to switch on off navigationbar, you might need to do some trick

GeoGearsAppDelegate *appDelegate = (GeoGearsAppDelegate *)[[UIApplication sharedApplication] delegate];
appDelegate.navigationController.navigationBarHidden = true;
mSearchBar.hidden = false;


###Notes

see GeoGears for the struggle!




###Modal View and Navigation Controller

```objective-c
 UINavigationController *controller = [[UINavigationController alloc] initWithRootViewController:[[DatabaseViewController alloc] initWithNibName:@"DatabaseView" bundle:nil]];
 [self.navigationController  presentModalViewController:controller animated:YES];
 //GeoGearsAppDelegate *appDelegate = (GeoGearsAppDelegate *)[[UIApplication sharedApplication] delegate];
 //[appDelegate.navigationController presentModalViewController:controller animated:YES];
 [controller release];
 /*
 DatabaseViewController *controller = [[DatabaseViewController alloc] initWithNibName:@"DatabaseView" bundle:nil];
 [self presentModalViewController:controller animated:YES];
 [controller release];
 */
 }
 ```
Then when it goes sub menu
```objective-c
 [self.navigationController pushViewController:anotherViewController animated:YES];
 [anotherViewController release];
 
 ```
###Links

http://developer.apple.com/iphone/library/featuredarticles/ViewControllerPGforiPhoneOS/NavigationControllers/NavigationControllers.html#//apple_ref/doc/uid/TP40007457-CH103-SW1






