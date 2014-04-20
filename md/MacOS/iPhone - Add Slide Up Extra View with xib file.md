
##iPhone - Add Slide Up Extra View with xib file

###Steps
+Add Instruction.xib file (Add File->User Interface -> Application xib)
+Add InstructionView.h and .m (Add File -> Classes -> UIView Subclass)
+Add InstructionViewController.h and .m (Add File -> Classes -> UIViewController Subclass)
+Instruction.xib -> Reveal in Document Window
++Click view -> Info panel -> Set InstructorView.h as the Class
++Click File's Owner -> Info panel -> Set InstructorViewController.h as the Class
++Click File's Owner -> Connection Panel -> drag and drop to connect the view to the IB's view
++Place button in the instructor's view to close
++Place button in the main window to open the view
++Write animation codes

###MainView.h
```objective-c
 ```
```objective-c
 ```
###MainView.m
```objective-c
 	
 if (mInstructionViewController == nil) {
 	mInstructionViewController = [[InstructionViewController alloc] initWithNibName:@"InstructionView" bundle:nil];
 	[self addSubview:mInstructionViewController.view];
 }
 	
 // Motion
 CAKeyframeAnimation *motionAnim = [CAKeyframeAnimation animationWithKeyPath:@"position"];
 CGMutablePathRef thePath = CGPathCreateMutable();
 CGPathMoveToPoint(thePath, NULL, self.center.x, 480 + mInstructionViewController.view.bounds.size.height);
 	
 CGPathAddLineToPoint(thePath, NULL, self.center.x, self.center.y + 15);
 motionAnim.path = thePath;
 	
 // Create an animation group to combine the keyframe and basic animations
 CAAnimationGroup *theGroup = [CAAnimationGroup animation];
 	
 // Set self as the delegate to allow for a callback to reenable user interaction, if you need
 theGroup.delegate = self;
 theGroup.duration = 0.4f;
 theGroup.timingFunction = [CAMediaTimingFunction functionWithName:kCAMediaTimingFunctionEaseOut];	
 theGroup.animations = [NSArray arrayWithObjects:motionAnim, nil]; // you can add more
 theGroup.repeatCount = 0;//1e100f;
 // Add the animation group to the layer
 [mInstructionViewController.view.layer addAnimation:theGroup forKey:@"modalViewAnimation"];
 CFRelease(thePath);
 mInstructionViewController.view.center = CGPointMake( self.center.x, self.center.y + 15);
 
 	//-------------------------------------------------------------------------------
 // This is another variation of animation like page flip
 	
 //[UIView beginAnimations:nil context:NULL];
 //[UIView setAnimationDuration:1];
 //[UIView setAnimationTransition: UIViewAnimationTransitionCurlUp forView:self cache:YES];
 	
 //InstructionViewController *viewController = [[InstructionViewController alloc] initWithNibName:@"InstructionView" bundle:nil];
 	
 //[viewController viewWillAppear:YES];
 //[self addSubview:viewController.view];
 //[viewController viewDidAppear:YES];
 //[UIView commitAnimations];
 
 //[viewController release];
 //-------------------------------------------------------------------------------
 }
 ```

###InstructionView.m
```objective-c
 
 // Motion
 CAKeyframeAnimation *motionAnim = [CAKeyframeAnimation animationWithKeyPath:@"position"];
 CGMutablePathRef thePath = CGPathCreateMutable();
 CGPathMoveToPoint(thePath, NULL, self.center.x, self.center.y);
 	
 CGPathAddLineToPoint(thePath, NULL, self.center.x, 480 + self.bounds.size.height);
 motionAnim.path = thePath;
 	
 // Create an animation group to combine the keyframe and basic animations
 CAAnimationGroup *theGroup = [CAAnimationGroup animation];
 	
 // Set self as the delegate to allow for a callback to reenable user interaction, if you need
 theGroup.delegate = self;
 theGroup.duration = 0.4f;
 theGroup.timingFunction = [CAMediaTimingFunction functionWithName:kCAMediaTimingFunctionEaseOut];	
 theGroup.animations = [NSArray arrayWithObjects:motionAnim, nil]; // you can add more
 theGroup.repeatCount = 0;//1e100f;
 // Add the animation group to the layer
 [self.layer addAnimation:theGroup forKey:@"modalViewAnimation"];
 CFRelease(thePath);
 	
 self.center = CGPointMake(self.center.x, 480 + self.bounds.size.height);
 	//-------------------------------------------------------------------------------
 // This is another variation of animation like page flip
 	
 /*
 [UIView beginAnimations:nil context:NULL];
 [UIView setAnimationDuration:1];
 [UIView setAnimationTransition: UIViewAnimationTransitionCurlUp forView:self.superview cache:YES];
 [self removeFromSuperview];
 [UIView commitAnimations];
  */
 }
 ```





