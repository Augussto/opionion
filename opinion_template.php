<?php 
//used in your profile, to show your publications
function show_profile($id_user){
	include("connection.php");
	$user_data = check_login($con); 

	$query = "SELECT * FROM publications p INNER JOIN user u ON p.id_user = u.id WHERE u.id='$id_user' ORDER BY uploaded DESC";
	$result = mysqli_query($con, $query);

	if($result->num_rows > 0){ ?> 
		<div class=""> 
		    <?php while($row = $result->fetch_assoc()){ ?> 
		    	<div class="post" id="<?php echo $row['id_post']; ?>">
		    		<img src="images/user_icon.png" alt="icon" id="username_icon">
		    		<span id="username"><?php echo $row['username']; ?></span>
		    		<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" id="obj_image" alt="obj_image"/>
		    		<h3 id="obj_name"><?php echo $row['title']; ?></h3>
		    		<div class="progress" id="points">
			  			<div class="progress-bar" style="width: <?php echo $row['points'] * 10; ?>% ;"><?php echo $row['points']; ?></div>
					</div>
		    		<span id="opinion"><?php echo $row['opinion']; ?></span>
		    		<form action="" method="post">
		    			<label for="delete">Desea eliminar el post?</label>
		    			<input type="checkbox" name="delete" value="<?php echo $row['id_post']; ?>">
		    			<input type="submit" value="ELIMINAR">
		    		</form>
		    	</div>
		    <?php } ?> 
		</div> 
	<?php }else{ ?> 
	    	<p class="status error">No has publicado nada!</p> 
	<?php }

	//Delete the publication that you select on yout profile
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$id_post = $_POST['delete']; 

		$query = "DELETE FROM publications WHERE '$id_post' = id_post";
		mysqli_query($con, $query);
	}

}

//used in the home, to show every opinion
function show_home(){
	include("connection.php");
	$user_data = check_login($con);

	$query = "SELECT * FROM publications p INNER JOIN user u ON p.id_user = u.id ORDER BY uploaded DESC";
	$result = mysqli_query($con, $query);

	if($result->num_rows > 0){ ?> 
		<div class=""> 
		    <?php while($row = $result->fetch_assoc()){ ?> 
		    	<div class="post">
		    		<img src="images/user_icon.png" alt="icon" id="username_icon">
		    		<span id="username"><?php echo $row['username']; ?></span>
		    		<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" id="obj_image" alt="obj_image"/>
		    		<h3 id="obj_name"><?php echo $row['title']; ?></h3>
		    		<div class="progress" id="points">
			  			<div class="progress-bar" style="width: <?php echo $row['points'] * 10; ?>% ;"><?php echo $row['points']; ?></div>
					</div>
		    		<span id="opinion"><?php echo $row['opinion']; ?></span>
		    	</div>
		    <?php } ?> 
		</div> 
	<?php }else{ ?> 
	    	<p class="status error">Algo parece no funcionar :(</p> 
	<?php }
}

//used in the followed seccion
function show_followed(){

}

 ?>
