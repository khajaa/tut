
##Check or Uncheck All Checkbox

###Example
```javascript
 <HEAD> 
 <TITLE>check all example</TITLE> 
 <script type="text/javascript">
 <!--
 function checkAll(field) {
 	for (i = 0; i < field.length; i++)
 	field[i].checked = true ;
 }
 function uncheckAll(field) {
 	for (i = 0; i < field.length; i++)
 	field[i].checked = false ;
 }
 //-->
 </script> 
 </HEAD> 
 <BODY>
 <form name="myform" action="test.php" method="post">
 <b>Your Favorite Scripts & Languages</b><br>
 <input type="checkbox" name="mylist" value="1">Java<br>
 <input type="checkbox" name="mylist" value="2">Javascript<br>
 <input type="checkbox" name="mylist" value="3">Active Server Pages<br>
 <input type="checkbox" name="mylist" value="4">HTML<br>
 <input type="checkbox" name="mylist" value="5">SQL<br>
 <input type="button" name="CheckAll" value="Check All" onClick="checkAll(document.myform.mylist)">
 <input type="button" name="UnCheckAll" value="Uncheck All" onClick="uncheckAll(document.myform.mylist)">
 </form>
 </BODY> 
 </HTML> 
 ```


