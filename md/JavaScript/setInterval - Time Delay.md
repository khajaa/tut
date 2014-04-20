
##setInterval - Time Interval Delay

###Example
```javascript
 	<head>
 		<script type='text/javascript'>
 		//Number of Reconnects
 		var count=0;
 		//Maximum reconnects setting
 		var max = 100;
 		function Reconnect(){
 			count++;
 			if (count < max) {
 				window.status = 'Link to Server Refreshed ' + count.toString()+' time(s)' ;
 				//var img = new Image(1,1);
 				//img.src = 'Reconnect.aspx';
 				document.getElementById('mybox').innerHTML = count;
 			}
 		}
 		window.setInterval('Reconnect()',1000); //Set to length required mili sec every 5 min
 		</script>
 	</head>
 	<body>
 
 		<div id="mybox"></div>
 	</body>
 </html>
 
 ```



