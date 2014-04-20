
##Opacity

###Set Opacity
        function setOpacity(obj,value) {
         obj.style.opacity = value/10;
         obj.style.filter = 'alpha(opacity=' + value*10 + ')';
        }



