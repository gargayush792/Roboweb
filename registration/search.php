<?php
//include_once 'admin-class.php';
//$admin = new itg_admin();
//$admin->_authenticate();
?>

<html>

 <p><a href="index.php">Back to Main Page</a></p>
<form action="search.php" method="post">
 <input  type="text" name="search_string" maxlength="50" size="30">
<input type="submit" value="Find Team" />
</form>
<?php
if(!$_POST)
die("Please enter query");
$con = mysql_connect("regportal13.db.8510111.hostedresource.com","regportal13","pbotixMMX@12");
mysql_select_db("regportal13", $con);

$query="SELECT * FROM Teams2
WHERE TeamID='".$_POST["search_string"]."' OR First='".$_POST["search_string"]."'
OR Second='".$_POST["search_string"]."'OR Third='".$_POST["search_string"]."'OR Fourth='".$_POST["search_string"]."'";
//echo $query;
$result=(mysql_query($query));
while ($tuple = mysql_fetch_assoc($result))
{

//print_r($tuple);
echo $tuple["TeamName"]."<br>".$tuple["Event"];
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

";
}

?>
</html>