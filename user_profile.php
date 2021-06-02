<?php 
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

include("opinion_template.php");

$id = $_GET['id'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/homeStyles.css">
	<title>Profile</title>
</head>
<body>
	
	<?php 
		include("header.php");
	?>

	 <?php show_user_profile($id); ?>

	<script src="scripts/scriptHome.js"></script>
	<script src="scripts/scriptBtnFollow.js"></script>
</body>
</html>