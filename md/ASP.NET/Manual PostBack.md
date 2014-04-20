
##Manual PostBack

###Description
In ASP.NET, you can manually raise the event of postback via javascript by calling
```aspx-cs
 ```
:Note|You are passing name of the control. Not the id.

###Example
DoPostBack.aspx
```aspx-cs
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" >
 <head runat="server">
     <title>Manual Postback Demo</title>
 </head>
 <body>
     <form id="form1" runat="server">
     <div>
         <asp:Button ID="btnSubmit" runat="server" Text="Button" OnClick="btnSubmit_Click" />
         <asp:TextBox ID="tbTarget" runat="server">Test 123</asp:TextBox></div>               
         <hr />
         <button id="mydopostback" onclick="__doPostBack('btnSubmit','');">JS doPostBack</button>
     </form>
 </body>
 </html>
 
 ```


DoPostBack.aspx.cs
```aspx-cs
 using System.Data;
 using System.Configuration;
 using System.Collections;
 using System.Web;
 using System.Web.Security;
 using System.Web.UI;
 using System.Web.UI.WebControls;
 using System.Web.UI.WebControls.WebParts;
 using System.Web.UI.HtmlControls;
 
 public partial class DoPostBack : System.Web.UI.Page {
     protected void Page_Load(object sender, EventArgs e) {
 		Response.Write(UniqueIDWithDollars(btnSubmit) + "<HR>");
 		Response.Write(btnSubmit.Page.GetPostBackEventReference(btnSubmit) + "<HR>");
     }
 	protected void btnSubmit_Click(object sender, EventArgs e) {
 		tbTarget.Text = "Hello World";
 	}
 
 	public static string UniqueIDWithDollars(Control ctrl) {
 		string sId = ctrl.UniqueID;
 		if (sId == null) {
 			return null;
 		}
 		if (sId.IndexOf(':') >= 0) {
 			return sId.Replace(':', '$');
 		}
 		return sId;
 	}
 }
 
 ```



