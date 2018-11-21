<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Public/CSS/Connection.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<div id="divlogo">
		<img src="../Public/Img/logo_movie_night.svg" id="logo">
	</div>
	<p id = "titre">Se connecter</p>
	<form method="POST" action="..\Controller\Connection.php">
		<input type="text" name="identifiant" placeholder="Adresse mail" id = "identifiant" class="champs">
		<input type="password" name="password" placeholder="Mot de passe" id = "password" class="champs">
		<div id="buttons">
			<div class="element1">
				<a href="../View/Accueil.html"><i class="fa fa-fast-backward circle"></i></a>
			</div>
			<div class="element2">
				<i class="fa fa-facebook circle"></i>
				<i class="fa fa-google-plus circle"></i>
			</div>
	    	<div class="element1">
				<button type="submit" id="submit_button">
					<i class="fa fa-play circle"></i>
				</button>
			</div>
		</div>
	</form>
</body>
<script type="text/javascript"></script>
</html>