<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Public/CSS/Connection.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<div id="divlogo">
		<img src="../Public/Img/logo_movie_night.svg" id="logo">
	</div>
	<p id = "titre">Se connecter</p>
	<form method="POST" action="..\Controller\ConnectionController.php">
		<input type="text" name="identifiant" placeholder="Adresse mail" id = "identifiant" class="champs">
		<input type="password" name="password" placeholder="Mot de passe" id = "password" class="champs">
		<div id="buttons">
			<div class="element1">
				<a href="Accueil.html"><i class="fa fa-fast-backward circle"></i></a>
			</div>
			<div class="element2">
				<i class="fa fa-facebook circle"></i>
				<i class="fa fa-google-plus circle"></i>
			</div>
	    	<div class="element1">
				<button type="submit" id="submit_button">
					<i class="fa fa-play circle"></i>
				</button>
			</div>
		</div>
	</form>
</body>
<script type="text/javascript"></script>
<?php /*
	$dbConn = new pdo("mysql: host=localhost; port=3306; dbname=movie_night; charset=utf8", "root", "password");
	$SQLQuery = "select name_member, first_name_member 
				from member 
				inner join have on member.id_member = have.id_member
				inner join contact_method on have.id_contact_method = contact_method.id_contact_method
				where id_contact_type = 1 
				and password_member = '".$_POST['password']."'
				and value_contact_method = '".$_POST['identifiant']."'";
	$SQLResult = $dbConn->query($SQLQuery);
	while($SQLRow = $SQLResult->FetchObject()){
		print_r($SQLRow);
	}
	$SQLResult->closeCursor();	*/
?>
</html>