
##Create EXE file (Launch4j)

###What you need
-Download Lounch4j http://launch4j.sourceforge.net/
-Icon (.ico file)
-Splash Screen (.bmp file)

and this is zip file for this tutorial


###Creating a GUI Application
MyApp.java
```java
 public class MyApp {
 	public static void main(String[] args) {
 		MyFrame f = new MyFrame();
 	}
 }
 ```
MyFrame.java
```java
 import java.awt.event.*;
 public class MyFrame extends Frame {
 	public MyFrame() {
 		super("My App");
 		addWindowListener(
 			new WindowAdapter() {
 			    public void windowClosing(WindowEvent e) {
 				System.exit(0);
 			    }
 			}
 		);
 		setSize(300,300);
 		setVisible(true);
 	}
 }
 ```
Compile
```java
 ```
###Create a Manifest file
You have to specify Main-Class because you have to start up from jar file.
MANIFEST.MF
```java
 Created-By: 1.4.2_07 (Sun Microsystems Inc.)
 Main-Class: MyApp
 ```
###Create a jar file
```java
 ```
###Generate exe file
Use Launch4j. Only tricky part is under JRE tab
-Set JRE Path to "path"
-Min JRE version is something like 1.4.0

See sample configuration file (MyApp.xml)




