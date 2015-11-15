<?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>
<?php
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

$dl=id();
echo ("yep".$dl) ;
?>