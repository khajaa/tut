
##Security

###Strip malicious tags from HTML text

```aspx-cs
 ```
###Sanitizing in ASP.NET - User try to inject some html codes
put 
```aspx-cs
 ```

```aspx-cs
 ```
This encoding does not encode single quote (apostrophe) so combine Replace method

Encoding
```aspx-cs
 ```
```aspx-cs
 ```
###Encoding
Add System.Web.dll into your reference and
```aspx-cs
 HashPasswordForStoringInConfigFile(str, "md5").ToLower();
 ```


