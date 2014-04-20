
##Objective-C - Date Time


###Benchmark in milliseconds
```macos
 // some processes ...
 NSLog(@"BENCH MARK END : %f",[[NSDate date] timeIntervalSince1970]);
 ```

```macos
 NSLog(@"%f",elapsedsec);
 ```
###DateTime
```macos
 
 NSDateComponents *timeComponents = [calendar components:( NSHourCalendarUnit | NSMinuteCalendarUnit | NSSecondCalendarUnit ) fromDate:[NSDate date]];
 //NSLog(@"%d:%d %d",[timeComponents hour],[timeComponents minute],[timeComponents second]);
 ```
```macos
                                    timezone:nil
                                      locale:nil];


```macos
 NSDateFormatter *formatter = [[[NSDateFormatter alloc] init] autorelease];
 [formatter setDateFormat:@"yyyy-MM-dd HH:mm:ss.SSS"];
 NSLog(@"Formatted Date:%@",[formatter stringFromDate: myDate]);
 ```
```macos
 ```
###Timestamp
```macos
 ```

###Add seconds
```macos
 ```

###Examples
```macos
 NSDate *today = [NSDate dateWithTimeIntervalSinceNow:0];
 NSDateFormatter *dateFormat = [[[NSDateFormatter alloc] init] autorelease];
 [dateFormat setDateStyle:NSDateFormatterShortStyle];
 NSString *dateString = [dateFormat stringFromDate:today];
 NSLog(@"Date: %@", dateString);
 ```
```macos
 NSDate *today = [NSDate date];
 NSDateFormatter *dateFormat = [[[NSDateFormatter alloc]
   initWithDateFormat:@"%m/%d/%Y %I:%M%p" allowNaturalLanguage:NO] autorelease];
 NSString *dateString = [dateFormat stringFromDate:today];
 NSLog(@"Date: %@", [dateString lowercaseString]);
 ```
```macos
 NSDate *today = [NSDate date];
 NSDateFormatter *dateFormat = [[[NSDateFormatter alloc]
   initWithDateFormat:@"%A, %B %d, %Y" allowNaturalLanguage:NO] autorelease];
 NSString *dateString = [dateFormat stringFromDate:today];
 NSLog(@"Date: %@", dateString);
 ```

```macos
 NSDate *today = [NSDate date];
 NSDateFormatter *dateFormat = [[NSDateFormatter alloc] init];
 [dateFormat setDateFormat:@"MM/dd/yyyy hh:mma"];
 NSString *dateString = [dateFormat stringFromDate:today];
 NSLog(@"date: %@", dateString);
 [dateFormat release];
 ```
:Source|iPhone Developer Tips




