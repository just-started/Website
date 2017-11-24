<?php
session_start();
if(!$_SESSION["user"])
header('location: index.php');
?>
<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ad-page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

  </head>
  <style type="text/css">
    body{
      background: url('books.jpeg');
    }
  </style>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SellIt-Now</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              
		<li class="nav-item">
              <a class="nav-link" href="#">Welcome <?php

echo($_SESSION["user"])

?></a>
            </li>
              <a class="nav-link" href="homepage.php">Home
                <span class="sr-only"></span>
              </a>
            
            <li class="nav-item">
              <a class="nav-link" href="postad.php">Post Ad</a>
            </li>
	    <li class="nav-item nav-item active">
              <a class="nav-link ">SeeAd<span class="sr-only">(current)</span></a>
            </li>
            
		<li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Books 
        <small></small>
      </h1>
      <?php
    require 'require.php';
    $sql ="SELECT Ad_Title,Branch,Semester,Subject,Description,Price,Image,user FROM Advertisement";
	
$result = mysqli_query($con,$sql) ;



    $arr=array('Ad_Title'=>array(),'Branch'=>array(),'Semester'=>array(),'Subject'=>array(),'Description'=>array(),'Price'=>array(),'Image'=>array(),'User'=>array());
    $i=0;
    while($row=mysqli_fetch_assoc($result))
	{
		$arr['User'][$i]=$row['user'];
		$arr['Ad_Title'][$i]=$row['Ad_Title'];
		$arr['Image'][$i]=$row['Image'];
		$arr['Price'][$i]=$row['Price'];
		$arr['Description'][$i++]=$row['Description'];
	}?>
	<div class="row">
	<?php 
	for($j=0;$j<$i;$j++){
$l="email.php?x=".$arr['User'][$j];

    ?>
      
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="<?php echo $arr['Image'][$j]; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $arr['Ad_Title'][$j]; ?></a>
              </h4>
              <p class="card-text"><?php echo  $arr['Description'][$j]; ?></p>
	      <p class="card-text">Price <?php echo  $arr['Price'][$j]; ?>Rs</p>
              <button type="button" class="btn btn-danger"><a href = "<?php echo $l; ?>" >Contact Seller</button>
            </div>
          </div>
        </div>
	<?php
	}
	?>
       
	</div>
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

   
	
			
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; SellIt-Now 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
