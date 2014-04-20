
##iPhone - Twitter

###TwitPic
You need to add ASIHTTPRequest library
http://xxki.com/tutorial/pukiwiki.php?MacOS%2FiPhone%20-%20ASI%20HTTP%20Library

```objective-c
 	NSURL *url = [NSURL URLWithString:@"http://twitpic.com/api/uploadAndPost"];
 	NSData *twitpicImage = UIImagePNGRepresentation(image);	
 	ASIFormDataRequest *request = [[[ASIFormDataRequest alloc] initWithURL:url] autorelease];	
 	[request setData:twitpicImage forKey:@"media"];
 	[request setPostValue:username forKey:@"username"];
 	[request setPostValue:password forKey:@"password"];
 	if (![message isEqualToString:@""]) {
 		[request setPostValue:message forKey:@"message"];
 	}
 	
 	[request start];	
 	
 	// Todo, parse the return string and you can get uploaded URL
 	NSString *result = @"";
 	NSString *retStr = [request responseString];
 	NSRange range = [retStr rangeOfString:@"status=\"ok\""];
 	bool isOk = false;
 	if (range.location != 0) {
 		result = @"Image has been uploaded.";
 		isOk = true;
 	}
 	else if ([retStr length] == 0) {
 		result = @"Error: Please check your network connection. ";
 	}
 	else {
 		result = @"Error: Please check your username and password. ";
 	}
 	
 	UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"" message:result
 												   delegate:self cancelButtonTitle:@"OK" otherButtonTitles: nil];
 	[alert show];    
 	[alert release];
 	if (isOk){
 		// do something here after uploading
 		//[self dismissModalViewControllerAnimated:YES];
 	}
 }
 ```



