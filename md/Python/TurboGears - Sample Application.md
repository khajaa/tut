
##TurboGears - Sample Application

###Download


###Create project called tgtest
```python
 ```

###Check Test Page
```python
 ```
###Admin Site - ToolBox
```python
 ```
```python
 ```
###dev.cfg
```python
 ```

###Changing model.py
```python
 	class sqlmeta:
 		table = "AddressBook"
 	firstname = UnicodeCol()
 	lastname = UnicodeCol()
 	phone = UnicodeCol()
 	address = UnicodeCol()
 	mod_date = DateTimeCol(default=datetime.now())
 ```
###Creating DB
```python
 ```
You can also drop
```python
 ```
###Testing DB
```python
 ```
```python
 hub.commit()
 >>> obj.id
 1
 >>> obj.firstname
 u'Jon'
 >>> obj.lastname
 u'Doe'
 ```

###controllers.py
```python
 import cherrypy
 import turbogears
 from turbogears import controllers, expose, validate, redirect
 from turbogears import identity
 from AddressBook import json
 from datetime import datetime
 import model
 
 log = logging.getLogger("AddressBook.controllers")
 
 class AddressBook:
 	@expose(template="AddressBook.templates.index")
 	def index(self):
 		items = model.AddressBook.select()
 		return dict(items=items)
 
 	@expose(template="AddressBook.templates.detail")
 	def detail(self,abid):
 		detail_data = model.AddressBook.get(abid)
 		return dict(detail_data=detail_data)
 
 
 	@expose(template="AddressBook.templates.edit")
 	def edit(self,abid):
 		detail_data = model.AddressBook.get(abid)
 		return dict(detail_data=detail_data)
 
 	@expose()
 	def new(self,firstname,lastname,phone,address):
 		obj = model.AddressBook(firstname=firstname,lastname=lastname,phone=lastname,address=address, mod_date=datetime.now())
 		turbogears.flash("1 item was added.")
 		raise cherrypy.HTTPRedirect('/AddressBook/')
 
 	@expose()
 	def update(self,abid,firstname,lastname,phone,address):
 		obj = model.AddressBook.get(abid)
 		obj.firstname = firstname
 		obj.lastname = lastname
 		obj.phone = phone
 		obj.address = address
 		obj.mod_date = datetime.now()
 		turbogears.flash("1 item was updated.")
 		raise cherrypy.HTTPRedirect('/AddressBook/edit?abid='+str(abid))
 
 class Root(controllers.RootController):
 	AddressBook = AddressBook() # this line adds url /AddressBook/ is abailable now
 	@expose(template="AddressBook.templates.welcome")
 	def index(self):
 		return "Hello"
 ```

###templates/index.kid
```python
 <html xmlns="http://www.w3.org/1999/xhtml" xmlns:py="http://purl.org/kid/ns#"
 	py:extends="'master.kid'">
 	<head>
 		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" py:replace="''"/>
 		<title>AddressBook - Index</title>
 	</head>
 	<body>
 		<div id="main_content">
 			<form action="new" method="post">
 				<table>
 					<tr><td>FirstName</td><td><input type="text" name="firstname" /></td></tr>
 					<tr><td>LastName</td><td><input type="text" name="lastname" /></td></tr>
 					<tr><td>Phone</td><td><input type="text" name="phone" /></td></tr>
 					<tr><td>Address</td><td><input type="text" name="address" /></td></tr>
 					<tr><td colspan="2"><input type="submit" value="Add" /></td></tr>
 				</table>
 			</form>
 			<hr />
 
 			<h2>Address Book</h2>
 			<ol>
 				<li py:for="item in items">
 				<a href="/AddressBook/detail?abid=${item.id}">${item.firstname} ${item.lastname}</a> - ${item.phone} (<a href="/AddressBook/edit?abid=${item.id}">edit</a>)
 				</li>
 			</ol>
 		</div>
 	</body>
 </html>
 ```
###templates/detail.kid
```python
 <html xmlns="http://www.w3.org/1999/xhtml" xmlns:py="http://purl.org/kid/ns#"
 	py:extends="'master.kid'">
 	<head>
 		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" py:replace="''"/>
 		<title>AddressBook - Detail</title>
 	</head>
 	<body>
 		<div id="main_content">
 			<a href="/AddressBook/">Go Back</a>
 			<table>
 				<tr><td>ID</td><td><span py:content="detail_data.id"></span></td></tr>
 				<tr><td>FirstName</td><td><span py:content="detail_data.firstname"></span></td></tr>
 				<tr><td>LastName</td><td><span py:content="detail_data.lastname"></span></td></tr>
 				<tr><td>Phone</td><td><span py:content="detail_data.phone"></span></td></tr>
 				<tr><td>Address</td><td><span py:content="detail_data.address"></span></td></tr>
 				<tr><td>Date</td><td><span py:content="detail_data.mod_date"></span></td></tr>
 			</table>
 		</div>
 	</body>
 </html>
 ```
###templates/edit.kid
```python
 <html xmlns="http://www.w3.org/1999/xhtml" xmlns:py="http://purl.org/kid/ns#"
 	py:extends="'master.kid'">
 	<head>
 		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" py:replace="''"/>
 		<title>AddressBook - Detail</title>
 	</head>
 	<body>
 		<div id="main_content">
 			<a href="/AddressBook/">Go Back</a>
 			<form action="/AddressBook/update?abid=${detail_data.id}/" method="post">
 			<table>
 				<tr><td>ID</td><td><span py:content="detail_data.id"></span><input type="hidden" name="abid" value="${detail_data.id}" /></td></tr>
 				<tr><td>FirstName</td><td><input type="text" name="firstname" value="${detail_data.firstname}" /></td></tr>
 				<tr><td>LastName</td><td><input type="text" name="lastname" value="${detail_data.lastname}" /></td></tr>
 				<tr><td>Phone</td><td><input type="text" name="phone" value="${detail_data.phone}" /></td></tr>
 				<tr><td>Address</td><td><input type="text" name="address" value="${detail_data.address}" /></td></tr>
 				<tr><td>Date</td><td><span py:content="detail_data.mod_date"></span></td></tr>
 				<tr><td colspan="2"><input type="submit" value="Update" /></td></tr>
 			</table>
 		</form>
 		</div>
 	</body>
 </html>
 ```
###Test 
```python
 ```

--------------------------------

--------------------------------






