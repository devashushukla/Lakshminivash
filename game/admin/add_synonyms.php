<?php
	session_start();

	include_once("config.php");
	include_once("function.php");
	$post 			= $_POST;
	$request  		= $_REQUEST;
	if(isset($post['submit']))
	{


		$word				= mysql_real_escape_string($post['word']);
		$synonyms			= mysql_real_escape_string($post['synonyms']);
		$detail				= mysql_real_escape_string($post['detail']);

		$sel = "insert into synonyms (word,synonyms,detail)values('$word','$synonyms','$detail')";
		$sql = mysql_query($sel)or die(mysql_error());
		if($sql)
		{
     		$_SESSION['msg_done'] = "Your data Successfully Inserted";
			header("location:add_synonyms.php");
			exit();
		}
		else
		{
      		$_SESSION['msg_notdone'] = "Your data is not inserted successfully";      
			header("location:add_synonyms.php");
			exit();
		}
	}
	if(isset($request['edit']))
	{
		$sel 	= "select * from synonyms where id='$request[edit]'";
		$qur 	= mysql_query($sel)or die(mysql_error());
		$data 	= mysql_fetch_assoc($qur)or die(mysql_error());
	}
	if(isset($_POST['submit2']))
	{
		$word				= mysql_real_escape_string($post['word']);
		$synonyms			= mysql_real_escape_string($post['synonyms']);
		$detail			= mysql_real_escape_string($post['detail']);


		    $sql = "update synonyms set word='$word',synonyms='$synonyms',detail='$detail' where id='$_POST[id]'";
		$qur = mysql_query($sql) or die(mysql_error());
		if($qur)
		{
     		$_SESSION['msg_done'] = "Your data Successfully Updated";
			header("location:view_synonyms.php");
			exit();
		}
		else
		{
      		$_SESSION['msg_notdone'] = "Your data is not Updated successfully";      
			header("location:add_synonyms.php");
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
				{ ?> Edit Synonyms <?php }
				else{ ?> Insert Synonyms<?php } ?>
			</h3>
				<div class="bs-example4" data-example-id="contextual-table">
					<div class="form-group">
			        <?php if(isset($_SESSION['msg_done'])){msg_done();}if(isset($_SESSION['msg_notdone'])){msg_notdone();}?>
						<div class="row">
						<form name="frm" id="frm" method="post" action="add_synonyms.php" enctype="multipart/form-data">
							<div class="col-md-6 grid_box1">
								<input type="text" name="word" id="word" class="form-control1" value="<?php if(isset($request['edit']))
				{ echo $data['word'];}?>" placeholder="Enter word">
							</div>
							<div class="col-md-6">
								<div class="input-group input-icon right">
									<input type="text" value="<?php if(isset($request['edit']))
				{ echo $data['synonyms'];}?>" name="synonyms" id="synonyms" class="form-control1" placeholder="Enter Synonyms">		
								</div>
							</div>
							<div class="clearfix"> </div>							
							<span style="margin-left: 12px; color:#A9B1C6; font-size: 14px;">Enter Detail</span>
							<div class="col-md-12">
								<div class="input-group input-icon right">
									<textarea name="detail" id="myTextarea" class="form-control1"><?php if(isset($request['edit']))
				{ echo $data['detail'];}?>
									</textarea>	
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
