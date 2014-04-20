
##Basic Authentication

###Basic Authentication example
```php
   $_SERVER["PHP_AUTH_USER"] != "kiichi" ||
   $_SERVER["PHP_AUTH_PW"] != "kiichi123") {
    header("WWW-Authenticate: Basic realm=\"Restricted Area\"");
    header('HTTP/1.0 401 Unauthorized');
    echo "Page Error";
    exit;
 }
 ```


