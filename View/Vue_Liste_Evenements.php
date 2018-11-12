<!DOCTYPE html>
<html>
<head>
	<title>Evenements</title>	
	<link rel="stylesheet" type="text/css" href="../Public/CSS/Liste_Evenements.css">
	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<div id="contenu">
		<h1 id="titre">Evenements</h1>

		<?php  

			foreach ($eventList as $event ) {

				if ($event->getSpecial_event() == 0) {
					$script = '<section class="event">';
				}
				else {
					$script = '<section class="special event">';
				}

				$script .= '<img id="image" src="'.$event->getImage_event().'">';
				$script .= '<div id="texteEvenement">';
				$script .= '<h2 id="titreEvenement">'.$event->getName_event().'</h2>';
				$script .= '<strong>Titre(s) :</strong> "//TODO"<br/>';
				$script .= '<strong>Date :</strong> '.$event->getDate_event().' <br/>';
				$script .= '<strong>Heure :</strong> '.$event->getDuration_event().'<br/>';
				$script .= '<strong>Ville : </strong><span id = "ville">'.ucfirst(strtolower($event->getCity())).'</span><br/>';
				$script .= '<strong>Places disponibles :</strong> '.$event->getSeatsRemaining_event().'/'.$event->getMember_number_event().'<br/>';
				$script .= '<a class="lienEvenement" href="Evenements.php?event='.$event->getId_event().'"><i class="fa fa-play circle"></i></a>';
				$script .= '</div></section>';
				print($script);

			}

		?>

		<section class="special event">
			<img id="image" src="../Public/Img/image.png">
			<div id="texteEvenement">
					<h2 id="titreEvenement">Harry Potter</h2>
					<span class="id_event">id_event</span>
					<strong>Titre :</strong> "Les reliques de la mort part 2"<br/>
					<strong>Date :</strong> Jeudi 1 Novembre <br/>
					<strong>Heure :</strong> 21h<br/>
					<strong>Ville :</strong> Cenon<br/>
					<strong>Places disponibles :</strong> 6/6<br/>
					<a class="lienEvenement" href="Evenements.php?event=id_event"><i class="fa fa-play circle"></i></a>
			</div>
		</section>
		<section class="event">
			<img id="image" src="../Public/Img/image.png">
			<div id="texteEvenement">
					<h2 id="titreEvenement">Harry Potter</h2>
					<span class="id_event">id_event</span>
					<strong>Titre :</strong> "L'école des sorciers"<br/>
					<strong>Date :</strong> Jeudi 1 Novembre <br/>
					<strong>Heure :</strong> 21h<br/>
					<strong>Ville :</strong> Cenon<br/>
					<strong>Places disponibles :</strong> 3/6<br/>
					<a class="lienEvenement" href="Evenements.php?event=id_event"><i class="fa fa-play circle"></i></a>
			</div>
		</section>
		<section class="special event"></section>
		<section class="event">
			<img id="image" src="../Public/Img/image.png">
			<div id="texteEvenement">
					<h2 id="titreEvenement">Harry Potter</h2>
					<span class="id_event">id_event</span>
					<strong>Titre :</strong> Les reliques de la mort part2<br/>
					<strong>Date :</strong> Jeudi 1 Novembre <br/>
					<strong>Heure :</strong> 21h<br/>
					<strong>Ville :</strong> Cenon<br/>
					<strong>Places disponibles :</strong> 0/6<br/>
					<a class="lienEvenement" href="Evenements.php?event=id_event"><i class="fa fa-play circle"></i></a>
			</div>
		</section>
		<section class="event"></section>
	</div>

	<?php
		include("menu.php");
	?>
</body>
</html>