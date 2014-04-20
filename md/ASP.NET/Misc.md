
##Misc

###Keep your web project clean
Click on the solution and you can save the sln in the different location.
If you prefer to put business object and website within one folder like:
```asp.net
 /MyProject/BO/
 /MyProject/Test/
 /MyProject/MyProject.sln
 ```
Just Create Empty Solution, then save the sln first, then create website and other project stuff

###How to call your method when you bind
+Create a protected method, for example
```asp.net
     // ...
+Call your method like
```asp.net
 ```
###Render member variable
Assume you declare and assign a value for
```asp.net
 ```
And you can refere in .aspx page as
```asp.net
 ```
```asp.net
 ```
-Transfer - fast but URL stays same, works only in the same server
-Response - one more extra round trip but completly goes to another url, even out side of this server

###Dll update problem
If Reference (dll) does not update when you include from other project, change
reference order from
```asp.net
 ```

###Add project & Reference
When you add a project, user "Project" tab to add a reference.
This automatically take primary output from other project.




###Designer Error
When you inserting cshapr code in aspx page, you should use single quote to surround <% %> tag.
For example
```asp.net
 System.Configuration.ConfigurationSettings.AppSettings["siteType"] + ".jpg"); %>'>
 ```
Otherwise you can not see designer view on this page.

###Redirect Script
Create Default.aspx page
```asp.net
 <% Response.Redirect("flash/splash.html"); %>
 ```
###Login.aspx Namespace Bug
When you deploy programs on server, iis throw error for Login.aspx.
You have to use different namespace because it gets conflicted with Login component's class name.

In Login.aspx, 
```asp.net
 ```
And in Login.aspx.cs
```asp.net
 ...
 }
 ```
### Validation of viewstate MAC failed Error message
A way to overcome the problem is to set in web.config
```asp.net
 ```



