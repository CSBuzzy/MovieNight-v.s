<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Public/CSS/Contact.css">
	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<div id="contenu">
		<div id="divlogo">
			<img src="../Public/Img/logo_movie_night.svg" id="logo">
		</div>
		<p id = "titre">Signaler</p>
		<div id="divContenu">
			<form>
				<div id="divObjet">
					<label for="soiree">Soirée concernée :</label><br>
					<select id="soiree" name="soiree">
						<option value="---">Date et Nom de la soirée</option>
						<option>---</option>
						<option>---</option>
					</select><br>
					<label for="objet">Personne concernée (facultatif) :</label><br>
					<input type="text" name="objet" class="textInput"><br>
					<label for="commentaires">Commentaires :</label><br>
					<textarea rows="10" name="commentaires" id="commentaires"></textarea><br>
				</div>
				<div id="divSubmit">
					<button type="submit" id="submit_button">
						<i class="fa fa-fast-backward circle"></i>
					</button>
					<button type="submit" id="submit_button">
						<i class="fa fa-play circle"></i>
					</button>
				</div>
			</form>
		</div>
	</div>
</body>
<script type="text/javascript"></script>
<?php 
	include("menu.php");
?>
</html>