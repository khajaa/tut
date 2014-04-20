
##Trash Script

###Trashing Script
Moving File or Dir instead of rm.
```bash
 
 ###################################################################
 # Trashing Script
 ###################################################################
 
 #Check the first argument
 if [ -z $1 ]; then
 echo "Usage: trash [dir name|file name]"
 exit 1
 fi
 
 # Create a directory for today
 TodayFolder="/home/kiichi/trash/"`date "+%Y_%m_%d"`
 mkdir $TodayFolder -p > /dev/null
 
 mv $1 $TodayFolder
 
 ```



