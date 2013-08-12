<?php
if(isset($_GET['id']))
	$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>不息之壤--</title>
<link rel="stylesheet" type="text/css" media="screen, projection" href="css/screen.css" />
<link rel="shortcut icon" href="img/Project1.ico" />
<link rel="bookmark"  href="img/Project1.ico" />
</head>

<body>
	<?php
	include "header.php";
	?>
	<div id="wrap" class="group">
	<?php
	if(isset($_GET['id']) && is_numeric($id) && $id<6 && $id>0)
		include $id . ".php";
	else
		include "1.php";
	?>
	<?php
	include "secondary.php";
	include "footer.php";
	?>
	</div>
</body>
</html>