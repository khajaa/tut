
##Popup Window


###Description
This is a demonstration to popup ATP search window and return the value into TextBox control which name is "ATP".
In popup javascript, I'm passing the control's ID in order to feed the value later.

###Examples
Apply.aspx
```csharp
 onclick="childWindow=window.open('FindYourSchool.aspx?controltext=ctl00_ContentPlaceHolder1_ATP', 
 'FindYourSchool', 
 'width=500,height=500,toolbar=0,scrollbars=0,screenX=200,screenY=200,left=200,top=200'); 
 if (childWindow.opener == null) childWindow.opener = self;" value="Find Your School" />
 ```
FindYourSchool.aspx
```csharp
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" >
 <head runat="server">
     <title>Find Your School</title>
     <script language="javascript" type="text/javascript">
     function updateParent(code) {
         self.opener.document.getElementById('<%=Request["controltext"] %>').value=code; 
         self.close();
         return false;
     }    
     </script>
 </head>
 <body>
     <form id="form1" runat="server">
     <div>
     <!-- Implement some search engine with gridview -->
     <button onclick="updateParent('7331')">Select</button><br />
     <button onclick="updateParent('101740')">Select</button>
     </div>
     </form>
 </body>
 </html>
 ```



