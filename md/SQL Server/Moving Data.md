
##Moving Data

###Script
Schedule nightly backup on the server

Backup and Restore

```sql server
 sqlcmd -S MY_DB_SERVER -U sa -P mypassword -i "D:\DBbackup\restore.sql"
 ```
generate restore.sql

```sql server
 ```
restore.sql (example)
```sql server
 GO
 ```


###Script2

baking .sql file and import (slower)
```sql server
 sqlcmd -S DEST_DB_SERVER -U sa -P mypass -d MyDB -i "D:\DBbackup\MyDB.sql" -o "D:\DBbackup\log.txt"
 ```
###From 2000 to Express Edition
-Laptop (Express Edition)
-Remote Server (2000)

+Login to remote server with SQL server management studio
+Export to Local machine

If you do the other way around, it does not work.

###Using Microsoft SQL Server Publishing Wizard
http://www.microsoft.com/downloads/details.aspx?familyid=56E5B1C5-BF17-42E0-A410-371A838E570A&displaylang=en


###Using Publishing Wizard in 2008 or higher (ver 1.3)
1. Open Control Panel and go to Add or Remove Programs.

2. Right-click the component 'Microsoft Sql Server Database Publishing Wizard 1.3' (or 'Microsoft Sql Server Database Publishing Wizard 1.2' if this older version was installed due to (b) above), and then click Uninstall. Wait for uninstallation to finish.

3. Run SqlPubWizInstaller.exe from http://go.microsoft.com/fwlink/?LinkId=119368  to re-install 'Microsoft Sql Server Database Publishing Wizard 1.3'. You can verify that it was installed by looking in Add or Remove Programs.


```sql server
 ```



