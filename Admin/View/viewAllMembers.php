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
    <!--<link rel="stylesheet" type="text/css" href="../../User/Public/CSS/Liste_Evenements.css">-->
    <link rel="stylesheet" type="text/css" href="../Public/CSS/allMembers.css">
    <title>List Members</title>
</head>
<body>
<div class="cardsContainer">
  <!--  <div class="search_position">-->
    <?php
    foreach ($memberList as $member) {
        $script .='';
        $script .='<div class="card memberAll">';
        $script .= '<img class="photo_member" src="'.$member->getPhoto_member().'">';
        $script .= '<div class="infos_member">';
        $script .= '<p class="nomMember">'.$member->getName_member().' '.$member->getFirst_name_member().'</p>';
        $script .= '<p class="nomMember">Paris</p>';
        $script .= '<a href="../Controller/allMembers.php?member='.$member->getId_member().'"><img class="playUser" src="../Public/Img/play.svg"/></a>';
        $script .= '</div></div>';
        print($script);
    }
    include('../View/admin_menu.php');
    ?>
<!--</div>-->
</div>
</body>
</html>

