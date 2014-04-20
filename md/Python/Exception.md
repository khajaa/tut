
##Python/Exception

###Catch all error
```python
 try:
 	os.chdir('not_exist')
 except os.error,ex:
 	print str(ex)
 ```
This is same as this 
```python
 	os.chdir('not_exist')
 except os.error:
 	print sys.exc_type
 	print sys.exc_value
 ```
Catch error more than two types of exception
```python
 try:
 	os.chdir('not_exist')
 except (IOError, os.error), ex:
 	print str(ex)
 ```




