
##iPhone - Notification

###Local Notification  Example
```macos
 -(void) scheduleCalendarForNotifications{
     [[UIApplication sharedApplication] cancelAllLocalNotifications];
     
     Class cls = NSClassFromString(@"UILocalNotification");
 	
 	
     if (cls == nil) {
         return;
     }
     
     
     
     NSDateComponents *components = [[NSCalendar currentCalendar] components:NSDayCalendarUnit | NSMonthCalendarUnit | NSYearCalendarUnit fromDate:[NSDate date]];
     int currentYear=[components year];
     NSDateComponents *currComps = [[[NSDateComponents alloc] init] autorelease];
 	[currComps setHour:12];
     [currComps setDay:30];
     [currComps setMonth:10];
     [currComps setYear:currentYear];
     
     //NSDate *currTargetDate=[[NSCalendar currentCalendar] dateFromComponents:currComps];
     //int daysLeft=[[NSDate date] daysBeforeDate:currTargetDate];
 	
     
     for(int y=currentYear;y<currentYear+2;y++){//Max 64 notifications
         
         [currComps setYear:y];
         NSDate *targetDate = [[NSCalendar currentCalendar] dateFromComponents:currComps];
 		
         int daysTo = 0;
 		for(int i=0;i<30;i++){
             
             
             if (i > 20) {
                 daysTo += 30;
             }
             else if (i > 15) {
                 daysTo += 14;
             }
             else if (i > 10) {
                 daysTo += 5;
             }
             else if (i > 6) {
                 daysTo += 3;
             }
             else {
                 daysTo += 1;
             }
             
 
 			NSDate *fireDate=[targetDate dateBySubtractingDays:daysTo];
 			
 			if([fireDate isLaterThanDate:[NSDate date]] && daysTo < 365){
                 UILocalNotification *dailyNotification = [[UILocalNotification alloc] init];
                 dailyNotification.timeZone = [NSTimeZone defaultTimeZone];
                 dailyNotification.fireDate=fireDate;
                 dailyNotification.soundName = @"sound2_3.wav";
                 
                 if(i==0){
                     dailyNotification.alertBody = @"Happy Halloween!";					
                 }
                 else if (i== 1) {
                     dailyNotification.alertBody = [NSString stringWithFormat:@"Boo! Only %d Day to Halloween!",daysTo];
                 }
                 else {
                     dailyNotification.alertBody = [NSString stringWithFormat:@"Boo! %d Days to Halloween",daysTo];                    
                 }
                 
                 dailyNotification.alertAction=@"Show me";
                 
                 [[UIApplication sharedApplication] scheduleLocalNotification:dailyNotification];
                 NSLog(@"alert date=%@,alert body=%@",dailyNotification.fireDate,dailyNotification.alertBody);
                 [dailyNotification release];
             }
         }
         
     }
     

```macos
     [[UIApplication sharedApplication] cancelAllLocalNotifications];
     
     Class cls = NSClassFromString(@"UILocalNotification");
 	
 	
     if (cls == nil) {
         return;
     }
     
     
     
     NSDateComponents *components = [[NSCalendar currentCalendar] components:NSDayCalendarUnit | NSMonthCalendarUnit | NSYearCalendarUnit fromDate:[NSDate date]];
     int currentYear=[components year];
     NSDateComponents *currComps = [[[NSDateComponents alloc] init] autorelease];
 	[currComps setHour:12];
     [currComps setDay:25];
     [currComps setMonth:12];
     [currComps setYear:currentYear];
     
     NSDate *currTargetDate=[[NSCalendar currentCalendar] dateFromComponents:currComps];
     int daysLeft=[[NSDate date] daysBeforeDate:currTargetDate];
 	
     
     for(int y=currentYear;y<currentYear+1;y++){//Max 64 notifications
         
         [currComps setYear:y];
         NSDate *targetDate = [[NSCalendar currentCalendar] dateFromComponents:currComps];
 		
 		for(int i=0;i<30;i++){
 			NSDate *fireDate=[targetDate dateBySubtractingDays:i];
 			
 			if([fireDate isLaterThanDate:[NSDate date]]){
                 
                 
                 UILocalNotification *dailyNotification = [[UILocalNotification alloc] init];
                 dailyNotification.timeZone = [NSTimeZone defaultTimeZone];
                 dailyNotification.fireDate=fireDate;
                 dailyNotification.soundName = @"sound7.wav";
 
                 if(i==0){
                     dailyNotification.alertBody = @"Merry Christmas!";
 					
                 }
                 else{
 					
 					if (i== 1) {
 						dailyNotification.alertBody = [NSString stringWithFormat:@"Only %d Day to Christmas!",i];
 					}
 					else{
 						dailyNotification.alertBody = [NSString stringWithFormat:@"%d Days to Christmas",i];
 					}
                     
                 }
                 
                 dailyNotification.alertAction=@"Show me";
                 
                 [[UIApplication sharedApplication] scheduleLocalNotification:dailyNotification];
                 NSLog(@"alert date=%@,alert body=%@",dailyNotification.fireDate,dailyNotification.alertBody);
                 [dailyNotification release];
             }
         }
         
     }
 
 }
 
 ```



