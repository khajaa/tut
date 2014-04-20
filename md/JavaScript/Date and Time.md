
##Date and Time

###Validation
     function isDate(yyyy,mm,dd) {
         var d = new Date(mm + "/" + dd + "/" + yyyy);
         return d.getMonth() + 1 == mm && d.getDate() == dd && d.getFullYear() == yyyy;
     }

###Tick
    var now = new Date();
    var ticks = now.getTime();
    alert(ticks);

###Age from DOB
```javascript
 var dob = new Date(dob_str);
 var now = new Date();
 var ms = now.valueOf() - dob.valueOf();
 var minutes = ms / 1000 / 60;
 var hours = minutes / 60;
 var days = hours / 24;
 var years = days/365;
 return years;
 }
 ```

###Next/Prev Date
```javascript
 currentDate.setDate(currentDate.getDate()-1);
 //currentDate.setDate(currentDate.getDate()+1);
 document.getElementById("datepicker_input").value = currentDate.getFullYear() + "/" + (currentDate.getMonth()+1) + "/" + currentDate.getDate();
 ```

###Example - Automatically get latest document's modified date
```javascript
 <!--
 update = new Date(document.lastModified)
 document.writeln( (update.getMonth()+1) + "/" 
 + update.getDate() + "/" 
 + update.getYear())
 //-->
 </SCRIPT>
 ```
###Example2 - automatically get today
JavaScript
```javascript
 <!--
 var currentDate = new Date();
 document.getElementById("myinput").value = currentDate.getFullYear() + "/" 
 + (currentDate.getMonth()+1) + "/" 
 + currentDate.getDate();
 //-->
 </SCRIPT>
 ```

```javascript
 ```

HTML
```javascript
 ```




