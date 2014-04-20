
##vnc

###Config for FC4
Start vncserver for screen 1
```linux
 ```

edit ~/.vnc/xstartup
Uncomment lines about xstartup and comment out lines about xterm
It should be looks like this
```linux
 
 # Uncomment the following two lines for normal desktop:
 unset SESSION_MANAGER
 exec /etc/X11/xinit/xinitrc
 
 [ -x /etc/vnc/xstartup ] && exec /etc/vnc/xstartup
 [ -r $HOME/.Xresources ] && xrdb $HOME/.Xresources
 xsetroot -solid grey
 #vncconfig -iconic &
 #xterm -geometry 80x24+10+10 -ls -title "$VNCDESKTOP Desktop" &
 #twm &
 ```
restart vncserver
```linux
 vncserver :1
 ```
In system-config-securitylevel
makesure you add 5901:tcp
:Note|vnc uses ports which is associated with the screen number starting from 5900

In windows or mac, test like this
```linux
 ```


###Config for FC2 - Basics
-vncviewer
-vncserver

vncserver provides console level service. You can start
desktop like
```linux
 ```
So maybe, you should set linux run level at 3, and only when you need,
you should start up the desktop from remote.

check start up configuration
```linux
 ```
```linux
 ```

###Creat a password file
```linux
 ```
###With X
to start vnc with x service use
```linux
 ```



