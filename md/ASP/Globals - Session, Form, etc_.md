
##Globals - Session, Form, etc...

###Accessing Session
```asp
 username = Session("username")
 ```
###Print out all Session Variables
```asp
 For Each i in Session.Contents
   Response.Write(i & " = " & Session(i) &"<br />")
 Next
 ```
###GET Values
  Request.QueryString("id")
###Form POST values
```asp
 ```
###Script itself
```asp
 ```
###Checkbox
```asp
 Dim Item
 For Each Item In Request.Form("choice")
 str = str & ", " & Item
 Next
 ```



