
##Application Parameters

###URL
```flex
 ```
```flex
 ```
-queryString- String, this contains the entire query-string (url-encoded) name-value pairs.
-url- String, this returns the complete URL of the wrapper page with query-string.

###List all parameters
```flex
    ta1.text += i + ":" + Application.application.parameters[i] + "\n";
 }
 ```
###Example
```flex
 <mx:Application xmlns:mx="http://www.adobe.com/2006/mxml" layout="absolute"
     applicationComplete="initApp()">
     
   <mx:Label text=
 "Will run the app deployed at http://{serverURL}:{port}/MyGreatApp.html" />
   <mx:Script>
       <![CDATA[
           [Bindable]
           var serverURL:String;
           
           [Bindable]
           var port:String;
           
           function initApp():void{
               serverURL=Application.application.parameters.serverURL;
               port=Application.application.parameters.port
           }
       ]]>
   </mx:Script>
 </mx:Application>
 ```


