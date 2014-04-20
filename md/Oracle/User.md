
##User

###Creating User
Start sqlplus
```oracle
 ```
```oracle
 ```
In oracle 10g, user is created with minimal setting, so make sure to set quota
```oracle
 ```
This is preferred setting:
```oracle
 temporary tablespace temp quota unlimited on users;
 ```
:Note|In order to change the password, login first, then use ''password'' command to change your password.

See next section to setup privilege.

###Privilege
When you create user, it does not have any privilege at all.
```oracle
 grant select,insert,update,delete on mytable to kiichi;
 ```
```oracle
 ```



