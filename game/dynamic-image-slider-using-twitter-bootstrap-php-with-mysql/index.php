<?php
include_once('db.php');

$query  = "select * from images order by id desc limit 6";
$res    = mysqli_query($connection,$query);
$count  =   mysqli_num_rows($res);
$slides='';
$Indicators='';
$counter=0;

    while($row=mysqli_fetch_array($res))
    {

        $title = $row['title'];
        $desc = $row['desc'];
        $image = $row['image'];
        if($counter == 0)
        {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
            $slides .= '<div class="item active">
            <img src="images/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>         
            </div>
          </div>';

        }
        else
        {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
            $slides .= '<div class="item">
            <img src="images/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>         
            </div>
          </div>';
        }
        $counter++;
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Dynamic image slider using twitter bootstrap & PHP with MySQL | PGPGang.com</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <style type="text/css">

      img {border-width: 0}
      * {font-family:'Lucida Grande', sans-serif;}
    </style>
  </head>
  <body onload="changePagination('0','first')">
    <h2>Dynamic image slider using twitter bootstrap & PHP with MySQL Example.&nbsp;&nbsp;&nbsp;=> <a href="http://www.phpgang.com/">Home</a> | <a href="http://demo.phpgang.com/">More Demos</a></h2>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<style> 

    .carousel-caption {
      background-image: url("http://www.phpgang.com/wp-content/themes/PHPGang_v2/img/bg_sidebar.png");
    }
    .carousel-inner>.item>img, .carousel-inner>.item>a>img
    {
        height:400px;
        width:700px;
    }

</style> 
<div class="container" style="width: 730px;">
      <h2>Dynamic Image Slider</h2><span style="float: right;margin-top: -30px;"><a href="addnew.php">Add More Images</a></span>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
         <?php echo $Indicators; ?>
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
  </body>
</html>