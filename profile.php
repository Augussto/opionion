<?php 
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

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
	include("header.php")
	 ?>
	 <a href="logout.php">Exit</a>
	 <div class="user-container">
	 	<h3>- <?php echo $user_data['username'] ?> -</h3>
	 	<span>Followers: - </span>
	 	<span>Followed: - </span>
	 	<span>Opinions: - </span>
	 </div>


	<script src="scripts/scriptHome.js"></script>
</body>
</html>