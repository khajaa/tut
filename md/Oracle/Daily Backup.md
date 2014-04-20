
##Daily Backup

###Mounting Another Drive
e.g.
```oracle
 mkdir /backups
 mount /dev/hdc1 /backups
 ```
change
```oracle
 ```
###Backup Script
backup.sh
```oracle
 sqlplus < /scripts/shutdown.sql
 cp -r /dbdata/* /backups/
 sqlplus < /scripts/startup.sql
 ```
shutdown.sql
```oracle
 shutdown immediate
 exit
 ```
startup.sql
```oracle
 startup
 exit
 ```
then add backup.sh in 
```oracle
 ```
Make sure you do
```oracle
 ```


