
##&page

###Example
Read
```java
 boolean silent = settings.getBoolean("MY_SETTING", false);
 ```
Write
```java
 SharedPreferences.Editor editor = settings.edit();
 editor.putBoolean("MY_SETTING", false);
 editor.commit();
 ```


