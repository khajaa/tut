
##Objective-C - Property

###Example from old version to 2.0
Older version
    @interface Movie : NSObject {
        NSString* title;
        NSString* studio;
        int yearReleased;
    }
    + (id)movie;
    - (NSString*)title;
    - (void)setTitle:(NSString*)aValue;
    - (NSString*)studio;
    - (void)setStudio:(NSString*)aValue;
    - (int)yearReleased;
    - (void)setYearReleased:(int)aValue;
    - (NSString*)summary;
    @end
 
 ```
    @interface Movie : NSObject {
        NSString* title;
        NSString* studio;
        NSInteger yearReleased;
    }
    + (id)movie;
    @property (copy) NSString* title;
    @property (copy) NSString* studio;
    @property (assign) NSInteger yearReleased;
    @property (readonly) NSString* summary;
    @end


###Accessing Property from other view

e.g.
-MainView.h
-SettingsView.h


+You can declare 
```objective-c
 ```
```objective-c
 ```

So that you can access MainView's property like this
```objective-c
 ```








