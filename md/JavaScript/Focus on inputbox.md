
##Focus on inputbox

###Example
```javascript
 <header>
 <script type="text/javascript">
 <!-- 
 	function inputFocus(){
     	document.login.user.focus();
 	}
 //-->
 </script>
 </header>
 <body onload="inputFocus()">
 		<form name="login" action="login.php" method="post">
 			Username:<input type="text" name="user"><br>
 			Password:<input type="password" name="pass"> 
 			<input type="submit" name="Submit" value="Login">
 		</form>
 		</body>
 <html>
 ```


