
##AppleScript - File IO, Folder, and Path



###Reading a file
```macos
 on readFile(unixPath)
 	set tmpFile to open for access unixPath
 	set retStr to (read tmpFile for (get eof tmpFile))
 	close access tmpFile
 	return retStr
 end readFile
 ```
###Writing a file
```macos
 on writeFile(unixPath, inStr)
 	set tmpFile to open for access unixPath with write permission
 	set eof of tmpFile to 0
 	write inStr to tmpFile starting at eof
 	close access tmpFile
 end writeFile
 ```
###String replace
```macos
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
```macos
 ```
###posix path format
```macos
 ```
###List of pre-defined dir
```macos
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
```macos
 ```
###secondly way to use finder
```macos
 	set the_folder to (folder of the front window) as text
 	display dialog the_folder
 end tell
 ```



Reference
```macos
 ```
###checking if the file exists or not
```macos
 	if exists file tmpSettingsFilePath then
 		--
 	else
 		create_settings()
 	end if
 end tell
 ```

###Reference
http://www.faqintosh.com/risorse/en/guides/as/guide/fileIO/



