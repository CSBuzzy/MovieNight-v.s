<?php

//On récupère la classe qui accède à la base de données
require_once("../Model/MemberAdminDAO.php");


//Si il y a un id member dans l'url
if (isset($_GET['member'])) {
    //On va récupérer le member en question
    $member = getMember($_GET['member']);
    //puis on affiche la vue du member
    require_once("../View/viewMember.php");
}
//S'il n'y a pas d'ID
else {
    //on va récupérer la liste des evenements
        $memberList = getAllMembers();
    //puis on affiche la vue de la liste d'evenements
    require_once("../View/viewAllMembers.php");
}


//delete a member
/*if(){

}*/
?>