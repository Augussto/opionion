<?php 
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

include("upload.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/homeStyles.css">
	<link rel="stylesheet" href="css/uploadStyles.css">
	<title>Upload</title>
</head>
<body>
	<?php 
		include("header.php");
	 ?>

	<div class="upload-container">
		
		<form action="" method="post" enctype="multipart/form-data">
			<input type="text" name="title" id="name" placeholder="Titulo..." autocomplete="off">
			<label for="points">Puntua: </label>
			<input type="range" name="points" min="0" max="10" id="points" oninput="this.nextElementSibling.value = this.value">
			<output>5</output>
			<textarea name="opinion" id="opinion" cols="30" rows="10" placeholder="Tu Opinion..." autocomplete="off"></textarea>
			<input type="file" name="image" id="image">
			<input type="submit" name="submit" id="send">
		</form>

	</div>


<script src="scripts/scriptHome.js"></script>
</body>
</html>