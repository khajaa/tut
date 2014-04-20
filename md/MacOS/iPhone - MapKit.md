
##iPhone - MapKit

##Catch current user location event
In viewDidLoad

```macos
        forKeyPath:@"location"  
           options:(NSKeyValueObservingOptionNew|NSKeyValueObservingOptionOld)  
           context:NULL];


```macos
                      ofObject:(id)object  
                        change:(NSDictionary *)change  
                       context:(void *)context {  
 
    if ([self.mapView showsUserLocation]) {  
        [self moveOrZoomOrAnythingElse];
        // and of course you can use here old and new location values
    }
 }
 ```
###Coordinate (Lat/Lon) to Address (City,Zip, etc) - ReverseGeoCoordinate
  //  ReverseGeoCorderSampleViewController.h  
  #import <UIKit/UIKit.h>
  #import <MapKit/MapKit.h>
  #import <AddressBook/AddressBook.h>
  @interface ReverseGeoCorderSampleViewController : UIViewController <MKReverseGeocoderDelegate> {  
  }  
  @end

```macos
 #import "ReverseGeoCorderSampleViewController.h"
 
 @implementation ReverseGeoCorderSampleViewController
 - (void)viewDidLoad {
     [super viewDidLoad];
 
 	// Start finding a location based on lat -> lon	
 	MKCoordinateSpan span;	
 	span.latitudeDelta=0.2;
 	span.longitudeDelta=0.2;
 
 	//CLLocationCoordinate2D location=mMapView.userLocation.coordinate;	
 	CLLocationCoordinate2D location;
 	location.latitude=40.814849;
 	location.longitude=-73.622732;
 
 	MKCoordinateRegion region;
 	region.span=span;
 	region.center=location;
 	MKReverseGeocoder *geoCoder=[[MKReverseGeocoder alloc] initWithCoordinate:location];
 	geoCoder.delegate=self;
 	[geoCoder start];	
 }
 
 - (void)dealloc {
     [super dealloc];
 }
 
 #pragma mark reverseGeocoder callbacks
 - (void)reverseGeocoder:(MKReverseGeocoder *)geocoder didFailWithError:(NSError *)error{
 	NSLog(@"Reverse Geocoder Errored");
 
 }
 
 - (void)reverseGeocoder:(MKReverseGeocoder *)geocoder didFindPlacemark:(MKPlacemark *)placemark{
 	NSLog(@"Reverse Geocoder completed");
 
 	NSString *city = [placemark.addressDictionary objectForKey:(NSString*) kABPersonAddressCityKey];
 	NSString *zip = [placemark.addressDictionary objectForKey:(NSString*) kABPersonAddressZIPKey];
 	NSLog(@"%@,%@",city,zip);
 }
 @end
 ```

###Address to Coordinate
```macos
     [super viewDidLoad];
 	
 	CLLocationCoordinate2D location = [self getLocationFromAddress:@"700 Northern Blvd, Greenvale 11358"];
 	NSLog(@"%f,%f",location.latitude,location.longitude);
 }
 
 - (void)dealloc {
     [super dealloc];
 }
 
 -(CLLocationCoordinate2D) getLocationFromAddress:(NSString*) address {
     NSString *urlString = [NSString stringWithFormat:@"http://maps.google.com/maps/geo?q=%@&output=csv", 
 						   [address stringByAddingPercentEscapesUsingEncoding:NSUTF8StringEncoding]];
     NSString *locationString = [NSString stringWithContentsOfURL:[NSURL URLWithString:urlString]];
     NSArray *listItems = [locationString componentsSeparatedByString:@","];
 	
     double latitude = 0.0;
     double longitude = 0.0;
 	
     if([listItems count] >= 4 && [[listItems objectAtIndex:0] isEqualToString:@"200"]) {
         latitude = [[listItems objectAtIndex:2] doubleValue];
         longitude = [[listItems objectAtIndex:3] doubleValue];
     }
     else {
 		//Show error
 		NSLog(@"error:address not found");
     }
     CLLocationCoordinate2D location;
     location.latitude = latitude;
     location.longitude = longitude;
 	
     return location;
 }
 ```




###Quick Example - Drop Pins, Search by address, custom pin

```macos
 #import <UIKit/UIKit.h>
 #import <MapKit/MapKit.h>
 #import <MapKit/MKPinAnnotationView.h>
 #import <MapKit/MKReverseGeocoder.h>
 #import <CoreLocation/CoreLocation.h>
 #import "CustomPlaceMark.h"
 @interface MapKitTestViewController : UIViewController <MKMapViewDelegate,CLLocationManagerDelegate,UISearchBarDelegate> {
 	IBOutlet MKMapView *mMapView;	
 	MKPlacemark *mPlacemark;
 	CLLocationManager *mLocationManager;
 }
 -(IBAction)changeMapType:(id)sender;
 -(void)addPins:(float)lat lon:(float)lon;
 -(CLLocationCoordinate2D) getLocationFromAddress:(NSString*) address;
 @end
 ```


```macos
 #import "MapKitTestViewController.h"
 
 @implementation MapKitTestViewController
 - (void)viewDidLoad {
     [super viewDidLoad];
 		
 	mLocationManager=[[CLLocationManager alloc] init];
 	mLocationManager.delegate=self;
 	mLocationManager.desiredAccuracy=kCLLocationAccuracyNearestTenMeters;	
 	[mLocationManager startUpdatingLocation];
 }
 
 - (void)didReceiveMemoryWarning {
     [super didReceiveMemoryWarning];
 }
 
 - (void)viewDidUnload {}
 
 - (void)dealloc {
     [super dealloc];
 }
 
 #pragma mark  user action
 -(IBAction)changeMapType:(id)sender{
 	UISegmentedControl *seg = (UISegmentedControl*)sender;
 	if (seg.selectedSegmentIndex == 0) {
 		mMapView.mapType = MKMapTypeStandard;
 	}
 	else if (seg.selectedSegmentIndex == 1) {
 		mMapView.mapType = MKMapTypeSatellite;
 	}
 	else if (seg.selectedSegmentIndex == 2) {
 		mMapView.mapType = MKMapTypeStandard;
 	}
 }
 
 
 #pragma mark annotation callbacks
 - (MKAnnotationView *)mapView:(MKMapView *)mapView viewForAnnotation:(id <MKAnnotation>)annotation{
 	NSLog(@"This is called");
 	MKPinAnnotationView *annView=[[MKPinAnnotationView alloc] initWithAnnotation:annotation reuseIdentifier:@"customloc"];
 	[annView setPinColor:MKPinAnnotationColorPurple];
 	return annView;
 }
 
 #pragma mark location callbacks
 - (void)locationManager:(CLLocationManager *)manager didUpdateToLocation:(CLLocation *)newLocation fromLocation:(CLLocation *)oldLocation{
 	NSLog(@"location found... updating region");
 	[self addPins:newLocation.coordinate.latitude lon:newLocation.coordinate.longitude];
 }
 
 - (void)locationManager:(CLLocationManager *)manager didFailWithError:(NSError *)error{
 	NSLog(@"location not available");
 }
 
 
 #pragma mark geo functions
 -(void)addPins:(float)lat lon:(float)lon{
 	
 	CLLocationCoordinate2D location;
 	location.latitude = lat;
 	location.longitude = lon;
 	
 	// forcus around you
 	MKCoordinateRegion region;
 	region.center=location;
 	MKCoordinateSpan span;
 	span.latitudeDelta=0.005f; // this should be adjusted for high vs. low latitude - calc by cosign or sign
 	span.longitudeDelta=0.005f;
 	region.span=span;	
 	[mMapView setRegion:region animated:TRUE];	
 	
 	// boundly
 	float westLon = region.center.longitude - region.span.longitudeDelta;
 	//float eastLon = region.center.longitude + region.span.longitudeDelta;
 	//float northLat = region.center.latitude + region.span.latitudeDelta;
 	float southLat = region.center.latitude - region.span.latitudeDelta;
 	
 	///////////////////////////////////////////////////////////////////////////////////////////
 	// got current location here...
 	// then put some pins	
 	for (int i=0; i<100; i++) {
 		CLLocationCoordinate2D location;
 		
 		// random fill the screen -> this should convert to database driven coordinates
 		location.latitude=southLat + (region.span.latitudeDelta/50.0f)*(arc4random()%100);
 		location.longitude=westLon + (region.span.longitudeDelta/50.0f)*(arc4random()%100);
 		
 		// add custom place mark
 		CustomPlaceMark *placemark=[[CustomPlaceMark alloc] initWithCoordinate:location];
 		placemark.title = @"Title Here";
 		placemark.subtitle = @"Subtitle Here";
 		[mMapView addAnnotation:placemark];
 		[placemark release];
 	}
 }
 
 
 -(CLLocationCoordinate2D) getLocationFromAddress:(NSString*) address {
 	// in case of error use api key like 
 	// http://maps.google.com/maps/geo?q=%@&output=csv&key=YourGoogleMapsAPIKey
     NSString *urlString = [NSString stringWithFormat:@"http://maps.google.com/maps/geo?q=%@&output=csv", 
 								[address stringByAddingPercentEscapesUsingEncoding:NSUTF8StringEncoding]];
     NSString *locationString = [NSString stringWithContentsOfURL:[NSURL URLWithString:urlString]];
     NSArray *listItems = [locationString componentsSeparatedByString:@","];
 	
     double latitude = 0.0;
     double longitude = 0.0;
 	
     if([listItems count] >= 4 && [[listItems objectAtIndex:0] isEqualToString:@"200"]) {
         latitude = [[listItems objectAtIndex:2] doubleValue];
         longitude = [[listItems objectAtIndex:3] doubleValue];
     }
     else {
 		//Show error
 		NSLog(@"error:address not found");
 		UIAlertView *alert = [[UIAlertView alloc] initWithTitle:@"ERROR" message:@"Address not found"
 													   delegate:self cancelButtonTitle:@"OK" otherButtonTitles: nil];
 		[alert show];	
 		[alert release];		
     }
     CLLocationCoordinate2D location;
     location.latitude = latitude;
     location.longitude = longitude;
 	
     return location;
 }
 
 #pragma mark search delegate
 - (void)searchBarSearchButtonClicked:(UISearchBar *)searchBar{
 	[searchBar resignFirstResponder];
 	CLLocationCoordinate2D location2d = [self getLocationFromAddress:searchBar.text];	
 	[self addPins:location2d.latitude lon:location2d.longitude];
 }
 
 - (void)searchBarCancelButtonClicked:(UISearchBar *)searchBar{
 	[searchBar resignFirstResponder];
 }
 @end
 ```

```macos
 #import <Foundation/Foundation.h>
 #import <MapKit/MapKit.h>
 
 @interface CustomPlaceMark : NSObject<MKAnnotation> {
 	CLLocationCoordinate2D coordinate;
 	NSString *title;
 	NSString *subtitle;
 }
 @property (nonatomic, readonly) CLLocationCoordinate2D coordinate;
 @property (nonatomic, assign) NSString *title;
 @property (nonatomic, assign) NSString *subtitle;
 -(id)initWithCoordinate:(CLLocationCoordinate2D) coordinate;
 - (NSString *)subtitle;
 - (NSString *)title;
 @end
 ```

```macos
 #import "CustomPlaceMark.h"
 @implementation CustomPlaceMark
 @synthesize coordinate;
 @synthesize title;
 @synthesize subtitle;
 -(id)initWithCoordinate:(CLLocationCoordinate2D) coord{
 	coordinate=coord;
 	return self;
 }
 @end
 ```




