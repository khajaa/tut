
##Confirm Dialog

###Example1 - Submit button
```javascript
 ```
```javascript
 <HEAD> 
 <TITLE>confirm example</TITLE> 
 <script type="text/javascript">
 <!--
 // Submit Form
 function confirmSubmit(confirmMsg, form_name) {
 	if (confirm(confirmMsg)) {
 		document.forms[form_name].submit();
 	}
 	else {
 		return;
 	}
 }
 // Redirect
 function confirmJump(confirmMsg, jumpToYes, jumpToNo){
 	if (confirm(confirmMsg)) {
 		location.href = jumpToYes;
 	}
 	else {
 		if ( jumpToNo != "" ){
 			location.href = jumpToNo;
 		}
 	}
 }
 //-->
 </script> 
 </HEAD> 
 <BODY>
 <FORM name="form1" action="test.php" method="post">
 <A HREF="#" onClick="confirmSubmit('Are You Sure?','form1')">Submit This Form</a>
 </FORM>
 <A HREF="#" onClick="confirmJump('Yes = yahoo / No = a9','http://yahoo.com/', 'http://a9.com')">Jump</a>
 </BODY> 
 </HTML> 
 
 ```


