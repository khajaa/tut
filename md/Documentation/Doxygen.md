
##Doxygen


###Install
Just download .zip file for windows

###Generate Default Doxyfile
```documentation
 ```
###Doxyfile
```documentation
 PROJECT_NUMBER         = 1.0
 OUTPUT_LANGUAGE        = English
 EXTRACT_ALL            = YES
 WARN_FORMAT            = "$file:$line: $text"
 INPUT                  = ../MyProject
 FILE_PATTERNS          = 
 GENERATE_LATEX         = NO
 RECURSIVE              = YES
 ```
###Processing C#
Download doxyfilter.py and save it in the same directory

This is donated by Jeff Kotula 
http://www.stack.nl/~dimitri/doxygen/helpers.html

Change this line in Doxyfile
```documentation
 ```
Make sure you install python

###Sample Project Package for C#
http://xxki.com/tutorial/attach/doxygen.zip

###Generate Documentations
Just double click doxygen.exe

###FILE_PATTERNS
If the value of the INPUT tag contains directories, you can use the 
FILE_PATTERNS tag to specify one or more wildcard pattern (like *.cpp 
and *.h) to filter out the source-files in the directories. If left 
blank the following patterns are tested: 
```documentation
 *.hpp *.h++ *.idl *.odl *.cs *.php *.php3 *.inc *.m *.mm *.py
 ```





