<!DOCTYPE html>
<html>

<head>
	<title>Profil</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="../Public/CSS/profil.css">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">


</head>	

<body>
	<div id="contenu">
		<div id="logo">
			<img src="../Public/Img/logo_profil.svg" id="logo_profil">
		</div>

		<h1> Profil </h1>


		<div class="formulaire" id="form1">
			<a id="suivant"> <i class="fas fa-chevron-right"></i> </a>

				<div>  
					
					<label for="prenom">Prénom : 
						<span class="check">	
							<i class="fa fa-check" aria-hidden="true"></i>
						</span> 
					</label>
				  	<input  type="text" name= "prenom" class="champs" disabled value =  <?php print($member->getFirst_name_member()); ?>> 
				  	
				</div>
			   	<div>
				    <label for="age">Age : </label>
				    <input  type="text" name= "age" class="champs" value= "<?php print((int)((time()-strtotime($member->getBirth_date_member()))/3600/24/365.242)) ?>" disabled>
				</div>

				<div>
				    <label for="description">Description : </label>
				    <textarea  name="description" disabled><?php print($member->getDescription_member()); ?> </textarea>
				</div>
		
				
				<label for="avis">Avis : </label>
			    <div class="etoiles">
					<a href="#4">★</a>
					<a href="#3">★</a>
					<a href="#2">★</a>
					<a href="#1">★</a>
					<a href="#0">★</a>

				</div>
				

			
				<div class="historique">
					<input type="button" value="Historique" id="bouton_historique"> 
				</div>

				<div>
                        <label for="materiels">Materiels : </label>
                        <input  type="text" value="" name= "materiels" class="champs"disabled>
                </div>
			
		</div>
		<div class="formulaire" id="form2">
			<a id="precedent"> <i class="fas fa-chevron-left"></i> </a>
			<section>
				<label>Préférences </label><br/>
			 	
			 	<table>
					<tr>
						<th><label>Bavard : </label></th>
						<td><i class="fas fa-comments icone"></i></td>
						<td><i class="fas fa-comments icone"></i></td>
						<td><i class="fas fa-comments icone selected"></i></td>
	     			</tr>
	     			<tr>
						<th><label>Fumeur : </label></th>
						<td><i class="fas fa-smoking icone"></i></td>
						<td><i class="fas fa-smoking icone selected"></i></td>
						<td><i class="fas fa-smoking icone"></i></td>
	     			</tr>
	     			<tr>
						<th><label>Animaux : </label></th>
						<td><i class="fas fa-paw icone selected"></i></td>
						<td><i class="fas fa-paw icone"></i></td>
						<td><i class="fas fa-paw icone"></i></td>
	     			</tr>
	     			<tr>
						<th><label>Mineurs : </label></th>
						<td><i class="fas fa-child icone selected"></i></td>
						<td><i class="fas fa-child icone"></i></td>
						<td><i class="fas fa-child icone"></i></td>
	     			</tr>
				</table>
			</section>
		</div>
	</div>
	<?php
		include("menu.php");
	?>
</body>

<script type="text/javascript" src="../Public/JS/profil.js""></script>
</html>