
##Validation


###Check Email Format
```asp.net
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
```asp.net
 ```
```asp.net
 ```
For mm/yyyy
```asp.net
 ```
###Check length of characters
User RegularExpressionValidator
e.g. max = 14
```asp.net
 ```
When you validate DropDownList, you have to specify 
```asp.net
 ```
if you leave the first item's value as blank, VS.NET eliminate entire tag
and it will not be validated.

```asp.net
 <asp:ListItem Value="" Selected="True">---Please Select---</asp:ListItem>
 <asp:ListItem Value="A">AAAAAAAAAAAAAAA</asp:ListItem>
 <asp:ListItem Value="B">BBBBBBBBBBBBB</asp:ListItem>
 <asp:ListItem Value="C">CCCCCCCCCCCCCC</asp:ListItem>
 </asp:dropdownlist>
 ```



