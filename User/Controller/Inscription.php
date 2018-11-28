<?php
require_once('../Model/MemberDAO.php');

    if(!empty($_POST)){
    if(inscriptionMember($_POST['last_name'], $_POST['first_name'],
                         $_POST['birthdate'], $_POST['password'],
                         $_POST['photo'],$_POST['passwordconfirm'],
                         $_POST['description'],$_POST['address'],
                         $_POST['address'], $_POST['post_code'], $_POST['city'],
                         $_POST['email'], $_POST['email'], $_POST['phone_number'], $_POST['message'])){
    require_once('../View/Vue_Connection.php');
    }else{
    require_once('../View/Vue_Inscription.php');
    }
}
?>
