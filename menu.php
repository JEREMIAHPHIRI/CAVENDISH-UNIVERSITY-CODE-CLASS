<!doctype html>

 <html class="no-js" lang="eng">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>KITWE BOYS SECONDARY SCHOOL</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
      
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
        <header id="home" class="navbar-fixed-top">
         
<?php  $connection=mysqli_connect("localhost","root","") or die("it didn't connect to database main".mysqli_errno());
       mysqli_select_db($connection,"KITWE BOYS");
  
  ?>
            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="index.php"><img src="assets/images/clark.jpg" alt="logo" /></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
									  <li><a href="index.php"  <span class="glyphicon glyphicon-home"></span></a></li>
                                        <li><a href="apply.php" class="apply"> <marquee behavior="slide" direction="left" scrollamount="6">APPLY NOW</marquee></a></li>
                                        <li><a href="coursesandfees.php"> COURSES & FEES</a></li>
                                        <li><a href="admissions.php"> ADMISSIONS</a></li>
                                        <li><a href="feedback.php">COMPLAINTS</a></li>
                                        <li><a href="scholarships.php">SCHOLARSHIPS</a></li>
                                        <li><a href="aboutus.php">ABOUT US</a></li>
                                        
                                    </ul>
                                </div>
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>	
        </header> <!-- End Header Section -->
		<?php  error_reporting(0)?>