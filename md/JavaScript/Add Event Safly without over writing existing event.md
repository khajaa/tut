
##Add Event Safly without over writing existing event

###Function to add event

```javascript
  if (obj.addEventListener){ 
 	   obj.addEventListener(evType, fn, false); 
 	   return true; 
  } else if (obj.attachEvent){ 
 	   var r = obj.attachEvent("on"+evType, fn); 
 	   return r; 
  } else { 
 	   return false; 
  } 
 }
 ```
and use this like:
```javascript
 ```


