
##Perspective and Reshape

###Example
Create a function 
```opengl
 glViewport(0, 0, w, h);
 glMatrixMode(GL_PROJECTION);
 glLoadIdentity();
 gluPerspective(60, (GLfloat)(w/h), 1.0, 20);
 glMatrixMode(GL_MODELVIEW);
 glLoadIdentity();
 gluLookAt(
 	-5.0, 5.0, 5.0, 
 	0.0, 0.0, 0.0, 
 	0.0, 1.0, 0.0
 );
 }
 ```
```opengl
 ```
This function will call first time too.



