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

    	<h1> Profil Privé </h1>


    	<section>
    		<form class= modif method="POST" >
                <div class="formulaire" id="form1">
                    <a id="suivant"> <i class="fas fa-chevron-right"></i> </a>
                    <div>
                        <label for="nom">Nom : </label>
                        <input  type="text" name= "nom" class="champs" disabled value= "<?php print($_SESSION['member']->getName_member()); ?>">
                    </div>
                    <div>
                        <label for=prenom>Prenom : </label>
                        <input  type="text" value="<?php print($_SESSION['member']->getFirst_name_member()); ?>" name= "prenom" class="champs" disabled="disabled">
                    </div>
                    <div>
                        <label for=date>Date de naissance : </label>
                        <input  type="text" value="<?php print($_SESSION['member']->getBirth_date_member()); ?>" name= "date" class="champs">
                    </div>
                    <div>
             			<label for=adresse1>Adresse : </label>
            		  	<input  type="text" value="<?php print($_SESSION['member']->getLine1_address_member()); ?>" name= "adresse1" class="champs">
                    </div>
                    <div>
                        <label for=adresse2> </label>
            		  	<input  type="text" value="<?php print($_SESSION['member']->getLine2_address_member()); ?>" name= "adresse2" class="champs">
                    </div>
                    <div>
                        <label for=code_postale>Code postal : </label>
                        <input  type="text" value="<?php print($_SESSION['member']->getPost_code_city_member()); ?>" name= "code_postale" class="champs">
                    </div>
                    <div>
                        <label for=ville>Ville : </label>
                        <input  type="text" value="<?php print($_SESSION['member']->getName_city_member()); ?>" name= "ville" class="champs">
        			</div>
                    <div>
            			<label for=telephone>Telephone : </label>
            		  	<input  type="text" name= "telephone" class="champs" value="<?php print($_SESSION['member']->getPhone_member()); ?>">
                    </div>
                    <div>
            			<label for=email>Email : </label>
            		  	<input  type="text" name= "email" class="champs" value="<?php print($_SESSION['member']->getEmail_member()); ?>">
                    </div>
                    <div>
            		  	<label for=mdp>Mot de passe : </label>
            		  	<input  type="password" value="<?php print($_SESSION['member']->getPassword_member()); ?>"name= "pass" class="champs">
                    </div>
                    <div>
            		  	<label for="description">Description : </label>
            		    <textarea name="description"  ><?php print($_SESSION['member']->getDescription_member()); ?></textarea>
                    </div>
        		        
                   
                </div>

                <div class="formulaire" id="form2">
                    <a id="precedent"> <i class="fas fa-chevron-left"></i> </a>
        			<label for=preference>Préferences : </label><br/>
        		 	
                    <div>
            			<label for="bavard">Bavard : </label>
                        <select name="bavard" class="champs" id="champs1">
                            <option >N'importe</option>
                            <option >Oui</option>
                            <option >Non</option>
                        </select>
                    </div>

                     <div>
                        <label for="fumeur">Fumeur : </label>
                        <select name="fumeur" class="champs" id="champs2">
                            <option>N'importe</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </div>

                     <div>
                        <label for="animaux">Animaux : </label>
                        <select name="animaux" class="champs" id="champs3">
                            <option>N'importe</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </div>

                     <div>
                        <label for="mineurs">Mineurs : </label>
                        <select name="mineurs" class="champs" id="champs4">
                            <option>N'importe</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </div>
              
                    <div>
                        <label for="materiels">Materiels : </label>
                        <input  type="text" value="" name= "materiels" class="champs">
                    </div>
                </div>
            </form>
        </section>
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

    <?php
        include("menu.php");
    ?>
</body>

</html>