<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Smart Garden</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
		<style>
			.jumbotron
			{
				text-align: center;
				height: 300px;
			}
			p.title 
			{
				font-size: 50px;
				padding-top: 150px;
				color: white;
			}
			nav.ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				width: 200px;
				background-color: #f1f1f1;
				border: 1px solid #555;
			}

			li a {
				display: block;
				color: #000;
				padding: 8px 16px;
				text-decoration: none;
			}

			li {
				text-align: center;
				border-bottom: 1px solid #555;
			}

			

			li a.active {
				background-color: dimgray;
				color: white;
			}

			li a:hover:not(.active) {
				background-color: #555;
				color: white;
			}
		</style>
  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Smart Garden</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Swinburne University | Kuching, SWK 93350 | +60143988314</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Smart Garden</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index1.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="authentication/index.php">Login/Register</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="product.php">Shop Now</a>
            </li>
                            <li>
                  <a href='cart_item.php'><span class='glyphicon glyphicon-shopping-cart'></span></a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <div>
        <div class="container">
        	<div class="row">
        		<div class="col-md-9 col-xs-9" style="background-color: #eeeeee; margin: auto; padding: 50px; margin-top: 20px;">
					<div class="row" style="padding-top: 50px;">
						<?php

							$connection = mysql_connect("localhost", "root", "");
							$db=mysql_select_db("angularcode",$connection);
							$query=mysql_query("SELECT * FROM products", $connection);
							
							if (!$query) {
								die("Error: ".mysql_error());
							}

							while ($row = mysql_fetch_assoc($query)) {
								$image = $row["image_location"];

								echo 
									"<div class='col-md-4 col-xs-4'>
										<a href='product-zoom-in.php?id=". $row['ID']."'>
										<img src='$image' alt='img' ' height='250'></a>
										<p style='padding-top: 10px; font-size: small;'>". $row["name"]. "</p>
										<p style='text-align: right; font-size: medium;'>RM". $row["price"]. "</p>
									</div>";
							}
						?>
					</div>
				</div>
			</div>
        </div>
      

    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; Smart Garden 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
