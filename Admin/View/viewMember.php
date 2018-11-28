<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="../../User/Public/Img/logo_movie_night_favicon.png"/>
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Megrim|Muli:200" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../Public/CSS/search_header_admin.css">
    <link rel="stylesheet" type="text/css" href="../Public/CSS/allMembers.css">
    <title>One Member</title>
</head>
<body>
<?php include('../View/admin_menu.php');?>
<div class="cardsContainer">
    <div class="card memberone">
        <img class="photo_member" src="<?php print($member->getPhoto_member())?>">
        <div class="infos_member">
            <p class="nomMember"><?php print($member->getName_member())?> <?php print($member->getFirst_name_member())?></p>
            <p class="nomMember"><span class="mail">spn@family.com</span></p>
            <p class="nomMember">ville: Paris</p>
            <div class="line"></div>
            <p class="descriptionMember"><?php print($member->getDescription_member())?></p>
            <p class="night"><span class="MN">MN</span> en cours: 1<br>
                              <span class="MN">MN</span> organisées: 2<br>
                              <span class="MN">MN</span> participées: 0
            </p>
            <div class="Btns">
            <a href="../Controller/allMembers.php"><img class="playUser" src="../Public/Img/return.svg"/></a>
            <a href="../Controller/allMembers.php"onclick="return confirm('Etes-vous sur?');"><img class="playUser" src="../Public/Img/close.png"/></a>
            </div>
        </div>
    </div>
</div>
</body>
