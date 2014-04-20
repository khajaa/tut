
##String

###Functions
Faster draw
```opengl
 ```
--GLUT_BITMAP_8_BY_13 
--GLUT_BITMAP_9_BY_15 
--GLUT_BITMAP_TIMES_ROMAN_10 
--GLUT_BITMAP_TIMES_ROMAN_24 
--GLUT_BITMAP_HELVETICA_10 
--GLUT_BITMAP_HELVETICA_12 
--GLUT_BITMAP_HELVETICA_18 

Slower but easy to scale since this is vector
```opengl
 ```
--GLUT_STROKE_ROMAN 
--GLUT_STROKE_MONO_ROMAN 

###Example
To draw one char
```opengl
 ```
Create a function to draw string
```opengl
  unsigned int i;
  for (i = 0; i < strlen (s); i++)
    glutBitmapCharacter (GLUT_BITMAP_HELVETICA_10, s[i]);
 }
 ```
  glColor3f (1.0F, 1.0F, 1.0F);
  glRasterPos2f (1.0f, 1.0f);
  DrawString("TEST");



