<?php
    require_once('../Model/MemberDAO.php');

    if(!empty($_POST)) {
        $message = inscriptionMember($_POST['last_name'], $_POST['first_name'],
            $_POST['birthdate'], $_POST['password'],
            $_POST['photo'], $_POST['passwordconfirm'],
            $_POST['description'], $_POST['address'],
            $_POST['address2'], $_POST['post_code'], $_POST['city'],
            $_POST['email'], $_POST['phone_number']);

        if ($message == "L'inscription a été réalisée avec succés.") {
            print($message);
            require_once('../View/Vue_Connection.php');
        } else if (!$message) {
            print("erreur");
        } else {
            print('<span id = "notif">'.$message.'</span>');
            require_once('../View/Vue_Inscription.php');
        }
    }
    else{
        require_once('../View/Vue_Inscription.php');
    }

?>
