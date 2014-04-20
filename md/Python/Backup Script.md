
##Backup Script

###Introduction
This is a script to backup your folder. The usage is pretty simple. You just specify the folder name and the version number.
```python
 ```
###Code
```python
 # bu.py
 #----------------------------------------------------------------------------
 remoteSite = 'www.(yourserver).com'
 remoteDir = '/home/kiichi/backup/'
 remoteUser = 'kiichi'
 remotePass = 'kiichi'
 remoteUrl = 'http://www.(yourserver).com/kiichi/backup/'
 
 import os, sys, ftplib,zipfile,string
 from getpass import getpass
 
 #----------------------------------------------------------------------------
 # @param target directory name
 # @return list of file and directoryL
 #----------------------------------------------------------------------------
 def getDirList(dir):
     fileList = []
     for roots,directories,files in os.walk(dir):
         for x in files:
             fileList.append(roots + os.sep + x)
     return fileList
 
 #----------------------------------------------------------------------------
 # Main
 #----------------------------------------------------------------------------
 if __name__ == "__main__":
 	# Input Check
 	argc = len(sys.argv)
 	if argc <= 1 or argc > 3 :
 		print "Usage: bu dirName [Version | Comment | etc...]"
 		print "Example: bu myproject 1.0.0"
 		sys.exit()
 		
 	# fake input here
 	targetLocal = os.path.join(os.getcwd(),"testdir") 
 	
 	# if it is abs, change to relative path
 	if (os.path.isabs(targetLocal)):
 		targetLocal = string.replace(targetLocal, (os.getcwd() + os.sep),"")	
 	
 	# Connect FTP
 	ftpObj = ftplib.FTP(remoteSite)
 	ftpObj.login(remoteUser, remotePass)
 	ftpObj.cwd(remoteDir)
 	
 	# Print desitination url
 	if argc == 2:
 		#ftpObj.dir(targetLocal + "*")
 		ftpObj.retrlines("LIST " + targetLocal + "*")
 		sys.exit()
 	
 	#=argc has to be 3
 	tmpZipName = targetLocal + "_" + sys.argv[2] + ".zip"
 	
 	# Create Zip File
 	zObj = zipfile.ZipFile(tmpZipName, "w")
 	for path in getDirList(targetLocal):
 		zObj.write(path, path)
 	zObj.close()
 	
 	# Upload zip file
 	fd = open(tmpZipName, 'rb')
 	print 'uploading', tmpZipName,'...'
 	ftpObj.storbinary('STOR ' + tmpZipName, fd, 2048)
 	ftpObj.retrlines("LIST " + targetLocal + "*")
 	fd.close()
 	ftpObj.quit()
 	
 	# Clean up
 	os.remove(tmpZipName)
 	print 'Done. The file is available at'
 	print remoteUrl + tmpZipName
 	sys.exit()
 ```



