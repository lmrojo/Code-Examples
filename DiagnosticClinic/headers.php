<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
	//Access to database...
	//$access = mysql_connect('localhost','root','123'); 
	//if (!$access) 
	//{ 
	//	die('Could not connect to MySQL: ' . mysql_error()); 
	//} 
	 ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Diagnostic Clinic</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        
        <!-- Custom Styles --> 
        <link href="css/style.css" rel="stylesheet"> 

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="main_header clearfix">
            <div class="container">
               
                <div class="heading clearfix">
                    <a id="logo" href="index.php" title="Home">
                        <img src="images/logo.png" />
                    </a>
                    <h1> Diagnostic <span>Clinic</span></h1>
                </div>
             
                <ul class="navigation">
                    <li><a href="forpatients.php"> For Patients <i class="fa fa-angle-down"></i></a></li>
                    <li><a href="services.php"> Services <i class="fa fa-angle-down"></i></a></li>
                    <li><a href="resources.php"> Resources <i class="fa fa-angle-down"></i></a></li>
                    <li><a href="aboutus.php"> About Us <i class="fa fa-angle-down"></i></a></li>
                    <li><a href="contact.php"> Contact <i class="fa fa-angle-down"></i></a></li>
                </ul>
            </div>
        </header>

        <section class="main_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-3-custom"> 
                        <div class="sidebar">
                            <ul class="sidebar-nav">

                                <a href="accessrecords.php">
                                    <li>
                                        <img src="images/access-records-icn.png" />
                                        Access My Records
                                    </li>
                                </a>


                                <a href="paybill.php">
                                    <li>
                                        <img src="images/pay-my-bill-icn.png" />
                                        Pay My Bill
                                    </li>
                                </a>
                                <a href="bookappt.php">
                                    <li>
                                        <img src="images/calendar-icn.png" />
                                        Book an Appointment
                                    </li>
                                </a>
                                <a href="requestrefill.php">
                                    <li>
                                        <img src="images/meds-icn.png" style=" width:12px; height:24px" />
                                        Request a Refill
                                    </li>
                                </a>
                                <a href="nursechat.php">
                                    <li>
                                        <img src="images/messages-icn.png" />
                                        Live Chat with a Nurse
                                    </li>
                                </a>

                            </ul>
                        </div>
                    </div>

                   <div class="col-md-9 col-md-9-custom">
                        <section class="featured-section clearfix" >
                            <header class="featured-section-header clearfix">
                               
                                           
        