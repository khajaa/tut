
##Variable, String, Array

###Variable
:Warning|No space around '''=''' sign!!!

```bash
 echo $Num
 ```
###Calculation
```bash
 val=$(($counter + 1))
 ```
To get power, use double * like
```bash
 ```
```bash
 ```
###Concat Strings
```bash
 b='str2'
 c=$a$b
 echo $c
 ```
:Warning|String will not be extracted that means,
```bash
 $ok="/home/kiichi/"
 ls -la $wrong
 ls -la $ok*
 ```
The first one try to find the dir name is *, but second one I put * out of the string, then bash can extract * into for each file names.


###Count Number of Character
```bash
 echo ${#str}
 ```

###Compare Strings
```bash
    echo "they are same"
 else 
    echo "not same"
 fi
 ```
###Array

```bash
 a[1]="Shell"
 a[2]="Script"
 echo ${a[0]}
 echo ${a[1]}
 echo ${a[2]}
 ```
```bash
 ```
To get length of this array 
```bash
 ```


###Example: Sum
```bash
 a[1]=34
 a[2]=56
 total=0
 n=${#a[@]}
 n=$((n - 1))
 while [ $n -ge 0 ];
 do
 total=$((a[$n] + $total))
 n=$((n - 1))
 done
 echo "total = $total"
 ```


