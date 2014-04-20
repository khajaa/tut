
##Email

###Send Email with Basp21
Basp21 is great component to send email. He also provides upload and etc...
http://www.hi-ho.ne.jp/babaq/

```asp
 <%
 Dim strServer    
 Dim strTo   
 Dim strFrom
 Dim strSub
 Dim strBody
 Dim strFile
 Dim result
 strServer = "localhost"
 strTo = "kiiichi2@hotmail.com"
 strFrom = "info@jikuinc.com"
 strSub = "Basp21 Test"
 strBody = "This is test email" & vbCrLf & "Done."
 
 strFile = ""
 
 Set bobj = Server.CreateObject("basp21")
 
 result = bobj.SendMail(strServer,strTo,strFrom, strSub,strBody,strFile)
 
 If result <> "" Then
     Response.Write("Error:" & result)
     Response.End
 End If
 
 Response.Write("Email was sent")
 
 %>
 ```





