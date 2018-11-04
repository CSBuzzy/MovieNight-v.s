<!DOCTYPE html>
<html>
<head>
	<title>Evenement</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Public/CSS/Evenement.css">
	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
</head>
<body>
	<div id="contenu">
		<h1 id="titre">Evenement</h1>

		<section id="detailsEvenement">
			<img id="image" src="../Public/Img/image.png">
			<h2 id="titreEvenement">Soirée tranquille entre filles</h2>
			<label id="langue">VO VF <span id="langueChoisie">VOSTFR</span> VOSTA</label>
			<label id="contenu"><span class = "sousTitres">Contenu : </span>Harry Potter à l'école des sorciers</label><br/>
			<label id="genre"><span class = "sousTitres">Genre : </span>Fantastique</label><br/>
			<label id="localisation"><span class = "sousTitres">Localisation : </span>Bordeaux</label><br/>
			<label id="date"><span class = "sousTitres">Date : </span>Samedi 24 Novembre</label><br/>
			<label id="heure"><span class = "sousTitres">Heure : </span>21h</label><br/>
			<label id="description"><span class = "sousTitres">Description : </span><div id="texteDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus auctor erat vitae pretium. Ut a lobortis lacus. Donec suscipit venenatis dui non volutpat. Donec sit amet ex molestie, congue massa eu, efficitur sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris laoreet lorem ante, nec volutpat ipsum pretium non.</div></label><br/>
			<label id="organisateur"><span class = "sousTitres">Organisateur : </span>Jonathan B.</label><br/>
			<label id="preferences"><span class = "sousTitres">Préférences : </span>Harry Potter à l'école des sorciers</label><br/>
			<label id="materiel"><span class = "sousTitres">Matériel : </span>Home Cinéma</label><br/>
			<label id="places"><span class = "sousTitres">Places restantes : </span>8/10</label><br/>
			<a href="../Controller/Evenements.php"><i class="fa fa-fast-backward circle"></i></a>
			<a href="../Controller/Evenements.php"><img id="ticket" src="../Public/Img/ticket.svg"></a>
		</section>


	</div>
	<?php
		include("menu.php");
	?>
</body>
</html>