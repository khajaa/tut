
##String

###Strip (Trim white spaces)
```python
 print string.strip('   white spaces will be gone      ')
 ```
```python
 print str[0:-1] 
 # test12
 ```
###Find index of target string
```python
 pos = str.find("st")
 # if -1, string was not found
 ```
###regex
```python
 p = re.compile('[a-z]+')
 m = p.match('hello')
 m = p.search('hello123')
 print m.group()
 ```
shortcut
```python
 ma = re.search('[a-z]+','hello123')
 ```
###split
```python
 li = test.split(" ")
 print li[0]
 ```

