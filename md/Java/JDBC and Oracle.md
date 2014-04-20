
##JDBC and Oracle

###Introduction
There are two major types of connection methods for oracle
+JDBC (Thin driver) - implemented in pure java, but slower than OCI
+OCI - implemented in dll, but platform dependent.

###Environment
-Database Server
--Fedora Core 4
--Oracle 10g release2
--Turnoff Firewall and SE Linux
--IP: 192.168.1.2
--Port: 1521
--DB Instance Name (SID): TSH1
-Client Machine
--Windows XP Home Edition
--JDK 1.5.X
--JDBC Driver (classes12.jar) was downloaded into
```java
 ```
--Environment Variable:
```java
 ```
###Setup a sample table
+Run sqlplus from
```java
 ```
+Create a table
```java
      myid number not null
 );
 ```
###Sample Program
Let's insert a row from the windows machine.
```java
 
 class OraTest {
 	public static void main(String args[]) {
 		try {
 			DriverManager.registerDriver(new oracle.jdbc.driver.OracleDriver());
 			Connection conn = DriverManager.getConnection(
 			"jdbc:oracle:thin:@192.168.1.2:1521:TSH1", "system", "mypassword");
 			Statement stm = conn.createStatement();
 			stm.execute("INSERT INTO mytest VALUES(100)");
 			stm.close();
 			conn.close();
 			System.out.println("Connection is ok");
 		}
 		catch (Exception ex) {
 			ex.printStackTrace();
 		}
 	}
 }
 ```
###Check Result
+Go back sqlplus
+Run
```java
 ```




