
##Objective-C - File IO

###Read a file into array
```objective-c
 	NSArray *lines = [fileContent componentsSeparatedByString:@"\n"];
 	for (int i=0; i<[lines count]; i++) {
 		NSLog((NSString*)[lines objectAtIndex:i]);
 	}
 ```


