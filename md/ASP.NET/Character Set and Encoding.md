
##Character Set and Encoding

###Encoding to Shift_JIS
Add this configuration in web.config
```asp.net
  <system.web>
    <globalization
        requestEncoding="Shift_JIS"
        responseEncoding="Shift_JIS" />
  </system.web>
 </configuration>
 ```
Default Encoding is UTF-8. This is useful when you pass value
from Non-UTF-8 HTML file or other server side program, such as PHP.
```asp.net
 ```
###Base64

```asp.net
 	ASCIIEncoding enc = new ASCIIEncoding();
 	return Convert.ToBase64String(enc.GetBytes(val));
 }
 ```
```asp.net
 	ASCIIEncoding enc = new ASCIIEncoding();
 	return enc.GetString(Convert.FromBase64String(val));
 }
 ```



