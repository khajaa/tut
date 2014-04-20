
##Rename

###Rename Script Example - Rename all png file name 
iPhone Retina display rename script
```bash
 for i in *.png
 do
 mv $i ${i%.*}@2x.png
 done
 ```
```bash
 
 for i in $( ls *.png );
 do
    src=$i
    tgt=$(echo $i | sed -e "s/\.png/@2x\.png/")
    #mv $src $tgt
    mv $src $tgt
 done
 ```



