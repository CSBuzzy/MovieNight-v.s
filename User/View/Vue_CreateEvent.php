<!DOCTYPE html>
<html>

<head>
	<title>Profil</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="../Public/CSS/createEvent.css">
	
	
</head>	

<body>
	<div id="contenu">
		<h1> Créer Evenement </h1>
			
		<section id="detailsEvent">
			<div id="logo">
	            <div class="profile">
	                <div class="preview img-wrapper"></div>
	                <div class="file-upload-wrapper">
	                    <input type="file" name="file" class="file-upload-native" accept="image/*" />
	                    <input type="text" disabled placeholder="Photo" class="file-upload-text" />
	                </div>
	            </div>
	        </div>
			<div class="form">
				<form method="POST" action="../Controller/Evenements.php?action=create" id="form">

					<div>
		                <label for="nomEvent">Image événement : </label>
		                <input  type="text" name= "image" class="champs">
		            </div>

					<div>
		                <label for="nomEvent">Nom événement : </label>
		                <input  type="text" name= "nom" class="champs">
		            </div>

		            <div>
		            	<label for="speEvent" >Evénement Special ? </label>
			            	<label class="eventspe">Oui
								<input type="radio" value="1" name="radio">
								<span class="checkmark"></span>
						</label>
						<label class="eventspe">Non
								<input type="radio" name="radio" value="0" checked="checked">
							    <span class="checkmark"></span>
						</label>
					</div>

					<div>
		                <label for="titre">Type du contenu : </label>
		                <select name= "type" class="champs select">
		                	<option value ="1">Film</option>
		                	<option value ="2">Série</option>
		                	<option value ="3">Emission</option>
		                	<option value ="4">Documentaire</option>
		                	<option value ="5">Dessin animé</option>
		                	<option value ="6">Animé</option>
		                </select>
		            </div>

		            <div>
		                <label for="titre">Titre du contenu : </label>
		                <input  type="text" name= "titre" class="champs">
		            </div>

		            <div>
						<label id="lang"><span class = "sousTitres">Langue :
						<select name="langue" class = "select">
		                  	<option  value="1" >  VF  </option>
		              	    <option  value="2" >  VO  </option>
		                    <option  value="3" >  VOSTFR  </option>
		                    <option  value="4" >  VOSTA  </option>
		                </select>
		            </div>

		            <div>
		                <label for="genre">Genre : </label>
		                <select name="genre" class="champs select" >
		                	<?php for ($i=1; $i < count($listGenres); $i++) { 
		                		print('<option value = '. $i . '>'. $listGenres[$i] . '</option>');
		                	} ?>
		                </select>
		            </div>

		            <div>
		                <label for="date">Date : </label>
		                <input  type="date" name= "date" class="champs">
		            </div>

		            <div>
		                <label for="heure">Heure : </label>
		                <input  type="time" name= "heure"class="champs">
		            </div>

		            <div>
		                <label for="duree">Durée : </label>
		                <input  type="text" name= "duree" class="champs">
		            </div>
		        </div>
		        
				<div class = "form">

		            <div>
		                <label for="description">Description : </label>
		                <textarea name="description"></textarea>
		            </div>

		            <div>
		                <label for="place">Nombre de places: </label>
		                <input  type="number" name= "number"class="champs">
		                

		            <div>
		                <label for=adresse1>Adresse : </label>
		                <input  type="text"  name= "line1_address" class="champs">
		           </div>
		            <div>
		            	<label for=adresse2> </label>
		                <input  type="text"  name= "line2_address" class="champs">
		            </div>
		            <div>
		                <label for=code_postale>Code postal : </label>
		                <input  type="text" name= "code" class="champs">
		            </div>
		            <div>
		                <label for=ville>Ville : </label>
		                <input  type="text" name= "ville" class="champs">
		            </div>

		            <div>
		                <label for="preference">Preferences : </label>
		                <input  type="text" name= "preference"class="champs">
		            </div>

		            <div>
		                <label for="materiel">Materiel : </label>
		                <input  type="text" name= "materiel"class="champs">
		            </div>
		            <div id = "valider">
	            		<input type="submit" name="submit" id="button" value="Valider">
	           		</div>
		        </form>
			</div>
		</section>
	</div>
	<?php
		include("menu.php");
	?>
</body>
</html>