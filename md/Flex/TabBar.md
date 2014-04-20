
##TabBar

###TabBar
```flex
 <mx:Application xmlns:mx="http://www.adobe.com/2006/mxml" layout="absolute">
 	<mx:TabBar x="106" y="45" width="282" height="25" dataProvider="viewstack1">
 	</mx:TabBar>
 	<mx:ViewStack x="106" y="67" id="viewstack1" width="200" height="200">
 		<mx:Panel label="test1" width="100%" height="100%">
 			<mx:Button label="Button"/>
 		</mx:Panel>
 		<mx:Panel label="test2" width="100%" height="100%">
 			<mx:CheckBox label="Checkbox"/>
 		</mx:Panel>
 		<mx:Panel label="test3" width="100%" height="100%">
 			<mx:Label text="Label" fontFamily="test"/>
 		</mx:Panel>
 		<mx:Panel label="tab1" width="345" height="205">
 		</mx:Panel>
 	</mx:ViewStack>
 </mx:Application>
 ```



