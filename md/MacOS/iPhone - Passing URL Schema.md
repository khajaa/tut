
##iPhone - Passing URL Schema

###Setup
```macos
 ```
```macos
     Item 0
         URL Schemes
              Item 0

Set Item 0's value like

```macos
 ```

###Implementation 
```macos
    if (!url) {  
        return NO; 
    }
    
    NSLog(@"%@",[url host]);
    NSLog(@"%@",[url pathComponents]);
    
    
 //    NSString *URLString = [url absoluteString];
 //    [[NSUserDefaults standardUserDefaults] setObject:URLString forKey:@"url"];
 //    [[NSUserDefaults standardUserDefaults] synchronize];
    return YES;
 }
 ```
###Linking example

```macos
 ```



