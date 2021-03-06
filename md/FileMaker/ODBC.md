
##FileMaker Pro 7 ODBC Configuration

###Installation
-Windows 2000 Professional
-IIS
-FileMaker Pro7
-FileMaker Server 7 Advanced's xDBC folder
-MDAC [[link:http://www.microsoft.com/downloads/details.aspx?FamilyID=6c050fe3-c795-4b7d-b037-185d0506396c&DisplayLang=en]]
-ODBC Client Driver (FileMaker Server 7 Advanced CD-ROM > xDBC > ODBC Client Driver (If installation fails, copy files into c:\x, then doulbe click setup.exe
-ODBC View ( http://www.softempire.com/odbc-view.html )
or
-ODBC Test (.NET my sample application, see below)

###FileMaker Pro 7 Configuration
+Create New File (e.g. C:\testdb.fp7)
+Add field
++id (number)
++val (text)
+Click OK
+Insert a couple of sample records (Enter data & click ''New Record'' button)
+Edit > Sharing > ODBC/JDBC
++On
++All User
+Add user from File > Definition > User and Account Setting
++Username: kiichi
++Password: test
++Permission: Full Access
++When you click ok, it will ask master account. just type ''Admin'' and no password.



###FileMaker Server 7 Advanced Configuration
Basically, install above softwares except for FileMaker Pro 7 
because Server version can provide serivice itself (without gui, as windows 
service). If you set up server, I do not recommend to install FileMaker Pro
to avoid conflict.

Install Server's ODBC Plug in
+Stop File Maker Server 7 service
+Stop File Maker Service Helper
+Download xDBC plugin for win from
http://www.filemaker.com/support/updaters.html 
(Select FileMaker Server 7 Advanced)
or you can just copy from CDROM xDBC folder
+Copy ''xDBC Support'' folder and ''xDBC.fmx'' file into 
```filemaker
 ```
+Open FileMaker Server Admin tool
++Connect server
++Right click on server and select property
++Client Tab, Click Enable Client Service button
++Check ODBC and JDBC
+Create DSN and Check connection. See above instruction for this procedure.

:Note|FMS Admin Installer is located at
```filemaker
 ```
###Data Source Setting
+Ctrl Panel > Administrative Tools > ODBC (Data Source)
+System DSN
+Add > DataDirect 32 bit SequeLink 5.4
--DataSourceName: testdb
--Server Host: localhost
--Server Port: 2399
--Server Data Source: testdb
+Click Test Connect and you should get successful message. Enter username and password when it shows a dialog.

###Test SQL execution
+Start ODBC View
+DataSource > Machine Data Source > testdb > OK
+Type username and password.
+select * from testdb
+You will see records which you entered in FileMaker.

###Sample C# Application


Connection string example is
```filemaker
 ```
Your application should looks like this

and the click event sample
```filemaker
 string myConnString = textBox1.Text;
 string mySelectQuery = textBox3.Text;
 OdbcConnection myConnection = new OdbcConnection(myConnString);
 OdbcCommand myCommand = new OdbcCommand(mySelectQuery,myConnection);
 myConnection.Open();
 OdbcDataReader myReader = myCommand.ExecuteReader();
 try {
 	textBox2.Text = "";
 	while (myReader.Read()) {
 		textBox2.Text += myReader.GetInt32(0) + ", " 
                          + myReader.GetString(1) + "\r\n";
 	}
 }
 catch (Exception ex) {
 	MessageBox.Show(ex.Message);
 }
 finally {
 	myReader.Close();
 	myConnection.Close();
 }
 }
 ```

###Problems
-I had a trouble with WindowsXP to install ODBC Client.
-Don't mix FileMaker Pro 7 and FileMaker Server 7 Advanced


###Solved Problem 
-If ODBC driver is not listed on your ODBC Datasource Control panel, 
try to install as Administrator or an account which is in Admin Group.
http://www.filemaker.co.jp/tech/FMPro?-DB=tech_info.fp5&-Format=detail.html&Serial_Number=109307&-Find


&#21839;&#38988;&#65306;
Windows &#12503;&#12521;&#12483;&#12488;&#12501;&#12457;&#12540;&#12512;&#19978;&#12395; Connect for ODBC &#12489;&#12521;&#12452;&#12496;&#12434;&#12452;&#12531;&#12473;&#12488;&#12540;&#12523;&#12375;&#12390;&#12418;&#12289;&#65339;Microsoft ODBC &#12487;&#12540;&#12479; &#12477;&#12540;&#12473; &#12450;&#12489;&#12511;&#12491;&#12473;&#12488;&#12524;&#12540;&#12479;&#65341;&#12398;&#65339;&#12489;&#12521;&#12452;&#12496;&#65341;&#12479;&#12502;&#12395;&#12399;&#12289;&#12489;&#12521;&#12452;&#12496;&#12364;&#34920;&#31034;&#12373;&#12428;&#12414;&#12379;&#12435;&#12290;

&#35299;&#27770;&#26041;&#27861;&#65306;
&#22580;&#21512;&#12395;&#12424;&#12387;&#12390;&#12399;&#12289;&#12452;&#12531;&#12473;&#12488;&#12540;&#12523;&#12434;&#34892;&#12387;&#12390;&#12418;&#65339;Microsoft ODBC &#12487;&#12540;&#12479; &#12477;&#12540;&#12473; &#12450;&#12489;&#12511;&#12491;&#12473;&#12488;&#12524;&#12540;&#12479;&#65341;&#12398;&#65339;&#12489;&#12521;&#12452;&#12496;&#65341;&#12479;&#12502;&#12395; DataDirect 32-BIT SequeLink 5.4 &#12364;&#34920;&#31034;&#12373;&#12428;&#12394;&#12356;&#12371;&#12392;&#12364;&#12354;&#12426;&#12414;&#12377;&#12290;&#12371;&#12398;&#12424;&#12358;&#12394;&#29366;&#27841;&#12395;&#36973;&#36935;&#12375;&#12383;&#12425;&#12289;

&#65297;&#65289;&#65339;&#12503;&#12525;&#12464;&#12521;&#12512;&#12398;&#36861;&#21152;&#12392;&#21066;&#38500;&#65341;&#27231;&#33021;&#12434;&#20351;&#12387;&#12390; DataDirect &#12477;&#12501;&#12488;&#12454;&#12455;&#12450;&#12434;&#12450;&#12531;&#12452;&#12531;&#12473;&#12488;&#12540;&#12523;&#12375;&#12289;&#31649;&#29702;&#32773;&#12450;&#12459;&#12454;&#12531;&#12488;&#12391;&#12525;&#12464;&#12458;&#12531;&#12375;&#12383;&#24460;&#12289;&#65339;&#12503;&#12525;&#12464;&#12521;&#12512;&#12398;&#36861;&#21152;&#12392;&#21066;&#38500;&#65341;&#27231;&#33021;&#12434;&#20351;&#12387;&#12390; DataDirect &#12477;&#12501;&#12488;&#12454;&#12455;&#12450;&#12434;&#20877;&#12452;&#12531;&#12473;&#12488;&#12540;&#12523;&#12375;&#12390;&#12367;&#12384;&#12373;&#12356;&#12290;

&#65298;&#65289;&#20877;&#12452;&#12531;&#12473;&#12488;&#12540;&#12523;&#12434;&#34892;&#12387;&#12390;&#12418;&#21839;&#38988;&#12364;&#35299;&#27770;&#12391;&#12365;&#12394;&#12356;&#22580;&#21512;&#12399;&#12289;Regedit &#12434;&#20351;&#12387;&#12390; HKEY_LOCAL_MACHINE\SOFTWARE\ODBC\ODBCINST.INI\ODBC Drivers
&#12398;&#12524;&#12472;&#12473;&#12488;&#12522;&#12461;&#12540;&#12434;&#34920;&#31034;&#12375;&#12414;&#12377;&#12290;&#65339;(&#26082;&#23450;)&#65341;&#12418;&#12375;&#12367;&#12399;&#65339;(&#27161;&#28310;)&#65341;&#12398;&#25991;&#23383;&#21015;&#12434;&#36984;&#25246;&#12375;&#12390;&#21066;&#38500;&#12375;&#12383;&#24460;&#12289;&#12467;&#12531;&#12500;&#12517;&#12540;&#12479;&#12434;&#20877;&#36215;&#21205;&#12375;&#12390;&#12367;&#12384;&#12373;&#12356;&#12290;

&#27880;&#24847;&#65306;&#12524;&#12472;&#12473;&#12488;&#12522;&#12398;&#32232;&#38598;&#26041;&#27861;&#12434;&#35492;&#12427;&#12392;&#12289;&#12458;&#12506;&#12524;&#12540;&#12486;&#12451;&#12531;&#12464;&#12471;&#12473;&#12486;&#12512;&#12398;&#20877;&#12452;&#12531;&#12473;&#12488;&#12540;&#12523;&#12364;&#24517;&#35201;&#12395;&#12394;&#12427;&#12424;&#12358;&#12394;&#12289;&#12471;&#12473;&#12486;&#12512;&#20840;&#20307;&#12395;&#24433;&#38911;&#12377;&#12427;&#28145;&#21051;&#12394;&#21839;&#38988;&#12364;&#30330;&#29983;&#12377;&#12427;&#12371;&#12392;&#12364;&#12354;&#12426;&#12414;&#12377;&#12290;&#20462;&#27491;&#12434;&#34892;&#12358;&#21069;&#12395;&#12524;&#12472;&#12473;&#12488;&#12522;&#12395;&#12496;&#12483;&#12463;&#12450;&#12483;&#12503;&#12434;&#12392;&#12387;&#12390;&#12362;&#12367;&#12371;&#12392;&#12434;&#12362;&#21223;&#12417;&#12375;&#12414;&#12377;&#12290;

&#12372;&#27880;&#24847;&#12367;&#12384;&#12373;&#12356;&#65306;FileMaker, Inc. &#12399;&#12289;Registry Editor &#12398;&#20351;&#29992;&#12395;&#36215;&#22240;&#12377;&#12427;&#12354;&#12425;&#12422;&#12427;&#21839;&#38988;&#12364;&#35299;&#27770;&#12391;&#12365;&#12427;&#12371;&#12392;&#12434;&#20445;&#35388;&#12377;&#12427;&#12371;&#12392;&#12399;&#12391;&#12365;&#12414;&#12379;&#12435;&#12290;


&#35500;&#26126;&#65306;
&#12371;&#12398;&#21839;&#38988;&#12395;&#38306;&#12377;&#12427;&#35443;&#32048;&#24773;&#22577;&#12362;&#12424;&#12403;&#12381;&#12398;&#35299;&#27770;&#26041;&#27861;&#12399;&#12289;http://knowledgebase.datadirect.com &#12395;&#25522;&#36617;&#12373;&#12428;&#12390;&#12356;&#12414;&#12377;&#12290;&#35352;&#20107;&#30058;&#21495; #2552518MF &#12398;&#35352;&#20107;&#12434;&#26908;&#32034;&#12375;&#12390;&#12367;&#12384;&#12373;&#12356;&#12290;




