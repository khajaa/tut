
##Django - Amazon S3

###Setup
1. download zip http://code.welldev.org/django-storages/downloads/ 
2. run python setup.py install
3. cd examples/s3project
4. go to http://aws.amazon.com/
```python
 ```
```python
 DEFAULT_FILE_STORAGE = 'backends.s3.S3Storage'
 from S3 import CallingFormat
 AWS_CALLING_FORMAT = CallingFormat.SUBDOMAIN
 AWS_HEADERS = { 
    'Expires': 'Thu, 15 Apr 2010 20:00:00 GMT', # see http://developer.yahoo.com/performance/rules.html#expires
    'Cache-Control': 'max-age=86400',
    }   

```python
 AWS_ACCESS_KEY_ID=''
 AWS_SECRET_ACCESS_KEY=''
 AWS_STORAGE_BUCKET_NAME='kiichi-test'
 ```
6. Then create a kiichi-test in root. Use firefox plugin for s3 browser
7. comment out some garbage in the model. like models.py line 10 is like test code
8. start shell 
```python
 ```
```python
 from django.core.files.base import ContentFile
 from django.core.cache import cache
 #from models import MyStorage
 ```
```python
 file = default_storage.open('test.txt', 'w')
 file.write('hello world')
 file.close()
 ```
```python
 file = default_storage.open('storage_test', 'r')
 file.read()
 file.close()
 ```

###Sample URL
```python
 ```

###Tips
```python
 ```
###References
http://code.welldev.org/django-storages/wiki/S3Storage





