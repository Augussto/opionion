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
		    	<div class="post">
		    		<img src="images/user_icon.png" alt="icon" id="username_icon">
		    		<span id="username"><?php echo $row['username']; ?></span>
		    		<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" id="obj_image" alt="obj_image"/>
		    		<h3 id="obj_name"><?php echo $row['title']; ?></h3>
		    		<input type="range" min="0" max="10" id="points" disabled="true" value="<?php echo $row['points']; ?>">
		    		<span id="opinion"><?php echo $row['opinion']; ?></span>
		    	</div>
		    <?php } ?> 
		</div> 
	<?php }else{ ?> 
	    	<p class="status error">No has publicado nada!</p> 
	<?php }

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
		    		<input type="range" min="0" max="10" id="points" disabled="true" value="<?php echo $row['points']; ?>">
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
