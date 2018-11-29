<?php 
	//On récupère la classe qui accède à la base de données 
	require_once("../Model/EventDAO.php");
	require_once("../Model/ContentDAO.php");
	require_once("../Model/Member.php");

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
			if (!empty($_POST)) {
				session_start();
				if(addEvent($_POST['nom'], $_POST['radio'], $_POST['type'], $_POST['titre'], $_POST['langue'], $_POST['genre'], $_POST['date'], $_POST['heure'], $_POST['duree'], $_POST['description'], $_POST['number'], $_POST['line1_address'], $_POST['line2_address'], $_POST['code'], $_POST['ville'], $_SESSION['member']->getId_member(), $_POST['image'])){
					print("Votre demande de création a été prise en compte, elle sera visible une fois validée par un administrateur");
					require_once("Evenements.php");

				}
				else  {
					print("Les champs ne sont pas conformes ou pas remplis");
					$_GET['action'] = 'create';
					require_once("Evenements.php");
				}
			}
			else {
				$listGenres = listGenres();
				//affichage formulaire insertion
				require_once("../View/Vue_createEvent.php");
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