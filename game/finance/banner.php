<?php
include_once("config.php");
$query  = "select * from antonyms order by id desc";
$res    = mysqli_query($connection,$query);
$count  =   mysqli_num_rows($res);
$slides='';
$Indicators='';
$counter=0;

    while($row=mysqli_fetch_array($res))
    {

        $title = $row['word'];
        $desc = $row['antonyms'];
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
      <h2>Make a soft Book for Antonyms</h2>
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