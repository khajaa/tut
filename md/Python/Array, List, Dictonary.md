
##Array, List, Dictonary

###Find an element in List
```python
 if "aaa" in myList:
     print "aaa is in myList"

###Dictionary (Associative Array) Examples
Creating Dictionary
```python
 ```
Get Value
```python
 apple
 >>> print dict['word5']
 Traceback (most recent call last):
   File "<stdin>", line 1, in ?
 KeyError: 'word5'
 ```

Check the key is existing or not
```python
 True
 >>> dict.has_key('word4')
 False
 ```
Set Value
```python
 >>> print dict
 {'word1': 'strawberry', 'word3': 'orange', 'word2': 'banana'}
 ```

Loop
```python
 for key in myDict.keys():
       print myDict[key]

###Set
Set is used to remove duplication
```python
 new_list = list(Set(old_list))
 ```
```python
 myset.add('a')
 myset.add('a')
 myset.add('b')
 ```
This set contains only a and b




