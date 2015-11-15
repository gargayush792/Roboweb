<?php
//include_once 'admin-class.php';
//$admin = new itg_admin();
//$admin->_authenticate();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Administrator Page</title>
    </head>
    <body>
        <fieldset>
            <legend>Welcome <?php //echo $admin->get_nicename(); ?></legend>
               <p><a href="newreg.html">Register New Team</a></p>
<p><a href="list.php">List All Teams</a></p>
<p><a href="search.php">Search</a></p>
        </fieldset>
        <p>
            <input type="button" onclick="javascript:window.location.href='logout.php'" value="logout" />
        </p>
    </body>
</html>