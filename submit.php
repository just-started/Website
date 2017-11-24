<?php


$first=$_POST["firstname"];
$last=$_POST["lastname"];
$user=$_POST["username"];
$password=$_POST["password"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zip"];
$country=$_POST["country"];
$college=$_POST["college"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$security=$_POST["security"];
$securitya=$_POST["securitya"];
$p=md5($password);

    $con=mysqli_connect("localhost","md","12345678","Project");
    if (mysqli_connect_errno($con)) 
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    


    $sql="INSERT INTO SignUp(`First_Name`,`Last_name`,`Username`,`Password`,`Address`,`City`,`State`,`ZIP`,`Country`,`College`,`Phone_Number`,`email`,`Security_Question`,`Security_Answer`) VALUES('$first','$last','$user','$p','$address','$city','$state',$zip,'$country','$college',$phone,'$email','$security','$securitya')";

$result = mysqli_query($con,$sql) ;

if($result)
{
	echo "Successful";
        header('Location: login.php');
}
else
{
	echo "Retry user not created";
}


?>
