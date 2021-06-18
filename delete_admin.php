 <?php 
	include("connection.php");
 
//Delete the publication that you select on yout profile
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$id_post = $_POST['id_post']; 
		$id_user = $_POST['id_user'];
		
		$query = "DELETE FROM publications WHERE '$id_post' = id_post";
		mysqli_query($con, $query);
		
		$query = "UPDATE user SET cant_opinions = cant_opinions - 1 WHERE id = '$id_user'";
       	mysqli_query($con, $query);	

       	header("Location: index.php");
	}
 ?>