<?php

/*if(isset($_POST['submit']))
{

	foreach($_POST['no'] as $value)
	{
		echo "<h1 style='color:#fff;'>".$value."</h1>";
	}

} */
include_once("function.php");
$post = $_POST;
	if(isset($_POST['submit']))
	{
		$sms = $post['sms'];
		foreach($_POST['no'] as $value)
		{
		//$mobile = $post['mobile'];
		sendsms($value,$sms);
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
<body>
<div id="wrapper">
 <!-- Menu -->
	<?php include_once("nav.php");?>
 <!-- Menu -->
    <div id="page-wrapper">
		<div class="col-md-12 graphs">
			<div class="xs">
			<h3>Insert Data</h3>
				<div class="bs-example4" data-example-id="contextual-table">
					<div class="form-group">
						<div class="row">
						<form name="frm" id="frm" method="post" action="sms.php">		
							<div class="col-md-6 grid_box1">
								<select style="height:133px;" name="no[]" multiple="" id="selector1" class="form-control1">
									<option>Select Number</option>
									<option>7618849133</option>
									<option>9026383055</option>
									<option>9696591910</option>
									<option>1234567893</option>									
									<option>1234567894</option>
									<option>1234567895</option>
									<option>1234567896</option>
									<option>1234567897</option>									
									<option>1234567898</option>
									<option>1234567899</option>
									<option>1234567880</option>
									<option>1234567870</option>
								</select>							
							</div>
							<div class="col-md-6">
								<div class="input-group input-icon right">
									<textarea placeholder="Write SMS" name="sms" id="sms" style="height:133px;" class="form-control1"></textarea>
								</div>							
							</div>
							<div class="clearfix"> </div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-sm-2 col-sm-offset-5">
										<button type="submit" name="submit" class="btn btn-primary">Submit</button>
										<button type="reset" class="btn btn-default">Reset</button>
									</div>
								</div>
							</div>
						</form>
						</div>
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
