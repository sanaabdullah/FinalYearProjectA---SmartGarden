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
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
		<style>
			.row 
			{
				padding: 0;
				margin: 0;
			}
            .sign_in_a
            {
                padding: 10px;
                margin: 5px;
                width: 150px;
            }
            a
            {
                color: blue;
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
              <a class="nav-link text-uppercase text-expanded" href="login.php">Login/Register</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="registration.php">Product Registration</a>
            </li>            
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="product.php">Shop Now</a>
            </li>
              <li>
                  <a href='cart_item.php'><span class='glyphicon glyphicon-shopping-cart'></span></a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <div style="max-width:1200px; padding:50px; background-color: white; margin:auto;">
            <div class="row">
				<?php 
                    
					$received_id = $_GET['id'];
					$con = mysqli_connect("localhost","root","","angularcode");
                
                    // Check connection
                    if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $sql="SELECT * FROM products WHERE ID = $received_id";
                    $result=mysqli_query($con,$sql);
					
                    while ($row = mysqli_fetch_assoc($result)) {
				
                        $name = $row['name'];
						$image = $row['image_location'];
						$price = $row['price'];
						$desc = $row['description'];
                        $quantity = $row['quantity'];
						
					}					
				?>
				
                
            </div>
            <div class="row" style="padding:20px;">
                <div class="col-sm-6">
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $name;?></h1>
                    <img src="<?php echo $image;?>" alt="item1" style="width:400px; height:400px; display: block; margin: 0 auto; border: 1px solid black;"/>
                </div>
                <div class="col-sm-6"><br/><br/><br/>
                    <h4><b>Description:</b></h4>
                    <ul>
                        <li><?php echo $desc;?></li>
                    </ul>
                    <hr/>
                    <h1>PRICE</h1>
                    <h5>Now It's just <span style="font-size: 300%;"><?php echo "RM ".$price;?></span></h5>
                    <br/><br/>
                    <div style="max-width: 200px; margin: auto;">
						<?php
								echo "
										<form method='post'>
											<input type='number' name='qu' id='qu' min='1' value='1' style='width: 60px;'>
											<input type='submit' name='check2' id='check2' value='Add to Cart' style='padding:10px 20px 10px 20px; font-size:120%;'>  
										</form> 
									";	

                        ?>
                        <?php 
							if(isset($_POST['check2'])) 
                            {
								$conn=mysql_connect("localhost","root","");
								// $buyerID=$_SESSION['ID'];
                                $received_id = $_GET['id'];
								$quantityReq=$_POST['qu'];
								$db=mysql_select_db("angularcode",$conn);
                        
                                // Dummies data for the buyer_id, since that the log in function is in MAINTANENCE. Should be make it $buyerID once maintanence is done.
								$query=mysql_query("INSERT INTO cart (buyer_id,product_id,quantity_id)
									VALUES ('100','1','1')",$conn);
                        
								if (!$query) {
									die("Error ".mysql_error());
									# code...
								}
                            }
						?>
                    </div>
                </div>
            </div>
            <hr/>
            <div>
                <h1>Shipping &#38; Policies:</h1>
                <br/>
                <div style="max-width: 1000px; margin: auto;">
                    <p><strong>Shipping fee:</strong><br/> 
                        West Malaysia: <strong>RM 8</strong> | East Malaysia: <strong>RM 10</strong> | Outside Malaysia: <strong>RM 20</strong>
                    </p><br/>
                    <p>Your order will arrive between Monday - Friday except public holidays.</p>
                    <p>No warranty for this item. Item sold are not refundable.</p>
                    <p>For more information, check out our <a href="#">FAQ</a> on deliveries.</p>
                    <br/>
                </div>
            </div>
            <hr/>
            <div>
                <h1>Ratings &#38; Reviews: </h1>
                <br/><br/>
                <div style="text-align: center;">
                    <h1> &nbsp; &nbsp; 
                        <span class="glyphicon glyphicon-star"></span>&nbsp;
                        <span class="glyphicon glyphicon-star"></span>&nbsp;
                        <span class="glyphicon glyphicon-star"></span>&nbsp;
                        <span class="glyphicon glyphicon-star"></span>&nbsp;
                        <span class="glyphicon glyphicon-star-empty"></span>&nbsp;&nbsp;&nbsp;
                        4.25 stars
                    </h1>
                </div>
                <br/><br/><br/>
                <div style="max-width: 700px; margin: auto;">
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span><b>Title of Review:</b></span>
                    </p>
                    <p>Description of the review.</p>
                    <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[Review Date]</p>
                    <hr/>
                </div>
                <div style="max-width: 700px; margin: auto;">
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span><b>Title of Review:</b></span>
                    </p>
                    <p>Description of the review.</p>
                    <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[Review Date]</p>
                    <hr/>
                </div>
                <div style="max-width: 700px; margin: auto;">
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span><b>Title of Review:</b></span>
                    </p>
                    <p>Description of the review.</p>
                    <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[Review Date]</p>
                    <hr/>
                </div>
                <div style="max-width: 700px; margin: auto;">
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span><b>Title of Review:</b></span>
                    </p>
                    <p>Description of the review.</p>
                    <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[Review Date]</p>
                    <hr/>
                </div>
            </div>
        </div>
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
