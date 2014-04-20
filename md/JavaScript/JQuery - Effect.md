
##JQuery - Effect

###Slide
Include jquery in header
```javascript
 ```
Html
```javascript
 <div style="display:none">hello world</div>
 ```
JQuery Script - add this in head
```javascript
 	$("#clickicon").click(function () {
 		if ($("#mybox").is(":hidden")) {
 			$("#mybox").slideDown("slow");
 		} 
 		else {
 			$("#mybox").slideUp("slow");
 		}
 	});
 });
 ```
###Reference
http://docs.jquery.com/Effects



