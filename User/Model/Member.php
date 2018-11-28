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
	private $address_member;

	public function __construct($id_member, 
								$name_member, 
								$first_name_member, 
								$birth_date_member,
								$password_member,
								$photo_member,
								$description_member,
								$email_member,
								$phone_member,
								$address_member) {

		$this->id_member = $id_member;
		$this->name_member = $name_member;
		$this->first_name_member = $first_name_member;
		$this->birth_date_member = $birth_date_member;
		$this->password_member = $password_member;
		$this->photo_member = $photo_member;
		$this->description_member = $description_member;
		$this->email_member = $email_member;
		$this->phone_member = $phone_member;
		$this->address_member = $address_member;
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

	public function getAddress_member(){
		return $this->address_member;
	}

}

?>