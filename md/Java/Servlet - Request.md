
##Servlet - Request

###Example MyTest.java
```java
 import javax.servlet.*;
 import javax.servlet.http.*;
 
 public class MyTest extends HttpServlet {
 
     public void doGet(HttpServletRequest request,
                       HttpServletResponse response)
         throws IOException, ServletException {
 	PrintWriter pw = response.getWriter();
 	pw.println(request.getParameter("val") + " - GET value in url<hr>");
     }
 
     public void doPost(HttpServletRequest request,
                       HttpServletResponse response)
         throws IOException, ServletException {
 	PrintWriter pw = response.getWriter();
 	pw.println(request.getParameter("aaa") + " - POST value in url<hr>");
     }
 }
 ```
###Form example - MyTest.html
```java
 <body>
 <form action=MyTest method=post>
 	<input type=text name=aaa />
 	<input type=submit name=TestPOST/>
 </form>
 <br>
 <a href=MyTest?val=something>Test GET</a>
 </body>
 </html>
 ```
###Sample Download




