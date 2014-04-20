
##Lighting

###Lighting
Light 0 - 7 are available
Define these global variable
```opengl
 static GLfloat GLight0Diffuse[]  = {1.0, 1.0, 1.0, 1.0};
 static GLfloat GLight0Specular[] = {1.0, 1.0, 1.0, 1.0};
 static GLfloat GLight0Off[]      = {0.0, 0.0, 0.0, 1.0}; 
 ```
```opengl
 glShadeModel(GL_SMOOTH);
 glEnable(GL_DEPTH_TEST);
 glEnable(GL_LIGHTING);
 glLightModelfv(GL_LIGHT_MODEL_AMBIENT, GLight0Off);
 glLightModeli(GL_LIGHT_MODEL_LOCAL_VIEWER, GL_TRUE);
 glLightfv(GL_LIGHT0, GL_POSITION, GLight0Position);
 glLightfv(GL_LIGHT0, GL_DIFFUSE, GLight0Diffuse);
 glLightfv(GL_LIGHT0, GL_SPECULAR, GLight0Specular);
 glEnable(GL_LIGHT0);
 glClearColor(0.2, 0.4, 0.5, 1.0);
 }
 ```
###Lighting and Material
Create globals
```opengl
 static GLfloat GDimWhite[]       = {0.2f, 0.2f, 0.2f, 1.0f};
 static GLfloat GShininess        = 20.0;
 ```
In display function use them 
```opengl
 glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
 // Material & Lighting
 glMaterialfv(GL_FRONT, GL_DIFFUSE, GLightGreen);
 glMaterialfv(GL_FRONT, GL_SPECULAR, GDimWhite);
 glMaterialf(GL_FRONT, GL_SHININESS, GShininess);
 // Draw something here
 glutSwapBuffers();
 glFlush();
 }
 ```
###Sample Download




