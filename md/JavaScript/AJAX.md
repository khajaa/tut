
##AJAX

###About AJAX
AJAX is technology that allows your browser to send another HTTP request after downloading the HTML document. In this example, I created a HTTP object, then it sends requests to specific urls. After getting response from the server, the div tag's innerHtml will be replaced by the callback method.

###Demo
[[Go to demo page:http://xxki.com/file/ajax/ajax.html]]

###Download



###Simple AJAX Example - ajax.html
```javascript
 	<head>
 		<script  language="JavaScript" type="text/javascript">
 		<!--
 	
 			// Globals
 			var GHttpObj = createRequestObject();
 			var GTargetId = null;
 
 			function createRequestObject() {
 				var reqObj;
 				var browser = navigator.appName;
 				if(browser == "Microsoft Internet Explorer") {
 					reqObj = new ActiveXObject("Microsoft.XMLHTTP");
 				}
 				else {
 					reqObj = new XMLHttpRequest();
 				}
 				return reqObj;
 			}
 
 			function sendRequest(targetId, url) {
 				GTargetId = targetId;
 				GHttpObj.open('GET', url);
 				GHttpObj.onreadystatechange = onResponse; // set callback method
 				GHttpObj.send(null);
 			}
 
 			function onResponse() {
 				if(GHttpObj.readyState == 4){
 					document.getElementById(GTargetId).innerHTML = GHttpObj.responseText;
 				}
 			}
 
 		-->
 		</script>
 	</head>
 	<body>
 		Just download from a static web page<br>
 		<a href="javascript:sendRequest('test','test.html')">Ajax Test</a><br>
 		Try this if your server can run php script<br>
 		<a href="javascript:sendRequest('test','test.php?id=1')">Test Item1</a><br>
 		<a href="javascript:sendRequest('test','test.php?id=2')">Test Item2</a><br>
 		<a href="javascript:sendRequest('test','test.php?id=3')">Test Item3</a><br>
 		<div id="test">
 			response comes here
 		</div>
 	</body>
 </html>
 ```
###test.html
```javascript
 data1,data2,data3,etc...<br>
 <strong><i>Some html codes here</i></strong>
 ```
###test.php
```javascript
 if ($_GET['id'] == 1) {
 	echo 'Banana';
 }
 else if ($_GET['id'] == 2) {
 	echo 'Strawberry';
 }
 else if ($_GET['id'] == 3) {
 	echo 'Apple';
 }
 else {
 	echo 'Error';
 }
 ?>
 ```




