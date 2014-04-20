
##Header

###Download Dialog
```php
 header("Content-Type: application/octet-stream");
 header("Content-Disposition: attachment; filename=output.csv"); 
 ?>
 ```
###Control Browser Cache - remember when browser hit the back button
```php
 header("Pragma: private");
 header("Expires: " . date(DATE_RFC822,strtotime("+2 day")));
 ```


