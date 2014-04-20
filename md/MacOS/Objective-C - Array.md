
##Objective-C - Array

###Array Example
```objective-c
 		  [NSNumber numberWithFloat:0.12],
 		  [NSNumber numberWithFloat:0.19],
 		  [NSNumber numberWithFloat:1.20],
 		  [NSNumber numberWithFloat:2.32],
 		  nil];
 for (int i=0; i<[myArr count]; i++) {
 float val = [[myArr objectAtIndex: i] floatValue];
 printf("%f\n",val);
 }
 ```


###retain
retain is nothing but it just increment the reference counter

```objective-c
 mAnimArray = [[NSArray arrayWithObjects:
 [UIImage imageNamed:@"hello1.png"],
 [UIImage imageNamed::@"hello2.png"],							  
 [UIImage imageNamed::@"hello3.png"],
 nil] retain];
 ```
Add retain in order to avoid automatically collect memory. This is important if you assign array in function.


###Multi-dimensional Array
```objective-c
 for (int i=0; i<5; i++) {
    NSMutableArray *two [[NSMutableArray alloc] initWithCapacity: 10];
    for (int j=0; j<10; j++) {
         [two insertObject: @"hello" atIndex:j];
    }
    [one insertObject: two atIndex: i]; 
 }
 ```
```objective-c
 [[one objectAtIndex: 1] objectAtIndex: 1];
 ```
###Reverse
```objective-c
 ```


###NSDictionary Example

```objective-c
 [dict setObject:@"1.000" forKey:@"alpha_carot"];
 [dict setObject:@"2.000" forKey:@"beta_carot"];
 [dict setObject:@"3.000" forKey:@"one_carot"];
 
 NSLog(@"%@", dict);
 
 NSArray *keys = [dict allKeys];
 
 //for (int i=0; i<[keys count]; i++) {
 for (NSString *key in keys) {
 	NSLog(@"%@ is %@",key, [dict objectForKey:key]);
 }
 
 ```



