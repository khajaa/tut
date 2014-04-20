
##Popup Window

###PopupMain.mxml
```flex
 <mx:Application xmlns:mx="http://www.adobe.com/2006/mxml" layout="absolute">
 	 <mx:Script>
         <![CDATA[
         import mx.managers.PopUpManager;
         private var mMyPop:MyPop;
         function popupme():void {
         	mMyPop = MyPop(PopUpManager.createPopUp(this, MyPop, true));
         	mMyPop.lblMessage.text = "Hello child's element";
         	PopUpManager.centerPopUp(mMyPop);
         }
 		]]>
 	</mx:Script>
 	<mx:Panel x="0" y="0" width="100%" height="100%" layout="absolute">
 		<mx:Button x="79.5" y="94" label="Popup Main" id="btnPopup" click="popupme()"/>
 	</mx:Panel>
 	
 </mx:Application>
 ```
###MyPop.mxml
```flex
 <mx:TitleWindow xmlns:mx="http://www.adobe.com/2006/mxml" layout="absolute" width="238" 
 	height="170" title="hello" horizontalAlign="center" 
 	verticalAlign="middle"
 	 showCloseButton="true" close="closeme()">
 	<mx:Script>
 		<![CDATA[
 			import mx.managers.PopUpManager;
 			function closeme() : void{
                 PopUpManager.removePopUp(this);
 			}
 		]]>
 	</mx:Script>
 
 		<mx:Label x="10" y="20" text="(message)" id="lblMessage"/>
 		<mx:Button x="46" y="46" label="Close" id="btnClose" click="closeme()"/>
 </mx:TitleWindow>
 ```



