
##Android - Button

###ImageButton
Set a xml file to switch the image when it's pressed

```java
 ```
Set this xml in src attribute instead of the image file

mybutton.xml
```java
 <selector xmlns:android="http://schemas.android.com/apk/res/android">
     <item android:drawable="@drawable/button_normal" /> <!-- default -->
     <item android:state_pressed="true"
           android:drawable="@drawable/button_pressed" /> <!-- pressed -->
     <item android:state_focused="true"
           android:drawable="@drawable/button_focused" /> <!-- focused -->
 </selector>
 ```


