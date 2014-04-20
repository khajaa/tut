
##10g Express Edition


###Web Admin
```oracle
 ```
These two services are should be up
-OracleServiceXE
-OracleXETNSListener


###If Listener does not startup
Check tnsnames.ora file. If you change the computer name, it does not work.

###Changin Web Administrator Port Number
Check current port
```oracle
 ```
```oracle
 
 DBMS_XDB.GETHTTPPORT()
 ----------------------
                   8080


Check the port is not used or not
```oracle
 ```
Set the new port number
```oracle
 ```
```oracle
 
 PL/SQL procedure successfully completed.
 ```




