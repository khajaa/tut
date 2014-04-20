
##MySQL

###Install
http://sourceforge.net/projects/mysql-python

or do easy_install
```python
 ```
###Example
```python
 con = MySQLdb.connect (user='root', passwd='') 
 #con = MySQLdb.connect(host = "148.4.110.9", user = "root", passwd = "", db = "test")
 cur = con.cursor ()
 #cur.execute ('SELECT * FROM mysql.user')
 cur.execute ('SELECT * FROM test.testtbl')
 res = cur.fetchall ()
 print res
 ```


