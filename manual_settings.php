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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manual Settings for SmartGarden
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group" style="margin-right: 50%;">
                                            <label data-toggle="tooltip" data-placement="right" title="Set the default water level range of the water bucket ">Water Level</label>
                                            <div class="form-group input-group">
                                                <input type="text" class="form-control" value="35">
                                                <span class="input-group-addon">Litre </span>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-right: 50%;">
                                            <label data-toggle="tooltip" data-placement="right" title="Set the default temperature range for the green house">Temperature</label>
                                            <div class="form-group input-group">
                                                <input type="text" class="form-control" value="25.8">
                                                <span class="input-group-addon">&#8451; </span>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-right: 50%;">
                                            <label data-toggle="tooltip" data-placement="right" title="Set the default longest duration of time (to avoid electricity wasting) ">Ventilation Fan - Maximum Duration</label>
                                            <div class="form-group input-group">
                                                <select class="form-control">
                                                <option>1 hour</option>
                                                <option>2 hours</option>
                                                <option selected>3 hours</option>
                                                <option>4 hours</option>
                                                <option>5 hours</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-right: 50%;">
                                            <label data-toggle="tooltip" data-placement="right" title="Set the default longest duration of time (to avoid electricity wasting) ">Growing Light - Maximum Duration</label>
                                            <div class="form-group input-group">
                                                <select class="form-control">
                                                <option>1 hour</option>
                                                <option selected>2 hours</option>
                                                <option>3 hours</option>
                                                <option>4 hours</option>
                                                <option>5 hours</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-right: 50%;">
                                            <label data-toggle="tooltip" data-placement="right" title="Set the default temperature range for the green house">Soil Moistures</label>
                                            <div class="form-group input-group">
                                                <input type="text" class="form-control" value="32">
                                                <span class="input-group-addon">%; </span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group" style="margin-right: 50%;">
                                            <label data-toggle="tooltip" data-placement="right" title="Set the default temperature range for the green house">Watering Frequency</label>
                                            <div class="form-group input-group">
                                                <input type="text" class="form-control" value="12">
                                                <span class="input-group-addon">times / day </span>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
