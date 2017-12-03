<?php
	session_start();
	include_once("config.php");
	if(isset($_REQUEST['del']))
	{
		$sel = "delete from add_finance_details where id='$_REQUEST[del]'";
		$qur = mysql_query($sel) or die (mysql_error());
		if($qur)
		{
     		$_SESSION['msg_done'] = "Your data Successfully deleted";			
			header("location:view_finance_details.php");
			exit();
		}
		else
		{
      		$_SESSION['msg_notdone'] = "Your data is not deleted";      
			header("location:view_finace_details.php");
			exit();
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php include_once("header.php");?>
<style>
.set-bdr,.heig{border:1px solid gray; overflow: hidden;}
.heig{height:55px; padding-top:15px;}
.back{color:black;}
.back:hover {
    color: #1d9d74;
    text-decoration: none;
    cursor:pointer;
}
</style>
</head>
<body>
<div id="wrapper">
 <!-- Menu -->
	<?php include_once("nav.php");?>
 <!-- Menu -->
    <div id="page-wrapper">
		<div class="col-md-12 graphs">
			<div class="xs">
			<h3>View Finance Details</h3>
        <?php if(isset($_SESSION['msg_done'])){msg_done();}if(isset($_SESSION['msg_notdone'])){msg_notdone();}?>
				<div class="bs-example4" data-example-id="contextual-table">
					<div class="form-group">
						<div class="row set-bdr">
							<div class="col-md-1 set-bdr"><strong>Image</strong></div>
							<div class="col-md-1 set-bdr"><strong>Bank</strong></div>
							<div class="col-md-2 set-bdr"><strong>RateRange</strong></div>
							<div class="col-md-3 set-bdr"><strong>Processing Fee Range</strong></div>
							<div class="col-md-2 set-bdr"><strong>Lone Amonut</strong></div>
							<div class="col-md-2 set-bdr"><strong>Tenure Range</strong></div>
							<div class="col-md-1 set-bdr"><strong>Action</strong></div>
						</div>
					<?php 
						$sel 			= "select * from add_finance_details";
						$qur 			= mysql_query($sel)or die(mysql_error());
						while($data 	= mysql_fetch_array($qur)){
					?>
						<div class="row set-bdr">
							<div class="col-md-1 heig"><img src="<?php echo 'uploads/'.$data['fin_image'];?>" height="33px" width="33px"></div>
							<div class="col-md-1 heig"><?php echo $data['bank_name'];?></div>
							<div class="col-md-2 heig"><?php echo $data['rate_range'];?></div>
							<div class="col-md-3 heig"><?php echo $data['processing_fee_range'];?></div>
							<div class="col-md-2 heig"><?php echo $data['lone_amount'];?></div>
							<div class="col-md-2 heig"><?php echo $data['tenure_range'];?></div>
							<div class="col-md-1 heig">
							<!-- view code start hear -->
								<i class="fa fa-check-square back"  data-toggle="modal" data-target="#myModal<?php echo $data['id'];?>" aria-hidden="true"></i>
                              
                             <div class="modal fade" id="myModal<?php echo $data['id'];?>" role="dialog">
                               <div class="modal-dialog">
                               <?php
                           $res=mysql_query("select * from `add_finance_details` where `id`='$data[id]'");
                           $record=mysql_fetch_array($res);
                               ?>
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4 class="modal-title"><strong>View Finance Detail</strong></h4>
                                   </div>
                                   <div class="modal-body">
                                     <p>
                                     <table align="center">
                                       <tr>
                                          <th>Name:</th>
                                          <td><?=ucfirst($record['bank_name']);?></td>
                                       </tr>
                                       <tr>
                                          <th>Contact No.:</th>
                                          <td><?=ucfirst($record['rate_range']);?></td>
                                       </tr>
                                       <tr>
                                          <th>Address:</th>
                                          <td><?=$record['processing_fee_range'];?></td>
                                       </tr>
                                       <tr>
                                          <th>Date:</th>
                                          <td><?=$record['lone_amount'];?></td>
                                       </tr>
                                       <tr> 
                                          <th>Customer Service Type:</th>
                                          <td><?=$record['tenure_range'];?></td>
                                       </tr>
                                       <tr>
                                          <th>Image:</th>
                                          <td><img src="<?php echo 'uploads/'.$record['fin_image'];?>" height="33px" width="33px"></td>
                                       </tr>
                                     </table>
                                     </p>
                                  </div>
                                   <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                   </div>
                                 </div>
                                 
                               </div>
                             </div>							
                             <!-- view code end hear -->

								<a href="add_finance_details.php?edit=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-pencil back" aria-hidden="true"></i></a>
								<a href="?del=<?php echo $data['id'];?>"<a href="?del=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-remove back" aria-hidden="true"></i></a>
							</div>						
						</div>
					<?php
						}
					?>
					</div>	
				</div>
			</div>
			<?php //include_once("copy_right.php");?>
		</div><?php include_once("copy_right.php");?>
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
