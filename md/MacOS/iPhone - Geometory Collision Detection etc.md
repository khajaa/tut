
##iPhone - Geometory Collision Detection etc

###Point vs Rect
```macos
 ```
###Rect vs Rect - contains or not
```macos
 ```
###Rect vs Rect - intersect or not
```macos
 ```
###Get Intersection of Rects
```macos
 ```
You can also check collision like this
```macos
 if (CGRectIsNull(r)){ ...
 ```
###Rect - Offset
```macos
 ```
###Rect - expand
```macos
 ```
###NSMutableArray and CGRect
```macos
 rectArray = [[NSMutableArray alloc] init];
 [rectArray addObject:[NSValue valueWithCGRect:firstRect]];
 ```
```macos
 ```



###Reference
http://developer.apple.com/documentation/graphicsimaging/reference/CGGeometry/Reference/reference.html

```macos
 Creating a Dictionary Representation From a Geometric Primitive
 
     * CGPointCreateDictionaryRepresentation
     * CGSizeCreateDictionaryRepresentation
     * CGRectCreateDictionaryRepresentation
 
 Creating a Geometric Primitive From a Dictionary Representation
 
     * CGPointMakeWithDictionaryRepresentation
     * CGSizeMakeWithDictionaryRepresentation
     * CGRectMakeWithDictionaryRepresentation
 
 Creating a Geometric Primitive From Values
 
     * CGPointMake
     * CGRectMake
     * CGSizeMake
 
 Modifying Rectangles
 
     * CGRectDivide
     * CGRectInset
     * CGRectIntegral
     * CGRectIntersection
     * CGRectOffset
     * CGRectStandardize
     * CGRectUnion
 
 Comparing Values
 
     * CGPointEqualToPoint
     * CGSizeEqualToSize
     * CGRectEqualToRect
     * CGRectIntersectsRect
 
 Checking for Membership
 
     * CGRectContainsPoint
     * CGRectContainsRect
 
 Getting Min, Mid, and Max Values
 
     * CGRectGetMinX
     * CGRectGetMinY
     * CGRectGetMidX
     * CGRectGetMidY
     * CGRectGetMaxX
     * CGRectGetMaxY
 
 Getting Height and Width
 
     * CGRectGetHeight
     * CGRectGetWidth
 
 Checking Rectangle Characteristics
 
     * CGRectIsEmpty
     * CGRectIsNull
     * CGRectIsInfinite




