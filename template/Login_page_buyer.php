<!DOCTYPE html>
<html lang="en" ng-app="myApp">

  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
          <title>Welcome to Smart Garden</title>
          <!-- Bootstrap -->
          <link href="css/bootstrap.min.css" rel="stylesheet">
          
         <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

              <link href="css/toaster.css" rel="stylesheet">

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]><link href= "css/bootstrap-theme.css"rel= "stylesheet" >

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
              </head>

 <body ng-cloak="">
   <nav class="navbar navbar-default navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Smart Garden</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
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
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="product.php">Shop Now</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
            
     
     
     
     
     
     <form action="" method="post" class="w3-container w3-card-4 w3-light-grey" style="max-width: 500px; margin: auto; padding: 50px;; margin-top: 100px; margin-bottom: 100px;">
            <h5 id="success1" class="alert alert-success alert-dismissable fade in" style="display:none;color:green;">&#10004; Success, check your email for new password!</h5>
            <h2 class="w3-center">Customer Login</h2>
            <hr/>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="username" type="text" placeholder="Email">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="password" type="password" placeholder="Password">
                </div>
            </div>
            <a onclick="document.getElementById('success1').style.display='block';" href="#">FORGOT PASSWORD ?</a>
            <button name="submit" type="submit" value="loginb" class="w3-button w3-xlarge w3-block w3-section w3-green w3-ripple w3-padding">Login</button>
            <p>Not a member? <a href="Signup_page_buyer.php">Sign Up Now</a></p>
        </form>
     
     
     
     
     
     
     
    </body>
  <toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
  <!-- Libs -->
  <script src="js/angular.min.js"></script>
  <script src="js/angular-route.min.js"></script>
  <script src="js/angular-animate.min.js" ></script>
  <script src="js/toaster.js"></script>
  <script src="app/app.js"></script>
  <script src="app/data.js"></script>
  <script src="app/directives.js"></script>
  <script src="app/authCtrl.js"></script>
</html>

