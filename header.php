
	<div class="nav-container" id="desktop">
		<img src="images/logo1.png" alt="" class="minilogo">
		<ul class="btn-container">
			<li ><a id="btn-new"href="index.php">Descubre</a></li>
			<li ><a id="btn-followed" href="homeFollowed.php">Seguidos</a></li>
			<li ><a id="btn-upload" href="publish.php">Publicar</a></li>
			<li ><a id="btn-profile" href="profile.php">Perfil</a></li>
		</ul>
		<form action="" method="post">
			<input type="text" class="src" name="username" placeholder="Buscador">
			<input type="submit" name="search" hidden="true" />
		</form>
	</div>

	<div class="nav-container--mobile" id="mobile">
		<img src="images/logo1.png" alt="" class="minilogo">
		<form action="search.php" method="post">
			<input type="text" class="src" name="username" placeholder="Buscador">
			<input type="submit" name="search" hidden="true" />
		</form>
		<div class="icon-container" id="icon">
			<div class="bar" id="1"></div>
			<div class="bar" id="2"></div>
			<div class="bar" id="3"></div>
		</div>
		<ul class="btn-container" id="mobile-list">
			<li id="m1" ><a id="btn-new--mobile" href="index.php">Descubre</a></li>
			<li id="m2" ><a id="btn-followed--mobile" href="homeFollowed.php">Seguidos</a></li>
			<li id="m3" ><a id="btn-upload--mobile" href="publish.php">Publicar</a></li>
			<li id="m4" ><a id="btn-profile--mobile" href="profile.php">Perfil</a></li>
		</ul>
	</div>
	<script src="scripts/scriptHeader.js"></script>