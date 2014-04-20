
##DataGrid

###Create Custom itemRenderer and Bind Image depends on the value
```flex
 <mx:columns>
 	<mx:DataGridColumn headerText="Answer" dataField="answer"/>
 	<mx:DataGridColumn headerText="Correct" dataField="correct" width="60">
     <mx:itemRenderer>
 	<mx:Component>
 	    <mx:VBox horizontalAlign="center">
 		<mx:Image id="imgCorrect" source='{(data.correct==1)?"media/tick.png":"media/blank.png"}'/>
 	    </mx:VBox>
 	</mx:Component>
     </mx:itemRenderer>
 </mx:DataGridColumn>    					
 </mx:columns>
 </mx:DataGrid>	
 ```
###Handling itemClick Event
```flex
 ```
    public function dgClickHandler(event:ListEvent) : void {
   // event.columnIndex
          // event.rowIndex
          // retrieve data from the bound item
          // event.currentTarget.selectedItem.id.toString()
          // event.currentTarget.selectedItem.myval.toString()
    }







