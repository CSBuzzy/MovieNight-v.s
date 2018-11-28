<!DOCTYPE html>
<html>

<head>
	<title>Profil</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="../Public/CSS/profil.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</head>	

<body>
    <section>
            <form class= modif method="POST" >
                    <div id="contenu">
                        <div id="logo">
                            <div class="profile">
                                <div class="preview img-wrapper"></div>
                                    <div class="file-upload-wrapper">
                                        <input type="file" name="file" class="file-upload-native" accept="image/*" />
                                        <input type="text" disabled placeholder="selfie" class="file-upload-text" />
                                    </div>
                            </div>
                        </div>

                    	<h1>  Profil  </h1>


                    	
                                <div class="formulaire" id="form1">
                                    <a id="suivant"> <i class="fas fa-chevron-right"></i> </a>
                                    <div>
                                        <label for="nom">Nom : </label>
                                        <input  type="text" name= "name_member" class="champs" disabled value= "<?php print($_SESSION['member']->getName_member()); ?>">
                                    </div>
                                    <div>
                                        <label for=prenom>Prenom : </label>
                                        <input  type="text" value="<?php print($_SESSION['member']->getFirst_name_member()); ?>" name= "first_name_member" class="champs" disabled="disabled">
                                    </div>
                                    <div>
                                        <label for=date>Date de naissance : </label>
                                        <input  type="text" value="<?php  setlocale(LC_TIME, 'fra_fra'); print(strftime(' %d %B %G',(strtotime($_SESSION['member']->getBirth_date_member())))); ?>"  name= "birth_date_member" class="champs">



                                    </div>
                                    <div>
                             			<label for=adresse1>Adresse : </label>
                            		  	<input  type="text" value="<?php print($_SESSION['member']->getLine1_address_member()); ?>" name= "line1_address" class="champs">
                                    </div>
                                    <div>
                                        <label for=adresse2> </label>
                            		  	<input  type="text" value="<?php print($_SESSION['member']->getLine2_address_member()); ?>" name= "line2_address" class="champs">
                                    </div>
                                    <div>
                                        <label for=code_postale>Code postal : </label>
                                        <input  type="text" value="<?php print($_SESSION['member']->getPost_code_city_member()); ?>" name= "post_code_city" class="champs">
                                    </div>
                                    <div>
                                        <label for=ville>Ville : </label>
                                        <input  type="text" value="<?php print($_SESSION['member']->getName_city_member()); ?>" name= "name_city" class="champs">
                        			</div>
                                    <div>
                            			<label for=telephone>Telephone : </label>
                            		  	<input  type="text" name= "photo_member" class="champs" value="<?php print($_SESSION['member']->getPhone_member()); ?>">
                                    </div>
                                    <div>
                            			<label for=email>Email : </label>
                            		  	<input  type="text" name= "email_member" class="champs" value="<?php print($_SESSION['member']->getEmail_member()); ?>">
                                    </div>
                                    <div>
                            		  	<label for=mdp>Mot de passe : </label>
                            		  	<input  type="password" value="<?php print($_SESSION['member']->getPassword_member()); ?>"name= "password_member" class="champs">
                                    </div>
                                    <div>
                            		  	<label for="description">Description : </label>
                            		    <textarea name="description_member"  ><?php print($_SESSION['member']->getDescription_member()); ?></textarea>
                                    </div>
                        		        
                                   
                                </div>

                                <div class="formulaire" id="form2">
                                    <a id="precedent"> <i class="fas fa-chevron-left"></i> </a>

                                    <div>
                            			<label for="bavard">Bavard : </label>
                                        <select name="bavard" class="champs" id="champs1">
                                            <option value="null">N'importe</option>
                                            <option value="1" >Oui</option>
                                            <option value="0" >Non</option>
                                        </select>
                                    </div>

                                     <div>
                                        <label for="fumeur">Fumeur : </label>
                                        <select name="fumeur" class="champs" id="champs2">
                                            <option value="null">N'importe</option>
                                            <option value="1">Oui</option>
                                            <option value="0"> Non</option>
                                        </select>
                                    </div>

                                     <div>
                                        <label for="animaux">Animaux : </label>
                                        <select name="animaux" class="champs" id="champs3">
                                            <option value="null">N'importe</option>
                                            <option value="1">Oui</option>
                                            <option value="0">Non</option>
                                        </select>
                                    </div>

                                     <div>
                                        <label for="mineurs">Mineurs : </label>
                                        <select name="mineurs" class="champs" id="champs4">
                                            <option value="null">N'importe</option>
                                            <option value="1">Oui</option>
                                            <option value="0">Non</option>
                                        </select>
                                    </div>

                                    <div class="historique">
                                    <input type="button" value="Historique" id="bouton_historique" > 
                                    </div>
                              
                                    <div>
                                        <label for="materiels">Materiels : </label>
                                        <input  type="text" value="" name= "materiels" class="champs">
                                    </div>
                                </div>
                                <div id = "valider">
                                    <input type="submit" name="submit" id="button" value="Enregistrer les modifications">
                                </div>
         </form>
    </section>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../Public/JS/profil.js""></script>
    <?php
        include("menu.php");
    ?>
</body>

</html>