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
		
		<form action="">
			<input type="text" id="name" placeholder="Titulo..." autocomplete="off">
			<label for="points">Puntua: </label>
			<input type="range" min="0" max="10" id="points">
			<textarea name="" id="opinion" cols="30" rows="10" placeholder="Tu Opinion..." autocomplete="off"></textarea>
			<input type="file" id="image">
			<input type="submit" id="send">
		</form>

	</div>


<script src="scripts/scriptHome.js"></script>
</body>
</html>