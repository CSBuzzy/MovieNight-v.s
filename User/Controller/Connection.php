<?php 
	//On récupère la classe qui accède à la base de données 
	require_once("../Model/MemberDAO.php");
	//Si l'utilisateur a entré un identifiant et un mot de passe
	if (isset($_POST['identifiant']) && isset($_POST['password'])) {
		//On teste la connexion avec ses identifiants
		//Si elle réussit : 
		if(connectionMember($_POST['identifiant'], sha1($_POST['password']))){ 
			//on lui envoie la page evènements :
			require_once ("../Controller/Evenements.php");
		}
		else {
			//Sinon, on renvoie la page connexion
			require_once("../View/Vue_Connection.php");
		}
	}
	//Si l'utilisateur arrive juste, on affiche la page connexion.
	else {
		require_once("../View/Vue_Connection.php");
	}


 ?>