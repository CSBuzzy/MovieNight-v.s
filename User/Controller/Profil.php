<?php

	require_once('../Model/MemberDAO.php');
	require('../Model/Member.php');
	session_start();
	if (!empty($_POST)) {
		$name_preference = '';
		$value_preference = '';
		if(isset ($_POST['photo_member'])){
			$photo_member=$_POST['photo_member'];
		};
		if(isset ($_POST['line1_address'])){
			$line1_address = $_POST['line1_address'];
		};
		if(isset ($_POST['line2_address'])){
			$line2_address = $_POST['line2_address'];
		};
		if(isset ($_POST['post_code_city'])){
			$post_code_city = $_POST['post_code_city'];
		};
		if(isset ($_POST['name_city'])){
			$name_city= $_POST['name_city'];
		};
		if(isset ($_POST['phone_member'])){
			$phone_member = $_POST['phone_member'];
		};
		if(isset ($_POST['email_member'])){
			$email_member = $_POST['email_member'];
		};
		if(isset ($_POST['password_member'])){
			$password_member = $_POST['password_member'];
		};
		if(isset ($_POST['description_member'])){
			$description_member = $_POST['description_member'];
		};
		if(isset ($_POST['name_preference'])){
			$name_preference = $_POST['name_preference'];
		};
		if(isset ($_POST['value_preference'])){
			$value_preference = $_POST['value_preference'];
		};
		updateMember($_SESSION['member']->getId_member(), $photo_member, $line1_address, $line2_address, $post_code_city, $name_city, $photo_member, $email_member, $password_member, $description_member, $name_preference, $value_preference);
		require_once('../View/Vue_ProfilPrive.php');
	}

	if (!empty($_GET['id'])){
		$member = infosProfilPublic($_GET['id']);
		require_once('../View/Vue_ProfilPublic.php');
	}else{
		require_once('../View/Vue_ProfilPrive.php');
	}


?>