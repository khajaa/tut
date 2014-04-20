
##iPhone - Website

###Meta tag settings
```objective-c
 <meta name="viewport" content="width=320" />
 ```

###Detects iPhone

```objective-c
 var deviceAgent = navigator.userAgent.toLowerCase();
 var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);
 if (agentID) {
        // do something special 
 }
 });
 ```


