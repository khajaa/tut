
##MasterPage

###Dynamic MasterPage Changing at Runtime
Add this MasterPageModule.cs into your project
```asp.net
 using System.Web;
 using System.Web.UI;
 using System.Configuration;
 public class MasterPageModule : IHttpModule {
 	public void Init(HttpApplication context) {
 		context.PreRequestHandlerExecute += new EventHandler(context_PreRequestHandlerExecute);
 	}
 	void context_PreRequestHandlerExecute(object sender, EventArgs e) {
 		Page page = HttpContext.Current.CurrentHandler as Page;
 		if (page != null) {
 			page.PreInit += new EventHandler(page_PreInit);
 		}
 	}
 	void page_PreInit(object sender, EventArgs e) {
 		Page page = (Page)sender;
 		if (page != null) {
 			page.MasterPageFile = "~/" + ConfigurationManager.AppSettings["MasterPage"];
 		}
 	}
 	public void Dispose() {
 	}
 }
 
 ```
```asp.net
 	<httpModules>
 		<add name="MyMasterPageModule" type="MasterPageModule"/>
 	</httpModules>
 </system.web>
 ```
Add configuration
```asp.net
 	<add key="MasterPage" value="MasterPage.master"/>
 </appSettings>
 
 
 ```
http://www.odetocode.com/Articles/450.aspx




