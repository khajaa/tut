
##sqlplus


###Make sure to commit
Whenever you do change, do
```oracle
 ```
###Example1 - Oracle 10g Express Edition
If you installed Oracle 10g Express Edition, just run
```oracle
 ```
```oracle
 ```

###sqlplus setup 
First, Download Oracle Instant client

'''Method A:'''
```oracle
 ```
'''Method B:'''
+set tnsnames.ora
```oracle
 ```
```oracle
 export TNS_ADMIN
 ```
```oracle
 ```
+then
```oracle
 ```
Sample Configuration
```oracle
  (DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.1.100)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = service1)
    )
 )
 ```
:Note|If you place tnsnames.ora in same directory of sqlplus, it will read that first.

###Setting Environment Variable
```oracle
 ```
```oracle
 ```
###Change editor
```oracle
 ```
###Edit last sql command
```oracle
 ```
###Load script
```oracle
 ```
###Save Result
record all activity
```oracle
 ```
```oracle
 ```
###Checking Database is up or not
```oracle
 ```
###Links
[[Tutorial:http://www.oracle.com/technology/docs/tech/sql_plus/10102/readme_ic.htm]]
[[Download:http://www.oracle.com/technology/software/tech/oci/instantclient/htdocs/winsoft.html]]
[[orafaq:http://www.orafaq.com/faqplus.htm]]



