<?php
    $id = isset($_GET['id'])?$_GET['id']:null;
?>


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
	<div id="logo">
		<img src="../Public/Img/logo_profil.svg" id="logo_profil">
	</div>

	<h1> Profil </h1>


	<div class="formulaire" id="form1">
		<a id="suivant"> <i class="fas fa-chevron-right"></i> </a>


		<?php
		$Conn=new pdo("mysql:host=localhost; port=3306;dbname=movie_night",'root','root');

		if (!is_null($id)){
			$SQLQuery = 'SELECT member.id_member, first_name_member, birth_date, photo_member, description_member, equipment_type_name from member
				inner join own on member.id_member = own.id_member
				inner join equipment_type on equipment_type.id_equipment_type= own.id_equipment_type';
			$SQLStatement = $Conn->prepare($SQLQuery);
			$SQLStatement->bindValue(':id_member', $_GET['id']);
		}else{
			$SQLQuery = 'SELECT member.id_member, first_name_member, birth_date, photo_member, description_member, equipment_type_name';
			$SQLQuery .= 'from member
				inner join own on member.id_member = own.id_member';
			$SQLQuery .= 'inner join equipment_type on equipment_type.id_equipment_type= own.id_equipment_type';
			$SQLStatement = $Conn->prepare($SQLQuery);

		}

		$script = '';
		$SQLStatement->execute();
		if ($SQLStatement->rowCount() == 0){
			$id = '';
			$first_name_member = '';
			$birth_date ='';
			$photo_member='';
			$description_member='';
			$equipment_type_name='';


		}else{
			while ($SQLRow = $SQLStatement->fetchObject()){
				$first_name_member = $SQLRow->first_name_member;
				$birth_date = $SQLRow->birth_date;
				$photo_member = $SQLRow->photo_member;
				$description_member = $SQLRow->description_member;
				$equipment_type_name = $SQLRow->equipment_type_name;

			
		}
	}
	print($script);
	$SQLStatement->closeCursor();
?>

		
		<section class="color_label">	  
			<label for="prenom">Prénom : </label>
		  	<input  type="text" name= "prenom" class="champs" value =  '<?php print($first_name_member); ?>' disabled> 
		  	<span class="check">	
				<i class="fa fa-check" aria-hidden="true"></i><br/>
			</span>
		   
		    <label for="age">Age : </label>
		    <input  type="text" name= "age" class="champs" value= <?php print((int)((time()-strtotime($birth_date))/3600/24/365.242)) ?> disabled><br/>

		
		    <label for="description">Description : </label><br/>
		    <textarea  name="description" ><?php print($description_member); ?> </textarea><br/>
	

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

			<label for='materiel'>Materiel : </label>
			<input  type="text" name= "materiel" class="champs" value =  '<?php print($equipment_type_name); ?>' disabled> 
			<input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" value= '<?php print($equipment_type_name); ?>' multiple>
		</section>
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
	
</body>

<script type="text/javascript" src="../Public/JS/profil.js""></script>
</html>