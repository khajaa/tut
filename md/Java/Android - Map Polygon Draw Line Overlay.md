
##Android - Map Polygon Draw Line Overlay

###Polygone LIne Example

Usage Example
```java
 GeoPoint pt = new GeoPoint(
 		(int) (43.292002 * 1E6),
 		(int) (-73.292982 * 1E6));
 overlay.addPoint(pt);
 GeoPoint pt2 = new GeoPoint(
 		(int) (41.3849292 * 1E6),
 		(int) (-71.93982 * 1E6));
 overlay.addPoint(pt2);
 mMapView.getOverlays().add(overlay);
 mMapView.invalidate();
 ```

Overlay Example

```java
         public ArrayList<GeoPoint> points;
 
         public RouteMapOverlay(){
             points  = new ArrayList<GeoPoint>();
         }
 
         public void addPoint(GeoPoint point){
             points.add(point);
         }
         public void draw(Canvas canvas, MapView mapv, boolean shadow){
             super.draw(canvas, mapv, shadow);
 
             Paint mPaint = new Paint();
             mPaint.setDither(true);
             mPaint.setColor(Color.BLUE);
             mPaint.setAlpha(200);
             mPaint.setStyle(Paint.Style.FILL_AND_STROKE);
             mPaint.setStrokeJoin(Paint.Join.ROUND);
             mPaint.setStrokeCap(Paint.Cap.ROUND);
             mPaint.setStrokeWidth(2);
 
             Path path = new Path();
             Projection projection = mapv.getProjection();
 
             for (int i=0; i<points.size()-1; i++){
                 Point p1 = new Point();
                 Point p2 = new Point();
 
                 projection.toPixels((GeoPoint)points.get(i),p1);
                 projection.toPixels((GeoPoint)points.get(i+1),p2);
 
                 path.moveTo(p2.x, p2.y);
                 path.lineTo(p1.x,p1.y);
 
             }
 
             canvas.drawPath(path, mPaint);
         }
 }
 
 ```



