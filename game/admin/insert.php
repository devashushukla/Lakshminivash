
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
						<form name="frm" id="frm" method="post" action="insert.php">
							<div class="col-md-6 grid_box1">
								<input type="text" class="form-control1" placeholder="Name">
							</div>
							<div class="col-md-6">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input id="email" class="form-control1" type="text" placeholder="Email Address">
								</div>
							</div>
							<div class="clearfix"> </div>							
							<div class="col-md-6 grid_box1">
								<select name="selector1" id="selector1" class="form-control1">
									<option>Select Course</option>
									<option>BCA</option>
									<option>MCA</option>
									<option>BA</option>
									<option>MA</option>
								</select>							
							</div>
							<div class="col-md-6">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" placeholder="Password">
								</div>							
							</div>
							<div class="clearfix"> </div>
							<div class="col-md-6 grid_box1">
								<div class="input-group">
									<div class="input-group-addon"><input type="radio" name="gender"></div>
									<input type="text" class="form-control1" readonly placeholder="Select Gender Male">
								</div>							
							</div>
							<div class="col-md-6 grid_box1">
								<div class="input-group">
									<div class="input-group-addon"><input type="radio" name="gender"></div>
									<input type="text" class="form-control1" readonly placeholder="Select Gender Fmale">
								</div>							
							</div>
							<div class="clearfix"> </div>
							<div class="col-md-6 grid_box1">
								<input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
							</div>
							<div class="col-md-6">
								<div class="input-group input-icon right">
									<input name="mobile" type="text" class="form-control1" placeholder="Mobile No." ng-pattern="/[0-9]/" required="">
								</div>
							</div>
							<div class="clearfix"> </div>
							<div class="col-md-6 grid_box1">
								<div class="form-group">
									<input type="file" id="exampleInputFile">
									<p class="help-block">Select Image here.</p>
								 </div>
							</div>
							<div class="col-md-6">
								<div class="input-group input-icon right">
									<textarea name="msg" placeholder="Insert Address" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea>									
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
