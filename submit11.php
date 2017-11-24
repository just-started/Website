<?php
session_start();

$u=$_POST["email"];
$v = $_POST["password"];
$p=md5($v);

$con=mysqli_connect("localhost","md","12345678","Project");
    if (mysqli_connect_errno($con)) 
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    
   $sql = "SELECT * FROM Login WHERE Username ='$u' AND Password = '$p'";
   $result=mysqli_query($con,$sql);
   if($result)
   {
   
 
   if(mysqli_num_rows($result)==0)
   {
   	echo "login failed";
   }
   else
   {
   	if(mysqli_num_rows($result)==1)
   	{
		$_SESSION["user"]=$u;
   		header('Location: homepage.php');
   	}
   	else
   	{
   		echo "error";
   	}
   }
  }
else
   	echo"unsucessfulresult";
   ?>
