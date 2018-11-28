<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <title>Menu Admin</title>
    <link rel="stylesheet" type="text/css" href="../Public/CSS/admin_menu.css">
</head>
<body>
<?php include "search_header_admin.php";?>
<ul class="side-menu" >

    <li><img class="iconmenu" src="..\Public\Img\users.svg"/><a href="allUser.php">Membres</a></li>

    <li><img class="iconmenu" src="..\Public\Img\film.svg"/><a href="#">Evénements</a>
        <ul class="submenu" style = "position: relative;">
            <li><a href="#">Organisés</a></li>
            <li><a href="#">Participés</a></li>
        </ul>
    </li>

    <li><img class="iconmenu" src="..\Public\Img\mail.svg"/><a href="#">Contact </a>
        <ul class="submenu" style = "position: relative;">
        <li><a href="#">Divers</a></li>
        <li><a href="#">Signalements</a></li>
        </ul>
    </li>

    <li><img class="iconmenu" src="..\Public\Img\clapperboard.svg"/><a href="#">Idées proposées</a></li>

    <li><img class="iconmenu" src="..\Public\Img\vault.svg"/><a href="#">Historique</a>
    <ul class="submenu" style = "position: relative;">
        <li><a href="#">Anciens évènements</a></li>
        <li><a href="#">Idées</a></li>
        <li><a href="#">Black liste</a></li>
    </ul>
    </li>
    <li><img class="iconmenu" src="..\Public\Img\results.svg"/><a href="#">Charte</a></li>
    <li><img class="iconmenu" src="..\Public\Img\conversation.svg"/><a href="#">FAQ</a></li>
    <li><img class="iconmenu" src="..\Public\Img\info.svg"/><a href="#">A propos</a></li>
    <li><img class="iconmenu" src="..\Public\Img\error.svg"/><a href="#">Se déconnecter</a></li>

</ul>


</body>
</html>