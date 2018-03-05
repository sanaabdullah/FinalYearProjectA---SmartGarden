<!DOCTYPE html>
<html lang="en" ng-app="crudApp">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Smart Garden</title>

    <!-- Bootstrap Core CSS -->
    <link href="SmartGarden/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="SmartGarden/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    
    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

    <!-- Custom CSS -->
    <link href="SmartGarden/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="SmartGarden/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="SmartGarden/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Include main CSS -->
     <link href="https://bootswatch.com/simplex/bootstrap.min.css" rel="stylesheet"/>

    <!-- Include jQuery library -->
    <script src="bootstrap-3.3.7-dist/js/jQuery/jquery.min.js"></script>

    <!-- Include AngularJS library -->
    <script src="bootstrap-3.3.7-dist/lib/angular/angular.min.js"></script>

    <!-- Include Bootstrap Javascript -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="angular-script-1.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--[endif]-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            <!-- Navbar heeader -->
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index1.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact Us</a></li> 
                        <li><a href="login.php">Login/Register</a></li> 
                        <li><a href="login.php">Product Registration</a></li>
                        <li><a href="product.php">Shop Now</a></li> 
                    </ul>
                </div>
                
                <a class="navbar-brand" href="index.php">Welcome to SmartGarden</a>
            </div>
            <!-- /end Navbar heeader -->

            <!-- .navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <button type="button" class="btn btn-default btn-sm pull-right" ng-click="logout();">
                    <span class="glyphicon glyphicon-log-out"></span> Log out
                </button>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Manual Settings</a>
                                </li>
                                <li>
                                    <a href="#">Advance Settings</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="temp.php"><i class="fa fa-dashboard fa-fw"></i> Setup</a>
                            
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Setup</h1>

                   
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			<div class="form-group">
					<a href="temp.php" class="btn btn-primary">Temperature Sensor</a>
					<a href="moist.php" class="btn btn-primary">Soil Moisture Sensor</a>
                    <a href="ldr.php" class="btn btn-primary">Light Dependent Resistor (LDR)</a>
					<a href="water.php" class="btn btn-primary">Water Level Sensor</a>
					<a href="light.php" class="btn btn-primary">Plant Grow Light Bulb</a>
                    <a href="fan.php" class="btn btn-primary">Ventilation Fan</a>
					<a href="valve.php" class="btn btn-primary">Solenoid Valve</a>
					<a href="pump.php" class="btn btn-primary">Water Pump</a>
                    
                </div>
            <div class="row">
                
                <!-- /.col-lg-8 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> DHT11 Temperature Sensor
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                           
								
<div class="col-lg-12" ng-controller="DbController">
	
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<div class="alert alert-default navbar-brand search-box">
				<button class="btn btn-primary" ng-show="show_form" ng-click="formToggle()">Add Temperature <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
			</div>
			
		<div class="alert alert-default input-group search-box">
			<span class="input-group-btn">
				<input type="text" class="form-control" placeholder="Search Temperature Details Into Database..." ng-model="search_query">
			</span>
		</div>
		</div>
	</nav>
	
	<div class="col-md-6 col-md-offset-3">

		<!-- Include form template which is used to insert data into database -->
		<div ng-include src="'forms/addTemp.html'"></div>

		<!-- Include form template which is used to edit and update data into database -->
		<div ng-include src="'forms/editTemp.html'"></div>
	</div>
	
<div class="clearfix"></div>

<!-- Table to show employee detalis -->
<div class="table-responsive">
	<table class="table table-hover">
		<tr>
			<th>Temperature Name</th>
			<th>GPIO</th>
			<th></th>
			<th></th>
		</tr>
		
		<tr ng-repeat="detail in details| filter:search_query">
		
			<td>{{detail.TempName}}</td>
			<td>{{detail.GPIO}}</td>
			<td>
				<button class="btn btn-warning" ng-click="editTempInfo(detail)" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
			</td>
			<td>
				<button class="btn btn-danger" ng-click="deleteTempInfo(detail)" title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
			</td>
		</tr>
	</table>
</div>
</div>
								
                            </div>
                            
                        </div>
                        <!-- /.panel-body -->
						
                    </div>
                    
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="SmartGarden/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="SmartGarden/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="SmartGarden/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="SmartGarden/vendor/raphael/raphael.min.js"></script>
    <script src="SmartGarden/vendor/morrisjs/morris.min.js"></script>
    <script src="SmartGarden/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="SmartGarden/dist/js/sb-admin-2.js"></script>

</body>

</html>
