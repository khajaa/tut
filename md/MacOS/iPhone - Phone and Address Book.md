
##iPhone - Phone and Address Book

###Making Phone Call
```objective-c
 NSString *phoneStr = [[NSString alloc] initWithFormat:@"tel:+1%@", txtNumbers.text];
 [[UIApplication alloc] openURL:[[NSURL alloc] initWithString:phoneStr]];
 [phoneStr release];
 ```




