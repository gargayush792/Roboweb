<?php
error_reporting(E_ALL^ E_WARNING);  
if(!$_POST)
{

//echo ;
die("Please fill in your details at newreg.php");
}
$con = mysql_connect("regportal13.db.8510111.hostedresource.com","regportal13","pbotixMMX@12");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$exist="SELECT EXISTS(SELECT * FROM Teams2 WHERE TeamName='". $_POST['team_name']."' AND Event='".$_POST['event']."')";

//echo $exist;

mysql_select_db("regportal13", $con);
 $val=mysql_query($exist,$con);
 $arr=mysql_fetch_array($val);


if($arr[0])
{
echo "This team has already been registered for the filled event. Or maybe someone took that team name already.";
die();
}





function id()
{
$file_name=$_POST['event'].".dat";
//$file_name="counter.dat";
$file=fopen($file_name,"r+");
$number=intval(fread($file,5));
fclose($file);
$file=fopen($file_name,"r+");
$number++;
fwrite($file,$number);
return $number;
}
$team_id=id();
$team2_id=$_POST['event'].$team_id;
$sql = "INSERT INTO Teams2 VALUES 
('"   
.$team2_id."','"
.$_POST['team_name']."','"
.$_POST['event']."','"
.$_POST['participant_1']."','"
.$_POST['college_1']."','"
.$_POST['number_1']."','"
.$_POST['email_1']."','"
.$_POST['participant_2']."','"
.$_POST['college_2']."','"
.$_POST['number_2']."','"
.$_POST['email_2']."','"
.$_POST['participant_3']."','"
.$_POST['college_3']."','"
.$_POST['number_3']."','"
.$_POST['email_3']."','"
.$_POST['participant_4']."','"
.$_POST['college_4']."','"
.$_POST['number_4']."','"
.$_POST['email_4']."','"
.$_POST['mail']."','"
.$_POST['mail_post']."','"
.$_POST['comments']."'
)
";



//echo "<br>".$sql."<br>";
echo "Your Reference Number is : ".$team2_id;
if(mysql_query($sql,$con))
echo "\n\nYou have been successfully registered here. Report to the Helpdesk with your robot and reference number.<p>Click <a href='index.php'>Back to Main Page</a></p>";




// some code
else
echo "There was some problem";
mysql_close($con);
?> 