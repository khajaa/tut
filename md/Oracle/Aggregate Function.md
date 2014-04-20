
##Aggregate Function

###String
-CONCAT
```oracle
 SELECT FirstName || LastName AS FullName FROM Address
 ```
-Remove after some character
```oracle
 ```
e.g. test@test.com -> @test.com

-Length
```oracle
 ```
###Date
-to_date
```oracle
 VALUES ('ABC00001', to_date('2004-10-11', 'yyyy/mm/dd'), 10, 987654321);
 ```
```oracle
 TO_CHAR(CREATED_DATE,'YYYY-MM-DD HH24:MI:SS')
 ```
```oracle
 VALUES ('124', sysdate, 'tst');
 ```
```oracle
 ```
Calculate difference between two dates
```oracle
 ```
###Decode
```oracle
 DECODE(inventory_id,
 1,'Computer',
 2,'Network Device',
 3,'Software')
 AS InventoryType
 FROM Inventory;
 ```
This is simple if statement for column conversion




