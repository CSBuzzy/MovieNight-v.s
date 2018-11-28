<?php
function updateStatusEvent($idevent, $idstatus){
    require('../../User/Model/DbConn.php');
    require_once('../../User/Model/Event.php');

    if ($idevent > 0) {
        $SQLQuery = "UPDATE event SET id_status = :idstatus where id_event = :idevent";
        try {
            $SQLStatement = $bdd->prepare($SQLQuery);
            $SQLStatement->bindValue(':idevent', $idevent);
            $SQLStatement->bindValue(':idstatus', $idstatus);


            if ($SQLStatement->execute()) {
            } else {
                print("Erreur d'exécution de la requête de suppression !<br />");
                var_dump($SQLStatement->errorInfo());
            }
        } catch (PDOException $ex) {
            print("Erreur de préparation de la requête de suppression !<br />");
            print($ex->getMessage());
        }
    }
}


function getAllEventsAdmin(){
    require('../../User/Model/DbConn.php');
    require_once('../../User/Model/Event.php');
    $SQLQuery = "SELECT * from v_event_list";
    $SQLResult = $bdd->query($SQLQuery);
    $eventList = array();
    while ($SQLRow = $SQLResult->FetchObject()) {
        $event = new Event(
            $SQLRow->id_event,
            $SQLRow->name_event,
            $SQLRow->description_event,
            $SQLRow->date_event,
            $SQLRow->duration_event,
            $SQLRow->member_number_event,
            $SQLRow->special_event,
            $SQLRow->image_event,
            $SQLRow->chat_event,
            $SQLRow->id_member,
            $SQLRow->id_event_idea,
            $SQLRow->id_status,
            $SQLRow->id_address,
            $SQLRow->organizer,
            $SQLRow->city);
        $event->setSeatsRemaining_event(getRemainingSeats($event->getId_event()));
        array_push($eventList, $event);
    }
    return $eventList;

}








?>