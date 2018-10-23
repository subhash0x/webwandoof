<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#fafaff">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
         <a class="navbar-brand" href="index.html" style="font-family:cursive">
			<img src="img/logo.png" alt="logo" style="width:40px;">
			Wandoof
		  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recvid.html">Recipe Video</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                   <form class="form-inline">
					<div class="input-group">
					  <input type="text" class="form-control" placeholder="Search" name="search">
					  <div class="input-group-btn">
						<button class="btn btn-info" type="submit"><img src="img/search1.png" style="width:20px;height:20px;"></button>
					  </div>
					</div>
				  </form>
                </li>
				 <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
				 <li class="nav-item active">
                    <a class="nav-link" href="profile.html">Profile <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Signout</a>
                </li>
            </ul>
        </div>
</nav>

	<div class="card" style="width:900px;height:500px;">
	<div class="card-body">
	<center>
	<img class="card-img-top" src="img/avtar.png" style="width:150px;height:150px;margin:5px;border:1px solid #262626;border-radius:50%;"><br><hr>
	<div class="form-group">
	<form method="post" action="editprofile.php">
	<?php
	require_once 'connection.php';
	mysqli_select_db($conn,"wandoof");
	$result=mysqli_query($conn,"SELECT * FROM registration");
	while($row=mysqli_fetch_assoc($result)){
		if($row['email']==$_SESSION['email']){
			echo '<input type="text" name="name"';
			echo 'value="'.$_SESSION['name'].'"';
			echo 'class="form-control" style="width:400px;"><br>';
			echo '<input type="text" name="dob"';
			echo 'value="'.$_SESSION['dob'].'"';
			echo 'class="form-control" style="width:400px;"><br>';
			echo '<input type="text" name="email"';
			echo 'value="'.$_SESSION['email'].'"';
			echo 'class="form-control" style="width:400px;"><br>';
			echo '<input type="text" name="gender"';
			echo 'value="'.$_SESSION['gender'].'"';
			echo 'class="form-control" style="width:400px;" disabled="disabled"><br>';
				break;
		}
	}
	?>
	<input type="submit" value="Edit/Save" name="edit">
	</form>
	</div>
	</center>
	</div>
	</div>
	<br>
<br>


<footer style="background-color:#262626;color:white;height:50px;text-align:center;">
	<p>Copyright(c) website name.
Designed by:SHASHANK VERMA</p>
</footer>
</body>
</html>