
##iPhone - Share

###Example
```objective-c
    NSArray* shareArr = @[@"Get Spooky Halloween Shounds iPad #App for FREE!",[UIImage imageNamed:@"icon.png"], [NSURL URLWithString:@"http://bit.ly/halloweenapp"]];
    UIActivityViewController* activityViewController = [[UIActivityViewController alloc] initWithActivityItems:shareArr applicationActivities:Nil];
    [self presentViewController:activityViewController animated:YES completion:Nil];
 }
 ```


