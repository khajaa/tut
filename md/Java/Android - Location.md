
##Android - Location

###Example of getting location
```java
 // ADD THIS IN MANIFESTO
 //<manifest ... >
 //        <uses-permission android:name="android.permission.ACCESS_FINE_LOCATION" />
 //        ...
 //        </manifest>
 
 
 // DEBUG METHOD
 //Launch your application in the Android emulator and open a terminal/console in your SDK's /tools directory.
 //Connect to the emulator console:
 //telnet localhost <console-port>
 //Send the location data:
 //geo fix to send a fixed geo-location.
 //This command accepts a longitude and latitude in decimal degrees, and an optional altitude in meters. For example:
 //  geo fix -121.45356 46.51119 4392
 //  geo nmea to send an NMEA 0183 sentence.
 //This command accepts a single NMEA sentence of type '$GPGGA' (fix data) or '$GPRMC' (transit data). For example:
 //  geo nmea $GPRMC,081836,A,3751.65,S,14507.36,E,000.0,360.0,130998,011.3,E*62
 
 //geo fix -121.45356 46.51119 4392
 //geo fix -121.45356 46.999 4392
 //geo fix -120.45983 47.999 4392
 //geo fix -119.22956 42.229 4392
 
 public class RecordActivity extends Activity {
     
     
     
 
 
     public void onCreate(Bundle savedInstanceState) {
         super.onCreate(savedInstanceState);
         setContentView(R.layout.record);
 
 
 
         final LocationManager mLocationManager = (LocationManager)this.getSystemService(Context.LOCATION_SERVICE);
         final LocationListener mLocationListener = new LocationListener() {
             @Override
             public void onLocationChanged(Location location) {
                 Log.v("my","onLocationChanged");
                 updateLocationLabel(location);
 
                 //makeUseOfNewLocation(location);
             }
 
             @Override
             public void onStatusChanged(String s, int i, Bundle bundle) {
                 Log.v("my","onStatusChanged");
             }
 
             @Override
             public void onProviderEnabled(String s) {
                 Log.v("my","onProviderEnabled");
             }
 
             @Override
             public void onProviderDisabled(String s) {
                 Log.v("my","onProviderDisabled");
             }
         } ;
         mLocationManager.requestLocationUpdates(LocationManager.GPS_PROVIDER,0,0,mLocationListener);
         Location lastKnownLocation = mLocationManager.getLastKnownLocation(LocationManager.GPS_PROVIDER);
         updateLocationLabel(lastKnownLocation);
 
         final Button btnRec = (Button)this.findViewById(R.id.btnRec);
         btnRec.setOnClickListener(new View.OnClickListener() {
             @Override
             public void onClick(View view) {
                 // record shit
             }
         });
         
     }
     
     public void updateLocationLabel(Location location){
         TextView txtLat = (TextView)findViewById(R.id.txtLat);
         TextView txtLng = (TextView)findViewById(R.id.txtLng);
         TextView txtAlt = (TextView)findViewById(R.id.txtAlt);
 
         Log.v("my","lat = " + location.getLatitude());
 
         txtLat.setText("Lat: " + String.format("%.6f",location.getLatitude()));
         txtLng.setText("Lng: " + String.format("%.6f",location.getLongitude()));
         txtAlt.setText("Alt: " + String.format("%.6f",location.getAltitude()));
     }
 }
 
 ```



