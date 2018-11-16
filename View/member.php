<?php
class Member {
	private $name, $first_name_member, $birth_date, $id_member;

	public function __construct($name ='', $first_name_member ='', $birth_date='',$id_member=''){
			$this->nom =$name;
			$this->prenom =$first_name_member;
			$this->date_de_naissance=$birth_date;
			$this->id_member = $id_member;
	}

	public	function setNom($name){
		$this->nom =strtoupper($name);
	}

	public function	setPrenom($first_name_member){
		$this->prenom =strtoupper(substr($first_name_member, 0,1)).strtoupper(substr($first_name_member,1));	
	}

	public function	getNom(){
		return $this->nom;
	}

	public function	getPrenom(){
		return $this->prenom;
	}

	public function	getId(){
		return $this->id_member;
	}

	public function	__toString(){
		return $this->nom.' '.$this->prenom;
	}

	public function setDate_naissance($birth_date){
		$this->date_de_naissance=strtoupper($birth_date);
	}

	public function getDate_naissance(){
		return $this->date_de_naissance;
	}

	function getAge(){
	$d=strtotime($this->date_de_naissance);
	return (int)((time()-$d)/3600/24/365.242);
	}
}
?>