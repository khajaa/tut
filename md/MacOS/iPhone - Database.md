
##iPhone - Database

###Initialize DB from SQL file
```objective-c
 	NSArray *lines = [fileContent componentsSeparatedByString:@"\n"];
 	FMDatabase *conn = [FMDatabase databaseWithPath:dbTargetPath];		
 	[conn open];
 	for (int i=0; i<[lines count]; i++) {
 		NSLog((NSString*)[lines objectAtIndex:i]);
 		[conn executeUpdate:(NSString*)[lines objectAtIndex:i]];	
 	}
 ```


