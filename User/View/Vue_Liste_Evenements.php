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
		<div id="conteneur">
			<?php  
				foreach ($eventList as $event ) {

					if ($event->getSpecial_event() == 0) {
						$script = '<section class="event">';
					}
					else {
						$script = '<section class="special event">';
					}
					setlocale(LC_TIME, 'fra_fra');
					$script .= '<img id="image" src="'.$event->getImage_event().'">';
					$script .= '<div id="texteEvenement">';
					$script .= '<h2 id="titreEvenement">'.$event->getName_event().'</h2>';
					$script .= '<strong>Date :</strong> '. utf8_encode(strftime('%A %d %B',(strtotime($event->getDate_event())))).' <br/>';
					$script .= '<strong>Heure :</strong> '.strftime('%R',(strtotime($event->getDate_event()))).'<br/>';
					$script .= '<strong>Durée : </strong>'. $event->getDuration_event() . '<br/>';
					$script .= '<strong>Ville : </strong><span id = "ville">'.ucwords(strtolower($event->getCity())).'</span><br/>';
					$script .= '<strong>Places disponibles :</strong> '.$event->getSeatsRemaining_event().'/'.$event->getMember_number_event().'<br/>';
					$script .= '<a class="lienEvenement" href="Evenements.php?event='.$event->getId_event().'"><i class="fa fa-play circle"></i></a>';
					$script .= '</div></section>';
					print($script);
				}
			?>
		</div>
	<?php
		include("menu.php");
	?>
</body>
</html>