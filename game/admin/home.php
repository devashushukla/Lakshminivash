<?php
	session_start();
	if(isset($_SESSION['user_email'])) { } else { header("location:index.php"); }
	include_once("config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Make A Soft</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<script src="js/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
 <!-- Menu -->
	<?php include_once("nav.php");?>
 <!-- Menu -->
    <div id="page-wrapper">
		<div class="col-md-12 graphs">
			<div class="xs">
			<h3>Home</h3>
				<div class="bs-example4" data-example-id="contextual-table">
				   <div class="widget_1">
					 <div class="col-sm-3 widget_1_box">
						<div class="tile-progress bg-info">
							<div class="content">
								<h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>
								<div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>
								<span>40% increase</span>
							</div>
						</div>
					 </div>
					 <div class="col-sm-3 widget_1_box">
						<div class="tile-progress bg-success">
							<div class="content">
								<h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>
								<div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>
								<span>40% increase</span>
							</div>
						</div>
					 </div>
					 <div class="col-sm-3 widget_1_box">
					   <div class="tile-progress bg-danger">
							<div class="content">
								<h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>
								<div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>
								<span>40% increase</span>
							</div>
						</div>
					 </div>
					 <div class="col-sm-3 widget_1_box">
						<div class="tile-progress bg-secondary">
							<div class="content">
								<h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>
								<div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>
								<span>40% increase</span>
							</div>
						</div>
					  </div>
					  <div class="clearfix"> </div>
				   </div>
				   <div class="widget_2">
					  <div class="col-sm-3 widget_1_box">
						<div class="wid-social facebook">
							<div class="social-icon">
								<i class="fa fa-facebook text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">143K</h3>
								<h4 class="counttype text-light">Likes</h4>
								<span class="percent">5% increase from last week</span>
							</div>
						</div>
					  </div>
					  <div class="col-sm-3 widget_1_box">
						<div class="wid-social twitter">
							<div class="social-icon">
								<i class="fa fa-twitter text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">3454</h3>
								<h4 class="counttype text-light">Tweets</h4>
								<span class="percent">2% increase from last week</span>
							</div>
						</div>
					  </div>
					  <div class="col-sm-3 widget_1_box">
						<div class="wid-social google-plus">
							<div class="social-icon">
								<i class="fa fa-google-plus text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">523</h3>
								<h4 class="counttype text-light">Circles</h4>
								<span class="percent">2% increase from last week</span>
							</div>
						</div>
					  </div>
					  <div class="col-sm-3 widget_1_box">
						<div class="wid-social dribbble">
							<div class="social-icon">
								<i class="fa fa-dribbble text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">2525</h3>
								<h4 class="counttype text-light">Subscribers</h4>
								<span class="percent">7% increase from last week</span>
							</div>
						</div>
					  </div>
					  <div class="clearfix"> </div>
				   </div>
				   <div class="widget_3">
					  <div class="col-sm-3 widget_1_box">
						<div class="wid-social linkedin">
							<div class="social-icon">
								<i class="fa fa-linkedin text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">2525</h3>
								<h4 class="counttype text-light">Connections</h4>
								<span class="percent">7% increase from last week</span>
							</div>
						</div>
					   </div>
					   <div class="col-sm-3 widget_1_box">
						<div class="wid-social youtube">
							<div class="social-icon">
								<i class="fa fa-youtube text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">1523</h3>
								<h4 class="counttype text-light">Subscribers</h4>
								<span class="percent">7% increase from last week</span>
							</div>
						</div>
					  </div>
					  <div class="col-sm-3 widget_1_box">
						<div class="wid-social skype">
							<div class="social-icon">
								<i class="fa fa-skype text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">2721</h3>
								<h4 class="counttype text-light">Contacts</h4>
								<span class="percent">7% increase from last week</span>
							</div>
						</div>
					  </div>
					  <div class="col-sm-3 widget_1_box">
						 <div class="wid-social flickr">
							<div class="social-icon">
								<i class="fa fa-flickr text-light icon-xlg pull-right"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">1221</h3>
								<h4 class="counttype text-light">Media</h4>
								<span class="percent">7% increase from last week</span>
							</div>
						</div>
					   </div>
					   <div class="clearfix"> </div>
				   </div>
				</div>
			</div>
			<?php include_once("copy_right.php");?>
		</div>
    </div>
      <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
