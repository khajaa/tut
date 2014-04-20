
##Security


###SQL Sanitizing
```php
 if (phpversion() >= '4.3.0') {
 	return array_map('mysql_real_escape_string', $sql);
 }
 else {
 	return array_map('mysql_escape_string', $sql);
 }
 }
 ```
This will escape
```php
 ```

###Better Method
```php
 if (get_magic_quotes_gpc()) {
 	$value = stripslashes($value);
 }
 if(version_compare(phpversion(),"4.3.0") == "-1") {
 	return mysql_escape_string($value);
 } 
 else {
 	return mysql_real_escape_string($value);
 }
 }
 ```
###Reference
http://phpsec.org/projects/guide/





