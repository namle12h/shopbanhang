
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
	
</head>
<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login.php');
 } 
?>
<body>
	<a href="index.php"><h3 class="title_admin">QUẢN LÝ HỆ THỐNG</h3></a>
	<div class="wrapper">
	<?php 
	                 
			include("config/config.php");
			 include("modules/menu.php");
			 include("modules/main.php");
		
	?>
	</div>

</body>
</html>
