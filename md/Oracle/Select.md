
##Select


###JOIN technique from other sub query
Pick all employee who has multiple addresses (has address more than 1) in New York 
```oracle
 FROM Employee emp
 INNER JOIN Profile pro ON emp.EmployeeID = pro.EmployeeID AND pro.Age > 50
 INNER JOIN (
     SELECT adr.EmployeeID A_EmployeeID, COUNT(adr.EmployeeID) AS ADDR_COUNT, addr.State
     FROM Addresses addr
     GROUP BY addr.State
     HAVING addr.State = 'NY'
 ) adcount ON A_EmployeeID = emp.EmployeeID
 ```


###SELECT - LIMIT or TOP in oracle
```oracle
 ```
###Left Join short cut
```oracle
 from emp  e, dept d
 where e.department_id = d.department_id(+);
 ```


