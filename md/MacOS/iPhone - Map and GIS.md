
##iPhone - Map and GIS


###Zip Code Data
http://www.census.gov/geo/www/gazetteer/places2k.html

http://en.wikipedia.org/wiki/Zip_code

###Caculating Distance

Obj-c
```objective-c
 float CalculateDistance(float nLat1, float nLon1, float nLat2, float nLon2 ){
 float nRadius = 6372.797; // Earth's radius in Kilometers
 // Get the difference between our two points
 // then convert the difference into radians
 
 float nDLat = DegreesToRadians(nLat2 - nLat1);
 float nDLon = DegreesToRadians(nLon2 - nLon1);
 
 // Here is the new line
 nLat1 =  DegreesToRadians(nLat1);
 nLat2 =  DegreesToRadians(nLat2);
 
 float nA = pow ( sin(nDLat/2), 2 ) + cos(nLat1) * cos(nLat2) * pow ( sin(nDLon/2), 2 );
 
 float nC = 2 * atan2( sqrt(nA), sqrt( 1 - nA ));
 float nD = nRadius * nC;
 
 return nD; // Return our calculated distance
 }
 //-------------------------------------------------------------------------------------------------------------------------------------
 float DegreesToRadians(float degrees) {return degrees * M_PI / 180;};
 //-------------------------------------------------------------------------------------------------------------------------------------
 float RadiansToDegrees(float radians) {return radians * 180/M_PI;};
 
 
 ```
Example in PHP
```objective-c
    $pi80 = M_PI / 180;
    $lat1 *= $pi80;
    $lng1 *= $pi80;
    $lat2 *= $pi80;
    $lng2 *= $pi80;
    $r = 6372.797; // mean radius of Earth in km
    $dlat = $lat2 - $lat1;
    $dlng = $lng2 - $lng1;
    $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlng / 2) * sin($dlng / 2); 
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $km = $r * $c; 
    return ($miles ? ($km * 0.621371192) : $km);
 }
 ```

Some other sample
```objective-c
 var dLat = (lat2-lat1).toRad();
 var dLon = (lon2-lon1).toRad(); 
 var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
         Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * 
         Math.sin(dLon/2) * Math.sin(dLon/2); 
 var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
 var d = R * c;
 ```

###Reference
```objective-c
 ```

```objective-c
 ```

Example in C#

```objective-c
 ```
```objective-c
 ```


