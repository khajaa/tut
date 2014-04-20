
##Texture with GLAUX

###Caution
-You must use bmp textures which have 2^n width * height.
For example, 256 * 128. Otherwise, the texture will not be loaded.
-GLAUX is easy since many example and already installed. However,
this library is not recommended for bugs.

###Example
Include and Linking
```opengl
 #pragma comment(lib, "glu32.lib")
 #pragma comment(lib, "glaux.lib")
 #pragma comment(lib, "glut32.lib")
 ```
```opengl
 #include <windows.h> 
 #include <GL/gl.h>
 #include <GL/glu.h>
 #include <GL/glaux.h>
 #include <GL/glut.h>
 ```
```opengl
 ```
Then read from file
```opengl
 FILE *File=NULL;// File Handle
 // Make Sure A Filename Was Given
 if (!Filename) {
 	return NULL;							
 }
 File=fopen(Filename,"r");// Check To See If The File Exists
 // Does The File Exist?
 if (File) {
 	fclose(File);// Close The Handle
                // Load The Bitmap And Return A Pointer
 	return auxDIBImageLoad(Filename);
 }
 return NULL;// If Load Failed Return NULL
 }
 ```
Load into memory and get the id
```opengl
 int Status=FALSE;// Status Indicator
 AUX_RGBImageRec *TextureImage[1];// Create Storage Space For The Texture
 memset(TextureImage,0,sizeof(void *)*1); // Set The Pointer To NULL
 // Load The Bitmap, Check For Errors, If Bitmap's Not Found Quit
 if (TextureImage[0]=LoadBMP("wall.bmp")) {
 	Status=TRUE;// Set The Status To TRUE
 	glGenTextures(1, &GTexture[0]);	// Create The Texture
 	// Typical Texture Generation Using Data From The Bitmap
 	glBindTexture(GL_TEXTURE_2D, GTexture[0]);
 	glTexImage2D(GL_TEXTURE_2D, 
 		0, 3,
 		TextureImage[0]->sizeX, 
 		TextureImage[0]->sizeY, 
 		0,GL_RGB, GL_UNSIGNED_BYTE, 
 		TextureImage[0]->data);
 	glTexParameteri(GL_TEXTURE_2D,GL_TEXTURE_MIN_FILTER,GL_LINEAR);
 	glTexParameteri(GL_TEXTURE_2D,GL_TEXTURE_MAG_FILTER,GL_LINEAR);
 }
 // If Texture Exists
 if (TextureImage[0]) {// If Texture Image Exists
 	if (TextureImage[0]->data) {
                    free(TextureImage[0]->data);// Free The Texture Image Memory
 	}
 	free(TextureImage[0]);// Free The Image Structure
 }
 return Status;// Return The Status
 }
 ```
Drawing function
```opengl
 glEnable(GL_TEXTURE_2D);// Enable Texture Mapping ( NEW )
 glBindTexture(GL_TEXTURE_2D, GTexture[0]);
        glPushMatrix(); //glTranslatef(2.5f, 1.0f, -2.0f);
 glRotatef(GCubeAngle, GSwitch * 0.5, GSwitch * 0.2, -0.7); 
        glBegin(GL_QUADS);
 	// Front Face
 	glTexCoord2f(0.0f, 0.0f); glVertex3f(-1.0f, -1.0f,  1.0f);
 	glTexCoord2f(1.0f, 0.0f); glVertex3f( 1.0f, -1.0f,  1.0f);
 	glTexCoord2f(1.0f, 1.0f); glVertex3f( 1.0f,  1.0f,  1.0f);
 	glTexCoord2f(0.0f, 1.0f); glVertex3f(-1.0f,  1.0f,  1.0f);
                // etc... (ommited)
 glEnd();
 glPopMatrix(); 
 glDisable(GL_TEXTURE_2D);
 }
 ```




