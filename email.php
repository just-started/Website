
<?php 
session_start();
if(!$_SESSION["user"])
header('location: index.php');
$x=$_GET['x'];

//jo ad dala  hai usma username seller

$con=mysqli_connect("localhost","md","12345678","Project");
    if (mysqli_connect_errno($con)) 
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
     
	//$v = user jo dekh raha hai (buyer) ka username
	$v= $_SESSION["user"];
	
  // $x=$_POST["x"];
	//$name=$_POST["name"];
	//$last=$_POST["email"];
	//$phone=$_POST["phone"];
	$headers = "From: jainparas249@gmail.com\r\n";
//	$msg = "Name of Person: ".$name."\nPhone.no of the person ".$phone."\nIts Email-id ".$last;
	$msg1= "Welcome to SellIt-Now \n Your details has been sent to seller.";
	$sql = 	"SELECT email FROM SignUp WHERE Username='$x'";

       
	$sql1 = "SELECT email,First_Name,Last_Name,Phone_Number FROM SignUp WHERE Username= '$v'";
	
	
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result))
	{
		$mail=$row['email'];

	}
        // buyer ka email  id fetch karne ke liya
	$result1=mysqli_query($con,$sql1);
	
	while($row1=mysqli_fetch_array($result1))
	{
		$mail1=$row1['email'];
		$fname = $row1['First_Name'];
		$lname = $row1['Last_Name'];
		$pno = $row1['Phone_Number'];
		
	}
	$sql2 = "INSERT INTO Intimation_Info (Viewer_Uname,Viewer_Email,Advertiser_Uname,Advertiser_Email) VALUES ('$fname','$mail1','$x','$mail')";
	$result3=mysqli_query($con,$sql2);
	
	

	
	$msg = "Name of Person: ".$fname." ".$lname."\nPhone no of the Person : ".$pno."\nEmail id : ".$mail1;



if(mail($mail1,"SellIt-Now",$msg1)){
   
} else{
    echo 'Unable to send email. Please try again.';
}	

// sending mail to the person to seller

if(mail($mail,"SellIt-Now",$msg)){
   header('Location: homepage.php');
} else{
    echo 'Unable to send email. Please try again.';
}



?>
