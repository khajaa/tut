
##Validation


###Check Email Format
```aspx-cs
 {
   string strRegex = @"^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}" +
         @"\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\" + 
         @".)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$";
   Regex re = new Regex(strRegex);
   if (re.IsMatch(inputEmail))
    return (true);
   else
    return (false);
 }
 ```
Check date like 2001/12/03
```aspx-cs
 ```
```aspx-cs
 ```
For mm/yyyy
```aspx-cs
 ```
###Check length of characters
User RegularExpressionValidator
e.g. max = 14
```aspx-cs
 ```
When you validate DropDownList, you have to specify 
```aspx-cs
 ```
if you leave the first item's value as blank, VS.NET eliminate entire tag
and it will not be validated.

```aspx-cs
 <asp:ListItem Value="" Selected="True">---Please Select---</asp:ListItem>
 <asp:ListItem Value="A">AAAAAAAAAAAAAAA</asp:ListItem>
 <asp:ListItem Value="B">BBBBBBBBBBBBB</asp:ListItem>
 <asp:ListItem Value="C">CCCCCCCCCCCCCC</asp:ListItem>
 </asp:dropdownlist>
 ```



