
##Replace inside HTML Tag - getElementById and innterHTML sample

###Example
```javascript
 <HEAD> 
 <TITLE>innerHTML example</TITLE> 
 <script type="text/javascript">
 <!--
 function setDiv( inId, inText ) {
 document.getElementById(inId).innerHTML = inText;
 }
 //-->
 </script> 
 </HEAD> 
 <BODY>
 <div id="test">Hello</div>
 <input type="button" value="Replace Text" onClick="setDiv('test', 'World')">
 </BODY> 
 </HTML> 
 ```


