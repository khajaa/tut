
##Android - Map

###Steps

+Add Google API 2.3.3 from File>Project Structure>Modules. Set Module SDK too.
+Keystore
At
```java
 ```
```java
 ```
Copy and paste the MD5 hash in
http://code.google.com/android/maps-api-signup.html

Manifest

```java
 package="com.example.package.name">
 ...
 <application android:name="MyApplication" >
   <uses-library android:name="com.google.android.maps" />
 ...
 </application>
 <uses-permission android:name="android.permission.INTERNET" />
 <uses-permission android:name="android.permission.ACCESS_FINE_LOCATION" />
 ```


Adding Map Component
```java
 android:layout_width="fill_parent"
 android:layout_height="fill_parent"
 android:enabled="true"
 android:clickable="true"
 android:apiKey="example_Maps_ApiKey_String"
 />
 ```

Activity
```java
     MapView mMapView;
     MapController mMapController;
     public void onCreate(Bundle savedInstanceState) {
         super.onCreate(savedInstanceState);
         setContentView(R.layout.my_map);
 
         mMapView = (MapView) findViewById(R.id.my_mapview);
         mMapView.setBuiltInZoomControls(true);
 
 
         mMapController = mMapView.getController();
 
 
         GeoPoint pt = new GeoPoint(
                 (int) (42.03322 * 1E6),
                 (int) (-73.2313 * 1E6));
 
         mMapController.animateTo(pt);
         mMapController.setZoom(5);
 
 
 
         Drawable drawable = this.getResources().getDrawable(R.drawable.ic_launcher);
         drawable.setBounds(0, 0, drawable.getIntrinsicWidth(),drawable.getIntrinsicHeight());
         MyItemizedOverlay overlay = new MyItemizedOverlay(drawable);
         overlay.AddItem(pt);
         overlay.AddItem(pt);
         overlay.AddItem(pt);
         overlay.AddItem(pt);
 
         mMapView.getOverlays().add(overlay);
 
 
         mMapView.invalidate();
 
         
         Log.v("mylog", "map");
     }
 
     // Required Method
     @Override
     protected boolean isRouteDisplayed() {
         return false;
     }
 }
 
 ```
ItemizedOverlay

```java
     ArrayList<OverlayItem> mList;
     public MyItemizedOverlay(Drawable defaultMarker) {
         // Set the bounds before drawing
         //defaultMarker.setBounds(0, 0, defaultMarker.getIntrinsicWidth(),defaultMarker.getIntrinsicHeight());
         super(defaultMarker);
         mList = new ArrayList<OverlayItem>();
         populate();
     }
     
     public void AddItem(GeoPoint pt){
         Log.v("mylog",pt.toString());
 
         OverlayItem item = new OverlayItem(pt, "", "");
         mList.add(item);
         populate();
     }
 
     @Override
     protected OverlayItem createItem(int index) {
         return mList.get(index);
     }
 
     @Override
     public int size() {
         return mList.size();
     }
 }
 
 ```




Reference
http://code.google.com/android/add-ons/google-apis/mapkey.html
http://mobiforge.com/developing/story/using-google-maps-android


```java
 ```


