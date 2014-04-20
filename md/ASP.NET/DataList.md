
##DataList

###Description
DataList is flexible to design, and it is binded data source. To draw Table tag,
use DataGrid with ColumnTemplate class. See [[DataGrid>ASP.NET/DataGrid]] for more detail

###Binding
```csharp
 DataList1.DataSource = GetDummyData();// return DataTable from DB
 DataList1.DataKeyField = "OrderID";				
 DataList1.DataBind();
 }
 ```
For example, you can retrive data in .aspx page like this
```csharp
 ```
```csharp
 ```
###Edit,Delete, Cancel, Update
+Create Link Button to send Command (aspx)
```csharp
 CommandName="Edit">Delete</asp:linkbutton>
 ```
```csharp
 += new System.Web.UI.WebControls.DataListCommandEventHandler
 (this.DataList1_EditCommand);
 ```

```csharp
 private void DataList1_EditCommand(object source, DataListCommandEventArgs e) {
    // just set EditItemIndex
 	DataList1.EditItemIndex = (int)DataList1.DataKeys[e.Item.ItemIndex];
 	BindData();
 }
 ```
```csharp
    // use DataList1.DataKeys[e.Item.ItemIndex] to send delete sql
 	BindData();
 }
 ```
```csharp
 	DataList1.EditItemIndex = -1;
 	BindData();
 }
 ```
```csharp
    // retrive Hidden TextBox and use this value to send update sql
 	string orderDate = ((TextBox)e.Item.FindControl("tbOrderDate")).Text.Trim();
 	// use DataList1.DataKeys[e.Item.ItemIndex] to send update sql
 	DataList1.EditItemIndex = -1;
 	BindData();
 }
 ```


