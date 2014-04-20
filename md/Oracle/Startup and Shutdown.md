
##Startup and Shutdown


###Introduction
Oracle startup its database in this order
+Reading spfile
+Reading Control File
+Mounting Database
+Open Database



###Startup / Shutdown database
```oracle
 
 ```
```oracle
 ```
Read $ORACLE_HOME/dbs/spfile(INSTANCE).ora - > Control File
```oracle
 ```
Read $ORACLE_HOME/dbs/spfile(INSTANCE).ora - > Control File -> Data
This is most frequently used
```oracle
 ```

In order to shutdown,
Wait until all connecitons are gone
```oracle
 ```
Just ignore all connections and shutdown - most frequently used
```oracle
 ```
Emergency, kill all job
```oracle
 ```
###spfile and pfile
spfile is binary format and it's used to startup oracle.
In order to edit spfile, you have to export into pfile which is text format,
and after editing spfile, compile into binary file format again.
in sqlplus
```oracle
 ```
```oracle
 ```
So if you change some configuration, and oracle does not start up, edit spfile and remove suspicious lines.





