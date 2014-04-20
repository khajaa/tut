
##Hide Select (Pulldown) on layer

###Example
```javascript
 	<head>
 		<title>Hide select box test</title>
 		<script type="text/javascript">
 		<!--
 
 		function test() {
 			// Set moving layer
 			// not x-browser
 			var rectX = event.x - 50;
 			var rectY = event.y - 50;
 			var rectWidth = 100
 			var rectHeight = 100
 
 			var testDiv = document.getElementById("testlay");
 			testDiv.style.position = "absolute";
 			testDiv.style.display= "block";
 			testDiv.style.posLeft = rectX;
 			testDiv.style.posTop = rectY;
 			testDiv.style.width = rectWidth;
 			testDiv.style.height= rectHeight;
 			testDiv.style.backgroundColor = "#31fa21";
 
 			// Call Select Visible Manager Function
 			selectVisMgr(rectX, rectY, rectWidth, rectHeight);
 		}
 
 		// Debug 
 		// <div id="testOut"></div> 
 		//function debugInfo(msg) { 
 		//	document.getElementById("testOut").innerHTML = msg; 
 		//}
 
 		// You can replace this for applet or iframe(?)
 		// [Param]
 		//		left, top, width, height	- If target is in Boundly Rectangle
 		function selectVisMgr(left, top, width, height) {
 			var right = left + width;
 			var bottom = top + height;
 			var elemArr = document.getElementsByTagName("select"); 
 
 			for (var i=0; i<elemArr.length; i++) {
 				var tLeft = elemArr[i].offsetLeft;
 				var tTop = elemArr[i].offsetTop;
 				var tRight = elemArr[i].offsetWidth + tLeft;
 				var tBottom = elemArr[i].offsetHeight + tTop;
 				
 				// Col det
 				if (right < tLeft || left > tRight || 
 					top > tBottom || bottom < tTop) { 
 					elemArr[i].style.visibility="visible"; 
 				}
 				else {
 					elemArr[i].style.visibility="hidden"; 
 				}
 			}
 		}
 
 		//-->
 		</script>
 	</head>
 	<body onMouseMove=test()>
 		<div id="testlay">This can be calendar or popup help, etc...</div>
 		<center>
 		<br><br><br>
 		<select>
 			<option value="test1">XXXXXXXXXXXX</option>
 		</select>
 		</center>
 	</body>
 </html>
 
 ```


