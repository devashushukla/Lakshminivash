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
	<!-- table responsive files -->
	    <script src="js/footable.paginate.js"></script> 
        <script src="js/footable.sort.js"></script>
        <script src="js/footable.filter.js"></script>		
</head>
<body>
<div id="wrapper">
 <!-- Menu -->
	<?php include_once("nav.php");?>
 <!-- Menu -->
    <div id="page-wrapper">
		<div class="col-md-12 graphs">
			<div class="xs">
			<h3>Basic Tables</h3>
				<div class="bs-example4" data-example-id="contextual-table">
					<input type="text" id="filter"><br><br>
					<table style="display: none;" class="table footable" id="employee_data" data-filter="#filter" data-filter-minimum="4" data-page-size="3" data-first-text="<<" data-next-text=">" data-previous-text="<" data-last-text=">>">
					  <thead>
						<tr>
						  <th data-toggle="true">#</th>
						  <th data-hide="phone, tablet">Column heading</th>
						  <th>Column heading</th>
						  <th data-hide="phone">Column heading</th>
						</tr>
					  </thead>
					  <tbody>
						<tr class="active">
						  <th scope="row">1</th>
						  <td>Column content</td>
						  <td>Column content</td>
						  <td>Column content</td>
						</tr>
						<tr>
						  <th scope="row">2</th>
						  <td>sdf</td>
						  <td>Column content</td>
						  <td>Column content</td>
						</tr>
						<tr class="success">
						  <th scope="row">3</th>
						  <td>Column content</td>
						  <td>Column content</td>
						  <td>Column content</td>
						</tr>
						<tr>
						  <th scope="row">4</th>
						  <td>Column content</td>
						  <td>Column content</td>
						  <td>Column content</td>
						</tr>
						<tr class="info">
						  <th scope="row">5</th>
						  <td>Column content</td>
						  <td>Column content</td>
						  <td>Column content</td>
						</tr>
						<tr>
						  <th scope="row">6</th>
						  <td>Column content</td>
						  <td>Column content</td>
						  <td>Column content</td>
						</tr>
						<tr class="warning">
						  <th scope="row">7</th>
						  <td>Column content</td>
						  <td>Column content</td>
						  <td>Column content</td>
						</tr>
						<tr>
						  <th scope="row">8</th>
						  <td>Column content</td>
						  <td>Column content</td>
						  <td>Column content</td>
						</tr>
						<tr class="danger">
						  <th scope="row">9</th>
						  <td>Column content</td>
						  <td>Column content</td>
						  <td>Column content</td>
						</tr>
					  </tbody>
					  <tfoot class="hide-if-no-paging">
           				 <td colspan="4">
               			 <div class="pagination"></div>
          				 </td>
            		  </tfoot>					
            		</table>
            		<!-- check it -->
            			<div class="row info">
            				<div class="col-md-3 col-sm-6 col-xs-6">1</div>
            				<div class="col-md-3 col-sm-6 col-xs-6">Ashu</div>
            				<div class="col-md-3 col-sm-6 col-xs-6">Ashu</div>
            				<div class="col-md-3 col-sm-6 col-xs-6">Ashu</div>
            			</div>            			
            			<div class="row warning">
            				<div class="col-md-3 col-sm-6 col-xs-6">1</div>
            				<div class="col-md-3 col-sm-6 col-xs-6">Ashu</div>
            				<div class="col-md-3 col-sm-6 col-xs-6">Ashu</div>
            				<div class="col-md-3 col-sm-6 col-xs-6">Ashu</div>
            			</div>            			
            			<div class="row danger">
            				<div class="col-md-3 col-sm-6 col-xs-12">1</div>
            				<div class="col-md-3 col-sm-6 col-xs-12">Ashu</div>
            				<div class="col-md-3 col-sm-6 col-xs-12">Ashu</div>
            				<div class="col-md-3 col-sm-6 col-xs-12">Ashu</div>
            			</div>
            			<div class="row map">
            				
            			</div>
            		<!-- check it -->
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
<script type="text/javascript"></script>
<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  

  $(document).ready(function(){
     $('.footable').footable(); 
  });

</script>
 </body>
</html>
