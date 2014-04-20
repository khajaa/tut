
##Insert Update Delete

###Insert
Use single quote.

%%%example:%%%
INSERT INTO PERSON (ssn, address, phone, name) VALUES (111223333, '111 Hopper st NY NY 11111', '212-222-2222', 'Jon Doe');

%%%Fix date%%%
-use to_date aggrigate function.

INSERT INTO SERVICE (workcode, workdate, workhours, reg_num) VALUES ('ABC00001', to_date('2004-10-11', 'yyyy/mm/dd'), 10, 987654321);

###Update

###Delete



