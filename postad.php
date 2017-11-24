<?php
session_start();
if(!$_SESSION["user"])
header('location: index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Post Ad Form</title>


<link rel="stylesheet" type="text/css" href="css/bb.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="css/one-page-wonder.css" rel="stylesheet">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
</head>


<body>
	 


	


	<div class="container">

    <h1 class="well">Post Ad Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
		<style type="text/css">
			body{
				background: url(books.jpeg);
			}
			.hhh{
				background: black;
			}
		</style>

				<form method = POST  action="action.php" enctype="multipart/form-data">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Ad Title</label>
								<input type="text" placeholder="Enter Title" name = "title" class="form-control">
							</div>
							
						</div>
						<div class= "row col-sm-6 form-group">
						<label>Select Branch:
							<select name="branch">
								<option value = "Computer Science">Computer Science</option>
								<option value = "Information Science">Information Science</option>
								<option value = "Mechnical">Mechnical</option>
							</select>
						</div>	
						<div class= "row col-sm-12 form-group">
						<label>Select Semester:
							<select name="semester">
								<option value = "1">1st</option>
								<option value = "2">2nd</option>
								<option value = "3">3rd</option>
								<option value = "4">4th</option>
								<option value = "5">5th</option>
								<option value ="6">6th</option>
								<option value = "7">7th</option>
								<option value = "8">8th</option>
								
							</select>
						</div>	
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Select Subject:
							<select name="subject">
								<option value ="DataStruture">DataStruture</option>
								<option value ="Java">Java</option>
								<option value = "Discrete Maths">Discrete Maths</option>
								<option value = "Unix">Unix</option>
								
								
							</select>
							</div>	
							<div class="col-sm-12 form-group">
								<label>Description</label>
								<input type="text" placeholder="Enter Description of your book" name="description" class="form-control">
							</div>	
							<div class="col-sm-12 form-group">
								<label>Price</label>
								<input type="text" placeholder="Enter Price"name = "price" class="form-control">
							</div>		
						</div>
						<div class="row col-sm-6">
						
						<label>Upload Your image</label>
  						<input type="file" name="fileToUpload" id="fileToUpload">
  						<input type="submit" class="btn btn-lg btn-info" value="submit" name="submit">
						</form>
				</div>
				
	</div>
	</div>
<script type="text/javascript" src ="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>
