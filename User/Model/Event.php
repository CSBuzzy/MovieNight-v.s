<?php  

class Event{

	private $id_event;
	private $name_event;
	private $description_event;
	private $date_event;
	private $duration_event;
	private $member_number_event;
	private $special_event;
	private $image_event;
	private $chat_event;
	private $id_member;
	private $id_event_idea;
	private $id_status;
	private $id_address;
	private $organizer;
	private $city;
	private $seatsRemaining_event;

	public function __construct($id_event, 
								$name_event, 
								$description_event, 
								$date_event, 
								$duration_event,
								$member_number_event, 
								$special_event, 
								$image_event, 
								$chat_event, 
								$id_member, 
								$id_event_idea, 
								$id_status, 
								$id_address, 
								$organizer, 
								$city){
		$this->id_event = $id_event;
		$this->name_event = $name_event;
		$this->description_event = $description_event;
		$this->date_event = $date_event;
		$this->duration_event = $duration_event;
		$this->member_number_event = $member_number_event;
		$this->special_event = $special_event;
		$this->image_event = $image_event;
		$this->chat_event = $chat_event;
		$this->id_member = $id_member;
		$this->id_event_idea = $id_event_idea;
		$this->id_status = $id_status;
		$this->id_address = $id_address;
		$this->organizer = $organizer;
		$this->city = $city;
	}

	public function getId_event(){
		return $this->id_event;
	}

	public function getName_event(){
		return $this->name_event;
	}

	public function getDescription_event(){
		return $this->description_event;
	}

	public function getDate_event(){
		return $this->date_event;
	}

	public function getDuration_event(){
		return $this->duration_event;
	}

	public function getMember_number_event(){
		return $this->member_number_event;
	}

	public function getSpecial_event(){
		return $this->special_event;
	}

	public function getImage_event(){
		return $this->image_event;
	}

	public function getChat_event(){
		return $this->chat_event;
	}

	public function getId_member(){
		return $this->id_member;
	}

	public function getId_event_idea(){
		return $this->id_event_idea;
	}

	public function getId_status(){
		return $this->id_status;
	}

	public function getId_address(){
		return $this->id_address;
	}

	public function getOrganizer(){
		return $this->organizer;
	}

	public function getCity(){
		return $this->city;
	}

	public function getSeatsRemaining_event(){
		return $this->seatsRemaining_event;
	}

	public function setSeatsRemaining_event($number){
		$this->seatsRemaining_event = $number;
	}
}

?>