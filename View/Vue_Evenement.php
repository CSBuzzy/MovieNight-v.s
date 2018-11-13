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
			<img id="image" src=<?php print($event->getImage_event()) ?>>
			<h2 id="titreEvenement"><?php print($event->getName_event()) ?></h2>
			<label id="langue">VO VF <span id="langueChoisie">VOSTFR</span> VOSTA</label>
			<label id="contenu"><span class = "sousTitres">Contenu : </span><?php print($contentList[0]->getName_content()) ?></label><br/>
			<label id="genre"><span class = "sousTitres">Genre : </span><?php print($contentList[0]->getGenre()) ?></label><br/>
			<label id="localisation"><span class = "sousTitres">Localisation : </span><?php print(ucfirst(strtolower($event->getCity()))) ?></label><br/>
			<label id="date"><span class = "sousTitres">Date : </span><?php print($event->getDate_event()) ?></label><br/>
			<label id="heure"><span class = "sousTitres">Heure : </span><?php print($event->getDuration_event()) ?></label><br/>
			<label id="description"><span class = "sousTitres">Description : </span><div id="texteDescription"><?php print($event->getDescription_event()) ?></div></label><br/>
			<label id="organisateur"><span class = "sousTitres">Organisateur : </span><?php print($event->getOrganizer()) ?></label><br/>
			<label id="preferences"><span class = "sousTitres">Préférences : </span>//TODO</label><br/>
			<label id="materiel"><span class = "sousTitres">Matériel : </span>//TODO</label><br/>
			<label id="places"><span class = "sousTitres">Places restantes : </span><?php print($event->getSeatsRemaining_event().'/'.$event->getMember_number_event()) ?></label><br/>
			<a href="../Controller/Evenements.php"><i class="fa fa-fast-backward circle"></i></a>
			<a href="../Controller/Evenements.php"><img id="ticket" src="../Public/Img/ticket.svg"></a>
		</section>


	</div>
	<?php
		include("menu.php");
	?>
</body>
</html>