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

	public function getId_Member(){
		return $this->id_event;
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
}

?>