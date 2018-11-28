<?php

class Member{

	private $id_member;
	private $name_member;
	private $first_name_member;
	private $birth_date_member;
	private $password_member;
	private $photo_member;
	private $description_member;
	private $email_member;
	private $phone_member;
	private $line1_address_member;
	private $line2_address_member;
	private $name_city_member;
	private $post_code_city_member;
	private $name_preference_member;
	private $value_prefer_member;
	

	public function __construct($id_member, 
								$photo_member,
								$name_member, 
								$first_name_member, 
								$birth_date_member,
								$line1_address_member,
								$line2_address_member,
								$post_code_city_member,
								$name_city_member,
								$phone_member,
								$email_member,
								$password_member,
								$description_member,
								$name_preference_member,
								$value_prefer_member					
								) {
		

										
		$this->id_member = $id_member;
		$this->name_member = $name_member;
		$this->first_name_member = $first_name_member;
		$this->birth_date_member = $birth_date_member;
		$this->password_member = $password_member;
		$this->photo_member = $photo_member;
		$this->description_member = $description_member;
		$this->email_member = $email_member;
		$this->phone_member = $phone_member;
		$this->line1_address_member = $line1_address_member;
		$this->line2_address_member = $line2_address_member;
		$this->name_city_member = $name_city_member;
		$this->post_code_city_member = $post_code_city_member;
		$this->name_preference_member = $name_preference_member;
		$this->value_prefer_member = $value_prefer_member;
	}


	public function getId_member(){
		return $this->id_member;
	}

	public function getName_member(){
		return $this->name_member;
	}

	public function getFirst_name_member(){
		return $this->first_name_member;
	}

	public function getBirth_date_member(){
		return $this->birth_date_member;
	}

	public function getPassword_member(){
		return $this->password_member;
	}

	public function getPhoto_member(){
        return $this->photo_member;
	}

	public function getDescription_member(){
		return $this->description_member;
	}

	public function getEmail_member(){
		return $this->email_member;
	}

	public function getPhone_member(){
		return $this->phone_member;
	}

	public function getLine1_address_member(){
		return $this->line1_address_member;
	}

	public function getLine2_address_member(){
		return $this->line2_address_member;
	}

	public function getName_city_member(){
		return $this->name_city_member;
	}

	public function getPost_code_city_member(){
		return $this->post_code_city_member;
	}

	public function getName_preference_member(){
		return $this->name_preference_member;
	}

	public function getValue_prefer_member(){
		return $this->value_prefer_member;
	}
}

?>