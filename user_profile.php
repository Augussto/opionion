<?php 
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
$id_user = $user_data['id'];

include("opinion_template.php");

$id = $_GET['id'];
$y_id = $_GET['y_id'];

if($id == $user_data["id"]){
	header("Location: profile.php");
}




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/homeStyles.css">
	<title>Profile</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	
	<?php 
		include("header.php");


		show_user_profile($id,$y_id);
	?>


	<script src="scripts/scriptHome.js"></script>
	<script src="scripts/scriptBtnFollow.js"></script>
</body>
</html>