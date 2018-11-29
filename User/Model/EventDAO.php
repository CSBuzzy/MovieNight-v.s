<?php

	function getAllEvents(){
		require('DbConn.php');
		require_once('Event.php');
		$SQLQuery = "SELECT * from v_event_list where id_status = 1";
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

	function getEvent($id){
		require('DbConn.php');
		require_once('Event.php');
		$SQLQuery = 'select * from v_event_list where id_event = :id ;';
		$SQLStatement = $bdd->prepare($SQLQuery);
		$SQLStatement->bindValue(':id', $id, PDO::PARAM_INT);
		$SQLStatement->execute();
		if ($SQLRow = $SQLStatement->FetchObject()) {
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
		}
		return $event;
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

	function addEvent($nom, $radio, $type, $titre, $langue, $genre, $date, $heure, $duree, $description, $number, $line1, $line2, $code, $ville, $organizer, $image){
		require('DbConn.php');
		$SQLQuery = 'CALL addEvent(:nom, :radio, :titre, :langue, :genre, :date, :duree, :description, :number, :line1, :line2, :code, :ville, :organizer, :image, :type)';
		$SQLStatement = $bdd->prepare($SQLQuery);
		$SQLStatement->bindValue(':nom', $nom);
		$SQLStatement->bindValue(':radio', $radio);
		$SQLStatement->bindValue(':type', $type);
		$SQLStatement->bindValue(':titre', $titre);
		$SQLStatement->bindValue(':langue', $langue);
		$SQLStatement->bindValue(':genre', $genre);
		$SQLStatement->bindValue(':date', $date.' '.$heure);
		$SQLStatement->bindValue(':duree', $duree);
		$SQLStatement->bindValue(':description', $description);
		$SQLStatement->bindValue(':number', $number);
		$SQLStatement->bindValue(':line1', $line1);
		$SQLStatement->bindValue(':line2', $line2);
		$SQLStatement->bindValue(':code', $code);
		$SQLStatement->bindValue(':ville', $ville);
		$SQLStatement->bindValue(':organizer', $organizer);
		$SQLStatement->bindValue(':image', $image);
		return $SQLStatement->execute();
	}

	function listGenres(){
		require('DbConn.php');
		$SQLResult = $bdd->query('SELECT name_genre from genre');
		$listGenres = array();
		while ($SQLRow = $SQLResult->FetchObject()) {
			array_push($listGenres, $SQLRow->name_genre);
		}
		return $listGenres;
	}

?>