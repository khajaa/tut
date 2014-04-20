
##Sequence  Auto-increment

###Introduction
In oracle, auto increment function is separated from table schema, and it's called sequence.
###Create Sequence
    CREATE SEQUENCE mytest_seq
    MINVALUE 1
    START WITH 1
    INCREMENT BY 1
    CACHE 20;

If you are using Oracle 10g, Express Edition, you can go Create->Sequence

###Using Sequence - Insert auto-increment number
```oracle
 ```





