
##Check Validators from JavaScript

###Counting how many validation error on the screen
```asp.net
 	// count how many errors on asp.net validator controls
 	var i;
 	var cnt = 0;
 	for (i = 0; i < Page_Validators.length; i++) {
 		if (!Page_Validators[i].isvalid) {
 			cnt++;
 		}
 	}
 	//alert(cnt);
 	// if no validation error, you can submit
 	if (cnt == 0) {
 		// ...
 	}
 	else {
 		// ...
 	}   
 </script
 ```



