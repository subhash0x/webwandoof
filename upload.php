<?php
session_start();
require_once 'connection.php';
mysqli_select_db($conn,"wandoof");
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["gettingpic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$resname=$resadd=$opentime=$restype=$resspec=$uu="";
$fe="";
$cl="";
// Check if image file is a actual image or fake image
if(isset($_POST["posting"])) {
    $check = getimagesize($_FILES["gettingpic"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	$filename=$_FILES["gettingpic"];
	$fe=$filename["name"];
	$uu=$_SESSION["name"];
	$resname=$_POST["resname"];
$resadd=$_POST["address"];
$opentime=$_POST["opentime"];
$cl=$_POST["closet"];
$restype=$_POST["dish"];
$resspec=$_POST["spec"];
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["gettingpic"]["size"] > 6000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["gettingpic"]["tmp_name"], $target_file)) {
	   $query="INSERT INTO postimage(picname,resname,resadd,opent,closet,restype,resspecial,usernameup)
VALUES('$fe','$resname','$resadd','$opentime','$cl','$restype','$resspec','$uu')";
if(!mysqli_query($conn,$query)){
	echo"error".mysqli_error($conn);
}else{
	header('Location:index.php');
}
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>