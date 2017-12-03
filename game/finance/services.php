<?php
	include_once("config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>S.K. Finance</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/datatable.bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/footable.core.css">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<!--google fonts-->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/datatable.bootstrap.min.js"></script>
<script src="js/jquery.dataTable.min.js"></script>
<script src="js/footable.js"></script>
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
<!-- code for datatable -->

<body>
<!--header strat here-->
<?php include_once("menu.php");?>
<!--header strat here-->
<!--banner start here-->
<?php include_once("banner.php");?>
<!--banner end here-->
<!--about start here-->

<!--services start here-->
<div class="services-agile" id="services">
	<div class="container"><div class="about-top-w3l"><h3><u>Our Service</u></h3></div>
		<div class="services-main-agile">
			  <div class="services-bottom">
                <table id="employee_data" class="footable display table table-striped table-bordered table-hover" cellspacing="0" width="100%" data-filter="#filter" data-filter-minimum="4" data-page-size="3" data-first-text="<<" data-next-text=">" data-previous-text="<" data-last-text=">>">
                  <thead>
                     <tr>
                        <th data-toggle="true">S.N.</th>
                        <th>Image</th>
                        <th>Bank Name</th>
                        <th data-hide="phone, tablet">Tenure Range</th>
                        <th data-hide="phone, tablet">Processing Fee Range</th>  
                        <th data-hide="phone, tablet">Lone Amount</th>
                        <th data-hide="phone">Rate Range </th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php 
                  	$num		= 0;
					$sel 		= "select * from add_finance_details";
					$qur 		= mysql_query($sel)or die(mysql_error());
					while($data = mysql_fetch_array($qur))
                  	{
                  	$num 		= $num + 1;
                  ?>
                  
                     <tr>
                         <td><?php echo $num; ?></td>
                         <td style="text-align: center;"><img src="<?php echo '../admin/uploads/'.$data['fin_image'];?>" height="31px" width="31px"></td>          
                         <td><?php echo (ucfirst($data['bank_name']));?></td>
                         <td><?php echo (ucfirst($data['tenure_range']));?></td>
                         <td><?php echo (ucfirst($data['processing_fee_range']));?></td>
                         <td><?php echo (ucfirst($data['lone_amount']));?></td>
                         <td><?php echo (ucfirst($data['rate_range']));?></td>
                     </tr>
                   
                  <?php } ?>
                  </tbody>     
                </table>
		    </div>			
		</div>
	</div>
</div>
<!--services end here-->
<!--design2 start here-->
<div class="design2">
	<div class="design-2-main">
		<div class="col-md-6 design2-left">
			
		</div>
		<div class="col-md-6 design2-right">
			<div class="design2-top">
				<h3>Best Work Environment</h3>
			    <p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.</p>
			</div>
		   <div class="design2-main-grid">
			   	<div class="design2-grid-left">
			   		<span class="d-work"> </span>
			   		<div class="design2-text">
			   			<h4>Nam libero tempore</h4>			   			
			   		</div>
			   		<p> These cases are perfectly simple and easy to distinguish Nam libero tempore.</p>
			   		<div class="clearfix"> </div>
			   	</div>
			   	<div class="design2-grid-left">
			   		<span class="d1-work"> </span>
			   		<div class="design2-text">
			   			<h4>Tempore nam libero</h4>			   			
			   		</div>
			   		<p> These cases are perfectly simple and easy to distinguish Nam libero tempore.</p>
			   		<div class="clearfix"> </div>
			   	</div>
			  <div class="clearfix"> </div>
		   </div>
		   <div class="design2-main-grid">
			   	<div class="design2-grid-left">
			   		<span class="d2-work"> </span>
			   		<div class="design2-text">
			   			<h4>Nam libero tempore</h4>			   			
			   		</div>
			   		<p> These cases are perfectly simple and easy to distinguish Nam libero tempore.</p>
			   		<div class="clearfix"> </div>
			   	</div>
			   	<div class="design2-grid-left">
			   		<span class="d3-work"> </span>
			   		<div class="design2-text">
			   			<h4>Tempore nam libero</h4>			   			
			   		</div>
			   		<p> These cases are perfectly simple and easy to distinguish Nam libero tempore.</p>
			   		<div class="clearfix"> </div>
			   	</div>
			  <div class="clearfix"> </div>
		   </div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--design2 end here-->


<!--script-->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.img-top a').Chocolat();
		});
		</script>

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

<!--footer nav start-->
<?php include_once("footer_menu.php");?>
<!--footer nav end here--> 
<!--copy rights start here-->
<?php include_once("footer.php");?>
<!--copy right end here-->
</body>
</html>