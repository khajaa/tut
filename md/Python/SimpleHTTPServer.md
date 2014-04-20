
##SimpleHTTPServer

###Start HTTP Server
```python
 ```
###Start CGI
```python
 http://localhost/mycgi.py
 ```
###Customize

```python
 import SimpleHTTPServer
 PORT = 80
 IP = ''
 def sayHello():
     return 'Hello'
 
 class CustomHandler(SimpleHTTPServer.SimpleHTTPRequestHandler):
     def do_GET(self):
         if self.path=='/hello':
             self.send_response(200)
             self.send_header('Content-type','text/html')
             self.end_headers()
             self.wfile.write(sayHello())
             return
         else:
             SimpleHTTPServer.SimpleHTTPRequestHandler.do_GET(self) #dir listing
 
 httpd = SocketServer.ThreadingTCPServer((IP, PORT),CustomHandler)
 
 print 'Port=',PORT
 httpd.serve_forever()
 ```


