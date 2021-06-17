 <?php 
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
	//something was posted

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($username) && !empty($password)){
		//read from db
		$query = "SELECT * FROM user WHERE username = '$username' LIMIT 1";

		$result = mysqli_query($con, $query);

		if($result){
			if($result && mysqli_num_rows($result) > 0){
				
				$user_data = mysqli_fetch_assoc($result);

				//decryption of the password
				$verify = password_verify($password, $user_data['password']);
				
				if($verify){
					$_SESSION['id'] = $user_data['id'];
					header("Location: index.php");
					die;
				}
			}
		}
	}else{
		echo "Please enter some valid information";
	}
}

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>OpiOnion</title>
</head>
<body>
	<div class="title-container">
		<img id="minilogo" src="images/logo1.png" onclick="location.href = 'index.php';">
		<span>OpiOnion</span>
	</div>

		<div class="nav-search">
			<ul>
				<li onclick="location.href = '#zone1';">¿Como funciona OpiOnion?</li>
				<li onclick="location.href = '#zone2';">¿Quienes Somos?</li>
				<li id="btn-register" onclick="location.href = 'signup.php';">Registrarse</li>
			</ul>
		</div>

	<div class="principal-container">
		<div class="login-container" id="login-container">
			<form action="" method="post">
				<p>¡INICIA SESION!</p>
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
				<label for="password">Contraseña</label>
				<input type="password" name="password" id="password">
				<input type="submit" value="Iniciar" id="btn-login-send">
			</form>
		</div>
	</div>

	<div class="description zone1-container" id="zone1">
		<h3>¿Como Funciona OpiOnion? <br></h3>
		<span>
			De hecho es muy sencillo! <br>
			Crea tu cuenta gratuitamente, con un nombre de Usuario original <br>
			Una vez que tengas listo tu perfil podes subir tus reseñas a OpiOnion <br>
			asi todo el mundo puede ver que te parecio la ultima pelicula que viste! <br>
		</span>
	</div>
	<div class="description zone2-container" id="zone2">
		<h3>¿Quienes Somos?</h3>
		<span>
			OpiOnion esta hecho por una sola persona, si leiste bien, una sola persona! <br>
			soy Augusto, naci en el año 2000 y actualmente resido en Mendoza, Argentina. <br>
			Cree OpiOnion en un proyecto de mi Universidad y actualmente sigue estando en desarrollo <br>
			Asique si encontras algun error dejamelo saber asi lo soluciono lo mas rapido posible! <br>
			Espero que disfrutes de OpiOnion y que tus reseñas lleguen a todo el mundo!.
		</span>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="scripts/script.js"></script>
</body>
</html>