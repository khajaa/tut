
##GridView and DropDownList with ObjectDataSource

###GridView and DropDownList with ObjectDataSource - Practical Instruction
%%%Important%%%
- Set DataKeyNames
- Use asp:Parameter Tag for binding source
- Put them in right order. DataKeyNames (Primarity) should be on top.
- For drop down menu inside each row, set SelectedValue='<% Bind()%>'


###Null Value Work around
Add
```asp.net
 ```

```asp.net
 DataSourceID="odsName" DataTextField="Name"
 DataValueField="PersonID" 
 SelectedValue='<%# Bind("Name") %>' 
 AppendDataBoundItems=true>
         <asp:ListItem Text="- select -" Value=""></asp:ListItem
 </asp:DropDownList>
 ```
Make sure save NULL if you have the blank value on saving time





