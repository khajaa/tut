
##SQL


###Copy row to another table
Assume table 1 and table 2 are identical, and table1 does not hold "identity" column which automatically increment the value.
```sql server
 INSERT INTO table1 (col1,col2,col3) SELECT col1,col2,col3 FROM table2
 ```
This is useful when you take a snapshot as a log. If you add additional column, (In this case, table1 has ''LogDate'' as extra column)
```sql server
 ```
The easiest way to copy a table is that you generate sql from one table and replace the table name, then insert as a sql.

###TOP
Use TOP to limit number of return rows
```sql server
 ```
This is important to reduce the number of the transaction

###USE
```sql server
 ```


###Transaction
```sql server
 INSERT INTO ListCar (IsActive) VALUES (1);
 SELECT IDENT_CURRENT('ListCar');
    IF @@ERROR <> 0
       BEGIN
           RAISERROR('error occured', 16, 1)
           ROLLBACK
       END
 COMMIT TRANSACTION
 ```
###Top1 of each GROUP BY
Use MAS to pickup the first one within the group
```sql server
 ```




