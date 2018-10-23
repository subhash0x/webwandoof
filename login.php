<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Wandoof-Login</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/login.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require_once 'connection.php';
	mysqli_select_db($conn,'wandoof');
	$nameerr="";
	$i=1;
	$na=$em=$d=$pas=$gen="";
	if (isset($_POST['signup'])) {
	$na=textv($_POST["name"]);
	$em=textv($_POST["semail"]);
	$pas=textv($_POST["password"]);
	$gen=textv($_POST["gender"]);
	$d=textv($_POST["dob"]);
	
	$table="INSERT INTO registration(name,email,password,gender,dob)
	VALUES ('$na','$em','$pas','$gen','$d')";
	
	if(!mysqli_query($conn,$table))
		echo "<font color='red' size='7'>no</font>";
	}
	function textv($x){
		$x=trim($x);
		$x=stripslashes($x);
		$x=htmlspecialchars($x);
		return $x;
	}
?>
<div>
<a href="#">
<img src="img/logo.png">
</a>
</div>
	<div class="container">
		<form method="post" action="loginval.php"?>">
		<h1>Login</h1>
			<div class="form-group">
				<label>Email Id:</label>
				<input type="email" class="form-control" id="email" name="logemail" placeholder="Email">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" id="password" name="logpass" placeholder="Password">
				</div>
				<div class="form-check">
				<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="remember">Remember Me
				</label>
					<label style="margin-left:20px;font-size:15px"><a href="#">Forget Password?</a></label>
				</div>
				<br>
				<button type="submit" class="btn btn-default" name="login">Login</button>
				<br>
				<br>
				<label style="margin-left:240px;font-size:15px"><a href="#" data-toggle="modal" data-target="#signupform">Don't have a account?Signup</a><label style="margin-left:20px;font-size:15px">
		</form>
	</div>
	  <div class="modal fade" id="signupform">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header">
          <h4 class="modal-title">Signup</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form style="padding:10px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Name">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="semail" id="semail" placeholder="Email">
				</div>
				<div class="form-group">
				<label>Password:</label>
					<input type="password" class="form-control" name="password" id="spassword" placeholder="Password">
				</div>
				<div class="form-group inline">
					<label>Gender : </label>
					<input type="radio" name="gender" value="male"><label>Male</label>
					<input type="radio" name="gender" value="female"><label>Female</label>
				</div>
				<div class="form-group">
					<input type="date" name="dob" value="dd/mm/yy">
				</div>
				<br>
				<button type="submit" class="btn btn-default" name="signup">Signup</button>
		  </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>