
##AppleScript - File IO, Folder, and Path



###Reading a file
```objective-c
 on readFile(unixPath)
 	set tmpFile to open for access unixPath
 	set retStr to (read tmpFile for (get eof tmpFile))
 	close access tmpFile
 	return retStr
 end readFile
 ```
###Writing a file
```objective-c
 on writeFile(unixPath, inStr)
 	set tmpFile to open for access unixPath with write permission
 	set eof of tmpFile to 0
 	write inStr to tmpFile starting at eof
 	close access tmpFile
 end writeFile
 ```
###String replace
```objective-c
 on searchAndReplace(txt, srch, rpl)
 	set oldtid to AppleScript's text item delimiters
 	set AppleScript's text item delimiters to {srch}
 	set temp to every text item of txt
 	set AppleScript's text item delimiters to {rpl}
 	set temp to (temp as string)
 	set AppleScript's text item delimiters to oldtid
 	return temp
 end searchAndReplace
 ```


###Find a folder
```objective-c
 ```
###posix path format
```objective-c
 ```
###List of pre-defined dir
```objective-c
 documents folder
 favorites folder
 home folder
 library folder
 movies folder
 music folder
 pictures folder
 public folder
 shared documents
 shared documents folder
 sites folder
 utilities folder
 ```
###Get current app path
```objective-c
 ```
###secondly way to use finder
```objective-c
 	set the_folder to (folder of the front window) as text
 	display dialog the_folder
 end tell
 ```



Reference
```objective-c
 ```
###checking if the file exists or not
```objective-c
 	if exists file tmpSettingsFilePath then
 		--
 	else
 		create_settings()
 	end if
 end tell
 ```

###Reference
http://www.faqintosh.com/risorse/en/guides/as/guide/fileIO/



