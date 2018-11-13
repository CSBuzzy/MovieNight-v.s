<?php
	
Class Content{

	private $id_content;
	private $name_content;
	private $name_content_type;
	private $id_event;
	private $id_language;
	private $id_content_type;
	private $genre;
	private $language;

	public function __construct($id_content, 
								$name_content,
								$name_content_type,
								$language,
								$genre,
								$id_event){
		$this->id_content = $id_content;
		$this->name_content = $name_content;
		$this->name_content_type = $name_content_type;
		$this->id_event = $id_event;
		$this->genre = $genre;
		$this->language = $language;
	}

	public function getId_content(){
		return $this->id_content;
	}

	public function getName_content(){
		return $this->name_content;
	}

	public function getId_event(){
		return $this->id_event;
	}

	public function getId_language(){
		return $this->id_language;
	}

	public function getId_content_type(){
		return $this->id_content_type;
	}

	public function getGenre(){
		return $this->genre;
	}

	public function getLanguage(){
		return $this->language;
	}

	public function getName_content_type(){
		return $this->name_content_type;
	}


}

?>