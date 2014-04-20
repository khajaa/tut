
##Trigger

###Format
```oracle
 {BEFORE|AFTER} {INSERT|DELETE|UPDATE} ON <table_name>
 [REFERENCING [NEW AS <new_row_name>] [OLD AS <old_row_name>]]
 [FOR EACH ROW [WHEN (<trigger_condition>)]]
 <pl/sql code>
 ```
###List triggers
```oracle
 ```
```oracle
 ```
```oracle
 ```

###:new and :old
These will be refered as new table when user update / insert in PL/SQL section.
e.g.
If you update something like,
```oracle
 SET phone = '1111111'
 WHERE id = '123';
 ```
in PL/SQL statement, you can refere old data as
```oracle
 ```
```oracle
 ```
###Example - :new
```oracle
 -- Simple Trigger Example
 -- This will catch each row update event on student table
 -- and automatically insert today's record to keep track 
 -- his/her data change history.
 ------------------------------------------------------------
 create or replace trigger last_login 
 after insert or update on student
 for each row
 begin
 INSERT INTO history 
 VALUES (:new.id, SYSDATE, 'test');
 end;
 /
 ```
###Example - output
```oracle
 -- This trigger detects that qty overflow.
 -- If the new qty is larger than 100, throw error.
 -- Make sure you did this in SQL Plus
 -- set serveroutput on
 -- This will allow update/insert, but show a warning.
 ---------------------------------------------
 create or replace trigger qty_check 
 after insert or update on inventory
 for each row
 declare
 v_max capacity.max_qty%type; -- create a variable, number
 begin
 dbms_output.enable;
 v_max := 0; -- initialize
 
 SELECT max_qty 
 INTO v_max
 FROM capacity
 WHERE id = 'storage1';
 if (:new.qty > v_max) then
 	dbms_output.put_line('Exceeded max capacity. Max qty of storage1 is ' || v_max);
 end if;
 end;
 /
 ```


###Example - exception
```oracle
 -- This trigger detects that qty overflow.
 -- If the new qty is larger than 100, throw error.
 -- Since this is exception, insert/update will be canceled.
 ---------------------------------------------
 create or replace trigger qty_check 
 after insert or update on inventory
 for each row
 declare
 qty_warning exception; 
 begin
 if (:new.qty > 100) then
 	raise qty_warning;
 end if;
 exception
 when qty_warning then
 raise_application_error(-20001, 'too much!');
 end;
 /
 ```


