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
	
	<div class="followed-container" id="followed">
		
		<div class="post">
			<img src="images/user_icon.png" alt="icon" id="username_icon">
			<span id="username">user_name</span>
			<img src="images/movie_poster2.jpg" alt="obj_image" id="obj_image">
			<h3 id="obj_name">obj_name</h3>
			<input type="range" min="0" max="10" id="points" disabled="true">
			<span id="opinion"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima quaerat exercitationem animi unde, consectetur beatae inventore quibusdam possimus nihil corrupti mollitia aut pariatur, et. Tempora, dolore, corrupti. Consequuntur, voluptatum, cupiditate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam sint quis, pariatur dolorum maxime, dolore suscipit consequatur error? Facilis aliquam voluptates labore ipsa deserunt quisquam corrupti, quis dolorum veritatis saepe.</span>
		</div>

		<div class="post">
			<img src="images/user_icon.png" alt="icon" id="username_icon">
			<span id="username">user_name</span>
			<img src="images/movie_poster2.jpg" alt="obj_image" id="obj_image">
			<h3 id="obj_name">obj_name</h3>
			<input type="range" min="0" max="10" id="points" disabled="true">
			<span id="opinion"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima quaerat exercitationem animi unde, consectetur beatae inventore quibusdam possimus nihil corrupti mollitia aut pariatur, et. Tempora, dolore, corrupti. Consequuntur, voluptatum, cupiditate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam sint quis, pariatur dolorum maxime, dolore suscipit consequatur error? Facilis aliquam voluptates labore ipsa deserunt quisquam corrupti, quis dolorum veritatis saepe.</span>
		</div>

	</div>


	<script src="scripts/scriptHome.js"></script>
</body>
</html>