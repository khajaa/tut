
##iPhone - OpenCV

###Installation
```objective-c
 // http://niw.at/articles/2009/03/14/using-opencv-on-iphone/en
 // 1) Download Sample
 // 2) Copy opencv_armv6 folder and opencv_sim folder
 // 3) Copy haarcascade_frontalface_default.xml and drop into your  project
 // 4) Create one UIImageView
 // 5) #import <opencv/cv.h>
 // 6) Copy 2 helper method and 1 detect face method
 //- (IplImage *)CreateIplImageFromUIImage:(UIImage *)image;
 //- (UIImage *)UIImageFromIplImage:(IplImage *)image;
 //- (void) opencvFaceDetect:(UIImage *)overlayImage;
 // 7) Change following in the target -> All Configuration
 // 7.1) Other Link Flags-> Cog Icon at bottom left-> Add Build Setting Configuration. Do this twice.
 // 7.2) Select "Any Device" and "Any Simulater" for each one
 // 7.3) Any Device -> Double click and add
 // -lstdc++
 // $(SRCROOT)/opencv_armv6/lib/libcv.a
 // $(SRCROOT)/opencv_armv6/lib/libcxcore.a
 // 7.4) Any Simulater -> Double click and add
 // -lstdc++
 // $(SRCROOT)/opencv_sim/lib/libcv.a
 // $(SRCROOT)/opencv_sim/lib/libcxcore.a
 // 8.1) Header Search Path-> Cog Icon at bottom left-> Add Build Setting Configuration. Do this twice.
 // 8.2) Select "Any Device" and "Any Simulater" for each one
 // for device
 // $(SRCROOT)/opencv_armv6/include
 // for simulator
 // $(SRCROOT)/opencv_sim/include
 // For Debug setting,  turn of "Strip Debug Simbol During Copy" (maybe optional)
 ```



