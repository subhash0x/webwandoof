<?php
	session_start();
	require_once 'connection.php';
	mysqli_select_db($conn,'wandoof');
	if(isset($_POST['edit'])){
	$query='UPDATE registration SET name="'.$_POST['name'].'",dob="'.$_POST['dob'].'",email="'.$_POST['email'].'" WHERE id='.$_SESSION['id'];
	if(!mysqli_query($conn,$query))
		echo mysqli_error();
	$_SESSION['name']=$_POST['name'];
	$_SESSION['dob']=$_POST['dob'];
	$_SESSION['email']=$_POST['email'];
	header('Location:profile.php');
	}
?>