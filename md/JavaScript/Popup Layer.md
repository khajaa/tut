
##Popup Layer - simple version

###Finding Position of Tag
```javascript
 var curleft = curtop = 0;
 if (obj.offsetParent) {
 	curleft = obj.offsetLeft
 	curtop = obj.offsetTop
 	while (obj = obj.offsetParent) {
 		curleft += obj.offsetLeft
 		curtop += obj.offsetTop
 	}
 }
 return [curleft,curtop];
 }
 ```
###Show Popup Layer on Element
```javascript
 	var curleft = curtop = 0;
 	if (obj.offsetParent) {
 		curleft = obj.offsetLeft
 		curtop = obj.offsetTop
 		while (obj = obj.offsetParent) {
 			curleft += obj.offsetLeft
 			curtop += obj.offsetTop
 		}
 	}
 	return [curleft,curtop];
 }
 ```
```javascript
 	var coors = FindPos(obj);
 	var x = document.getElementById(lyr);
 	x.style.top = coors[1] + 'px';
 	x.style.left = coors[0] + 'px';
 }
 ```
```javascript
 	var tag = document.createElement('div');
 	tag.innerHTML = 'This is comment on '+elemid;
 	tag.style['position'] = 'absolute';
 	tag.style['border'] = '1px solid black';
 	tag.style['backgroundColor'] = 'lightgreen';
 	tag.id = elemid;
 	document.body.appendChild(tag);
 
 }
 ```
```javascript
 var layerName = 'mylayer_'+obj.id;
 // This part can be just static div tag in html which is hidden style attribute
 InsertPopupLayer(layerName);// create something unique div element
 
 SetLayer(obj,layerName); // Move the layer on that position
 }
 ```
```javascript
 ```

###Reference
-http://www.quirksmode.org/js/findpos.html


###Example (Old - obsolete)
```javascript
 <html>
 <head>
 <!-- Set popup style. display is set to none in initial condition -->
 <style type="text/css">
 .popup{
 	font-size:0.9em;
 	position:absolute;
 	padding:0.5em;
 	border:1px solid #0099ff;
 	background-color:#ffffdd;
 	display:none;
 	filter:alpha(opacity=500, style=0, enabled=true);
 	width:23em;
 }
 </style>
 
 <meta http-equiv="Content-Script-Type" content="text/javascript">
 <script type="text/javascript">
 <!--
 document.onmousemove=xMouse_Move;
 function xMouse_Move(){
 	n_Mouse_X = document.body.scrollLeft+event.x;
 	n_Mouse_Y = document.body.scrollTop+event.y;
 }
 function x_visible(arg) {
 	pos = 5;
 	document.all(arg).style.display="block";
 	document.all(arg).style.posLeft = n_Mouse_X + pos;
 	document.all(arg).style.posTop = n_Mouse_Y + pos;
 }
 function x_hidden(arg) {
 	document.all(arg).style.display="none";
 }
 -->
 </script>
 
 </head>
 <body>
 
 <!--Description for popup-->
 <div id="test1" class="popup">
 Blah Blah Blah
 </div>
 <div id="test2" class="popup">
 Hello ?
 </div>
 <div id="test3" class="popup">
 This <b><u>is</u></b> <br>test.
 </div>
 
 <!--Links-->
 <a href="test1.html" onMouseover="x_visible('test1')" onMouseout="x_hidden('test1')">Test1</a><br>
 <a href="test2.html" onMouseover="x_visible('test2')" onMouseout="x_hidden('test2')">Test2</a><br>
 <a href="test3.html" onMouseover="x_visible('test3')" onMouseout="x_hidden('test3')">Test3</a><br>
 <span onMouseover="x_visible('test3')" onMouseout="x_hidden('test3')">How about regular text</span>
 </body>
 </html>
 ```



