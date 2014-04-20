
##Objective-C - Date Time


###Benchmark in milliseconds
```objective-c
 // some processes ...
 NSLog(@"BENCH MARK END : %f",[[NSDate date] timeIntervalSince1970]);
 ```

```objective-c
 NSLog(@"%f",elapsedsec);
 ```
###DateTime
```objective-c
 
 NSDateComponents *timeComponents = [calendar components:( NSHourCalendarUnit | NSMinuteCalendarUnit | NSSecondCalendarUnit ) fromDate:[NSDate date]];
 //NSLog(@"%d:%d %d",[timeComponents hour],[timeComponents minute],[timeComponents second]);
 ```
```objective-c
                                    timezone:nil
                                      locale:nil];


```objective-c
 NSDateFormatter *formatter = [[[NSDateFormatter alloc] init] autorelease];
 [formatter setDateFormat:@"yyyy-MM-dd HH:mm:ss.SSS"];
 NSLog(@"Formatted Date:%@",[formatter stringFromDate: myDate]);
 ```
```objective-c
 ```
###Timestamp
```objective-c
 ```

###Add seconds
```objective-c
 ```

###Examples
```objective-c
 NSDate *today = [NSDate dateWithTimeIntervalSinceNow:0];
 NSDateFormatter *dateFormat = [[[NSDateFormatter alloc] init] autorelease];
 [dateFormat setDateStyle:NSDateFormatterShortStyle];
 NSString *dateString = [dateFormat stringFromDate:today];
 NSLog(@"Date: %@", dateString);
 ```
```objective-c
 NSDate *today = [NSDate date];
 NSDateFormatter *dateFormat = [[[NSDateFormatter alloc]
   initWithDateFormat:@"%m/%d/%Y %I:%M%p" allowNaturalLanguage:NO] autorelease];
 NSString *dateString = [dateFormat stringFromDate:today];
 NSLog(@"Date: %@", [dateString lowercaseString]);
 ```
```objective-c
 NSDate *today = [NSDate date];
 NSDateFormatter *dateFormat = [[[NSDateFormatter alloc]
   initWithDateFormat:@"%A, %B %d, %Y" allowNaturalLanguage:NO] autorelease];
 NSString *dateString = [dateFormat stringFromDate:today];
 NSLog(@"Date: %@", dateString);
 ```

```objective-c
 NSDate *today = [NSDate date];
 NSDateFormatter *dateFormat = [[NSDateFormatter alloc] init];
 [dateFormat setDateFormat:@"MM/dd/yyyy hh:mma"];
 NSString *dateString = [dateFormat stringFromDate:today];
 NSLog(@"date: %@", dateString);
 [dateFormat release];
 ```
:Source|iPhone Developer Tips





