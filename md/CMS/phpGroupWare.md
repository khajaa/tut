
##phpGroupWare

###Install
http://www.phpgroupware.org/
and unzip & upload

-Download header.inc.php

-File permissions
--header.inc.php 777
--/public_html/groupware 777
--/tmp 777
--/files 777

-Setup
--Use firefox
--Access the directory and create header.inc.php
--use the password to login install wizard
--After install & setup database, don't forget click "Click Here" link
to create users.
--Created files dirctory (777) ?

-Configuration
-Click Admin icon 
--(Left side on menu) -> Group -> Select application to access
-- Creat Global categories
-- UserAccount -> Click User -> Quota -> Select Unlimited
-Preference
--Change my setting -> Forced Preferences -> Interface -> idots


###Customized memo
%%%Bugfix%%%
-removed lock function
phpgwaip/inc/class.db_mysql.inc.php lock function .
-email waring: email/inc/class.spell_cvs_php.inc.php line 105 insert @ before return
-remove spell check: email/inc/class.bocompose.inc.php
Line: 771,772
```cms
 $spellcheck_image = ""
 ```
%%%Mod%%%
-phpgwaip/templates/default/images/logo.gif (login logo)
-phpgwaip/templates/default/login.tpl (phpGroupWare version notice)
-login.php - http://www.phpgroupware.org/ address
-phpgwaip/templates/idots/images/logo.png
-phpgwaip/templates/idots/footer.tpl - copyright
-phpgwaip/templates/idots/navbar.php - remove url, 
-phpgwaip/templates/idots/navbar.inc.php - comment out array of about
-phpgwaip/templates/idots/about.tpl



###eGroupwaer User Adding Todo
-Admin > User Account
--Never Expire
--%%Create dir via ftp > permission 777%% Let system create dir. just prepare home as 777
--Login as the user > Preference > email > Custom Setting (dont forget to check)
--Notify via email

###eGroupware User add procedure
-Admin -> Create user add it on group
-Login as the user -> FileManager ->referesh
-Preference -> email -> check custome setting -> Check email recv
-Admin>Group>Each Module's setting (Click icon) and add group's permission then people can share their files


###eGroupware Cusomize
-Admin > site configuration -> change logo stuff
-phpgwapi/inc/footer.inc.php
-To change grant access: Admin > User Groups > Click icon next to each app
-To change order of icon: Admin > Application > Edit

-insert @ in line 105 on email/inc/class.spell_svc_php.inc.php
-remove spell check: email/inc/class.bocompose.inc.php
Line: 859
```cms
 $spellcheck_image = ""
 ```
-gwapi/inc/jcalendar-setup.php - modify date array maybe you can fix it (for jp lang) because the header sends out euc, but the calendar's labels are Shift_JIS.







