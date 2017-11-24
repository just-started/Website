<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
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
    <h1 class="well">Sign Up</h1>
	<div class="col-lg-12 well">
	<div class="row">
			<form method="post" action=submit.php>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." name="firstname" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." name="lastname" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class ="col-sm-6 form-group">
								<label>Username</label>
								<input type="text" placeholder="Enter Username" name="username" class="form-control">
							</div>
							<div class ="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" placeholder="Enter Password" name="password" class="form-control">
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" name="address" class="form-control"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" placeholder="Enter City Name Here.." name="city" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" placeholder="Enter State Name Here.." name="state" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" placeholder="Enter Zip Code Here.." name="zip" class="form-control">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Country</label>
								<input type="text" placeholder="Type the country " name="country" class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>College</label>
								<input type="text" placeholder="Enter College Name Here.." name="college" class="form-control">
							</div>	
						</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" placeholder="Enter Phone Number Here.." name="phone" class="form-control">
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" placeholder="Enter Email Address Here.." name="email" class="form-control">
					</div>	
					<div class="form-group">
						<label>Security question</label>
						<input type="text" placeholder="Enter Security question here" name="security" class="form-control">
					</div>
					<div class="form-group">
						<label>Security Answer</label>
						<input type="text" placeholder="Enter Security answer here" name="securitya" class="form-control">
					</div>
					<input type="submit" class="btn btn-lg btn-info">
					If already login click <a href="login.php">here</a>					
					</div>
				</form> 
				</div>
	</div>
	</div>

</body>
</html>
