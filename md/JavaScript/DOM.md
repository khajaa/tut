
##DOM

###Get all elements for some tags
```javascript
 ```
```javascript
 script.id = id;
 script.type = 'text/javascript';	
 script.src = target;
 head.appendChild(script); // if it's script tag, this will not work
 ```
This will add after the script tag. not inside
```javascript
 ```

###Insert Before
```javascript
 ```
###Remove Child
e.g. Remove all div tag
```javascript
 elm.parentNode.removeChild(elm);
 ```
###Attribute
```javascript
 document.getElementById('test1').setAttribute('value','enter text here');
 ```
###Setting class attribute problem
As for CSS class, in Mozilla, attribute name is class, and in IE, it's called className. So when you set css class dynamically via javascript, just call the setAttribute twice.
```javascript
 document.getElementById('test1').setAttribute('className','myclass1'); // for mozilla
 ```


###Inner HTML Content
```javascript
 ```
:Note|Be careful it's not innerHtml. HTML are in all upper case
###Example
```javascript
 	<head>
 		<title>JS DOM Test</title>
 		<script  language="JavaScript" type="text/javascript">
 			<!--
 			function doOnload() {
 				dump("aaaaaaaa");
 				dump("bbbbbbbb");
 				dump("cccccccc");
 				setAltRow();
 				setTextArea();
 			}
 			
 			// example of innerHTML
 			function dump(str) {
 				var spanTag = document.getElementById("debug");
 				spanTag.innerHTML += str + "<br>";
 			}
 
 			// example of getElementsByTagName
 			function setAltRow() {
 				var tableTag = document.getElementById("mytable");
 				var trArr = tableTag.getElementsByTagName("tr");
 				for (var i=0; i<trArr.length; i++) {
 					if (i%2 == 0) {
 						trArr[i].style.background = "#879879"
 						trArr[i].style.color= "#221122"
 					}
 					else {
 						trArr[i].style.background = "#343434"
 						trArr[i].style.color= "#afafaf"
 					}
 				}
 			}
 
 			// example of get/setAttribute
 			function setTextArea() {
 				var taTag = document.getElementById("myta");
 				// you can use innterHTML too!
 				taTag.setAttribute("value", taTag.getAttribute("myattr"));
 			}
 
 			-->
 		</script>
 	</head>
 <body onload="doOnload()">
 	<span id="debug"></span>
 
 	<table id="mytable" border="1">
 		<tr><td>AAA</td><td>BBB</td></tr>
 		<tr><td>AAA</td><td>BBB</td></tr>
 		<tr><td>AAA</td><td>BBB</td></tr>
 		<tr><td>AAA</td><td>BBB</td></tr>
 		<tr><td>AAA</td><td>BBB</td></tr>
 		<tr><td>AAA</td><td>BBB</td></tr>
 		<tr><td>AAA</td><td>BBB</td></tr>
 		<tr><td>AAA</td><td>BBB</td></tr>
 		<tr><td>AAA</td><td>BBB</td></tr>
 		<tr><td>AAA</td><td>BBB</td></tr>
 	</table>
 
 	<textarea id="myta" myattr="new text here">some text here</textarea>
 
 </body>
 </html>
 ```
Result should be like this







