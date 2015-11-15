<?php
//include_once 'admin-class.php';
//$admin = new itg_admin();
//$admin->_authenticate();
?>
<?php

$con = mysql_connect("regportal13.db.8510111.hostedresource.com","regportal13","pbotixMMX@12");
mysql_select_db("regportal13", $con);

$query="SELECT * FROM Teams2
WHERE TeamID='".$_GET["team"]."'";
//echo $query;
$result=(mysql_query($query));
$prop=$_GET["prop"];
//echo $prop;
while ($tuple = mysql_fetch_assoc($result))
{

//print_r($tuple);
echo $tuple["$prop"];

}

?>