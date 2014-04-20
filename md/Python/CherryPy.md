
##CherryPy

###Install
Download latest version from
http://cherrypy.org

###Hello World
This is the easiest hello world for web application ever.
```python
 
 class HelloWorld(object):
     def index(self):
         return "Hello World!"
     index.exposed = True
 
 cherrypy.quickstart(HelloWorld())
 ```





