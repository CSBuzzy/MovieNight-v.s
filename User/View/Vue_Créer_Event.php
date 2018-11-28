<!DOCTYPE html>
<html>

<head>
	<title>Profil</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="../Public/CSS/Créer_Event.css">
	
	
</head>	

<body>
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
				<div class="container">
           
				<form id="form1">

					<div>
		                <label for="nomEvent">Nom Event : </label>
		                <input  type="text" name= "nom" class="champs">
		            </div>

		            <div>
		            	<label for="speEvent" >Evenement Special : </label>
			            	<label class="eventspe">Oui
  							<input type="radio" checked="checked" name="radio">
  							<span class="checkmark"></span>
						</label>
						<label class="eventspe">Non
  							<input type="radio" name="radio">
 						    <span class="checkmark"></span>
						</label>
					</div>

		            <div>
		                <label for="titre">Titre : </label>
		                <input  type="text" name= "Titre" class="champs">
		            </div>

		            <div>
						<label id="lang"><span class = "sousTitres">Langue :
						<select name="langues" id="langue">
		                  	<option  value="0" >  VO  </option>
		              	    <option  value="1" >  VF  </option>
		                    <option  value="2" >  VOSTFR  </option>
		                    <option  value="null" > VOSTA  </option>
		                </select>
		            </div>

		            <div>
		                <label for="genre">Genre : </label>
		                <input  type="text" name= "Genre" class="champs">
		            </div>

		            <div>
		                <label for="heure">Heure : </label>
		                <input  type="text" name= "Heure" class="champs">
		            </div>

		            <div>
		                <label for="date">Date : </label>
		                <input  type="text" name= "Date"class="champs">
		            </div>

		            <div>
		                <label for="description">Description : </label>
		                <textarea name="description" > </textarea>
		            </div>
				</form>
				<form id="form2">

		            <div>
		                <label for="place">Nombre de places: </label>
		                <input  type="text" name= "Nbrs"class="champs">
		                

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
		                <input  type="text" name= "post_code_city" class="champs">
		            </div>
		            <div>
		                <label for=ville>Ville : </label>
		                <input  type="text" name= "name_city" class="champs">
		            </div>

		            <div>
		                <label for="preference">Preferences : </label>
		                <input  type="text" name= "Preference"class="champs">
		            </div>

		            <div>
		                <label for="materiel">Materiel : </label>
		                <input  type="text" name= "Materiel"class="champs">
		            </div>

		        </form>

		            <div id = "valider">
		            	<input type="submit" name="submit" id="button" value="Valider">
		            </div>
				
			</div>
		</section>
</body>
</html>