
##JavaScript

###Hit Enter Submit
```csharp
    <asp:textbox id="textbox1" runat="server"/>
    <asp:textbox id="textbox2" runat="server"/>
    <asp:button id="button1" text="Button1" runat="server"/>
    <asp:panel defaultbutton="button2" runat="server">
        <asp:textbox id="textbox3" runat="server"/>
        <asp:button id="button2" runat="server"/>
    </asp:panel>
 </form> 
 ```
Use defaultbutton


###Focus Control
```csharp
 ```

###Confirmation
```csharp
 "javascript:if(confirm('Are you sure everything is correct?')== false) return false;");
 ```
```csharp
 ```

###Confirmation with DataGrid
You have to set attribute when you bind data
```csharp
 ```
```csharp
 if (e.Item.ItemType == ListItemType.AlternatingItem 
 	|| e.Item.ItemType == ListItemType.Item 
 	|| e.Item.ItemType == ListItemType.SelectedItem ) {
 	e.Item.Cells[e.Item.Cells.Count-1].Attributes.Add( "onClick", 
 			"javascript:return confirm('Are you sure you want to delete this item?');" );
 }
 }
 ```
###Confirmation with DataGrid - Easy Way
Convert to Template Column from DeleteCommandColumn
```csharp
 <asp:LinkButton runat="server" Text="Delete" CommandName="Delete" CausesValidation="false"></asp:LinkButton>
 </span>
 ```
###Keep Alive Script
```csharp
 	string str_Script = @"
 	<script type='text/javascript'>
 	//Number of Reconnects
 	var count=0;
 	//Maximum reconnects setting
 	var max = 60*6;//6hours
 	function Reconnect(){
 		count++;
 		if (count < max) {
 			window.status = 'Link to Server Refreshed ' + count.toString()+' time(s)' ;
 			var img = new Image(1,1);
 			img.src = 'Reconnect.aspx';
 		}
 		else {
 			window.status = 'Link to Server expired - '+count + ','+max;
 		}
 	}
 	window.setInterval('Reconnect()',60*1000); //Set to length in mili sec 
 	</script>
 	";
 ```
```csharp
 	Type cstype = this.GetType();
 	string csname1 = "MyReconnect";
 	if (!cs.IsStartupScriptRegistered(cstype, csname1)) {			
 		cs.RegisterStartupScript(cstype, csname1, str_Script, false);
 	}
 ```




