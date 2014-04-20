
##iPhone - Read and Write Property List plist file

###Example

```objective-c
 {
     NSString *filePath = @"/System/Library/CoreServices/SystemVersion.plist";
         NSMutableDictionary* plistDict = [[NSMutableDictionary alloc] initWithContentsOfFile:filePath];
         
         NSString *value;
         value = [plistDict objectForKey:@"ProductVersion"];
       
  
 
 ```
```objective-c
 {
     NSString *filePath = @"/System/Library/CoreServices/SystemVersion.plist";
         NSMutableDictionary* plistDict = [[NSMutableDictionary alloc] initWithContentsOfFile:filePath];
         
         [plistDict setValue:@"1.1.1" forKey:@"ProductVersion"];
         [plistDict writeToFile:filePath atomically: YES];
 
 ```


