<?php
session_start();
if(!$_SESSION["user"])
header('location: index.php');
else
{

$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo $target_file;
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
	die();
    }
}

$title=$_POST["title"];
$branch=$_POST["branch"];
$sem=$_POST["semester"];
$sub=$_POST["subject"];
$desc=$_POST["description"];
$price=$_POST["price"];
$u=$_SESSION["user"];

$f= $_FILES["fileToUpload"]["name"];
$i=$f;
echo $i;
$con=mysqli_connect("localhost","md","12345678","Project");
    if (mysqli_connect_errno($con)) 
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }



 $sql="INSERT INTO Advertisement (`Ad_title`,`Branch`,`Semester`,`Subject`,`Description`,`Price`,`user`,`image`) VALUES('$title','$branch','$sem','$sub','$desc','$price','$u','$i')";
echo $sql;
$result = mysqli_query($con,$sql) ;

if($result)
{
	echo "Successful";
	header('location: homepage.php');
	
       
}
else
{
	echo "notdone";
}


}
?>
