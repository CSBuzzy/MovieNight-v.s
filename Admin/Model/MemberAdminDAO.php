<?php
function getAllMembers(){
    require('../../User/Model/DbConn.php');
    require_once('../../User/Model/Member.php');
    $SQLQuery = "SELECT * FROM member";
  /* $SQLQuery = "SELECT * FROM member inner join live on member.id_member = live.id_member
inner join address on live.id_member = address.id_city
inner join city on address.id_city = city.id_city";*/
  //global $bdd;
    $SQLResult = $bdd->query($SQLQuery);
    $memberList = array();
    while ($SQLRow = $SQLResult->fetchObject()) {
        $member = new Member(
            $SQLRow->id_member,
            $SQLRow->name_member,
            $SQLRow->first_name_member,
            $SQLRow->birth_date_member,
            $SQLRow->password_member,
            $SQLRow->photo_member,
            $SQLRow->description_member,
            $SQLRow->email_member,
            $SQLRow->phone_member,
            $SQLRow->address_member
            );
        array_push($memberList, $member);
    }
    return $memberList;

}

function getMember($id){
    require('../../User/Model/DbConn.php');
    require_once('../../User/Model/Member.php');
    $SQLQuery = 'select * from member where id_member = :id ';
   // global $bdd;
    $SQLStatement = $bdd->prepare($SQLQuery);
    $SQLStatement->bindValue(':id', $id, PDO::PARAM_INT);
    $SQLStatement->execute();
    if ($SQLRow = $SQLStatement->fetchObject()) {
        $member = new Member(
            $SQLRow->id_member,
            $SQLRow->name_member,
            $SQLRow->first_name_member,
            $SQLRow->birth_date_member,
            $SQLRow->password_member,
            $SQLRow->photo_member,
            $SQLRow->description_member,
            $SQLRow->email_member,
            $SQLRow->phone_member,
            $SQLRow->address_member
            );

    }
    return $member;
}

function deleteMember($id){
    require('../../User/Model/Member.php');
    require_once('../../User/Model/DbConn.php');

    if ($id > 0) {
        $SQLQuery = 'Delete from member where id_member= :id';
        try {
            $SQLStatement = $bdd->prepare($SQLQuery);
            $SQLStatement->bindValue(':id', $id, PDO::PARAM_INT);
            if ($SQLStatement->execute()) {
                print('<script>document.location.href=\'viewAllMembers.php\';</script>');
            } else {
                print("Erreur d'exécution de la requête de suppression!<br/>");
                var_dump($SQLStatement->errorInfo());
            }
        }catch (PDOException $ex){
            print("Erreur de préparation de la requête de suppression!<br/>");
            print($ex->getMessage());
        }
    }
}
/*
function deleteAddress($id){
    require('../../User/Model/Member.php');
    require_once('../../User/Model/DbConn.php');
    if($id > 0){
        $SQLQuery = 'Delete from city inner join address on city.id_city=address.id_city 
                      inner join live on address.id_address = live.id_addrress 
                      inner join member on live.id_member = member.id_member where id_member = :id';
        try{
            $SQLStatement = $bdd->prepare($SQLQuery);
            $SQLStatement->bindValue(':id', $id, PDO::PARAM_INT);
            if($SQLStatement->execute()){
                print('<script>document.location.href=\'allMembers.php\';</script>');
            }else{
                print("Erreur d'éxécution de la requete de suppression!<br/>");
                var_dump($SQLStatement->errorInfo());
            }
        }catch(PDOException $ex){
            print("Erreur de preparation de la requête de suppression!<br/>");
            print($ex->getMessage());
        }
    }
}

function deleteContact(){
    require('../../User/Model/Member.php');
    require_once('../../User/Model/DbConn.php');
    if($id>0){
        $SQLQuery = ''
    }
}*/