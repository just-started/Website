<?php 
$x=$_GET['x'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>

<link rel="stylesheet" type="text/css" href="css/bb.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<body>
	<style>
	body{
		background: url('books.jpeg');
	}

   </style>
	<div class="container">
    <h1 class="well">Enter Your Details</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="post" action=email.php>
					<div class="col-sm-12">
						
						<div class="row">
							<div class ="col-sm-12 form-group ">
								<label>Name</label>
								<input type="text" name = "name" placeholder="Enter Your Name" class="form-control">
							</div>
							<div class ="col-sm-12 form-group">
								<label>Email</label>
								<input type="email" name = "email" placeholder="Enter Your Email-id" class="form-control">
							</div>
						</div>	
							<div class ="col-sm-12 form-group row">
								<label>Phone.No</label>
								<input type="text" name = "phone" placeholder="Enter Your Phone No." class="form-control">						<input type="hidden" name = "x" value ="<?php echo $x; ?>">
							</div>
							
							<div class ="col-sm-12 form-group row">
								
								<input type="submit" class="btn btn-lg btn-info">
							</div>
						</div>
				</form>				
						
				</div>
	</div>
	</div>

</body>
</html>`
