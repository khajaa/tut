
##Basic Authentication


###Steps
+Create password file with my md5 generator
+Put .htaccess file where you want to put authentication

###.htaccess File
```apache
 AuthGroupFile /dev/null
 AuthName "Please enter username and password"
 AuthType Basic
 require valid-user
 ```
###Password File
From above .htaccess file, I name this .htpasswd
```apache
 kiichi2:$1$j0ZUTUoC$D0HsgTcJYIlLd08KZQMU11 #put string from md5 generator
 ```
###MD5 Generator
Name this file as crypt.php and access, then generate string from your password
```apache
        if ($_POST['password'] != '' && $_POST['username'] != '') {
                echo $_POST['username'].':'.crypt($_POST['password']);
        }
 ?>
        <form action="crypt.php" method="POST">
                Username:<input type="text" name="username" ><br>
                Password:<input type="text" name="password" >
                <input type="submit" name="submit" value="submit">
        </fonm>





