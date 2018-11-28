<?php
//On récupère la classe qui accède à la base de données
require_once("../../User/Model/EventDAO.php");
require_once("../../User/Model/ContentDAO.php");
require("../Model/EventadminDAO.php");


//Si il y a un id d'event dans l'url
if (isset($_GET['event'])) {
    // Si il y un id status dans l'url : on veut archiver un event
    if (isset($_GET['status'])) {

        updateStatusEvent($_GET['event'] ,$_GET['status']);
        //puis on recharge la page
        $eventList = getAllEventsAdmin();
        require_once ("../View/vue_admin_liste_event.php");
    }
    else {
        //On va récupérer l'event en question
        $event = getEvent(intval($_GET['event']));
        //Puis les contenus de cet evenement
        $contentList = getContents($_GET['event']);
        //puis on affiche la vue d'un evenement
        require_once("../View/vue_admin_event.php");
    }
}
//S'il n'y a pas d'ID
else {
    //on va récupérer la liste des evenements
    $eventList = getAllEventsAdmin();
    //puis on affiche la vue de la liste d'evenements
    require_once("../View/vue_admin_liste_event.php");
}






?>