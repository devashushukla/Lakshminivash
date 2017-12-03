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


<!--validation of mail start end here-->

<!--validation of mail end here-->


<script>

function validate()
{
	var name = document.getElementById('name').value;
	
	if(name==''){
		//alert('hi');
		//hideAllErrorssign();
		document.getElementById('name_error').style.display="inline";
		document.getElementById('name').focus();
		return false;
	}
	
	var email = document.getElementById('email').value;
     if(email==''){
		 //alert('hi');
         //hideAllErrorssign();
         document.getElementById('email_error').style.display="inline";
		 document.getElementById('email').focus();
         return false;
        }
        
     else
     {
		 var regexp=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		 if(!(email.match(regexp)))
		 {
			// hideAllErrorssign();
			 document.getElementById('emailcorrect_error').style.display="inline";
			 document.getElementById('email').focus();		 
			  return false; 
		 }
    
     }   
     var message = document.getElementById('message').value;
    if(message=='')
    {    
        //hideAllErrorssign();
        document.getElementById('message_error').style.display="inline";
        document.getElementById('message').focus();
        return false;
    }
}
   function hideAllErrorssign()
   {

	document.getElementById('name_error').style.display="none";
	document.getElementById('email_error').style.display="none";
	document.getElementById('emailcorrect_error').style.display="none";
    document.getElementById('message_error').style.display="none";
    }

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



<!--get in touch start here-->

<div class="get-touch" id="contact">
	<div class="container">
		<div class="row">
			<div class="">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="get-touch-top">
						<h3>S.K.Finance</h3>
						<p>402, Deepshikha, Apartment.</p>
						<p>Patrika Marg, Civil Lines </p>
						<p>Allahabad, Uttar Pradesh</p>
					</div>
				</div>
				<!-- <div class="col-md-4 col-sm-6 col-xs-12">&nbsp;</div> -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="get-touch-top">
					<h3>Contact</h3>
						<p>Telephone : +91 9721243363</p>
						<p>FAX : +1 800889 9898</p>
						<p>E-mail : <a href="mailto:example@mail.com">faiz2010@gmail.com</a></p>
					</div>
				</div>
			</div>
		</div>	
		<div class="get-touch-main">
		<div class="get-touch-top"><h3>Submit Query</h3></h3><hr>
			  <div class="get-touch-bottom">
			  	<form action="#" method="post">
			  		<input type="text" placeholder="Name" name="name" id="name">
					<span id="name_error" style="color:#FF0000; float:left; display:none;" >*Please enter your name</span>
			  		 <input type="text" class="no-mar" placeholder="Email" name="email" id="email">
					 <span id="email_error" style="color:#FF0000; float:left; display:none;" >*Please enter email</span>
			  		<textarea placeholder="Message" name="Message" id="message" ></textarea>
					<span id="message_error" style="color:#FF0000; float:left; display:none;" >*Please enter message</span>
			  		<input type="submit" value="Submit" name="submit" onclick="return validate();">
			  	</form>
			  </div>
		</div>
	</div>
</div>
<!--get in touch end here-->
<!--map start here-->
	<div class="map">
		<ul class="faq">
			<li class="item1 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">Interactive Route Map<span class="glyphicon glyphicon-menu-down"></span></a>
				<ul>
					<li class="subitem1">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.5373160562744!2d81.83697581448666!3d25.453727783777488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399acac15481b133%3A0x832aaa5d0227bd71!2sDeep+Shikha+Apartment%2C+Patrika+Marg%2C+Madhopur%2C+Allahabad%2C+Uttar+Pradesh+211001!5e0!3m2!1sen!2sin!4v1483078863036" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</li>										
				</ul>
			</li>
		</ul>
		<!-- script for tabs -->
		<script type="text/javascript">
			$(function() {
			
				var menu_ul = $('.faq > li > ul'),
					   menu_a  = $('.faq > li > a');
				
				menu_ul.hide();
			
				menu_a.click(function(e) {
					e.preventDefault();
					if(!$(this).hasClass('active')) {
						menu_a.removeClass('active');
						menu_ul.filter(':visible').slideUp('normal');
						$(this).addClass('active').next().stop(true,true).slideDown('normal');
					} else {
						$(this).removeClass('active');
						$(this).next().stop(true,true).slideUp('normal');
					}
				});
			
			});
		</script>		
		<!-- script for tabs -->
	</div>
<!--map end here-->
<!--footer nav start-->
<?php include_once("footer_menu.php");?>
<!--footer nav end here--> 
<!--copy rights start here-->
<?php include_once("footer.php");?>
<!--copy right end here-->
</body>
</html>