
##iPhone - Passing URL Schema

###Setup
```objective-c
 ```
```objective-c
     Item 0
         URL Schemes
              Item 0

Set Item 0's value like

```objective-c
 ```

###Implementation 
```objective-c
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

```objective-c
 ```



