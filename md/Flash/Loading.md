
##Loading

###Download

###Structure
+Scene1 (Test Level)
-Animation: Just create a motion tween after finish loading
-Loading
++mcLoading
--Script: Contain AS
--Animation
+++mcCircle:Animation of circle
+++dtProgress: Dynamic Text



###Steps
+Create an animation (mcCircle) and convert to MC
+Create a dynamic text (dtProgress)
+Create a layer for a script
```flash
 	nParcent = Math.floor(_root.getBytesLoaded()/_root.getBytesTotal())*100;
 	dtProgress.text = nParcent + "%";
 	if (nParcent>=100) {
 		_root.play();
 	}
 };
 _root.stop();
 ```
+Attach body movie to test this





