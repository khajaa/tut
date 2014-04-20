
##Date and Time

###Convert date string to epoch number
```php
 ```
since ''strtotime'' function returns epoch number from string of date,
```php
 // do something here
 }
 ```
###Date Validation
```php
 list($year, $month, $day) = split('/', '2004/04/20');
 echo $year.'/'.$month.'/'.$day.'<BR>';
 if ( !@checkdate($month, $day, $year) ){
 	echo 'wrong format';
 }
 else {
 	echo 'ok';
 }
 ```




