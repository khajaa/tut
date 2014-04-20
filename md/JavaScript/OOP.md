
##OOP

###Creating Class Example
```javascript
 	var mName = "Jon Doe";
 
 	function SetName(val) {
 		mName = val;
 	}
 	this.SetName = SetName;
 
 	function GetName() {
 		return mName;
 	}
 	this.GetName = GetName;
 
 	function SayHello() {
 		alert('Hello, ' + mName);
 	}
 	this.SayHello = SayHello;
 }
 ```

```javascript
 kiichi.SetName('Kiichi Takeuchi');
 kiichi.SayHello();
 ```



