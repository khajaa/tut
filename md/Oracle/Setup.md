
##Setup

###Install Server
Download Oracle8 for practice since it is only one CD-ROM.
This is my configuration as an example
```oracle
 sid: kiichi
 account / pass: system / manager
 account / pass: sys / change_on_install
 ```

###Install Client (Remote Machine)
Download Oracle9i-Lite(Only 300MB).

-Install
++Choose ''Custom'' Install
++Select Oracle Net 9, SQL Plus, and JDBC
++After Instlattion start ''Oracle Net Manager''
++Click ''Service Naming'' then click ''+'' button
++Enter Net Service Name, Server's computer name, and Service Name.
Usually, the last one is global database when you setup server. (e.g. kiichi.zerogc)
++Test the connection
This is example of after configuration

++Don't forget save the configuration! File>Save
++Finally, start up SQL Plus and try to connect.




