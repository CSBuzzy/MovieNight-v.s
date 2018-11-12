<?php

	function getAllEvents(){
		require('DbConn.php');
		require_once('Event.php');
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

	function getRemainingSeats($id_event){
		require('DbConn.php');
		$SQLQuery = 'select seats_remaining(:id_event) as seats_remaining;';
		$SQLStatement = $bdd->prepare($SQLQuery);
		$SQLResult = $SQLStatement->execute(array(':id_event' => $id_event));
		if ($SQLRow = $SQLStatement->FetchObject()) {
			return $SQLRow->seats_remaining;
		}
		else {
			return "erreur";
		}
	}

?>