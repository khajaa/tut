
##DataTable

###Retrive a cell data
```csharp
 [Row#][Col# or string name]
 dt.Rows[0]["Full_Name"]
 ```
Caution!
When you compare as string, you have to convert it
```csharp
     //...
 }
 ```
To get them all
```csharp
 foreach(DataColumn myCol in dt.Columns){
 	Console.WriteLine(myRow[myCol]);
 }
 }
 ```
```csharp
 ```
###Add Row
```csharp
 DataColumn dc;
 DataRow dr;
 
 //  create and add the first column
 dc = new DataColumn();
 dc.DataType = System.Type.GetType("System.String");
 dc.ColumnName = "First";
 dc.DefaultValue = "This is default value";
 dt.Columns.Add(dc);
 
 // Create and add the second column
 dc= new DataColumn();
 dc.DataType = System.Type.GetType("System.Decimal");
 dc.ColumnName = "Second";
 dc.DefaultValue = 0.00;
 dt.Columns.Add(dc);
 
 
 
 // Add row1
 dr = dt.NewRow();
 dr["First"] = "aaaaaaaaaaa"; // or dr[0] = "aaaaaaaaaaa";
 dr["Second"] = 100.56;
 dt.Rows.Add(dr);
 
 // Add row2
 dr = dt.NewRow();
 // Both default value
 dt.Rows.Add(dr);
 ```
###Remove Row
```csharp
 for (int i=0; i<dt.Rows.Count; i++) {
 	if (dt.Rows[i][3].ToString() == "OK") {
 		dt.Rows.Remove(dt.Rows[i]);
 		i = 0; // reset the index
 	}
 }
 // Make sure to clean up the first one
 if (dt.Rows[0][3].ToString() == "OK") {
 	dt.Rows.Remove(dt.Rows[0]);
 }
 ```

```csharp
 while (dt.Rows.Count != 0) {
 	dt.Rows.Remove(dt.Rows[0]);
 }
 ```

###Sort DataTable
                        DataView dv = dt.DefaultView;
 		dv.Sort = "Name DESC";
 		dt = dv.ToTable();
 ```



