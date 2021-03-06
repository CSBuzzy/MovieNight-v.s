<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="../Public/Img/logo_movie_night_favicon.png"/>
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Megrim|Muli:200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../Public/CSS/Inscription.css">
    <!-- MATERIALIZE  Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
<div class="container">
<header>
    <div class="col s12 white-text">
        <p id="titre">S'inscrire</p>
    </div>
</header>
<div class="row">
    <form class="col s12" method="POST" action="../Controller/Inscription.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col s1 ">
            <i class="material-icons">grade</i>
            </div>
            <div class="input-field col s5">
                <input name="first_name" id="first_name" type="text" class="white-text validate">
                <label for="first_name" class="teal-text">Nom</label>
            </div>
            <div class=" col s1">
            <i class="material-icons">grade</i>
            </div>
            <div class="input-field col s5">
                <input name="last_name" id="last_name" type="text" class="white-text validate">
                <label for="last_name" class="teal-text">Prenom</label>
            </div>
            <div class="col s1 ">
                <i class="material-icons">grade</i>
            </div>
            <div class="input-field col s11">
                <input name="birthdate" id="birthdate" type="text" class="datepicker white-text">
                <label for="birthdate" class="teal-text">Date de naissance</label>
            </div>
            <div class="input-field col s11 offset-s1">
                <textarea name="description" id="textarea1" type="text" class=" materialize-textarea white-text validate"></textarea>
                <label for="textarea1" class="teal-text">Description</label>
            </div>
            <div class="input-field col s11 offset-s1">
                <input name="address" id="address" type="text" class="white-text validate">
                <label for="address" class="teal-text">Adresse</label>
            </div>
            <div class="input-field col s11 offset-s1">
                <input name="address2" id="address2" type="text" class="white-text validate">
                <label for="address2" class="teal-text"></label>
            </div>
            <div class="input-field col s5 offset-s1">
                <input name="city" id="city" type="text" class="white-text validate">
                <label for="city" class="teal-text">Ville</label>
            </div>
            <div class="input-field col s5 offset-s1">
                <input name="post_code" id="post_code" type="text" class="white-text validate">
                <label for="post_code" class="teal-text">Code Postal</label>
            </div>
            <div class="input-field col s11 offset-s1">
                <input name="phone_number" id="phone_number" type="text" class="white-text validate">
                <label for="phone_number" class="teal-text">Numéro de mobile</label>
            </div>
            <div class="col s1">
                <i class="material-icons">grade</i>
            </div>
            <div class="input-field col s11">
                <input name="email" id="email" type="email" class="white-text validate">
                <label for="email" class="teal-text">Mail</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>
            <div class="col s1">
                <i class="material-icons">grade</i>
            </div>
            <div class="input-field col s11">
                <input name="password" id="password" type="password" class="white-text validate">
                <label for="password" class="teal-text">Mot de passe</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>
            <div class="col s1 ">
                <i class="material-icons">grade</i>
            </div>
            <div class="input-field col s11">
                <input name="passwordconfirm" id="passwordconfirm" type="password" class="white-text validate">
                <label for="passwordconfirm" class="teal-text">Confirmation du mot de passe</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>
        </div>
        <div class="row valign-wrapper">
            <div class="col s4 m4 offset-s1">
                <label class="teal-text avatar">Photo de profil</label>
            </div>
            <div class="file-field input-field col s6 m6 offset-s1">
               <!-- <input type="hidden" name="MAX_FILE_SIZE" value="100000"> -->
                <input type="text" name="photo" value="">
                <img src="../Public/Img/thin-add-button.svg" class="imgAvatar circle responsive-img">
            </div>
        </div>
        <div class="row col s11 offset-s1">
            <p>
                <label>
                    <input type="checkbox"/>
                    <span><a href="#modal1" class="lien_cgu modal-trigger">J'accepte les conditions générales d'utilisations</a></span>
                </label>
            </p>
        </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Charte</h4>
                <p>
                 <!-- LOREM IPSUM DEXTER -->
                <h1>Tell him time is of the essence.</h1>
                <p>Pretend. You pretend the feelings are there, for the world, for the people around you. Who knows? Maybe one day they will be. You all right, Dexter? Somehow, I doubt that. You have a good heart, Dexter.</p>
                <p>I'm a sociopath; there's not much he can do for me. Somehow, I doubt that. You have a good heart, Dexter. I'm Dexter, and I'm not sure what I am. Pretend. <strong> You pretend the feelings are there, for the world, for the people around you.</strong> <em> Who knows?</em> Maybe one day they will be.</p>
                <h2>I'm really more an apartment person.</h2>
                <p>I will not kill my sister. I will not kill my sister. I will not kill my sister. I will not kill my sister. I will not kill my sister. I will not kill my sister. I'm going to tell you something that I've never told anyone before.</p>
                <ol>
                    <li>Tell him time is of the essence.</li><li>Pretend. You pretend the feelings are there, for the world, for the people around you. Who knows? Maybe one day they will be.</li><li>Only you could make those words cute.</li>
                </ol>

                <h3>I'm partial to air conditioning.</h3>
                <p>Oh I beg to differ, I think we have a lot to discuss. After all, you are a client. Hello, Dexter Morgan. I'm thinking two circus clowns dancing. You? I'm doing mental jumping jacks.</p>
                <ul>
                    <li>Keep your mind limber.</li><li>Finding a needle in a haystack isn't hard when every straw is computerized.</li><li>Only you could make those words cute.</li>
                </ul>

                <p>I am not a killer. I have a dark side, too. Somehow, I doubt that. You have a good heart, Dexter. God created pudding, and then he rested. Watching ice melt. This is fun.</p>
                <p>I'm really more an apartment person. Tonight's the night. And it's going to happen again and again. It has to happen. I'm really more an apartment person. Makes me a … scientist. You all right, Dexter?</p>
                <p>Tonight's the night. And it's going to happen again and again. It has to happen. Oh I beg to differ, I think we have a lot to discuss. After all, you are a client. Oh I beg to differ, I think we have a lot to discuss. After all, you are a client.</p>
                <p>I have a dark side, too. Like a sloth. I can do that. I'm doing mental jumping jacks. Keep your mind limber.</p>
                <p>I'm thinking two circus clowns dancing. You? Oh I beg to differ, I think we have a lot to discuss. After all, you are a client. Makes me a … scientist. I like seafood. Hello, Dexter Morgan.</p>
                <p>He taught me a code. To survive. I'm going to tell you something that I've never told anyone before. Cops, another community I'm not part of. Under normal circumstances, I'd take that as a compliment.</p>
                <p>Oh I beg to differ, I think we have a lot to discuss. After all, you are a client. I feel like a jigsaw puzzle missing a piece. And I'm not even sure what the picture should be. I'm a sociopath; there's not much he can do for me.</p>
                <p>He taught me a code. To survive. I'm really more an apartment person. I'm real proud of you for coming, bro. I know you hate funerals. I'm really more an apartment person. You all right, Dexter? I'm not the monster he wants me to be. So I'm neither man nor beast. I'm something new entirely. With my own set of rules. I'm Dexter. Boo.</p>
                <p>Like a sloth. I can do that. Watching ice melt. This is fun. You look…perfect. Like a sloth. I can do that.</p>
                <p>Finding a needle in a haystack isn't hard when every straw is computerized. I think he's got a crush on you, Dex! Makes me a … scientist. Finding a needle in a haystack isn't hard when every straw is computerized.</p>
                <p>I'm doing mental jumping jacks. I'm real proud of you for coming, bro. I know you hate funerals. I like seafood. You're a killer. I catch killers.</p>
                <!-- FIN LOREM IPSUM DEXTER -->
                </p>
            </div>
        </div>
        <div class="row  center-align margHt">
            <div class="input-field col s6">
                <a href="Accueil.html">
                <img src="../Public/Img/return.svg">
                </a>
            </div>
            <div class="input-field col s6">
               <input type="image" accept="image/*" src="../Public/Img/play.svg" name="action" class="heighBtnPlay"/>
            </div>
        </div>
    </form>
</div>
</div>
<script src="../Public/JS/signIn.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>