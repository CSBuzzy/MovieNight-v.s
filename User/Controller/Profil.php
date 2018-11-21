<?php

	require_once('../Model/MemberDAO.php');

	if (!empty($_GET['id'])){
		$member = infosProfilPublic($_GET['id']);
		require_once('../View/Vue_ProfilPublic.php');
	}else{
		require('../Model/Member.php');
		session_start();
		require_once('../View/Vue_ProfilPrive.php');
	}


?>