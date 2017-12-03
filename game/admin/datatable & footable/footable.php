<?php 
session_start();
error_reporting(0);
include_once('dbconnect/dbconnection.php'); 

$query_run=mysql_query("SELECT * FROM `events` ");
	 
 ?>  

<!DOCTYPE html>
<html>
    <head>
        <title> Html Table With FooTable </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/footable.core.css">
		<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/footable.metro.css">
		
        <script src="js/jquery.min.js"></script>
        <script src="js/footable.js"></script>
		<script src="js/bootstrap.min.js"></script>
        
  </head>
    <body>
        
        <!-- data-page-size = number of data to display -->
        <!-- data-XXX-text = text to display in the pagination bar -->
        <br><br>
        <table class="footable table table-bordered" data-filter="#filter" data-filter-minimum="4" data-page-size="3" data-first-text="<<" data-next-text=">" data-previous-text="<" data-last-text=">>" >
           <thead>
            <tr>
                <!-- data-toggle = where the toggle icon will appear -->
                
                <th data-toggle="true">Id</th>
                <!-- hide this column in mobile -->
                <th data-hide="phone, tablet">Name</th>
                <!-- hide this column in tablet and mobile -->
                <th data-type="numeric" data-hide="tablet,phone">Quantity</th>
                <th data-type="numeric" data-hide="tablet,phone">Price</th>
                <th data-hide="phone">Image</th>
                
            </tr>
            </thead>
			
            <tbody>
                 <!-- populate table from mysql database -->
            <?php  
                          while($w=mysql_fetch_array($query_run)) 
				            {
				          ?> 
                               
                               <tr>  
                                    <td><?= ucfirst($w['events_name']); ?></td>  
                                    <td><?= ucfirst($w['events_name']); ?></td>  
                                    <td><?= ucfirst($w['events_name']); ?></td>  
                                    <td><?= ucfirst($w['events_name']); ?></td>  
                                    <td><?= ucfirst($w['events_name']); ?></td>  
                               </tr>  
                              <?php  
                          }  
                          ?>  
            </tbody>
            
            
        </table>
    </body>
    <script type="text/javascript">
    
      $(document).ready(function(){
         $('.footable').footable(); 
      });
    
    </script>
</html>

