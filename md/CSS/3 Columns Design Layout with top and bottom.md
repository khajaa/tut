
##3 Columns Design Layout with top and bottom

###3 Columns Design


###Html Structure
```css
 <link rel="stylesheet" type="text/css" media="screen" href="all.css"/>
 <body>
 <div id="contents">
 	<div id="top">
 	</div>
 	<div id="middle">
 		<div id="left">
 		</div>
 		<div id="center">
 		</div>
 		<div id="right">
 		</div>
 	</div>
 	<div id="bottom">
 	</div>
 </div>
 </body>
 </html>
 ```
###CSS
```css
 	background-color:gray;
 	text-align:center;
 }
 
 #all {
 	width:650px;
 	margin-right:auto;
 	margin-left:auto;
 	margin-top:10px;
 	padding:0px;
 	text-align:left;
 	background:black;
 }
 
 #bottom{
 	clear:both;
 	background:yellow;
 	text-align:center;
 }
 
 #top{
 	background:white;
 }
 
 #middle {
 	float:left;
 }
 
 #left {
 	width:175px;
 	padding:0px;
 	float:left;
 	background:green;
 }
 
 #center {
 	width:300px;
 	padding:0px;
 	float:left;
 	background:red;
 }
 
 #right {
 	width:175px;
 	padding:0px;
 	float:left;
 	background:blue;
 }
 ```

###Note

-After you specify ''float:left'', you have to reset float attribute ''clear:both'' for the bottom. Otherwise the blocks will be messy.
-''Do not use margin with float or padding!'' It will corrupt your design between IE and Firefox!
-Using border can destroy your design too. If you need border for out side to surround all boxes, for example, just create another outer div tag and move some attributes from all div tag.







