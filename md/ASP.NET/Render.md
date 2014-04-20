
##Render

###Capture rendered HTML snapshot
For example, capture whole datagrid's source
```aspx-cs
 StringWriter sw = new StringWriter(sb);
 HtmlTextWriter tw = new HtmlTextWriter(sw);
 DataGrid1.RenderControl(tw);
 // sb has a snapshot of datagrid now. You can do whatever you want. 
 // Maybe Send email, insert into db, write on a file, generate a pdf, etc...
 Response.Write(Server.HtmlEncode(sb.ToString()));
 ```


