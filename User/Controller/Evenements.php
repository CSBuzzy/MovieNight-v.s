<?php 
	//On récupère la classe qui accède à la base de données 
	require_once("../Model/EventDAO.php");
	require_once("../Model/ContentDAO.php");

	if (!empty($_GET)) {
		//Si il y a un id d'event dans l'url 
		if (isset($_GET['event'])) {
			//On va récupérer l'event en question
			$event = getEvent(intval($_GET['event']));
			//Puis les contenus de cet evenement
			$contentList = getContents($_GET['event']);
			//puis on affiche la vue d'un evenement
			require_once("../View/Vue_Evenement.php");
		}
		if (isset($_GET['action'])) {
			if (isset($_POST)) {
				//methode d'insertion
			}
			else {
				//affichage formulaire insertion
			}
		}
	}	
	//S'il n'y a pas d'ID
	else {
		//on va récupérer la liste des evenements
		$eventList = getAllEvents();
		//puis on affiche la vue de la liste d'evenements
		require_once("../View/Vue_Liste_Evenements.php");
	}




 ?>