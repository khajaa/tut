
##DataGrid

###Binding
```asp.net
 dataGrid.DataSource = dt;
 dataGrid.DataKeyField = "OrderID";
 dataGrid.DataBind();
 ```
###Paging
In Designer View
+AllowPaging=true
+PageSize=10 (Optional)
+PagerStyle->Mode=NumericPages (Optional)
In code
+Add
```asp.net
                                                dataGrid_PageIndexChanged);
+And implement like
```asp.net
 dt = PopulateTable(); // fill data table, own funciton
 dataGrid.DataSource = dt;
 dataGrid.CurrentPageIndex = e.NewPageIndex;
 dataGrid.DataBind();
 }
 ```
```asp.net
 DataTable dt = busObj.GetStudent(tbCurrentDate.Text);
 dt.Merge(busObj.GetPrintProfessor(tbCurrentDate.Text));
 dt.Merge(busObj.GetPrintOther(tbCurrentDate.Text));
 
 // Create DataView and set sorting by Age Column
 DataView dv = dt.DefaultView;
 dv.Sort = "Age ASC"; // or DESC
 
 // Just bind it
 DataGrid dg = new DataGrid();
 dg = new DataGrid();
 dg.DataSource = dv;
 dg.DataBind();
 ```

###Sorting2 - Use SQL Statement
Makesure set an attribute 
```asp.net
 ```
Adding SortCommand
```asp.net
 += new System.Web.UI.WebControls.DataGridSortCommandEventHandler(this.dgResult_SortCommand);
 ```
Implementing Event. I use ViewState to pass Name of Sort Column and the order.
In .aspx page, You have to specify SortExpression Attribute on Column Elements.
```asp.net
 ViewState["SortColumnName"] = e.SortExpression;
 if (ViewState["SortOrder"] == null || ViewState["SortOrder"].ToString() == "DESC") {
 	ViewState["SortOrder"] = "ASC";
 }
 else {
 	ViewState["SortOrder"] = "DESC";
 }
 BindData(); // my own function
 }
 ```
BindData Function
```asp.net
 string sort = "";
 if (ViewState["SortColumnName"] != null) {
 	sort = ViewState["SortColumnName"].ToString().Replace("'","''");
 }
 
 string order = "";
 if (ViewState["SortOrder"] != null) {
 	order = ViewState["SortOrder"].ToString().Replace("'","''");
 }
 // continue... and build sql from these values
 // string sql = "SELECT * FROM Customers " + sort + " " +  order
 // and send query...
 ```

###Column - Button (e.g. Select)
+Property->DataKeyField = ID (From DB)
+Property->Column
+ButtonColumn
--Header Text = Detail
--Text = Detail
--Command Name = Select
+Implement like

```asp.net
 				this.dataGrid_SelectedIndexChanged);
 ```
```asp.net
 int index = dgRequest.SelectedIndex;
 Response.Write(dgRequest.DataKeys[index]  + "<br>");
 }
 ```
When you bind, specify DataKeyField so that you can use this id to update, delete, and select, later
```asp.net
 dgResult.DataKeyField = "CustomerID";
 dgResult.DataBind(); 
 ```
###Use one column to do Edit, Delete, Update, Cancel - EditCommandColumn
```asp.net
 UpdateText="Update" CancelText="Cancel" EditText="Edit"></asp:EditCommandColumn>
 ```
```asp.net
 DataGrid1.EditItemIndex = e.Item.ItemIndex;
 BindData();
 }
 private void DataGrid1_UpdateCommand(object source, DataGridCommandEventArgs e) {
 // use DataGrid1.DataKeyField for update sql
 DataGrid1.EditItemIndex = -1;
 BindData();
 }
 private void DataGrid1_CancelCommand(object source, DataGridCommandEventArgs e) {
 DataGrid1.EditItemIndex = -1;
 BindData();
 }
 ```
###Delete and Update (Indivisual Column)
You can also bind indivisual ButtonColumn
```asp.net
 <asp:ButtonColumn Text="Delete" HeaderText="Delete" CommandName="Delete"></asp:ButtonColumn>
 ```
```asp.net
 this.dgResult.DeleteCommand += new System.Web.UI.WebControls.DataGridCommandEventHandler(
 this.dgResult_DeleteCommand);
 
 private void dgResult_DeleteCommand(object source, DataGridCommandEventArgs e) {
 string customerId = dgResult.DataKeys[e.Item.ItemIndex].ToString();
 busObj.DeleteCustomer(customerId);
 BindData();
 }
 ```
```asp.net
 string customerId = dgResult.DataKeys[e.Item.ItemIndex].ToString();
 Response.Redirect(
 "DataManagementDetail.aspx?customerid=" + customerId + "&action=edit");
 }
 ```
###Select
```asp.net
 ```
```asp.net
 int index = dgResult.SelectedIndex;
 string customerId = dgResult.DataKeys[index].ToString();
 Response.Redirect(
 "DataManagementDetail.aspx?customerid="+customerId+"&action=view");
 }
 ```
###Custom Command
```asp.net
 ```
```asp.net
 string customerid = ((DataGrid)source).DataKeys[e.Item.ItemIndex].ToString();
 if (e.CommandName == "Custom") {
 	Response.Redirect(
 "DataManagementDetail.aspx?customerid="+customerid+"&action=custom");
 }
 }
 ```
###ItemDataBound - Binding Time Event Example
```asp.net
 	if (e.Item.ItemIndex != -1) {
 		DataRow currentRow = ((DataTable)dgOrder.DataSource).Rows[e.Item.ItemIndex];
 		
 		string oid = dgOrder.DataKeys[e.Item.ItemIndex].ToString();
 
 		Label inv = (Label)e.Item.FindControl("lblInventoryId");
 		if (inv != null) {
 			inv.Text = currentRow["InvName"].ToString();
 		}
 	}
 }
 ```
###Formatting Text Field
```asp.net
 {0:0000000}
 Page.aspx?id={0}
 ```
Example Binding:
```asp.net
 Text='<%# DataBinder.Eval(Container, "DataItem.TicketBuyDate","{0:MM/dd/yyyy hh:mm}") %>' ></asp:TextBox>
 ```

###Formatting Text Field 2 - Using Custom Function
In .cs page create a protected funciton

```asp.net
        // You have to cast the object.
        // If it is unknow error, check the data type like
        // throw new Exception(dataItem.GetType().ToString());
 	string category = ((DataRowView)dataItem)["Category"].ToString();
 	
 	if (category == "A") {
 		return "Assign";
 	}
 	else if (category == "O") {
 		return "Order";
 	}
 	else if (category == "M") {
 		return "Misc";
 	}
 	else {
 		return "Unknown";
 	}
 }
 ```
Then in .aspx page
```asp.net
 ```
###Footer
1. Convert Column to Template Column
2. Create FooterTemplate
3. Bind at creating time
```asp.net
 	<ItemTemplate>
 		 <asp:TextBox id="ProductPrice" runat="server" 
 		 Text='<%# Container.DataItem("UnitPrice") %>' >
 		 </asp:TextBox>       
 	</ItemTemplate>
 	<FooterTemplate>        
 			   <asp:Label Runat=server ID="lblFooterPrice">
 				</asp:Label>   
 		</FooterTemplate>       
 </asp:TemplateColumn>        
 ```
Then assign value when the datagrid is created

```asp.net
 Label lblFooterPrice= (Label)e.Item.FindControl("lblFooterPrice");
 if (lblFooterPrice != null) {
 	lblFooterPrice.Text = "Dynamic data here";
 }
 }
 ```
###Multiple-Line Label
```asp.net
 	if (e.Item.ItemIndex != -1) {
 		Label lblDescription = (Label)e.Item.FindControl("lblDescription");
 		if (lblDescription != null) {
 			lblDescription.Text = lblDescription.Text.Replace("\n", "<BR>");
 		}
 	}
 }
 
 ```
###Updating all values in one shot
    void btnUpdate_click(Object sender, EventArgs e) {
        for (int i=0; i<MyDataGrid.Items.Count; i++) {
            DataGridItem _item = MyDataGrid.Items[i];
            TextBox qtyTextBox = (TextBox)_item.FindControl("txtQty");
            CheckBox giftCheckBox = (CheckBox)_item.FindControl("chkGift");
            //qtyTextBox.Text;
            //giftCheckBox.Checked;
 		// send update sql
        }
        BindGrid();
    }





