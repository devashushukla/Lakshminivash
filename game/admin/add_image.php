<?php
	session_start();
	include_once("config.php");
	include_once("function.php");
	$post 			= $_POST;
	$request  		= $_REQUEST;
	if(isset($post['submit']))
	{
		$file		= $_FILES;
		$tmp_loc	= $file['fin_image']['tmp_name'];
		$fname		= $file['fin_image']['name'];
		$ext_array	= array('pdf','jpg','png','gif','jpeg','PDF','JPG','PNG','FIG','JPEG');
		$breack		= explode(".",$fname);
		if(in_array($breack[1],$ext_array))
		{
			$fin_image 	= $breack[0].time().".".$breack[1];
		}
		else
		{
      		$_SESSION['msg_notdone'] = "Your file extation is not valide. Please select only Image";
			header("location:add_image.php?msg=File extation is not valide");
			exit();
		}

		$img_ans				= mysql_real_escape_string($post['img_ans']);

		$sel = "insert into add_image (img_ans,fin_image)values('$img_ans','$fin_image')";
		$sql = mysql_query($sel)or die(mysql_error());
		if($sql)
		{
			$ss = move_uploaded_file($tmp_loc,"uploads/".$fin_image);
     		$_SESSION['msg_done'] = "Your data Successfully Inserted";
			header("location:add_image.php");
			exit();
		}
		else
		{
      		$_SESSION['msg_notdone'] = "Your data is not inserted successfully";      
			header("location:add_image.php");
			exit();
		}
	}
	if(isset($request['edit']))
	{
		$sel 	= "select * from add_image where id='$request[edit]'";
		$qur 	= mysql_query($sel)or die(mysql_error());
		$data 	= mysql_fetch_assoc($qur)or die(mysql_error());
	}
	if(isset($_POST['submit2']))
	{
		$img_ans				= mysql_real_escape_string($post['img_ans']);
		$old_img				= mysql_real_escape_string($post['old_img']);

		if(!empty($_FILES['fin_image']['name']))
		{
			$file		= $_FILES;
			$tmp_loc	= $file['fin_image']['tmp_name'];
			$fname		= $file['fin_image']['name'];
			$ext_array	= array('pdf','jpg','png','gif','jpeg','PDF','JPG','PNG','FIG','JPEG');
			$breack		= explode(".",$fname);
			if(in_array($breack[1],$ext_array))
			{
				$fin_image 	= $breack[0].time().".".$breack[1];
			}
			else
			{
	      		$_SESSION['msg_notdone'] = "Your file extation is not valide. Please select only Image";
				header("location:add_image.php?msg=File extation is not valide");
				exit();
			}
		    $sql = "update add_image set img_ans='$img_ans',fin_image='$fin_image' where id='$_POST[id]'";
		}
		else
		{
		    $sql = "update add_image set img_ans='$img_ans', fin_image='$old_img' where id='$_POST[id]'";
		}
		$qur = mysql_query($sql) or die(mysql_error());
		if($qur)
		{
     		$_SESSION['msg_done'] = "Your data Successfully Updated";
     		if(!empty($_FILES['fin_image']['name']))
     		{
     			$ss = move_uploaded_file($tmp_loc,"uploads/".$fin_image);
     			unlink("uploads/".$_POST['old_img']);
     		}
			header("location:add_image.php");
			exit();
		}
		else
		{
      		$_SESSION['msg_notdone'] = "Your data is not Updated successfully";      
			header("location:add_image.php");
			exit();
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php include_once("header.php");?>
</head>
<body>
<div id="wrapper">
 <!-- Menu -->
	<?php include_once("nav.php");?>
 <!-- Menu -->
    <div id="page-wrapper" style="background: #F2F4F8;">
		<div class="col-md-12 graphs">
			<div class="xs">
			<h3>
				<?php 
				if(isset($request['edit']))
				{ ?> Edit Image <?php }
				else{ ?> Insert Image<?php } ?>
			</h3>
				<div class="bs-example4" data-example-id="contextual-table">
					<div class="form-group">
			        <?php if(isset($_SESSION['msg_done'])){msg_done();}if(isset($_SESSION['msg_notdone'])){msg_notdone();}?>
						<div class="row">
						<form name="frm" id="frm" method="post" action="add_image.php" enctype="multipart/form-data">
							<div class="col-md-6 grid_box1">
								<input type="text" name="img_ans" id="img_ans" class="form-control1" value="<?php if(isset($request['edit']))
				{ echo $data['img_ans'];}?>" placeholder="Image Answer">
								<input type="hidden" name="old_img" value="<?php echo $data['fin_image'];?>">
							</div>
							<div class="col-md-6 grid_box1">
								<div class="form-group">
									<input type="file" id="fin_image" name="fin_image">
									<input type="hidden" name="img_old" value="<?php echo $data['fin_image'];?>">
									<p class="help-block">Select Image here.</p>
								 </div>							
							</div>
							<div class="clearfix"> </div>							
						<div class="panel-footer">
								<div class="row">
									<div class="col-sm-2 col-sm-offset-5">
										<input type="hidden" name="id" value="<?php if(isset($request['edit']))
				{ echo $data['id'];}?>">
										<?php if(!isset($request['edit']))
										{ ?><button type="submit" name="submit" class="btn btn-primary">Submit</button><?php } else{ ?>							
										<button type="submit" name="submit2" class="btn btn-primary">Update</button>
										<?php } ?>
										<button type="reset" class="btn btn-default">Reset</button>
									</div>
								</div>
							</div>
						</form>
						</div>
					</div>	
				</div>
			</div>
			<?php //include_once("copy_right.php");?>
		</div><?php //include_once("copy_right.php");?>
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
