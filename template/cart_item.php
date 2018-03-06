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

        th
        {
            padding: 15px;
            background-color: lightgray;
            padding-left: 20px;
            padding-right: 20px;
        }
        td
        {
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .row 
        {
            padding: 0;
            margin: 0;
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
      
    <!-- Show a list of products (retrived from database) -->
    <div style="max-width:1200px; padding:50px; background-color: white; margin:auto;">
        <div class="row" style="max-width:900px; padding:50px; background-color: white; margin:auto;">
            <table style="max-width:900px; background-color: white; margin:auto;text-align: center;"> 

            <?php
                $pt=0;
                $con = mysqli_connect("localhost","root","","angularcode");

                // Check connection
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $sql="SELECT * FROM cart WHERE buyer_id='200'";
                $result=mysqli_query($con,$sql);

                $x = 1;

                echo "
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price (RM)</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                ";

                while ($row = mysqli_fetch_assoc($result)) 
                {  
                    $recordID=$row['cartID'];
                    $quantity_order=1;
                    $productID = $row['product_id'];

                    $sql="SELECT * FROM products where ID = $productID";
                    $result=mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                            $image = $row['image_location'];
                            $pt+=($row['price']*$quantity_order);
                            echo "
                                <tr>
                                    <td>".$x."</td>
                                    <td><a><img src='$image' alt='img' height='50'></a></td>
                                    <td><a href='product-zoom-in.php?id=". $productID."'>". $row['name']."</a></td>
                                    <td>". $row['price']."</td>
                                    <td>". $quantity_order."</td> <!-- thinking to make the quantity to let the user + and - -->
                                    <td><a href='php/delete_cart.php?id=".$recordID."'>Delete</a></td>
                                </tr>
                            ";
                            $x += 1;
                        }
                }

                echo "
                    <tr>
                        <td colspan='5' style='text-align:right;'><h2>Total:</h2></td>
                        <td><h2>$pt</h2></td>
                    </tr>
                ";
            ?>
            </table> <hr/>
        </div>

        <!-- Checkout Button -->
        <div style="margin: auto;text-align: center;">
            <form method="post" action="index1.php">
                <button name="submit" type="submit" value="Checkout" id="check2" name="check2" class="w3-button w3-xlarge w3-block w3-section w3-hover-green w3-grey w3-ripple w3-padding">CHECK OUT</button>
            </form>
        </div>
        <!-- /End Checkout Button -->
    </div>
    <!-- /End Show a list of products (retrived from database) -->

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
