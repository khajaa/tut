
##iPhone - Transform View and Image

###Scale
  [myview setTransform:CGAffineTransformMakeScale(2.0, 2.0)];

###Rotate
```objective-c
 ```
###Move
```objective-c
 ```

###Resize Image
  CGImageRef imageRef = [image CGImage];  
  size_t w = CGImageGetWidth(imageRef);  
  size_t h = CGImageGetHeight(imageRef);  
  size_t resize_w, resize_h;  
     
  if (w>h) {  
       resize_w = 320;  
       resize_h = h * resize_w / w;  
   } else {  
       resize_h = 480;  
       resize_w = w * resize_h / h;  
   }  
     
   UIGraphicsBeginImageContext(CGSizeMake(resize_w, resize_h));  
   [image drawInRect:CGRectMake(0, 0, resize_w, resize_h)];  
   image = UIGraphicsGetImageFromCurrentImageContext();  
   UIGraphicsEndImageContext();  



