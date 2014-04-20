
##iPhone - Camera and Photo Library

###Camera and Photo Library
You need two interface
  @interface MainView : UIView <UIImagePickerControllerDelegate,UINavigationControllerDelegate> {
 
 ```
```macos
 // Camera
 - (IBAction)btnCameraPicture:(id)sender { 
 	if ([UIImagePickerController isSourceTypeAvailable: UIImagePickerControllerSourceTypeCamera]) {
 		UIImagePickerController *picker = [[UIImagePickerController alloc] init];  
 		picker.delegate = self; 
 		picker.allowsImageEditing = YES; 
 		picker.sourceType = UIImagePickerControllerSourceTypeCamera; 
 		[self presentModalViewController:picker animated:YES]; 
 		[picker release];     
 	}
 	else {
 		UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Alert" message:@"Camera Not Detected"
 													   delegate:self cancelButtonTitle:@"OK" otherButtonTitles: nil];
 		[alert show];    
 		[alert release];
 	}
 }
 ```

```macos
 // Photo Library
 -(IBAction)btnSelectPhotoClick:(id)sender{
 	if ([UIImagePickerController isSourceTypeAvailable: UIImagePickerControllerSourceTypePhotoLibrary]) { 
 		UIImagePickerController *picker = [[UIImagePickerController alloc] init]; 
 		picker.delegate = self; 
 		picker.sourceType = UIImagePickerControllerSourceTypePhotoLibrary; 
 		[self presentModalViewController:picker animated:YES];
 		[picker release]; 		
 	}	
 	else {
 		UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"Alert" message:@"Photo Library Does Not Exist"
 													   delegate:self cancelButtonTitle:@"OK" otherButtonTitles: nil];
 		[alert show];    
 		[alert release];
 	}
 }
 ```

```macos
 // Catch when it's success
 - (void)imagePickerController:(UIImagePickerController *)picker 
 		didFinishPickingImage:(UIImage *)image 
 				  editingInfo:(NSDictionary *)editingInfo { 
 	// set it in image view
 	self.mBackgroundImage.image = image;
 
 	// If it's from camera, save it!
 	if (picker.sourceType == UIImagePickerControllerSourceTypeCamera){
 		UIImageWriteToSavedPhotosAlbum(image,nil,nil,nil);
 	}
 	
     [picker dismissModalViewControllerAnimated:YES]; 
 } 
 
 //-----------------------------------------------------------------------------------------------------------------------
 // Catch when it's canceled
 - (void)imagePickerControllerDidCancel:(UIImagePickerController *)picker {     
     [picker dismissModalViewControllerAnimated:YES]; 
 }
 ```


