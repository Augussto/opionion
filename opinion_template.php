<?php 
//used in your profile, to show your publications
function show_profile($id_user){
	include("connection.php");
	include("delete.php");
	$user_data = check_login($con);
	$cant_opinions = $user_data['cant_opinions']; 

	$query = "SELECT * FROM publications p INNER JOIN user u ON p.id_user = u.id WHERE u.id='$id_user' ORDER BY uploaded DESC";
	$result = mysqli_query($con, $query);

	if($result->num_rows > 0){ ?> 
		<div class=""> 
		    <?php while($row = $result->fetch_assoc()){ ?> 
		    	<div class="post" id="<?php echo $row['id_post']; ?>">
		    		<img src="images/user_icon.png" alt="icon" id="username_icon">
		    		<span id="username"><?php echo $row['username']; ?></span>
		    		<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>"id="obj_image" alt="obj_image">
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


}

//used in the home, to show every opinion
function show_home(){
	include("connection.php");
	include("delete_admin.php");
	$user_data = check_login($con);

	$query = "SELECT * FROM publications p INNER JOIN user u ON p.id_user = u.id ORDER BY uploaded DESC";
	$result = mysqli_query($con, $query);

	if($result->num_rows > 0){ ?> 
		<div class=""> 
		    <?php while($row = $result->fetch_assoc()){
		    	$id = $row['id_user'];
		     ?> 
		    	<div class="post">
		    		<img src="images/user_icon.png" alt="icon" id="username_icon">
		    		<a id="username" href="user_profile.php?id=<?php echo $id ?>&y_id=<?php echo $user_data['id'] ?>"><?php echo $row['username']; ?></a>
		    		<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" id="obj_image" alt="obj_image"/>
		    		<h3 id="obj_name"><?php echo $row['title']; ?></h3>
		    		<div class="progress" id="points">
			  			<div class="progress-bar" style="width: <?php echo $row['points'] * 10; ?>% ;"><?php echo $row['points']; ?></div>
					</div>
		    		<span id="opinion"><?php echo $row['opinion']; ?></span>
		    		<?php if($user_data['admin']){
		    			?>
		    			<form action="" method="post">
		    				<label for="delete">Desea eliminar el post?</label>
		    				<input type="checkbox" name="id_post" value="<?php echo $row['id_post']; ?>">
		    				<label for="delete">Vuelva a Confirmarlo</label>
		    				<input type="checkbox" name="id_user" value="<?php echo $id; ?>">
		    				<input type="submit" value="ELIMINAR">
		    			</form>
		    			<?php
		    		} ?>
		    	</div>
		    <?php } ?> 
		</div> 
	<?php }else{ ?> 
	    	<p class="status error">Algo parece no funcionar :(</p> 
	<?php }
}

//used to see others profile
function show_user_profile($id_user,$id_follower){
	include("connection.php");
	$user_data = check_login($con);

	$query = "SELECT * FROM publications p INNER JOIN user u ON p.id_user = u.id WHERE u.id='$id_user' ORDER BY uploaded DESC";
	$result = mysqli_query($con, $query);

	$followQuery = "SELECT * FROM followers WHERE id_followed = '$id_user'";
	$followResult = mysqli_query($con, $followQuery);

	$header = false;
	$followed = false;

	if($result->num_rows > 0){ ?> 
		<div class=""> 
		    <?php 
		    while($row = $followResult->fetch_assoc()){
		    	if($row['id_user']==$user_data['id']){
		    		$followed = true;
		    	}
		    }
		    while($row = $result->fetch_assoc()){ 
		    	if(!$header){ ?>
		    		<div class="user-container">
	 					<h3>- <?php echo $row['username'] ?> -</h3>
	 					<span>Seguidores: <?php echo $row['cant_followers'] ?> </span>
	 					<span>Seguidos: <?php echo $row['cant_followed'] ?> </span>
	 					<span>Opinions: <?php echo $row['cant_opinions'] ?> </span>
	 				</div>
	 				<?php if($followed){ ?>
	 					<form action="" method="post">
	 						<input type="submit" class="btn-followed" id="followed" value="Seguido" name="btn">
	 						<input type="text" id="idFollowed" value="<?php echo $id_user ?>">
	 						<input type="text" id="idFollower" value="<?php echo $id_follower ?>">
	 				<?php }else{ ?>
	 						<input type="submit" class="btn-follow" id="follow" value="Seguir" name="btn">
	 						<input type="text" id="idFollowed" value="<?php echo $id_user ?>">
	 						<input type="text" id="idFollower" value="<?php echo $id_follower ?>">
	 					</form>
		    		<?php }
		    		$header = true;
		    	}
		    	?> 
		    	<div class="post" id="<?php echo $row['id_post']; ?>">
		    		<img src="images/user_icon.png" alt="icon" id="username_icon">
		    		<span id="username"><?php echo $row['username']; ?></span>
		    		<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>"id="obj_image" alt="obj_image">
		    		<h3 id="obj_name"><?php echo $row['title']; ?></h3>
		    		<div class="progress" id="points">
			  			<div class="progress-bar" style="width: <?php echo $row['points'] * 10; ?>% ;"><?php echo $row['points']; ?></div>
					</div>
		    		<span id="opinion"><?php echo $row['opinion']; ?></span>
		    		<?php if($user_data['admin']){
		    			?>
		    			<form action="" method="post">
		    				<label for="delete">Desea eliminar el post?</label>
		    				<input type="checkbox" name="id_post" value="<?php echo $row['id_post']; ?>">
		    				<label for="delete">Vuelva a Confirmarlo</label>
		    				<input type="checkbox" name="id_user" value="<?php echo $id; ?>">
		    				<input type="submit" value="ELIMINAR">
		    			</form>
		    			<?php
		    		} ?>
		    	</div>
		    <?php } ?> 
		</div> 
	<?php }else{ ?> 
	    	<p class="status error">Algo parece no funcionar</p> 
	<?php }

}

//used in the followed seccion
function show_followed($y_id){
	include("connection.php");
	$user_data = check_login($con);
	$id_user = $user_data['id'];

	$query = "SELECT p.id_post, p.title, p.img, p.points, p.opinion, p.id_user, u.username FROM publications p JOIN user u ON p.id_user = u.id JOIN followers f ON p.id_user = f.id_followed WHERE f.id_user = '$y_id' ORDER BY uploaded DESC";
	$result = mysqli_query($con, $query);
	
	if($result->num_rows > 0){ ?> 
		<div class=""> 
		    <?php while($row = $result->fetch_assoc()){
		    	$id = $row['id_user'];
		    	if($id!=$id_user){ 
		     ?> 
		    	<div class="post">
		    		<img src="images/user_icon.png" alt="icon" id="username_icon">
		    		<a id="username" href="user_profile.php?id=<?php echo $id ?>&y_id=<?php echo $user_data['id'] ?>"><?php echo $row['username']; ?></a>
		    		<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" id="obj_image" alt="obj_image"/>
		    		<h3 id="obj_name"><?php echo $row['title']; ?></h3>
		    		<div class="progress" id="points">
			  			<div class="progress-bar" style="width: <?php echo $row['points'] * 10; ?>% ;"><?php echo $row['points']; ?></div>
					</div>
		    		<span id="opinion"><?php echo $row['opinion']; ?></span>
		    		<?php if($user_data['admin']){
		    			?>
		    			<form action="" method="post">
		    				<label for="delete">Desea eliminar el post?</label>
		    				<input type="checkbox" name="id_post" value="<?php echo $row['id_post']; ?>">
		    				<label for="delete">Vuelva a Confirmarlo</label>
		    				<input type="checkbox" name="id_user" value="<?php echo $id; ?>">
		    				<input type="submit" value="ELIMINAR">
		    			</form>
		    			<?php
		    		} ?>
		    	</div>
		    <?php } } ?> 
		</div> 
	<?php }else{ ?> 
	    	<p class="status error">Algo parece no funcionar :(</p> 
	<?php }

}



 ?>
