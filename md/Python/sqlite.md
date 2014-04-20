
##sqlite

###sqlite

```python
 conn = sqlite3.connect('/tmp/example')
 c = conn.cursor()
 c.execute("insert into ...")
 c.execute('select * from ...')
 # fetchone returns assoc array
 #r = c.fetchone()
 #print r['name']
 for row in c:
    print row
    #print r['col_name']
 conn.commit()
 c.close()
 ```

###Create db in memory space

```python
 con = sqlite3.connect(":memory:")
 cur = con.cursor()
 cur.execute("create table TEST(num integer)")
 cur.execute("insert into TEST(num) values(300)")
 cur.execute("select * from TEST")
 for row in cur:
    print row[0]
 cur.close()
 con.close()
 ```



