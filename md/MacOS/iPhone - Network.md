
##iPhone - Network

###Check Wifi - Reachability
Step 1: Include "SystemConfiguration.framework" framework in your project

Step 2: Included Apple's Reachability.h and Reachability.m from Reachability example

Step 3: Now add this code anywhere in your .m.

Reachability* wifiReach = [[Reachability reachabilityWithHostName: @"www.apple.com"] retain];
NetworkStatus netStatus = [wifiReach currentReachabilityStatus];

```macos
 NetworkStatus networkStatus = [reachability currentReachabilityStatus];	
 //if ((networkStatus != ReachableViaWiFi) && (networkStatus != ReachableViaCarrierData)){	
 if (networkStatus != ReachableViaWiFi){
 }
 else {
 }
 ```
###Quick Network Availability Check
```macos
 {
     // Create zero addy
     struct sockaddr_in zeroAddress;
     bzero(&zeroAddress, sizeof(zeroAddress));
     zeroAddress.sin_len = sizeof(zeroAddress);
     zeroAddress.sin_family = AF_INET;
 	
     // Recover reachability flags
     SCNetworkReachabilityRef defaultRouteReachability = SCNetworkReachabilityCreateWithAddress(NULL, (struct sockaddr *)&zeroAddress);
     SCNetworkReachabilityFlags flags;
 	
     BOOL didRetrieveFlags = SCNetworkReachabilityGetFlags(defaultRouteReachability, &flags);
     CFRelease(defaultRouteReachability);
 	
     if (!didRetrieveFlags)
     {
         printf("Error. Could not recover network reachability flags\n");
         return 0;
     }
 	
     BOOL isReachable = flags & kSCNetworkFlagsReachable;
     BOOL needsConnection = flags & kSCNetworkFlagsConnectionRequired;
 	BOOL nonWiFi = flags & kSCNetworkReachabilityFlagsTransientConnection;
 	
     return ((isReachable && !needsConnection) || nonWiFi) ? 
 	(([[NSURLConnection alloc] initWithRequest:[NSURLRequest 
 												requestWithURL: [NSURL URLWithString:@"http://www.apple.com/"] 
 												cachePolicy:NSURLRequestReloadIgnoringLocalCacheData timeoutInterval:20.0] 
 									  delegate:self]) ? YES : NO) : NO;
 }
 ```

###Connected To WiFi

```macos
 {
 Reachability *r = [Reachability reachabilityWithHostName:@"www.google.com"];	
 NetworkStatus internetStatus = [r currentReachabilityStatus];		
 bool result = false;	
 if (internetStatus == ReachableViaWiFi)
 {
     result = true;	
 } 	
 return result;	
 }
 ```



