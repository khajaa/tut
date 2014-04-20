
##CSV

###Reading CSV File
```python
 
 # reader = csv.reader(open("data.csv"))
 reader = csv.DictReader(open("data.csv"))
 headerline = reader.next()
 for row in reader:
     print row

###Write row
```python
 writer.writerow([1,2,3,4,5])
 ```
###Write
```python
 writer = csv.writer(open("some.csv", "wb"))
 writer.writerows(someiterable)
 ```
###Writing CSV from Dictionary
```python
 output = csv.DictWriter(fou, delimiter='\t', fieldnames=fieldnames)
 for item in d:
   output.writerow(item)

###Writing CSV from Dictionary in order
```python
 ordered_fieldnames = OrderedDict([('field1',None),('field2',None)])
 fou = open("data.csv","wb")
 with open(outfile,'wb') as fou:
     dw = csv.DictWriter(fou, delimiter='\t', fieldnames=ordered_fieldnames)
     dw.writeheader()

http://www.doughellmann.com/PyMOTW/csv/
http://docs.python.org/release/2.5.2/lib/csv-examples.html



