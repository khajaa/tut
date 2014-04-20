
##Misc

###Keep your web project clean
Click on the solution and you can save the sln in the different location.
If you prefer to put business object and website within one folder like:
```aspx-cs
 /MyProject/BO/
 /MyProject/Test/
 /MyProject/MyProject.sln
 ```
Just Create Empty Solution, then save the sln first, then create website and other project stuff

###How to call your method when you bind
+Create a protected method, for example
```aspx-cs
     // ...
+Call your method like
```aspx-cs
 ```
###Render member variable
Assume you declare and assign a value for
```aspx-cs
 ```
And you can refere in .aspx page as
```aspx-cs
 ```
```aspx-cs
 ```
-Transfer - fast but URL stays same, works only in the same server
-Response - one more extra round trip but completly goes to another url, even out side of this server

###Dll update problem
If Reference (dll) does not update when you include from other project, change
reference order from
```aspx-cs
 ```

###Add project & Reference
When you add a project, user "Project" tab to add a reference.
This automatically take primary output from other project.




###Designer Error
When you inserting cshapr code in aspx page, you should use single quote to surround <% %> tag.
For example
```aspx-cs
 System.Configuration.ConfigurationSettings.AppSettings["siteType"] + ".jpg"); %>'>
 ```
Otherwise you can not see designer view on this page.

###Redirect Script
Create Default.aspx page
```aspx-cs
 <% Response.Redirect("flash/splash.html"); %>
 ```
###Login.aspx Namespace Bug
When you deploy programs on server, iis throw error for Login.aspx.
You have to use different namespace because it gets conflicted with Login component's class name.

In Login.aspx, 
```aspx-cs
 ```
And in Login.aspx.cs
```aspx-cs
 ...
 }
 ```
### Validation of viewstate MAC failed Error message
A way to overcome the problem is to set in web.config
```aspx-cs
 ```



