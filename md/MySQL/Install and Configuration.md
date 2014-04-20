
##MySQL - Install and Configuration

###Install
###Japanese Character Set Configuration in my.cnf
ujis means EUC-JP
For 4.1

```mysql
 [client] 
 # ... other setting
 default-character-set=ujis
 ```
```mysql
 [mysqld] 
 # ... other setting
 character-set-server=ujis
 #not sure about this
 collation-server = ujis_japanese_ci
 ```
```mysql
 default-character-set = ujis
 ```

In client side, 
+Make sure php.ini's default charset setting
```mysql
 ```
```mysql
 ```

:Reference|
http://www.mysql.gr.jp/frame/modules/bwiki/index.php?FAQ#content_1_54





