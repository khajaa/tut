
##Install

###Overview
This is installation of MS SQL 2000, that is old version.
I just put my note to configure it same way.

###Warning
You have to patch SQL Server 2000 Service Pack 4 
Otherwise Windows does not allow to run SQL Server over TCP/IP.
URL: http://www.microsoft.com/sql/downloads/2000/sp4.asp

Steps
+Select Language
+Download SQL2000-KB884525-SP4-x86-ENU.EXE 68536
+Double Click and extract
+Go to setup folder and run setup.

###Installation - Creating Default Instance
+Default
+Local System Account
+Windows Auth Mode (other option is for ''sa'' account's password)

###Installation Example - Creating Non-Default Instance
If you choosed default, you do not need this step
+Name Instance Name that is NOT default. Check off and name it.
If you name your database as ''XXKI'', and my computer name is ''KIICHI'',
then your database path is going to be ''KIICHI\XXKI''.
+Go to service manager, and start server as ''KIICHI\XXKI''.
+Go to Enterprise Manager
++Right click on Server Group and select New SQL Server Registeration
++Type your server name ''KIICHI\XXKI'' and press add.
++Just keep pressing Next. Use windows auth mode.

###Creating Database
+Right Click on Database
+New Database
+Enter name (e.g. testdb)


###Add Table
+Right Click on Tables under database
+New Table
+Set up columns like
```sql server
 myval (char 10)
 ```

###Add User
+Right Click on Users under database
+New Database User
+Login Name > <New User>
+Click ... button and Add user
+Select ''SQL Server Authentication'' Radio Box
+Select default database
+Set password (e.g. test)
+Set user name (e.g. test)
+Click Permission and check all grants for the new table

###Edit data
+Right Click on table (e.g. testtable)
+Open Table
+Return all rows
+Enter some data


###Check Connection
From command prompt
```sql server
 ```
```sql server
 ```
```sql server
 2>select * from testtable;
 3>go
 ```
###Check Network Configuration
+Right Click on Instance
+Property > Network Configuration
+TCP/IP > Property
+Set Port Number (Default is 1433)

When you restart the server, make sure 1433 is listening.
Use software, called tcpview or something like that.

###Sample C# Application
```sql server
 using System.Data;
 using System.Data.SqlClient;
 namespace MSSQLServerTest {
 class SQLTest {
 	static void Main(string[] args) {
 		try {
 			// @"Server=KIICHI\XXKI;"
 			// "Server=192.168.1.101,1433;"
 			// "Server=KIICHI"
 			SqlConnection myConnection = new SqlConnection(
 						"Server=127.0.0.1,1433;"
 						+ "Integrated Security=SSPI;"
 						+ @"User Id=test;"
 						+ "Password=test;"
 						+ "Initial Catalog=testdb;");
 			SqlCommand myCommand = new SqlCommand(
 				"UPDATE testtable SET myval = 'abc' WHERE id = 1;");
 			myCommand.Connection = myConnection;
 			myConnection.Open();
 			myCommand.ExecuteNonQuery();
 			myCommand.Connection.Close();
 		} 
 		catch (Exception ex) {
 			Console.WriteLine(ex.Message);
 		}
 	}
 }
 }
 ```

:Note|If you did not patch service pack 4, you do not need
```sql server
 ```




