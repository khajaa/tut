
##Slider

###Demo
http://xxki.com/file/js/slide.html
###Sample
```javascript
 	<head>
 		<title>Slide Test</title>
 		<script language="JavaScript">
 			<!--
 
 			// id = Box
 			var bWidth = 0;
 			var bHeight = 0;
 			var bMinX = 0;
 			var bMaxX = 0;
 			var isPressed = false;
 
 			// id = Slider
 			var sX = 0;
 			var sY = 0;
 			var sWidth = 0;
 			var sHeight = 0;
 
 			var offsetX = 5; // padding inside Box
 			var deltaX = 0; // mouse pos delta from panel's corner
 
 			document.write("<div onMouseDown='onSliderMouseDown()' style='position:absolute;z-index:2;top:-1000px;"
 				+ "left:-1000px;width:100px;height:20px;background-color:lightblue;cursor:move;' " 
 				+ "UNSELECTABLE='on' id='Slider'></div>");
 
 			// Events Binding
 			document.onmousemove = onMove;
 			document.onmouseup = onMouseUp;
 
 			function getSliderValue() {
 				var ratio = sX - bMinX - offsetX;
 				var total = (bMaxX - sWidth) - bMinX - (2*offsetX);
 				return parseInt(ratio / total * 100);
 			}
 
 			function getX(inId) {
 				return document.getElementById(inId).offsetLeft;
 			}
 
 			function getY(inId) {
 				return document.getElementById(inId).offsetTop;
 			}
 
 			function setX(inId, val) {
 				document.getElementById(inId).style.left = val;
 			}
 
 			function setY(inId, val) {
 				document.getElementById(inId).style.top = val;
 			}
 
 			function onSliderMouseDown(inEvent) {
 				isPressed = true;
 			}
 
 			function onMouseUp(inEvent) {
 				isPressed = false;
 			}
 
 			function onMove(inEvent){
 				if (isPressed) {
 					var tmpX = 0;
 					if(document.all){
 						tmpX = event.x - deltaX;
 					}
 					else{
 						tmpX = inEvent.pageX - deltaX;
 					}
 
 					// Check boundly
 					if (bMinX > tmpX)  {
 						sX = bMinX + offsetX;
 					}
 					else if (bMaxX - sWidth < tmpX) {
 						sX = bMaxX - sWidth - offsetX;
 					}
 					else {
 						sX = tmpX;
 					}
 					setX('Slider', sX);
 				}
 				else {
 					if(document.all){
 						deltaX = event.x - sX;
 					}
 					else{
 						deltaX = inEvent.pageX - sX;
 					}
 				}
 			}
 
 			function onInit() {
 				sWidth = parseInt(document.getElementById('Slider').style.width);
 				sHeight = parseInt(document.getElementById('Slider').style.height);
 				bWidth = parseInt(document.getElementById('Box').style.width);
 				bHeight = parseInt(document.getElementById('Box').style.height);
 				bMinX = getX('Box');
 				bMaxX = bMinX + bWidth;
 				sX = bMinX + bWidth/2 - sWidth/2;
 				sY = getY('Box') + bHeight/2 - sHeight/2;
 				setX('Slider', sX);
 				setY('Slider', sY);
 			}
 
 			// --></script>
 
 
 	</head>
 	<body onLoad="onInit()">
 			<input type="button" onClick="alert(getSliderValue())" value="Get Slider Value"/>
 			<br><br>
 			<div style="border:solid 1px black; width:500px;height:30px;" UNSELECTABLE="on" id="Box"></div>
 	</body>
 </html>
 ```



