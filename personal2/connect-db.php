<?php


$server = 'localhost';
$user = 'root';
$pass = 'mysql123';
$db = 'students';


$connection = mysql_connect($server, $user, $pass)
or die ("Could not connect to server ... \n" . mysql_error ());
mysql_select_db($db)
or die ("Could not connect to database ... \n" . mysql_error ());


?>