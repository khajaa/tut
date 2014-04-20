
##Android - GIS

###Shapefile reading
```java
 
 import android.app.Activity;
 import android.os.Bundle;
 import android.os.Environment;
 import android.util.Log;
 import com.bbn.openmap.dataAccess.shape.ShapeUtils;
 import com.bbn.openmap.layer.shape.ESRIPoly;
 import com.bbn.openmap.layer.shape.ESRIPolygonRecord;
 import com.bbn.openmap.layer.shape.ESRIRecord;
 import com.bbn.openmap.layer.shape.ShapeFile;
 
 import java.io.File;
 import java.io.IOException;
 
 public class MyActivity extends Activity
 {
 	/** Called when the activity is first created. */
 	@Override
 	public void onCreate(Bundle savedInstanceState)
 	{
 		super.onCreate(savedInstanceState);
 		setContentView(R.layout.main);
 
 		try {
 			// DONT FOREGET THIS IN MANIFEST
 			// <uses-permission android:name="android.permission.WRITE_EXTERNAL_STORAGE" />
 			File path = Environment.getExternalStorageDirectory();
 			File file = new File(path, "dropbox/OGProjects/tmp/shape/TM_WORLD_BORDERS_SIMPL-0.2.shp");
 			ShapeFile shapeFile = new ShapeFile(file);
 
 			while(true){
 
 				ESRIRecord esriRecord = shapeFile.getNextRecord();
 				if (esriRecord == null){
 					break;
 				}
 				Log.v("mylog", ShapeUtils.getStringForType(esriRecord.getShapeType()) + ": " +  esriRecord.toString() + " " + shapeFile.getFileVersion());
 				if (ShapeUtils.getStringForType(esriRecord.getShapeType()).equals("POLYGON")) {
 					ESRIPolygonRecord polyRec = (ESRIPolygonRecord)esriRecord;
 					Log.v("mylog", "Number of Polygon: " + polyRec.polygons.length);
 					for (int i=0; i<polyRec.polygons.length; i++){
 						ESRIPoly.ESRIFloatPoly poly = (ESRIPoly.ESRIFloatPoly)polyRec.polygons[i];
 						Log.v("mylog","Number of Points: " + poly.nPoints);
 						for (int j=0; j<poly.nPoints; j++) {
 							Log.v("mylog",poly.getY(j) + "," + poly.getX(j));
 						}
 					}
 				}
 			}
 
 		} catch (IOException e) {
 			e.printStackTrace();  //To change body of catch statement use File | Settings | File Templates.
 			Log.v("mylog", "ERROR  " + e.getMessage());
 		}
 	}
 }
 
 ```



