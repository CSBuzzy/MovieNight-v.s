<?php 

	require_once("../Model/MemberDAO.php");

	if (isset($_POST['identifiant']) && isset($_POST['password'])) {
		if(connectionMember($_POST['identifiant'], $_POST['password'])){ 
			require_once ("../View/Evenements.php");
		}
		else {
			require_once("../View/Connection.php");
		}
	}
	else {
		require_once("../View/Connection.php");
	}


 ?>