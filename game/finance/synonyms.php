<!DOCTYPE HTML>
<html>
<head>
<title>makeasoft</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script> 
<script src="js/bootstrap.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<!--google fonts-->
<script src="js/jquery-1.11.0.min.js"></script>
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
</head>
<body>
<!--header strat here-->
<?php include_once("menu.php");?>
<!--header strat here-->
<!--banner start here-->



<?php
include_once("config.php");
$query  = "select * from synonyms order by id desc";
$res    = mysqli_query($connection,$query);
$count  =   mysqli_num_rows($res);
$slides='';
$Indicators='';
$counter=0;

    while($row=mysqli_fetch_array($res))
    {

        $title = $row['word'];
        $desc = $row['synonyms'];
        $image = $row['detail'];
        if($counter == 0)
        {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
            $slides .= '<div class="item active">
            <div class="carousel-caption" style="margin-bottom:82px; color:#000;">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p> 
              <p>'.$image.'</p>        
            </div>
          </div>';

        }
        else
        {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
            $slides .= '<div class="item">
            <div class="carousel-caption" style="margin-bottom:82px; color:#000;">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p> 
              <p>'.$image.'</p>          
            </div>
          </div>';
        }
        $counter++;
    }

?>
<style> 

    .carousel-caption {
      background-image: url("http://www.phpgang.com/wp-content/themes/PHPGang_v2/img/bg_sidebar.png");
      

    }
    .carousel-inner>.item, .carousel-inner>.item
    {
        height:400px;
        width:700px;
    }

</style> 
<div class="banner">
	<div class="container">
		<div class="banner-main">
<div class="container" style="width: 730px;">
      <h2>Make a soft Book for Synonyms</h2>
      <div id="carousel-example-generic" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
         <?php //echo $Indicators; ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <?php echo $slides; ?>  
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>

			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<!--banner end here-->
<br><br><br>

<!--team start here-->

<!--team end here-->
<!--footer nav start-->
<?php include_once("footer_menu.php");?>
<!--footer nav end here--> 
<!--copy rights start here-->
<?php include_once("footer.php");?>
<!--copy right end here-->
</body>
</html>