<?php
	
	
	$con=mysqli_connect("localhost","md","12345678","Project");
	
    	if (mysqli_connect_errno($con)) 
    	{
       		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
    	}
	
?>
