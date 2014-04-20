##Linux/Commands

###Network
```linux
 ifconfig
 ```
e.g. list all TCP listen ports
```linux
 ```
```linux
 ```
Restarting network
```linux
 ```
Check all Listening ports:
```linux
 lsof | grep LISTEN
 ```
###Switch User - and Graphic to Console
```linux
 Press <Ctrl> + <Alt> + F7 as Graphic (X)
 F1 - F7 are available
 ```
###Find something
```linux
 whereis
 find
 find / | grep target.txt
 ```
```linux
 ```

###Text search
i is ignore case
n is show line number
```linux
 ```
###dd
Dump MBR
```linux
 ```
```linux
 ```
```linux
 ```
```linux
 ```
###ln
Create Symbolic Link
```linux
 ```
In cygwin you can
```linux
 ```
```linux
 ```
Tar / gzip
compress directory
```linux
 ```
```linux
 ```
other example
```linux
 tar -xvf file.tar
 ```
Compress into tar.gz
```linux
 zip -r one.zip one
 ```
###Split and Join (cat)
split a big file into each 100 megabytes size
```linux
 ```
and it will generate xaa, xab, ...

When you join them, just like this
```linux
 ```

###Start / Stop service
```linux
 /sbin/service servicename stop
 /sbin/service servicename restart
 ```
e.g.
```linux
 ```

###Copy, Secure Copy

-SSH File Transfer
If you use ssh client from ssh.com,
just click secure file transfer icon and upload.


###cut
Cut first part which is delimited by space
```linux
 ```
Cut first 10 characters 
```linux
 ```

###Trick Example
Show all files that start with "MyFolder" and extention is .cs, remove first 3 characters, and remove spaces in the begining of the line.
```linux
 ```

