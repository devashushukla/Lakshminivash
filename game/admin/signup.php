<?php
  session_start();
  //if(isset($_SESSION['user_email'])){}else{header("location:index.php");}
  include_once("config.php");
  include_once("function.php");
  $post                   = $_POST;
  if(isset($post['submit']))
  { 
    $file                 = $_FILES;
    //print "<pre>";print_r($post);print_r($file);die;
    $tmp_loc              = $file['user_profile_pic']['tmp_name'];
    $fname                = $file['user_profile_pic']['name'];
    $ext_array            = array('pdf','jpg','png','gif','jpeg','PDF','JPG','PNG','FIG','JPEG');
    $breack               = explode(".",$fname);
    if(in_array($breack[1],$ext_array))
    {
      $user_profile_pic   = $breack[0].time().".".$breack[1];
    }
    else
    {
      $_SESSION['msg_notdone'] = "Your file extation is not valide. Please select only Image";
      header("location:signup.php");
      exit();
    }
    $user_name            = mysql_real_escape_string($post['user_name']);
    $user_mobile_no       = mysql_real_escape_string($post['user_mobile_no']);
    $user_address         = mysql_real_escape_string($post['user_address']);
    $user_city            = mysql_real_escape_string($post['user_city']);
    $user_gender          = mysql_real_escape_string($post['user_gender']);
    $user_email           = mysql_real_escape_string($post['user_email']);
    $user_password        = mysql_real_escape_string($post['user_password']);

    $sel                  = "insert into signup 
    (user_name,user_mobile_no,user_address,user_city,user_profile_pic,user_gender,user_email,user_password)
    values
    ('$user_name','$user_mobile_no','$user_address','$user_city','$user_profile_pic','$user_gender','$user_email','$user_password')";
    $qur                  = mysql_query($sel)or die(mysql_error());
    if($qur)
    { 
      move_uploaded_file($tmp_loc,"uploads/".$user_profile_pic);
      $_SESSION['msg_done'] = "Your data Successfully Inserted";
      header("location:signup.php");
      exit();
    }
    else
    {
      $_SESSION['msg_notdone'] = "Your data is not inserted successfully";      
      header("location:signup.php");
      exit();      
    }
  }
?>
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
  <script>
  $(document).ready(function(){
    //check db mail start 
    $("#user_email").blur(function(){
      var user_email = $("#user_email").val();
      var user_email = 'user_email='+user_email;
      $.ajax({
        type: "POST",
        url: "checkemail.php",
        data: user_email,
        success: function(data)
        {
          var valNew=data.split('*');
          $("#user_email_all").val(valNew[0]);
          if(valNew[1] == 1){alert("E-mail id already exist");}
        }      
      });
    });
    // end check db mail
    //validatoin start for input only number
        $("#user_mobile_no").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    //validatoin end for input only number
    // validation start
    $("#submit").click(function(){
      if($("#user_name").val() == ""){alert("Please Insert Your Name");return false;}
      if($("#user_mobile_no").val() == ""){alert("Please Insert Your Mobile Number");return false;}
      if($("#user_address").val() == ""){alert("Please Insert Your Address");return false;}
      if($("#user_city").val() == ""){alert("Please Insert Your City");return false;}
      if($("#user_profile_pic").val() == ""){alert("Please Insert Your Profile Pic");return false;}
      if($("#user_email").val() == ""){alert("Please Insert Your E-mail");return false;}
      else{var regexp=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if(!($("#user_email").val().match(regexp))){alert("Please Insert Correct E-mail");return false;}}      
      if($("#user_password").val() == ""){alert("Please Insert Your Password");return false;}
      if($("#user_password").val().length <= 6){alert("Password Length must be 6 characters");return false;}

      if($("#user_password").val() == $("#user_repassword").val()){}
        else{alert("Your Password is not match");return false;}     

      if($("#user_email").val() == $("#user_email_all").val()){alert("E-mail id already exist");return false;}
    });
  });
// check input number must be above 6 characters
  function checkLength(el) {
    if (el.value.length <= 6) {
      alert("Password Length must be 6 characters");
    }
  }
  </script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="#"><img src="images/1.png" alt=""/></a>
  </div>
  <!-- for msg start-->
  <div class="row">
    <div class="col-md-2"></div> 
    <div class="col-md-8"> 
        <?php if(isset($_SESSION['msg_done'])){msg_done();}if(isset($_SESSION['msg_notdone'])){msg_notdone();}?>
    </div>
    <div class="col-md-2"></div>  
  </div> 
  <!-- for msg end-->
  <div class="row">
    <div class="col-md-4"></div>
   <div class="col-md-4"><a href="home.php"><input type="button" value="Click Hear for go to home" class="btn btn-xs btn-success1"></a></div>
   <div class="col-md-4"></div>
  </div>
  <form class="form-signin app-cam" method="post" enctype="multipart/form-data">
      <p>Enter your personal details below</p>
      <input type="text" name="user_name" id="user_name" class="form-control1" placeholder="Full Name" autofocus="">
      <input type="text" name="user_mobile_no" id="user_mobile_no" maxlength="10" class="form-control1" placeholder="Mobile Number" autofocus="">
      <input type="text" name="user_address" id="user_address" class="form-control1" placeholder="Address" autofocus="">
      <input type="text" name="user_city" id="user_city" class="form-control1" placeholder="City/Town" autofocus="">
      <input type="file" id="user_profile_pic" name="user_profile_pic">
      <p class="help-block">Select Profile Pic.</p>
      <div class="radios">
        <label class="label_radio" for="male">
            <input type="radio" value="male" name="user_gender" id="male" checked="" accesskey="m"> <u>M</u>ale
        </label>
        <label class="label_radio" for="female">
            <input type="radio" value="femail" name="user_gender" id="female" accesskey="a"> Fem<u>a</u>le
        </label>
	  </div>
	  <p> Enter your account details below</p>
      <input type="text" name="user_email" id="user_email" class="form-control1" placeholder="Email" autofocus="">
      <input type="hidden" name="user_email_all" id="user_email_all">
      <input type="password" onblur="checkLength(this)" name="user_password" id="user_password" class="form-control1" placeholder="Password">
      <input type="password" name="user_repassword" id="user_repassword" class="form-control1" placeholder="Re-type Password">
      <input class="btn btn-lg btn-success1 btn-block" id="submit" type="submit" name="submit" value="Submit">
      <div class="registration">
          Already Registered.
          <a class="" href="index.php">
              Login
          </a>
      </div>
  </form>
   <div class="copy_layout login register">
      <p>Copyright &copy; 2017 makeasoft. All Rights Reserved | Design by <a href="http://makeasoft.com/" target="_blank">Make A Soft</a> </p>
   </div>
</body>
</html>
