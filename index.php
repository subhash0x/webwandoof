<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#fafaff">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
         <a class="navbar-brand" href="#" style="font-family:cursive">
			<img src="img/logo.png" alt="logo" style="width:40px;">
			Wandoof
		  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
				 <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sessionclosing.php">Signout</a>
                </li>
            </ul>
        </div>
</nav>
<div id="container2">
<div class="slideshow-container2">
<div class="mySlides2 fade2">
  <img src="img/first-slide.jpg" style="width:100%;height:500px">
</div>

<div class="mySlides2 fade2">
  <img src="img/second-slide.png" style="width:100%;height:500px">
</div>

<div class="mySlides2 fade2">
  <img src="img/third-slide.jpg" style="width:100%;height:500px">
</div>

</div>
<br>
<div style="text-align:center;height:35px">
  <span class="dot2"></span> 
  <span class="dot2"></span> 
  <span class="dot2"></span> 
</div>
</div>

<div class="container" style="margin-top:50px;">
	<div class="row">
		<div class="col-sm-3">
			<div class="row-sm-5">
			<div class="card" style="height:450px;box-shadow:1px 2px 4px rgba(0, 0, 0, .5);">
				<div class="card-body">
					<center>
					<h3>My Profile</h3>
					<img class="card-img-top" src="img/avtar.png" style="border-radius:60%;">
					<hr>
					<?php
					echo "<p>".$_SESSION['name']."</p>";
					echo "<p>".$_SESSION['gender']."</p>";
					echo "<p>".$_SESSION['dob']."</p>";
					?>
					
					</center>
				</div>
				</div>
				<div class="row-sm-3" style="margin-top:50px;box-shadow:1px 2px 4px rgba(0, 0, 0, .5);">
				<div class="card" style="height:170px;background-color:#262626;margin-top:0px;position:relative;top:0px;">
				<div class="card-body">
					<ul class="cgrp">
						<li><a href="#">Favourite</a></li>
						<li><a href="#">Visits</a></li>
						<li><a href="#">My Uploads</a></li>
					</ul>
				</div>
				</div>
			</div>
			<div class="row-sm-3" style="margin-top:30px;box-shadow:1px 2px 4px rgba(0, 0, 0, .5);">
				<div class="card" style="height:170px;margin-top:0px;position:relative;top:0px;">
				<div class="card-body">
					<h4>Interest</h4>
					<p><div class="interestcontainer">Thai</div>
					<div class="interestcontainer">Chinease</div>
					<div class="interestcontainer">Continental</div>
					<div class="interestcontainer">SouthIndian</div>
					<div class="interestcontainer">Italian</div>
					<div class="interestcontainer">Bevarages</div></p>
				</div>
				</div>
			</div>
		</div>
		</div>
		<div class="col-sm-6">
			<div class="row-sm-3" style="margin-top:30px;box-shadow:1px 2px 4px rgba(0, 0, 0, .5);">
				<div class="card" style="height:200px;margin-top:0px;position:relative;top:0px;">
				<div class="card-body">
					<h4>Post</h4>
					<br>
					<div style="border:1px solid black;width:500px;padding:20px;">
					<form>
					<a href="#" data-toggle="modal" data-target="#imageposts"><input type="submit" value="Post" name="impo" style="width:200px;margin-left:30%;" onclick="impofun()"></a>
					</form>
					</div>
				</div>
				</div>
			</div>
			
				
				<?php
				require_once 'connection.php';
				mysqli_select_db($conn,"wandoof");
				$result=mysqli_query($conn,"SELECT * FROM postimage ORDER BY picid DESC");
				while($row=mysqli_fetch_assoc($result)){
				echo '<div class="row-sm-3" style="margin-top:30px;box-shadow:1px 2px 4px rgba(0, 0, 0, .5);">';
				echo '<div class="card" style="height:650px;margin-top:0px;position:relative;top:0px;">';
				echo '<div class="card-body">';
					echo '<img src="img/avtar.png" style="float:left;width:50px;height:50px;border-radius:50%;top:-10px"><h4>';
					echo $row['usernameup'];
					echo '</h4><hr>
					<p>';
					echo $row['resname']." , ".$row['resadd']."<br>";
					echo "Time : ".$row['opent']." to ".$row['closet'];
					echo '</p>';
					echo '<center><img src="uploads/'.$row['picname'].'" style="width:500px;height:350px;"></center>';
					echo '<p>';
					echo $row['restype']."<br>".$row['resspecial'];
					echo '</p>';
					echo '<hr>
					<div><div class="lcs"><img src="img/like1.png" style="width:30px;height:20px;">Like</div>
					<div class="lcs"><img src="img/comment1.png" style="width:30px;height:20px;">Comment</div>
					<div class="lcs"><img src="img/share.png" style="width:30px;height:20px;">Share</div>
					</div>
					</div>
				</div>
				</div>';
				}
				?>
			</div>
		<div class="col-sm-3" style="margin-right:-100px;">
			<div class="card" style="height:400px;">
				<div class="card-body">
					<center><h3>Most Famous</h3>
					<br>
					<br>
					<img src="img/signbg.jpg" class="card-img-top">
					<br>
					<br>
					<h4>Reyans</h4>
					<h5>Hanamkonda</h5>
					<h5>10:00am - 05:00pm</h5></center>
				</div>
			</div>
		</div>
	</div>

</div>

<!--Post image -->
 <div class="modal fade" id="imageposts">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color:#262626;color:white;height:600px">
      
        <div class="modal-header">
          <h4 class="modal-title">Discription</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
        </div>
        <div class="modal-body">
         <form action="upload.php" method="post" enctype="multipart/form-data">
			<div>
			 <input type="file" name="gettingpic" id="gettingpic" accept="image/*" style="width:350px">
			</div>
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" name="resname" id="resname" placeholder="Name of Restaurant">
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input type="text" class="form-control" name="address" id="address" placeholder="Address">
				</div>
				<div class="form-group inline">
				<label>Time:</label>
					<input type="time" name="opentime" id="opentime" style="width:150px;height:40px;border-radius:5px;border-radius:1 px solid lightblue">
					<label>to</label>
					<input type="time" name="closet" id="closet" style="width:150px;height:40px;border-radius:5px;border-radius:1 px solid lightblue">
				</div>
				<div class="form-group inline">
					<label> Type: </label>
					<input type="radio" name="dish" value="veg"><label>Vegetarian</label>
					<input type="radio" name="dish" value="nonveg"><label>NonVegetarian</label>
				</div>
				<div class="form-group">
				<label>Speciality:</label>
				<textarea style="width:400px;height:120px;border-radius:5px;border-radius:1 px solid lightblue" name="spec"></textarea>
				</div>
				<button type="submit" class="btn btn-default" name="posting">Post</button>
		  </form>
        </div>
      </div>
    </div>
  </div>

<br>
<br>
<footer style="background-color:#262626;color:white;height:50px;text-align:center;">
	<p>Copyright(c) website name.
Designed by:SHASHANK VERMA</p>
</footer>
<script src="js/slideshow.js">
</script>
</body>
</html>