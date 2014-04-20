
##Idle and Animation

###Example of spining cube
Create an global variable for the angle
```opengl
 ```
```opengl
 glutIdleFunc(Idle); 
 ```
```opengl
 glPushMatrix(); 
 	glRotatef(GCubeAngle, 0.0, 1.0, 0.0); 
 	glutSolidCube(1.0); 
 glPopMatrix(); 
 }
 ```
```opengl
 GCubeAngle = (GCubeAngle + 0.1); 
 if(GCubeAngle > 360.0) {
 	GCubeAngle -= 360.0;
 }
 glutPostRedisplay(); // update screen
 }
 ```


