<?php
	session_start();
	include_once("config.php");
	if(isset($_REQUEST['del']))
	{
		$sel = "delete from synonyms where id='$_REQUEST[id]'";
		$qur = mysql_query($sel) or die (mysql_error());
		if($qur)
		{
     		$_SESSION['msg_done'] = "Your data Successfully deleted";			
			header("location:view_synonyms.php");
			exit();
		}
		else
		{
      		$_SESSION['msg_notdone'] = "Your data is not deleted";      
			header("location:view_synonyms.php");
			exit();
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php include_once("header.php");?>
	<script>
	$(document).ready(function(){
	$("#search").keyup(function () {
		//alert('hi');
		//exit;
    var value = this.value.toLowerCase().trim();

    $("table tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
});
});
	</script>
</head>
<body>
<div id="wrapper">
 <!-- Menu -->
	<?php include_once("nav.php");?>
 <!-- Menu -->
    <div id="page-wrapper" style="background: #F2F4F8;">
		<div class="col-md-12 graphs">
			<div class="xs">
			<h3>View Synonyms</h3>
        <?php if(isset($_SESSION['msg_done'])){msg_done();}if(isset($_SESSION['msg_notdone'])){msg_notdone();}?>
				<div class="bs-example4" data-example-id="contextual-table">
					<div class="form-group">
						<div class="row set-bdr">
						<div class="pull-left">
						<table class="table">
						<tr>
							<td> 
								<b>Search:</b>
								<input style="border:1px solid gray!important;" class="form-control" type="text" name="serch" id="search" placeholder="Search..">
								</input>
							</td>
						</tr>
						</table>
						</div>
                <table id="employee_data" class="footable display table table-striped table-bordered table-hover" cellspacing="0" width="100%" data-filter="#filter" data-filter-minimum="4" data-page-size="3" data-first-text="<<" data-next-text=">" data-previous-text="<" data-last-text=">>">
                  <thead>
                     <tr>
                        <th data-toggle="true">S.N.</th>
                        <th>Word</th>
                        <th data-hide="phone, tablet">Synonyms</th>
                        <th data-hide="phone, tablet">Detail</th>
                        <th data-hide="phone">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php 
                  	$num		= 0;
					$sel 		= "select * from synonyms";
					$qur 		= mysql_query($sel)or die(mysql_error());
					while($data = mysql_fetch_array($qur))
                  	{
                  	$num 		= $num + 1;
                  ?>
                  
                     <tr>
                         <td><?php echo $num; ?></td>
                         <td><?php echo (ucfirst($data['word']));?></td>
                         <td><?php echo (ucfirst($data['synonyms']));?></td>
                         <td><?php echo (ucfirst($data['detail']));?></td>
		                 <td> 


                   		 <span style="cursor:pointer; color:#37A6C4;" class="glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#myModal<?php echo $data['id'];?>">                  			
                   		 </span>                  
                 		 <div class="modal fade" id="myModal<?php echo $data['id'];?>" role="dialog">
                   			<div class="modal-dialog">
		                   <?php
		                     $res=mysql_query("select * from `synonyms` where `id`='$data[id]'");
		                     $record=mysql_fetch_array($res);
		                   ?>
                     		<div class="modal-content">
                       			<div class="modal-header">
                         			<button type="button" class="close" data-dismiss="modal">&times;</button>
                         			<h4 class="modal-title"><strong>View Synonyms</strong></h4>
                       			</div>
                       			<div class="modal-body">
                         			<p>
			                         <table align="center">
			                           <tr>
			                              <th>Word:</th>
			                              <td><?php echo (ucfirst($record['word']));?></td>
			                           </tr>
			                           <tr>
			                              <th>Synonyms:</th>
			                              <td><?php echo (ucfirst($record['synonyms']));?></td>
			                           </tr>			                           
			                           <tr>
			                              <th>Detail:</th>
			                              <td><?php echo (ucfirst($record['detail']));?></td>
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
						 <a href="add_synonyms.php?edit=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-pencil back" aria-hidden="true"></i></a>		                 
		                 <a href="?id=<?php echo $data['id'];?>&del" class="delbutton" id="<?php echo $data['id'];?>"  title="Delete" onclick="return confirm('Are you sure want to delete this article!');">
		                 	<span class="glyphicon glyphicon-trash"></span>
		                 </a>					
		                 </td>                         
                    </tr>
                   
                  <?php } ?>
                  </tbody>     
                </table>
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
<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>
 <script type="text/javascript">

  $(document).ready(function(){
     $('.footable').footable(); 
  });

</script>
</body>
</html>
