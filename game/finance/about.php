<!DOCTYPE HTML>
<html>
<head>
<title>S.K. Finance</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<!--google fonts-->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.circlechart.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
<body>
<!--header strat here-->
<?php include_once("menu.php");?>
<!--header strat here-->
<!--banner start here-->
<?php include_once("banner.php");?>
<!--banner end here-->
<!--about start here-->
<div class="about-w3l">
	<div class="container">
		<div class="about-main-w3l">
			<div class="about-top-w3l">
			   <h3>About</h3>
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
			</div>

			<div class="about-bottom-w3l">
				<div class="col-md-4 about-grid">
					<div class="about-grid-main">
						<img src="images/d1.png" alt="">
						<h4>Creative Design</h4>
						<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
					</div>
				</div>
				<div class="col-md-4 about-grid">
					<div class="about-grid-main">
						<img src="images/d2.png" alt="">
						<h4>Excepteur sint</h4>
						<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
					</div>
				</div>
				<div class="col-md-4 about-grid">
					<div class="about-grid-main">
						<img src="images/d3.png" alt="">
						<h4>Lorem ipsum</h4>
						<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
					</div>
				</div>
			  <div class="clearfix"> </div>
			</div>			
		</div>
	</div>
</div>
<!--about end here-->
<!--team start here-->

<!--map end here-->
<!--footer nav start-->
<?php include_once("footer_menu.php");?>
<!--footer nav end here--> 
<!--copy rights start here-->
<?php include_once("footer.php");?>
<!--copy right end here-->
</body>
</html>