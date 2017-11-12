<!DOCTYPE html>
<html lang="en">

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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--[endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    
                </button>
                <a class="navbar-brand" href="index.html">Welcome to SmartGarden</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
       <button type="button" class="btn btn-default btn-sm" ng-click="logout();">
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
                                    <a href="manual_settings.php">Manual Settings</a>
                                </li>
                                <li>
                                    <a href="advance_settings.php">Advance Settings</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
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
                    <h1 class="page-header">Dashboard</h1>

                    <?php
						function getData($sensor)
						{
							$row = 1;
							$filename = "" . $sensor . ".csv";
							// echo "The file name is $filename";
							
							if (($handle = fopen($filename, "r")) !== FALSE) 
							{
								while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
								{
									$num = count($data);
									$row++;
									// $dates = $data[0] ;
									$datas = $data[1] ;
								}
								fclose($handle);
								return $datas;
							}
						}
                    ?>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div style="text-align: center;">
                                    <h4>Temperature</h4>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div style="max-width: 150px; margin: auto; padding: 0px; text-align: center;">
                                    <?php
										$data = getData("temperature");
										sleep(5);
										echo "<h1>$data &#8451; </h1>";
                                    ?>
                                    <h5 style="color: black;">Best: 25&#8451; - 30&#8451;</h5>
                                    <br/>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">View History</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div style="text-align: center;">
                                    <h4>Water Level</h4>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div style="max-width: 150px; margin: auto; padding: 0px; text-align: center;">
                                    <?php
										$data = getData("water_level");
										echo "<h1>$data</h1>";
                                    ?>
                                    <h5 style="color: black;">Enough water</h5>
                                    <br/>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">View History</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div style="text-align: center;">
                                    <h4>Humidity</h4>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div style="max-width: 150px; margin: auto; padding: 0px; text-align: center;">
                                    <?php
                                   do
                                    {
                                        $data = getData("humidity");
										echo "<h1>$data %</h1>";
                                    }
                                    while(sleep(1))
										
                                    ?>
                                    <h5 style="color: black;">Best: 20% - 35% </h5>
                                    <br/>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">View History</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div style="text-align: center;">
                                    <h4>Next Watering Event</h4>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div style="max-width: 150px; margin: auto; padding: 0px; text-align: center;">
                                    <h1>12:39pm</h1>
                                    <h5 style="color: black;">Next event: 1:39pm</h5>
                                    <br/>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">View History</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div style="text-align: center;">
                                    <h4>Plant Grow Light</h4>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div style="max-width: 150px; margin: auto; padding: 0px; text-align: center;">
                                    <img src="SmartGarden/pages/lightbulb.png" height="75"/>
                                    <?php
										$data = getData("Light_bulb");
										echo "<h4>$data</h4>";
                                    ?>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">View History</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div style="text-align: center;">
                                    <h4>Ventilation Fan</h4>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div style="max-width: 150px; margin: auto; padding: 0px; text-align: center;">
                                    <img src="SmartGarden/pages/fan.png" height="75"/>
                                     <?php
										$data = getData("Ventilation_fan");
										echo "<h4>$data</h4>";
                                    ?>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">View History</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div style="text-align: center;">
                                    <h4>Water Pump</h4>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div style="max-width: 150px; margin: auto; padding: 0px; text-align: center;">
                                    <img src="SmartGarden/pages/water.png" height="75"/>
                                    <?php
										$data = getData("water_pump");
										echo "<h4>$data</h4>";
                                    ?>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">View History</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div style="text-align: center;">
                                    <h4>Weather</h4>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div style="max-width: 150px; margin: auto; padding: 0px; text-align: center;">
                                    <img src="SmartGarden/pages/rain.png" height="75"/>
                                    <h4>Raining</h4>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">View History</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                
                
                
            </div>
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
