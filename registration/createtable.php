<?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>
<?php
$con = mysql_connect("regportal13.db.8510111.hostedresource.com","regportal13","pbotixMMX@12");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("regportal13", $con);
$sql = "CREATE TABLE Teams2
(
TeamID varchar(10),
TeamName varchar(50),
Event varchar(20),
First varchar(30),
College1 varchar(20),
Contact1 varchar(12),
Email1 varchar(50),
Second varchar(30),
College2 varchar(20),
Contact2 varchar(12),
Email2 varchar(50),
Third varchar(30),
College3 varchar(20),
Contact3 varchar(12),
Email3 varchar(50),
Fourth varchar(30),
College4 varchar(20),
Contact4 varchar(12),
Email4 varchar(50),
Mail varchar(500),
MailPost varchar(500),
Comments varchar(500)
)";

// Execute query
mysql_query($sql,$con);

// some code

mysql_close($con);
?> 
