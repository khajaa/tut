
##iPhone - Toolbar

###Toggle Edit / Done

In IB, make  sure you select "Custom" without title. Init the UIBarButtonItem like

```objective-c
 mEditButton.style = UIBarButtonItemStyleBordered;
 
 ```

Then, toggle like:

```objective-c
 if(mIsEditing){		
 	mEditButton.title = NSLocalizedString(@"Edit", @"Edit"); 
 	mEditButton.style = UIBarButtonItemStyleBordered;				
    }	
    else{		
 	mEditButton.title = NSLocalizedString(@"Done", @"Done");
 	mEditButton.style = UIBarButtonItemStyleDone;
    }	
 }
 ```




