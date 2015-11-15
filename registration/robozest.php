<?php
//include_once 'admin-class.php';
//$admin = new itg_admin();
//$admin->_authenticate();
?>
<?php
//include_once 'admin-class.php';
//$admin = new itg_admin();
//$admin->_authenticate();
?>
<p><b>ROBOZEST Registrants</b></p>
<?php
$con = mysql_connect("regportal13.db.8510111.hostedresource.com","regportal13","pbotixMMX@12");
mysql_select_db("regportal13", $con);

$query="SELECT * FROM Teams2 WHERE Event='RZ'";
//echo $query;WHERE TeamID='".$_POST["team_id"]."'
$result=(mysql_query($query));

$check_num_rows=mysql_num_rows($result);
echo "A total of ".$check_num_rows," records in RoboZest <br> <br> <br>";

while ($tuple = mysql_fetch_assoc($result))
{

//print_r($tuple);
echo "Ref No: ".$tuple['TeamID']."<br/>";
echo "Team Name: ".$tuple['TeamName']."<br/><br/>";
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
<p>".$tuple["Mail"] ."<br />".$tuple["Comments"] ."</p>
<br>
<br>
";
}
?>

</html>
<?php
/*$con = mysql_connect("regportal13.db.8510111.hostedresource.com","regportal13","pbotixMMX@12");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$exist="SELECT EXISTS(SELECT * FROM table1 WHERE TeamName=$_POST[team_name] AND Event=$_POST[event])";


mysql_select_db("regportal13", $con);
if(mysql_query($exist,$con))
{
echo "This team has already been registered for the filled event";
die();
}
function id()
{
$file=fopen("counter.dat","r+");
$number=intval(fread($file,5));
fclose($file);
$file=fopen("counter.dat","r+");
$number++;
fwrite($file,$number);
return $number;
}
$team_id=id();
$team_id=$_POST[event].$team_id;
$sql = "INSERT INTO Teams
(
$team_id,
$_POST[team_name],
$_POST[event],
$_POST[college],
$_POST[number_a],
$_POST[number_b],
$_POST[email],
$_POST[participant_1],
$_POST[participant_2],
$_POST[participant_3],
$_POST[participant_4],
$_POST[comments]
)
";


if(mysql_query($sql,$con))
echo "Your Team ID is : ".$team_id;
// some code
else
echo "There was some problem";
mysql_close($con);
*/
?> 