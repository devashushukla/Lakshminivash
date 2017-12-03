<?php
	include_once("config.php");
	$post = $_POST;
	$cel = new db();
	if(isset($post['submit']))
	{
		$result = $cel->student_entry($post);
		/*
		$name  = $post['name'];
		$sub   = $post['sub'];
		$class = $post['class'];
		$mob   = $post['mob'];
		$sql = "INSERT INTO  `student_entry` (`name` ,  `sub` ,  `class` ,  `mob` ) VALUES ('$name',  '$sub',  '$class',  '$mob')";
		$rs = mysql_query($sql)or die(mysql_error("Error in this line"));
		if($rs)
		{
			header("location:student_entry.php?msg=Successfully inserted");
			exit();
		}
		else
		{
			header("location:student_entry.php?msg=Not inserted please check");
			exit();
		}
		*/
	}
?>

<h1>Student Entry</h1>
<?php
	if(isset($_REQUEST['msg']))
	{
		echo "<h3>".$_REQUEST['msg']."</h3>";
	}
?>
<form action="student_entry.php" method="post">
	<div>
		<b>Name:</b> <input type="text" value="" name="name" id="name">
	</div>
	<div>
		<b>Subject:</b> <input type="text" value="" name="sub" id="sub">
	</div>
	<div>
		<b>Class:</b> <input type="text" value="" name="class" id="class">
	</div>
	<div>
		<b>Mobile:</b> <input type="text" value="" name="mob" id="mob">
	</div>
	<div align="center">
		<input type="submit" name="submit" id="submit" value="Submit">
		<input type="reset" name="reset" id="reset" value="Reset">
	</div>
</form>