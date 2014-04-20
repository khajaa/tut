
##Stored Procedure

###Example
```sql server
 AS
    SELECT TOP 10 *
    FROM Test
    WHERE type = @type
 GO
 ```
You can call 
```sql server
 ```

:Note|
-In C#, you just execute as if regular select statement.
-Use comma to add arguments e.g. @arg1='Test', @arg2='Test2'


