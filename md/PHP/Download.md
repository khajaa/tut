
##Download

###Download Script
```php
 header ('Content-type: Application/Octet-stream');
 header ('Content-Disposition: attachment; filename="hello.txt"');
 foreach (file("../data/requests.xyz") as $line) {
         print $line;
 }
 ?>
 ```



