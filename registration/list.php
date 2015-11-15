<?php
//include_once 'admin-class.php';
//$admin = new itg_admin();
//$admin->_authenticate();
?>
 <p><a href="index.php">Back to Main Page</a></p>
<?php
$con = mysql_connect("regportal13.db.8510111.hostedresource.com","regportal13","pbotixMMX@12");
mysql_select_db("regportal13", $con);

$query="SELECT * FROM Teams2 ORDER BY Event ASC";
//echo $query;WHERE TeamID='".$_POST["team_id"]."'
$result=(mysql_query($query));

$check_num_rows=mysql_num_rows($result);
echo "A total of ".$check_num_rows," records <br> <br> <br>";

while ($tuple = mysql_fetch_assoc($result))
{

//print_r($tuple);
echo "Ref No: ".$tuple['TeamID']."<br/>";
//echo "Team Name: ".$tuple['TeamName']."<br/><br/>";
echo $tuple['TeamName']."<br/>";
echo"
<table border='1'>
<tr>
<td>Name</td>
<td>College</td>
<td>Contact</td>
<td>Email</td>
</tr>
<tr>
<td>".$tuple["First"] ."</td>
<td>".$tuple["College1"]. "</td>
<td>".$tuple["Contact1"]. "</td>
<td>".$tuple["Email1"] ."</td>
</tr>
<tr>
<td>".$tuple["Second"]. "</td>
<td>".$tuple["College2"] ."</td>
<td>".$tuple["Contact2"]. "</td>
<td>".$tuple["Email2"]. "</td>
</tr>
<tr>
<td>".$tuple["Third"]. "</td>
<td>".$tuple["College3"] ."</td>
<td>".$tuple["Contact3"]. "</td>
<td>".$tuple["Email3"]. "</td>
</tr>
<tr>
<td>".$tuple["Fourth"] ."</td>
<td>".$tuple["College4"] ."</td>
<td>".$tuple["Contact4"] ."</td>
<td>".$tuple["Email4"] ."</td>
</tr>
</table> 
<br>
<br>
";
}
?>

</html>