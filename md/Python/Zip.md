
##Zip

###Example - zip directory
```python
 
 def getDirList(dir):
     fileList = []
     for roots,directories,files in os.walk(dir):
         for x in files:
             fileList.append(roots + os.sep + x)
     return fileList
    
 target = "testdir"
 zObj = zipfile.ZipFile(target + ".zip", "w")
 
 for path in getDirList(target):
 	zObj.write(path, path)
 zObj.close()
 ```


