
##DataGrid - Nested Version

###Introduction
Assume you have Hotel information as DataList in the first level and you have customer information for each hotel as sub level with DataGrid.
[[Link:http://support.microsoft.com/default.aspx?scid=kb;en-us;815004]]

```csharp
 protected int dgEditItemIndex;
 ```

```csharp
 	DataGrid dg = (DataGrid)e.Item.FindControl("dgCustomer");
 	if (dg != null) {
 		dg.EditCommand += new DataGridCommandEventHandler(dg_CustomerEditCommand);
 		dg.DeleteCommand += new DataGridCommandEventHandler(dg_CustomerDeleteCommand);
 		dg.CancelCommand += new DataGridCommandEventHandler(dg_CustomerCancelCommand);
 		dg.UpdateCommand += new DataGridCommandEventHandler(dg_CustomerUpdateCommand);
 	}
 }
 ```
```csharp
 	DataGrid dg = (DataGrid)source;
 	dg.EditItemIndex = -1;
 	dgEditItemIndex = -1;
 	dgUniqueID = e.Item.UniqueID;
 
 	Response.Write("UPDATE blah blah with HCID " + dg.DataKeys[e.Item.ItemIndex].ToString());
 
 	BindHotels();
 }
 ```
```csharp
 	DataGrid dg = (DataGrid)source;
 	dg.EditItemIndex = -1;
 	dgEditItemIndex = -1;
 	dgUniqueID = e.Item.UniqueID;
 	BindHotels();
 }
 ```
```csharp
 	DataGrid dg = (DataGrid)source;
 	dg.EditItemIndex = -1;
 	dgEditItemIndex = -1;
 	dgUniqueID = e.Item.UniqueID;
 
 	Response.Write("Delete blah blah with HCID " + dg.DataKeys[e.Item.ItemIndex].ToString());
 
 	BindHotels();
 }
 ```
```csharp
 	DataGrid dg = (DataGrid)source;
 	dg.EditItemIndex = e.Item.ItemIndex;
 	dgEditItemIndex = e.Item.ItemIndex;
 	dgUniqueID = e.Item.UniqueID;// save UniqueID to notice which row to edit in binding time
 	BindHotels();			
 }
 ```

Now you just set EditItemIndex of child control with the UniqueID which you saved in each event delegation.
```csharp
 	if (e.Item.ItemIndex != -1) {
 		string hid = dlHotel.DataKeys[e.Item.ItemIndex].ToString();
 		DataGrid dg = (DataGrid)e.Item.FindControl("dgCustomer");
 		if (dg != null) {
 			dg.DataSource = busObj.GetCustomersByHID(hid);
 			dg.DataKeyField = "HCID";
 			
 			if (dgUniqueID != null && dgUniqueID.IndexOf(dg.UniqueID) != -1) {
 				dg.EditItemIndex = dgEditItemIndex;
 				dgUniqueID = null;
 			}
 
 
 			dg.DataBind();
 		}
 	}
 }
 ```
```csharp
 	if (mHotels == null) {
 		mHotels = busObj.GetHotels(mBID.ToString());
 	}
 	dlHotel.DataKeyField = "HID";
 	dlHotel.DataSource = mHotels;
 	dlHotel.DataBind();
 }
 
 ```



