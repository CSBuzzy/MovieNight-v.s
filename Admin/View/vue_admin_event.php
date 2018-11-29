<?php
include "admin_menu.php";
require_once "../../User/Model/DbConn.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Evenement</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../Public/CSS/admin_event.css">
    <link rel="stylesheet" type="text/css" href="../../User/Public/CSS/Evenement.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<div class="position_admin">
    <div id="contenu">


    <section id="detailsEvenement">
        <img id="image" src=<?php print($event->getImage_event()) ?>>
        <h2 id="titreEvenement"><?php print($event->getName_event()) ?></h2>
        <label id="langue">
            <span class = "languesContenu" data-language = <?php print($contentList[0]->getLanguage()) ?>></span>
            <!--span class = "languesContenu" data-language = "VOSTA"></span-->
            <span class = "langue" data-language = "VO">VO </span>
            <span class = "langue" data-language = "VF">VF </span>
            <span class = "langue" data-language = "VOSTFR">VOSTFR </span>
            <span class = "langue" data-language = "VOSTA">VOSTA</span>
        </label>
        <label id="contenu"><span class = "sousTitres">Titre(s) : </span><?php print($contentList[0]->getName_content()) ?></label><br/>
        <label id="genre"><span class = "sousTitres">Genre : </span><?php print($contentList[0]->getGenre()) ?></label><br/>
        <label id="localisation"><span class = "sousTitres">Localisation : </span><?php print(ucwords(strtolower($event->getCity()))) ?></label><br/>
        <label id="date"><span class = "sousTitres">Date : </span>
            <?php setlocale(LC_TIME, 'fra_fra'); print(utf8_encode(strftime('%A %d %B %G',(strtotime($event->getDate_event()))))) ?>
        </label><br/>
        <label id="heure"><span class = "sousTitres">Heure : </span>
            <?php print(strftime('%R',(strtotime($event->getDate_event())))) ?></label><br/>
        <label id="description"><span class = "sousTitres">Description : </span><div id="texteDescription"><?php print($event->getDescription_event()) ?></div></label><br/>
        <label id="organisateur"><span class = "sousTitres">Organisateur : </span><?php print($event->getOrganizer()) ?></label><br/>
        <label id="preferences"><span class = "sousTitres">Préférences : </span>//TODO</label><br/>
        <label id="materiel"><span class = "sousTitres">Matériel : </span>//TODO</label><br/>
        <label id="places"><span class = "sousTitres">Places restantes : </span><?php print($event->getSeatsRemaining_event().'/'.$event->getMember_number_event()) ?></label><br/>

        <a href="../../Admin/Controller/admin_Evenements.php" ><i class="fa fa-fast-backward circle"></i></a>

        <form id="formstatus" action="../../Admin/Controller/admin_Evenements.php" method="get">

            <select id="selectstatus" name="status">
                <option value="" disabled selected>Status en cours : <?php print ($event->getId_status()) ?></option>
                <option value="1">1 - Accepté</option>
                <option value="2">2 - En attente de validation</option>
                <option value="3">3 - Refusé</option>
                <option value="4">4 - À modifier</option>
                <option value="5">5 - Terminé</option>
                <option value="6">6 - Désactivé</option>
            </select>
            <input type="text" name="event" hidden value=<?php print ($_GET['event']) ?>>
            <input id="statuslist" type="submit" value="Valider" class="supr">

        </form>


      <!-- <a href="../../Admin/Controller/admin_Evenements.php?event=<?php print$event->getId_event()?>&status=6" onclick="return confirm('&Ecirc;tes-vous sûr de vouloir mettre ce status ?')"><i class="fa fa-times supr"></i></a> -->
    </section>

</div>
</div>
<script src="../Public/JS/Status_admin.js"></script>
<script src="../../User/Public/JS/evenement.js"></script>
</body>
</html>