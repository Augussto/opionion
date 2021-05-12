<?php 
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

include("opinion_template.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="css/homeStyles.css">
	<title>Home</title>
</head>
<body>
	<?php 
		include("header.php");
	 ?>

	<div class="new-container" id="new">
		
		<?php show_home(); ?>

	</div>

	

	<script src="scripts/scriptHome.js"></script>
</body>
</html>