
##Enter Key Event

###Use Enter Key Event in Input Box - e.g. hit enter to search!
```javascript
 var characterCode literal character code will be stored in this variable
 	if(e && e.which){ //if which property of event object is supported (NN4)
 		e = e
 			characterCode = e.which //character code is contained in NN4's which property
 	}
 	else{
 		e = event
 			characterCode = e.keyCode //character code is contained in IE's keyCode property
 	}
 if(characterCode == 13){ //if generated character code is equal to ascii 13 (if enter key)
 	document.forms[0].submit() //submit the form or do something here!
 		return false
 }
 else{
 	return true
 }
 }
 ```
Usage (Do not forget add the return!):
```javascript
 ```




