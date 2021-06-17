<?php 

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);



if(isset($_POST['btnValue'])){
	$btnValue = $_POST['btnValue'];
	$id_follower = $_POST['idFollower'];
	$id_followed = $_POST['idFollowed'];

	if($btnValue=="Seguir"){

		$query = "INSERT INTO followers (id_user , id_followed) VALUES ('$id_follower' , '$id_followed' )";
		mysqli_query($con, $query); 

		$query = "UPDATE user SET cant_followed = cant_followed + 1 WHERE id = '$id_follower'";
       	mysqli_query($con, $query);

       	$query = "UPDATE user SET cant_followers = cant_followers + 1 WHERE id = '$id_followed'";
       	mysqli_query($con, $query);
 
		header("Location: index.php");

	}else if($btnValue=="Seguido"){

		$query = "DELETE FROM followers WHERE id_user = '$id_follower' AND id_followed = '$id_followed'";
		mysqli_query($con, $query);

		$query = "UPDATE user SET cant_followed = cant_followed - 1 WHERE id = '$id_follower'";
       	mysqli_query($con, $query);

       	$query = "UPDATE user SET cant_followers = cant_followers - 1 WHERE id = '$id_followed'";
       	mysqli_query($con, $query);

       	header("Location: index.php");
	}
}



 ?>