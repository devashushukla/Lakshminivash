<?php
include_once("config.php");
include_once("function.php");
$post 				= $_POST;
if(isset($post['submit']))
{
	$user_email 	= mysql_real_escape_string($post['user_email']);
	$user_password 	= mysql_real_escape_string($post['user_password']);
	$sel 			= "select * from signup where user_email='$user_email' and user_password='$user_password'";
	$qur 			= mysql_query($sel)or die(mysql_error());
	$num 			= mysql_num_rows($qur);
	if($num)
	{
		session_start();
		$_SESSION['user_email'] = $post['user_email'];
		header("location:home.php");
		exit();
	}
	else
	{
		$_SESSION['msg_notdone'] = "Please enter correct E-mial and Password";
		header("location:index.php");
		exit();
	}
}
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
<body id="login">
  <div class="login-logo">
    <a href="#"><img src="images/1.png" alt=""/></a>
  </div>
    <div class="col-md-2"></div> 
    <div class="col-md-8"> 
        <?php if(isset($_SESSION['msg_notdone'])){msg_notdone();}?>
    </div>
    <div class="col-md-2"></div>  
  </div> 
  <!-- for msg end-->  
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form method="post">
		<input type="text" name="user_email" id="user_email" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input type="password" name="user_password" id="user_password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" name="submit" onclick="myFunction()" value="Login"></div>
		<div class="login-social-link" style="display:none;">
          <a href="index.php" class="facebook">
              Facebook
          </a>
          <a href="index.php" class="twitter">
              Twitter
          </a>
        </div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="signup.php"> Sign Up</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2017 makeasoft. All Rights Reserved | Design by <a href="http://makeasoft.com/" target="_blank">Make A Soft</a> </p>
   </div>
</body>
</html>
