<?php

	$bdd = null;

	if (is_null($bdd)) {
		try{
    		$bdd = new PDO('mysql:host=localhost;port=3307;dbname=movie_night;charset=utf8', 'root', 'root');
		}
		catch(Exception $e){
    		die('Erreur : '.$e->getMessage());
		}
	}

?>