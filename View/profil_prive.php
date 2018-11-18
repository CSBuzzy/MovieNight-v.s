<!DOCTYPE html>
<html>

<head>
	<title>Profil</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="../Public/CSS/profil_prive.css">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">

</head>	

<body>
    <div id="logo">
        <div class="profile">
            <div class="preview img-wrapper"></div>
            <div class="file-upload-wrapper">
                    <input type="file" name="file" class="file-upload-native" accept="image/*" />
                    <input type="text" disabled placeholder="selfie" class="file-upload-text" />
            </div>
            </div>           
        
        </div>
    </div>

			<h1> Profil Privé </h1>

<?php
    $Conn=new pdo("mysql:host=localhost; port=3306;dbname=movie_night",'root','root');

    if (!empty($_GET)){

    $id_member = isset($_GET['id_member'])?$_GET['id_member']:0;
   
	   if (!empty($_POST)){
            $name_member = $_POST['name_member'];
            $first_name_member = $_POST['first_name_member'];
            $birth_date = $_POST['birth_date'];
            $description_member = $_POST['description_member'];
            $password_member = $_POST['password_member'];
            $line1_address = $_POST['line1_address'];
            $line2_address = $_POST['line2_address'];
            $name_city = $_POST['name_city'];
            $post_code_city = $_POST['post_code_city'];
            $name_preference =$_POST['name_preference'];

            $SQLQuery = 'UPDATE member SET name_member = :name_member, first_name_member = :first_name_member, birth_date = :birth_date, description_member = :description_member, password_member = :password_member, name_contact_type = :name_contact_type, line1_address = :line1_address, line2_address = :line2_address,  name_city = :name_city, post_code_city = :post_code_city, name_preference = :name_preference WHERE id_member = :id_member';
            $SQLStatement = $Conn->prepare($SQLQuery);
            $SQLStatement->bindValue(':id_member', $id_member);
            $SQLStatement->bindValue(':name_member', $name_member);
            $SQLStatement->bindValue(':first_name_member', $first_name_member);
            $SQLStatement->bindValue (':birth_date', $birth_date);
            $SQLStatement->bindValue (':description_member', $description_member);
            $SQLStatement->bindValue (':password_member', $password_member);
            $SQLStatement->bindValue (':line1_address', $line1_address);
            $SQLStatement->bindValue (':line2_address', $line2_address);
            $SQLStatement->bindValue (':name_city', $name_city);
            $SQLStatement->bindValue (':post_code_city', $post_code_city);
            $SQLStatement->bindValue (':name_preference', $name_preference);

            if ($SQLStatement->execute()){
                                print('<script type="text/javascript">document.location.href=\'profil.php\';</script>');
             }else{
                    print("Erreur d'exécution !<br />");
                     var_dump($SQLStatement->errorInfo());
            }
        }else{
            $SQLQuery = 'SELECT member.id_member,name_member, first_name_member, birth_date, description_member, password_member, line1_address, line2_address, name_city, post_code_city, name_preference, icon_preference from member
                left outer join have on member.id_member=have.id_member
                left outer join contact_method on have.id_contact_method=contact_method.id_contact_method
                left outer join contact_type on contact_method.id_contact_type=contact_type.id_contact_type
                left outer join live on member.id_member=live.id_member
                left outer join address on live.id_address=address.id_address
                left outer join city on address.id_city=city.id_city
                left outer join own on member.id_member=own.id_member
                left outer join equipment_type on own.id_equipment_type=equipment_type.id_equipment_type
                left outer join prefer on member.id_member=prefer.id_member
                left outer join preference on prefer.id_preference= preference.id_preference';
            $SQLStatement = $Conn->prepare($SQLQuery);
            $SQLStatement->bindValue(':id_member', $id_member);
            $SQLStatement->execute();

            $SQLResult = $SQLStatement->fetchObject();
            $name_member = $SQLResult->name_member;
            $first_name_member = $SQLResult->first_name_member;
            $birth_date = $SQLResult->birth_date;
            $description_member = $SQLResult->description_member;
            $password_member = $SQLResult->password_member;
            $line1_address = $SQLResult->line1_address;
            $line2_address = $SQLResult->line2_address;
            $name_city = $SQLResult->name_city;
            $post_code_city = $SQLResult->post_code_city;
            $name_preference = $SQLResult->name_preference;
            $icon_preference = $SQLResult->icon_preference;
            $SQLStatement->closeCursor();
        }
    }else{
        if (!empty($_POST)){
                        $description_member = $_POST['description_member'];
                        $line1_address = $_POST['line1_address'];
                        $line2_address = $_POST['line2_address'];
                        $name_city = $_POST['name_city'];
                        $post_code_city = $_POST['post_code_city'];
                        $name_preference =$_POST['name_preference'];
                        $SQLQuery = 'INSERT INTO member(description_member, line1_address, line2_address, name_city, post_code_city,name_preference) VALUES ( :line1_address, :line2_address, :post_code_city, :name_city, :name_preference)';
                        $SQLStatement = $dbConn->prepare($SQLQuery);
                        $SQLStatement->bindValue(':description_member', $description_member);
                        $SQLStatement->bindValue(':name_contact_type', $name_contact_type);
                        $SQLStatement->bindValue(':line1_address', $line1_address);
                        $SQLStatement->bindValue(':line2_address', $line2_address);
                        $SQLStatement->bindValue(':name_city', $name_city);
                        $SQLStatement->bindValue(':post_code_city', $post_code_city);
                        $SQLStatement->bindValue(':name_preference', $name_preference);
                        if ($SQLStatement->execute()){
                                print('<script type="text/javascript">document.location.href=\'profil.php\';</script>');
                        }else{
                            print("Erreur d'exécution de la requête d'insertion !<br />");
                            var_dump($SQLStatement->errorInfo());
                    }
        }else{
                        $description_member = '';
                        $line1_address = '';
                        $line2_address = '';
                        $name_city = '';
                        $post_code_city = '';
        }
    }

?>		
		<section>
		<div class="formulaire" id="form1">
		<a id="suivant"> <i class="fas fa-chevron-right"></i> </a>
  			<form class= modif method="POST" >
            <label for=adresse>Nom : </label>
            <input  type="text" value="<?php print($name_member); ?>" name= "nom" class="champs" disabled="disabled"> <br/>

            <label for=adresse>Prenom : </label>
            <input  type="text" value="<?php print($first_name_member); ?>" name= "nom" class="champs" disabled="disabled"> <br/>

            <label for=adresse>Date de naissance : </label>
            <input  type="text" value="<?php print($birth_date); ?>" name= "nom" class="champs"> <br/>

 			<label for=adresse>Adresse : </label>
		  	<input  type="text" value="<?php print($line1_address); ?>" name= "adresse1" class="champs"> <br/>
            <label for=adresse> </label>
		  	<input  type="text" value="<?php print($line2_address); ?>" name= "adresse2" class="champs"> <br/>

            <label for=adresse>Code postale : </label>
            <input  type="text" value="<?php print($post_code_city); ?>" name= "adresse" class="champs"> <br/>

            <label for=adresse>Ville : </label>
            <input  type="text" value="<?php print($name_city); ?>" name= "adresse" class="champs"> <br/>
			
			<label for=telephone>Telephone : </label>
		  	<input  type="text" name= "telephone" class="champs"><br/>

			<label for=email>Email : </label>
		  	<input  type="text" name= "email" class="champs"><br/>

		  	<label for=mdp>Mot de passe : </label>
		  	<input  type="password" value="<?php print($password_member); ?>"name= "pass" class="champs"><br/>

		  	<label for="description">Description : </label><br/>
		    <textarea value="<?php print($description_member); ?>"name="description"  ></textarea><br/>

		        
             
                <div id="materiels">
                    <div class="preview img-wrapper"></div>
                    <div class="file-upload-wrapper">
                            <input type="file" name="file" class="file-upload-native" accept="image/*" />
                            <input type="text" disabled placeholder="materiel" class="file-upload-text" />
                    </div>
                    </div> 
                </div>   
        </div>

        </label> 
            
         		
            <div class="valider">
				<input type="submit" value="Valider" id="bouton_valider"> 
			</div>

		</div>
		<div class="formulaire" id="form2">
		<a id="precedent"> <i class="fas fa-chevron-left"></i> </a>


			
			<label for=preference>Préferences : </label>
		 	<br/>
		 	<table>
				<tr>
					<th><label for="bavard">Bavard : </label></th>
                    <td><i class="fas fa-comments icone" ></i></td>
					<td><i class="fas fa-comments icone"></i></td>
					<td><i class="fas fa-comments icone"></i></td>
                    </div>
     			</tr>
     			<tr>
					<th><label for="fumeur">Fumeur : </label></th>
					<td><i class="fas fa-smoking icone"></i></td>
					<td><i class="fas fa-smoking icone"></i></td>
					<td><i class="fas fa-smoking icone"></i></td>
     			</tr>
     			<tr>
					<th><label for="animaux">Animaux : </label></th>
					<td><i class="fas fa-paw icone"></i></td>
					<td><i class="fas fa-paw icone"></i></td>
					<td><i class="fas fa-paw icone"></i></td>
     			</tr>
     			<tr>
					<th><label for="mineurs">Mineurs : </label></th>
					<td><i class="fas fa-child icone"></i></td>
					<td><i class="fas fa-child icone"></i></td>
					<td><i class="fas fa-child icone"></i></td>
     			</tr>
			</table>
		</section>
		</form>
	</div>
	</div>

<script type="text/javascript" src="../Public/JS/profil.js""></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("td").click(function(){
            $("td").css('color','#ce5ba6');
</script>

<script>
    $(function() {
    function maskImgs() {
        //$('.img-wrapper img').imagesLoaded({}, function() {
        $.each($('.img-wrapper img'), function(index, img) {
            var src = $(img).attr('src');
            var parent = $(img).parent();
            parent
                .css('background', 'url(' + src + ') no-repeat center center')
                .css('background-size', 'cover');
            $(img).remove();
        });
        //});
    }

    var preview = {
        init: function() {
            preview.setPreviewImg();
            preview.listenInput();
        },
        setPreviewImg: function(fileInput) {
            var path = $(fileInput).val();
            var uploadText = $(fileInput).siblings('.file-upload-text');

            if (!path) {
                $(uploadText).val('');
            } else {
                path = path.replace(/^C:\\fakepath\\/, "");
                $(uploadText).val(path);

                preview.showPreview(fileInput, path, uploadText);
            }
        },
        showPreview: function(fileInput, path, uploadText) {
            var file = $(fileInput)[0].files;

            if (file && file[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var previewImg = $(fileInput).parents('.file-upload-wrapper').siblings('.preview');
                    var img = $(previewImg).find('img');

                    if (img.length == 0) {
                        $(previewImg).html('<img src="' + e.target.result + '" alt=""/>');
                    } else {
                        img.attr('src', e.target.result);
                    }

                    uploadText.val(path);
                    maskImgs();
                }

                reader.onloadstart = function() {
                    $(uploadText).val('uploading..');
                }

                reader.readAsDataURL(file[0]);
            }
        },
        listenInput: function() {
            $('.file-upload-native').on('change', function() {
                preview.setPreviewImg(this);
            });
        }
    };
    preview.init();
});

</script>





</body>

</html>