<?php 
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);


		$username = $_POST['username'];
		//$search = $mysqli -> real_escape_string($username);
				
		$query = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
		$result = mysqli_query($con, $query);
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$id_user=$row['id'];
				$y_id = $user_data['id'];
				header("Location: user_profile.php?id=$id_user&y_id=$y_id");
			}
			
		}else{
			header("Location: index.php");
		}
       	


 ?>