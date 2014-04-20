

###YUI



###Download
```javascript
 ```
###Calendar Example
Description goes here

###Slider Example 1
```javascript
    <script src = "scripts/yui/yahoo.js" ></script> 
    <script src = "scripts/yui/dom.js" ></script> 
    <script src = "scripts/yui/event.js" ></script> 
    <script src = "scripts/yui/dragdrop.js" ></script> 
    <script src = "scripts/yui/slider.js" ></script> 
    <script language="javascript">
    var slider; 
    function sliderInit() { 
       slider = YAHOO.widget.Slider.getHorizSlider("sliderbg", "sliderthumb", 0, 100); 
       slider.onChange = function(newVal) { listenerUpdate(newVal, 'ctl00_ContentPlaceHolder1_tbProgress'); };   
    } 
    function listenerUpdate(newVal, targetId) {
     document.getElementById(targetId).value=newVal;
    }
    sliderInit();
    </script>
    <!-- Slider Component Initialization End -->

```javascript
 <div id="sliderthumb">
 <img id="sliderthumbimg" src="images/handle.png"/></div>
 </div>
 ```
###Slider Exmaple2 - in GridView
Assume we included all js files in the previous example
```javascript
 var slider2; 
 function sliderInit2() { 
    slider2 = YAHOO.widget.Slider.getHorizSlider("sliderbg2", "sliderthumb2", 0, 100); 
    slider2.onChange = function(newVal) { listenerUpdate( newVal, 
 'ctl00_ContentPlaceHolder1_gvItems_ctl0<%=(gvItems.EditIndex+2).ToString() %>_tbEditProgress'); };                       
 } 
 function listenerUpdate2(newVal, targetId) {
 	document.getElementById(targetId).value=newVal;
 }
 sliderInit2();
 slider2.setValue(<%# Eval("Progress") %>);
 </script>
 ```
```javascript
 <div id="sliderthumb2"><img id="sliderthumbimg2" src="images/handle.png"/>
 </div></div> 
 ```





