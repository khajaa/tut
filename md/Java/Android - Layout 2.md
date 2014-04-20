
##Android - Layout

###Fill something in the middle

Give lower priority using layout_weight="1"


```java
               android:orientation="horizontal"
               android:layout_width="fill_parent"
               android:layout_height="wrap_content">
     <TextView
             android:layout_width="wrap_content"
             android:layout_height="wrap_content"
             android:text="Filter:"
             />
     <EditText      android:id="@+id/filterTextSSID"
                    android:layout_width="fill_parent"
                    android:layout_weight="1"
                    android:layout_height="wrap_content"
                    android:text=""/>
     <Button
             android:clickable="true"
             android:text="Done"
             android:layout_width="wrap_content"
             android:layout_height="wrap_content"
             android:id="@+id/doneFilterButton"
             />
 </LinearLayout>
 ```

###Width with Percentage

    <LinearLayout
    android:layout_width="fill_parent" 
    android:layout_height="wrap_content"
    android:weightSum="1.0" >
        <Button
            android:text="left" 
            android:layout_width="fill_parent" 
            android:layout_height="wrap_content" 
            android:layout_weight=".70" /> 
        <Button
            android:text="right" 
            android:layout_width="fill_parent" 
            android:layout_height="wrap_content" 
            android:layout_weight=".30" />
    </LinearLayout>




