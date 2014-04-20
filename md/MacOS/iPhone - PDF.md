
##iPhone - PDF

###Get PDF Pages
```macos
 CGPDFDocumentRef pdfDocument = CGPDFDocumentCreateWithURL((CFURLRef)pdfURL);
 NSLog(@"pages = %d", CGPDFDocumentGetNumberOfPages(pdfDocument));
 CGPDFDocumentRelease(pdfDocument);
 ```
###Jump page in UIWebView
```macos
 [mWebView stringByEvaluatingJavaScriptFromString:[NSString stringWithFormat:@"scrollTo(0, %f)", offsetY]];
 ```
###PDF Generation from UIView
```macos
 
 - (NSString *)pdfPath {
   NSArray *paths = NSSearchPathForDirectoriesInDomains(NSDocumentDirectory, NSUserDomainMask, YES);
   NSString *documentsDirectory = [paths objectAtIndex:0];
   NSString *writableDBPath = [documentsDirectory stringByAppendingPathComponent:@"tmp.pdf"];
   return writableDBPath;
 }
 
 - (NSDictionary *)pdfContextDictionary {
   NSDictionary *d = [NSDictionary dictionaryWithObjectsAndKeys:@"J. P. Author", kCGPDFContextAuthor,
                      @"My Cool App", kCGPDFContextCreator,
                      @"This is the Output", kCGPDFContextTitle,
                      nil];
   return d;
 }
 
 - (void)printToPDF {
   NSString *path = [self pdfPath];
   UIView *displayView = self.view;
   CGRect pageRect = displayView.bounds;
   if (UIGraphicsBeginPDFContextToFile(path, pageRect, [self pdfContextDictionary]) == NO) {
     return; // error
   }
   UIGraphicsBeginPDFPage();
   CGContextRef context = UIGraphicsGetCurrentContext();
   CALayer *layer = displayView.layer;
   [layer renderInContext:context];
   UIGraphicsEndPDFContext();  
   NSLog(@"[%@ %@] %@", NSStringFromClass([self class]), NSStringFromSelector(_cmd), path);
 }
 ```

###Reference
```macos
 http://forums.pragprog.com/forums/83/topics/2573
 ```


