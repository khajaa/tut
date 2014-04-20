
##iPhone - WebView


###PDF jump to a specific page
```objective-c
 [mWebView stringByEvaluatingJavaScriptFromString:[NSString stringWithFormat:@"scrollTo(0, %f)", offsetY]];
 ```
###Load Local File
```objective-c
 [mWebView loadRequest:[NSURLRequest requestWithURL:pdfURL]];
 ```
```objective-c
 ```
###Offscreen Loading Bug
I had a problem to load UIWebView outsite of the screen. The solution is 

1. Delay and load when you really need it. But it will be delay if you are loading heavy html
2. Load underneath of other view and bring it to front when it needed

User insertSubview method and specify lowest index 0 or something.

In this example, I'm bringing the SettingView which contains UIWebView. When a user hit a button, it will bring the view from the back. 
```objective-c
 ```
###Load MP3
  [webView loadRequest:[NSURLRequest requestWithURL:[NSURL URLWithString:@"http://www.example.com/podcasts/file.mp3"]]];

###Load Local html
```objective-c
 imagePath = [imagePath stringByReplacingOccurrencesOfString:@"/" withString:@"//"];
 imagePath = [imagePath stringByReplacingOccurrencesOfString:@" " withString:@"%20"];
 
 NSString *HTMLData = @"<h1>Hello this is a test</h1><h1>test</h1><img src='about.png' width=300 height=300/>";
 [webView loadHTMLString:HTMLData baseURL:[NSURL URLWithString: [NSString stringWithFormat:@"file:/%@//",imagePath]]];
 ```

###Make internal links work
// Need to implement <UIWebViewDelegate> and set mWebView.delegate = self;
```objective-c
 	NSLog(@"hello");
 	//CAPTURE USER LINK-CLICK.
 	if (navigationType == UIWebViewNavigationTypeLinkClicked) {
 		NSURL *URL = [request URL];	
 		if ([[URL scheme] isEqualToString:@"http"]) {
 			[[UIApplication sharedApplication] openURL: URL];
 		}	 
 		return NO;
 	}	
 	return YES;   
 }
 ```

###Import Javascript file

It appears that you are getting bit by the "Xcode thinks that .js are things to be compiled" feature. Basically, Xcode thinks that the script should somehow be run or compiles, so marks it as part of the source code. Source code, of course, is not copied into the resources.

So you need to do two things - select the .js file in your project, and turn off the checkbox that indicates that it is compiled (the "bullseye" column). If you don't do this, you'll get a warning in your build log about being unable to compile the file (which should be your first warning - always try to figure out and and correct any and all warning that appear in your build).

Then drag it and drop it in the target's "Copy Bundle Resources".




