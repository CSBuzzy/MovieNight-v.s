<?php
include "admin_menu.php";
require_once "../../User/Model/DbConn.php";
?>

<html lang="fr">
<head>
<meta charset="UTF-8">
<title>admin_event</title>
    <link rel="stylesheet" type="text/css" href="../Public/CSS/admin_event.css">
    <link rel="stylesheet" type="text/css" href="../../User/Public/CSS/Liste_Evenements.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../User/Public/JS/evenement.js"></script>
</head>
<body>
<div class="position_admin">

<div id="contenu">

    <?php
    foreach ($eventList as $event ) {

        if ($event->getSpecial_event() == 0) {
            $script = '<section class="event">';
        }
        else {
            $script = '<section class="special event">';
        }
        setlocale(LC_TIME, 'fra_fra');
        $script .= '<div> <img id="image" src="'.$event->getImage_event().'"></div>';
        $script .= '<div id="texteEvenement">';
        $script .= '<h2 id="titreEvenement">'.$event->getName_event().'</h2>';
        $script .= '<strong>Titre(s) :</strong> "//TODO"<br/>';
        $script .= '<strong>Date :</strong> '. strftime('%A %d %B',(strtotime($event->getDate_event()))).' <br/>';
        $script .= '<strong>Heure :</strong> '.strftime('%R',(strtotime($event->getDate_event()))).'<br/>';
        $script .= '<strong>Ville : </strong><span id = "ville">'.ucfirst(strtolower($event->getCity())).'</span><br/>';
        $script .= '<strong>Places disponibles :</strong> '.$event->getSeatsRemaining_event().'/'.$event->getMember_number_event().'<br/>';
        $script .= '<strong>Status :</strong> '.$event->getId_status().'<br/>';
        $script .= '<a class="lienEvenement" href="admin_Evenements.php?event='.$event->getId_event().'"><i class="fa fa-play circle"></i></a>';
        $script .= '</div></section>';
        print($script);
    }

?>
</div>
</div>

</body>
</html>
