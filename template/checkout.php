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
    <!-- Banner -->
    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">
        Smart Garden
    </div>

    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">
        Swinburne University | Kuching, SWK 93350 | +60143988314
    </div>
    <!-- /End Banner -->

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
    <!-- /End Navigation -->

    <div style="max-width:1200px; padding:40px; background-color: white; margin:auto;">
            <div class="row" style="max-width:1000px; padding:30px; background-color: white; margin:auto;">
                <div class="col-sm-7 container" style="padding:0px; background-color: white; margin:auto;">
                    <div class="panel panel-info">
                        <div class="panel-heading">Select Preferrred Date, Time &amp; Shipping Address</div>
                        <div class="panel-body">
                            <?php
                                if (isset($_SESSION['logged']) && $_SESSION['logged']==true) {
                                    if ($_SESSION['Address'] != NULL)
                                    {
                                        $add  = $_SESSION['Address'];
                                        $pieces = explode(",", $add);

                                         echo "
                                         <div style='padding:30px; background-color: white; margin:auto;'>
                                            <p><span class='span1'><h2><i class='glyphicon glyphicon-home'></i>&nbsp; &nbsp;Address: </h2><br/><h4>" .$pieces[0]."<br/>".$pieces[1]."<br/>".$pieces[2]." </h4></span></p>
                                            <br/>
                                             <div style='background-color: white; margin:auto;'>
                                                <p>
                                                    <strong><u>Delivery Information</u></strong><br/>
                                                    Standard Delivery: FREE<br/>
                                                    Get it Tue, 21 - Mon, 27 Nov 2017<br/>
                                                </p>
                                                <br/><br/>
                                                <form novalidate='novalidate' name='myForm' method='post' action='#'> 
                                                    <h3>Preferred Delivery Time</h3>
                                                    <hr/>
                                                    <div class='w3-container w3-white' style='max-width: 700px; padding: 50px; padding-top: 0px;'>
                                                        <h4>Category:</h4>
                                                            <select class='w3-select' id='pt' name='pt'>
                                                                <option value='morning'>Morning (8:30am - 12:00nn)</option>
                                                                <option value='afternoon'>Afternoon (12:00nn - 3:00pm)</option>
                                                                <option value='evening'>Evening (3:00pm - 6:00pm)</option>
                                                                <option value='Anytime'>Any time (8:30am - 6:00pm)</option>
                                                            </select>
                                                    </div>
                                                    <br/><br/>
                                                    <button type='submit' name='sub' id='sub' class='w3-button w3-xlarge w3-blue w3-hover-grey'>PAY NOW</button> 
                                                </form>
                                            </div>
                                            </div>
                                             ";
                                        
                                    }
                                    else
                                    {
                                        echo "
                                        <div id='sign_in_div' style='margin: auto; background-color: white;'>
                                            <form novalidate='novalidate' name='myForm' method='post' action='#'> <br/>
                                                <h3>Add New Address:</h3><hr/>
                                                <fieldset>
                                                    <!-- NAME -->
                                                    <label for='fn' >* FULL NAME</label>
                                                    <input type='text' id='fn' name='fn' data-ng-model='user.firstname' pattern='[A-Za-z\s]*' required/><br/>

                                                    <!-- ADDRESS -->
                                                    <label for='ad' >* ADDRESS</label>
                                                    <textarea id='ad' name='ad' data-ng-model='user.ad' style='width:174px;height:59px;' required></textarea>
                                                    <br/>

                                                    <!-- POSTCODE -->
                                                    <label for='ps' >* POSTCODE</label>
                                                    <input type='text' id='ps' name='ps' data-ng-model='user.ps' required/>
                                                    <br/>

                                                    <!-- MOBILE NUMBER -->
                                                    <label for='mn' >* MOBILE NUMBER</label>
                                                    <input type='text' id='mn' name='mn' data-ng-model='user.mn' required/>
                                                    <br/><br/><br/>

                                                    <div style='background-color: white; margin:auto;'>
                                                        <p>
                                                            <strong><u>Delivery Information</u></strong><br/>
                                                            Standard Delivery: FREE<br/>
                                                            Get it Tue, 21 - Mon, 27 Nov 2017<br/>
                                                        </p>
                                                    </div>
                                                    <br/><br/>
                                                    <h3>Preferred Delivery Time</h3>
                                                    <hr/>
                                                    <div class='w3-container w3-white' style='max-width: 700px; padding: 50px; padding-top: 0px;'>
                                                        <h4>Category:</h4>
                                                            <select class='w3-select' id='pt' name='pt'>
                                                                <option value='morning'>Morning (8:30am - 12:00nn)</option>
                                                                <option value='afternoon'>Afternoon (12:00nn - 3:00pm)</option>
                                                                <option value='evening'>Evening (3:00pm - 6:00pm)</option>
                                                                <option value='Anytime'>Any time (8:30am - 6:00pm)</option>
                                                            </select>
                                                    </div>
                                                    <br/><br/>
                                                    <button type='submit' name='check3' id='sub' class='w3-button w3-xlarge w3-blue w3-hover-grey'>PAY NOW</button>
                                                </fieldset>
                                            </form>  
                                            </div>
                                            ";
                                    }
                                }
                               
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1 container" style="padding:20px; background-color: white; margin:auto;"></div>
                <div class="col-sm-4 container" style="padding:0px; background-color: white; margin:auto;">
                    <div class="panel panel-info">
                        <div class="panel-heading">Order Summary</div>
                        <div class="panel-body">
                            <table style="width:100%;background-color: white; margin:auto;text-align: left;"> 
                                <?php
                                    $pt=0;
									$totalItem=0;
									$buyerID=$_SESSION['ID'];
                                    $connection = mysql_connect("localhost", "root", "");
                                    $db=mysql_select_db("ecomm",$connection);
                                    $query=mysql_query("SELECT * FROM cart WHERE buyer_id=$buyerID", $connection);

                                    if (!$query) {
                                        die("Error: ".mysql_error());
                                    }
                                    echo "
                                        <tr>
                                            <th>Product</th>
                                            <th style='text-align: center;'>Price (RM)</th>
                                            <th style='text-align: center;'>Quantity</th>
                                        </tr>
                                    ";

                                    while ($row = mysql_fetch_assoc($query)) 
                                    {  

                                        $productID = $row['product_id'];
										$quantity_order=$row['quantity_in'];
                                        $sql=mysql_query("SELECT * FROM products where ID = $productID", $connection);
										while ($row = mysql_fetch_assoc($sql)) {
											$image = $row['image_location'];
											$pt+=($row['promo_price']*$quantity_order);
											$totalItem +=$quantity_order;
											echo "
												<tr>
													<td>".$row['name']."</td>
													<td style='text-align: center;'>". $row['promo_price']."</td>
													<td style='text-align: center;'>". $quantity_order."</td> <!-- thinking to make the quantity to let the user + and - -->
												</tr>
											";
										}
                                    }


                                ?>
                                    <?php 
                                        echo "
                                            <tr>
                                                <td style='text-align:center;'><h3>Total:</h3></td>
                                                <td colspan='2'><h3>$pt</h3></td>
                                            </tr>
                                        ";
                                    ?>
                             </table> 
                        </div>
                    </div>
                </div>				
             </div>
			 <div class="row" style="max-width:1000px; padding:30px; background-color: white; margin:auto;">
				 <?php
					if(isset($_POST['sub'])) {
						$conn=mysql_connect("localhost","root","");
						$buyerID=$_SESSION['ID'];
						$delivery=$_POST['pt'];
						$db=mysql_select_db("ecomm",$conn);
						$query=mysql_query("INSERT INTO purchase (noItem,totalAmount,deliveryTime,address,buyerID)
							VALUES ('$totalItem','$pt','$delivery','$add','$buyerID')",$conn);
						$lastID=mysql_insert_id();


						$sql=mysql_query("SELECT * FROM cart WHERE buyer_id=$buyerID", $connection);
						while ($row = mysql_fetch_assoc($sql)) 
						{  
							$productID = $row['product_id'];
							$quantity_order=$row['quantity_in'];
							$sql2=mysql_query("SELECT * FROM products where ID = $productID", $connection);

							while ($row = mysql_fetch_assoc($sql2)) {

								$seller_id=$row['seller_id'];
								$query2=mysql_query("INSERT INTO orderdetails (buyerID,sellerID,productID,orderQuantity,purchaseID)
									VALUES ('$buyerID','$seller_id','$productID','$quantity_order','$lastID')",$conn);
							}
						}
						$query3=mysql_query("DELETE FROM cart WHERE buyer_id = $buyerID", $conn);
						mysql_query($query3);
						$_SESSION['purchaseID']=$lastID;
						if (!$query) {
							die("Error ".mysql_error());
							# code...
						}
						$buyerName = $_POST['first_name'];
						$pieces = explode(",", $add);
						echo " <div class='panel panel-info'>
								<div class='panel-heading'>Purchase Summary</div>
								<div class='panel-body'>
									<h2>Order Number: $lastID </h2><br/>
									<h4>To:</h4>
									<h5>$buyerName</h5>
									<h5>$pieces[0]</h5>
									<h5>$pieces[1]</h5>
									<h5>$pieces[2]</h5><br/>
									<h4>Total Item purchased: $totalItem</h4>
									<h4>Total Amount: RM$pt</h4>
									<h4>Preferred Delivery Time: $delivery</h4>
								</div>
							</div>
							";
					}							
				?>
				 <?php
					if(isset($_POST['check3'])) {
						$conn=mysql_connect("localhost","root","");
						$buyerID=$_SESSION['ID'];
						$delivery=$_POST['pt'];
						$add=$_POST['ad'];
						$db=mysql_select_db("ecomm",$conn);
						$query=mysql_query("INSERT INTO purchase (noItem,totalAmount,deliveryTime,address,buyerID)
							VALUES ('$totalItem','$pt','$delivery','$add','$buyerID')",$conn);
						$lastID=mysql_insert_id();


						$sql=mysql_query("SELECT * FROM cart WHERE buyer_id=$buyerID", $connection);
						while ($row = mysql_fetch_assoc($sql)) 
						{  
							$productID = $row['product_id'];
							$quantity_order=$row['quantity_in'];
							$sql2=mysql_query("SELECT * FROM products where ID = $productID", $connection);

							while ($row = mysql_fetch_assoc($sql2)) {

								$seller_id=$row['seller_id'];
								$query2=mysql_query("INSERT INTO orderdetails (buyerID,sellerID,productID,orderQuantity,purchaseID)
									VALUES ('$buyerID','$seller_id','$productID','$quantity_order','$lastID')",$conn);
							}
						}
						$query3=mysql_query("DELETE FROM cart WHERE buyer_id = $buyerID", $conn);
						mysql_query($query3);
						$_SESSION['purchaseID']=$lastID;
						if (!$query) {
							die("Error ".mysql_error());
							# code...
						}
						$buyerName = $_POST['fn'];
						$pieces = explode(",", $add);
						echo " <div class='panel panel-info'>
								<div class='panel-heading'>Purchase Summary</div>
								<div class='panel-body'>
									<h2>Order Number: $lastID </h2><br/>
									<h4>To:</h4>
									<h5>$buyerName</h5>
									<h5>$pieces[0]</h5>
									<h5>$pieces[1]</h5>
									<h5>".$_POST['ps']."</h5><br/>
									<h4>Total Item purchased: $totalItem</h4>
									<h4>Total Amount: RM$pt</h4>
									<h4>Preferred Delivery Time: $delivery</h4>
								</div>
							</div>
							";
					}							
				?>
			 </div>
        </div>  
      
    <!-- Footer -->
    <footer class="bg-faded text-center py-5">
        <div class="container">
            <p class="m-0">Copyright &copy; Smart Garden 2017</p>
        </div>
    </footer>
    <!-- /End Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
