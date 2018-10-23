<?php 
require_once 'connection.php';
$sql="CREATE DATABASE wandoof";
if(!mysqli_query($conn,$sql))
	echo "error";
mysqli_select_db($conn,"wandoof");

$sql="CREATE TABLE registration(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(30) NOT NULL,
	gender INT(1),
	dob VARCHAR(10)
	)";
	if(!mysqli_query($conn,$sql))
		echo mysqli_error($conn);
	else
		echo "successfully created";

$sql="CREATE TABLE postimage(
	picid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	picname VARCHAR(300) NOT NULL,
	resname VARCHAR(50) NOT NULL,
	resadd VARCHAR(50) NOT NULL,
	opent VARCHAR(10) NOT NULL,
	closet VARCHAR(10) NOT NULL,
	restype VARCHAR(20) NOT NULL,
	resspecial VARCHAR(200) NOT NULL,
	usernameup VARCHAR(30) NOT NULL
	)";
	if(!mysqli_query($conn,$sql))
		echo "error".mysqli_error($conn);
	else
		echo "successfully created";
?>