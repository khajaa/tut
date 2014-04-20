
##iPhone - i18n


###Check language
```objective-c
 #define IS_JP ([(NSString*)[[NSLocale preferredLanguages] objectAtIndex:0] compare:@"ja"] == NSOrderedSame)
 #define I18N_PHOTO_DIALOG_HEADER ((IS_JP)? @"nihongo" : @"eigo")
 ```
###Identify Language Codes - locale
```objective-c
 	NSLog(@"english");
 }
        else if ([[[NSLocale currentLocale] localeIdentifier] compare:@"ja_JP"] == NSOrderedSame){
 	NSLog(@"Japanese");
 }
 else {
 	NSLog(@"other");
 }
 
 ```


