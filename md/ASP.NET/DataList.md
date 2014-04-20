
##DataList

###Description
DataList is flexible to design, and it is binded data source. To draw Table tag,
use DataGrid with ColumnTemplate class. See [[DataGrid>ASP.NET/DataGrid]] for more detail

###Binding
```asp.net
 DataList1.DataSource = GetDummyData();// return DataTable from DB
 DataList1.DataKeyField = "OrderID";				
 DataList1.DataBind();
 }
 ```
For example, you can retrive data in .aspx page like this
```asp.net
 ```
```asp.net
 ```
###Edit,Delete, Cancel, Update
+Create Link Button to send Command (aspx)
```asp.net
 CommandName="Edit">Delete</asp:linkbutton>
 ```
```asp.net
 += new System.Web.UI.WebControls.DataListCommandEventHandler
 (this.DataList1_EditCommand);
 ```

```asp.net
 private void DataList1_EditCommand(object source, DataListCommandEventArgs e) {
    // just set EditItemIndex
 	DataList1.EditItemIndex = (int)DataList1.DataKeys[e.Item.ItemIndex];
 	BindData();
 }
 ```
```asp.net
    // use DataList1.DataKeys[e.Item.ItemIndex] to send delete sql
 	BindData();
 }
 ```
```asp.net
 	DataList1.EditItemIndex = -1;
 	BindData();
 }
 ```
```asp.net
    // retrive Hidden TextBox and use this value to send update sql
 	string orderDate = ((TextBox)e.Item.FindControl("tbOrderDate")).Text.Trim();
 	// use DataList1.DataKeys[e.Item.ItemIndex] to send update sql
 	DataList1.EditItemIndex = -1;
 	BindData();
 }
 ```


