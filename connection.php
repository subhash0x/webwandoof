<?php
$dbhost="localhost";
$dbusername="root";
$dbpass="";
$dbname="wandoof";
$conn=mysqli_connect($dbhost,$dbusername,$dbpass);
if(!$conn)
	die("can't connect" . mysql_error());
?>