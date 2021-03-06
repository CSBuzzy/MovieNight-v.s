<!DOCTYPE html>
<html>
<head>
	<title>menu</title>
	<link rel="stylesheet" type="text/css" href="../Public/CSS/menu.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="shortcut icon" href="#">
	<meta charset="utf-8">
</head>
<body>
	<div id="divMenu">
		<div id="menu">
		 	<a class="icons" id="icon1" href="../Controller/Evenements.php"><svg aria-hidden="true" data-prefix="fas" data-icon="film" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-film fa-w-16 fa-lg"><path fill="currentColor" d="M488 64h-8v20c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12V64H96v20c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12V64h-8C10.7 64 0 74.7 0 88v336c0 13.3 10.7 24 24 24h8v-20c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v20h320v-20c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v20h8c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24zM96 372c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm272 208c0 6.6-5.4 12-12 12H156c-6.6 0-12-5.4-12-12v-96c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v96zm0-168c0 6.6-5.4 12-12 12H156c-6.6 0-12-5.4-12-12v-96c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v96zm112 152c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40z" id="image1"></path></svg></a>
		 	<a class="icons" href="" id="icon2"><i id="image2" class="fa fa-rocket images"></i></a>
		 	<a class="icons" id="icon3" href="/MovieNight-v.s/User/Controller/Profil.php"><i id="image3" class="fa fa-user images"></i></a>
		 	<a class="icons" href="" id="icon4"><i  id="image4" class="fa fa-search images"></i></a>
		 	<a class="icons" id="BtnMenuDeroulant" onclick="deroulerMenu()"><i id="image5" class="fa fa-ellipsis-h images"></i></a>
		
			<div id="menuDeroulant">
			 	<a href="/MovieNight-v.s/User/Controller/Evenements.php?action=create">Créer évènement</a>
			 	<a href="">Proposer évènement</a>
			 	<a href="/MovieNight-v.s/User/View/Contact.php">Contact</a>
			 	<a href="/MovieNight-v.s/User/View/Signaler.php">Signaler</a>
			 	<a href="">Geolocalisation</a>
			 	<a href="/MovieNight-v.s/User/View/charte.html">Charte</a>
			 	<a href="">À propos</a>
			 	<a href="">FAQ</a>
			 	<a href="/MovieNight-v.s/User/View/Accueil.html">Deconnexion</a>
			</div>
		</div>
	</div>
</body>
<script src="../Public/JS/menu.js"></script>
</html>