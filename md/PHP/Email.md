
##Email

###Example1 - Send Multibyte character email
```php
 mb_language("Ja") ;
 mb_internal_encoding("EUC-JP") ; // SJIS or UTF-8
 $mailto="info@xxki.com";
 $subject="Japanese text in euc";
 $content="Japanese text in euc";
 $mailfrom="From:" .mb_encode_mimeheader("Japanese text in euc") ."<kiichi@xxki.com>";
 // mb_encode_mimeheader is not working???
 mb_send_mail($mailto,$subject,$content,$mailfrom);
 ?>
 ```
###Email Template System

```php
 $content = $body;
 if ($template != ''){
 	$content = implode(file($template));
 	foreach ($merge_arr as $key=>$val){
 		$content = str_replace($key,$val,$content);
 	}
 }
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From:".$mailfrom;
 	
 //echo $content;
 	
 // Send Email
 mail($mailto,$subject,$content,$headers);
 }
 ```

###Email Tester






