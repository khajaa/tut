
##Aggregate Function


###Identity (Last Inserted ID)
```sql server
 ```
This is available in transaction. Useful when you do INSERT -> SELECT -> INSERT or UPDATE other table

###Reset Identity (Autoincrement) Counter

```sql server
 ```
###ISNULL - Check if it is null then...
```sql server
 ```

###CAST and convert
```sql server
 ```
```sql server
 ```
###Date Format
System Date
```sql server
 ```
Example1: 
```sql server
 ```
Example:For MM/DD/YY
```sql server
 ```
|101|MM/DD/YYYY|
|11|YY/MM/DD|
|111|YYYY/MM/DD|
|5|MM-DD-YY|
|105|MM-DD-YYYY|
http://msdn.microsoft.com/library/default.asp?url=/library/en-us/tsqlref/ts_ca-co_2f3o.asp

Extract Only Date
```sql server
 ```
```sql server
 ```
###Date Calculation
```sql server
 WHERE datepart(ss,getDate()- LockedTime)  > 300
 ```
Use ''datepart'' or ''dateadd'' function. ss indicates seconds. So this sql means, set
Locked flag to No if LockedTime is less than 300 sec.

###String
-The second argument is where to start, the third one is the length
```sql server
 ```
-To concat, use + Operator

-TRIM - use RTRIM
```sql server
 ```
-Upper & Lower case
```sql server
 LOWER(varchar)
 ```
```sql server
 ```
```sql server
 ```
```sql server
 ```
```sql server
 ```
###char
New Line 
```sql server
 ```
```sql server
 ```

Double Quote
```sql server
 ```
Single Quote
```sql server
 ```
###Round Decimal
```sql server
 ```
This will do 2.3432223=>2.3





