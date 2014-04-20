
##Select - Collapse Multiple Rows from Subquery

###Collapse multiple rows and join with comma
```sql server
 REPLACE(
     (SELECT mem.Name  AS [data()]  FROM Members mem WHERE prj.ProjectID=mem.ProjectID FOR XML PATH ('') ), 
     ' ', ', '
 ) AS ProjectMembers 
 FROM Projects prj
 ```


