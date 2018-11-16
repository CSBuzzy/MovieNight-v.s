<?php
	
	function getContents($id){
		require('DbConn.php');
		require_once('Content.php');
		$SQLQuery = "SELECT * from v_content_list where id_event = :id";
		$SQLStatement = $bdd->prepare($SQLQuery);
		$SQLStatement->execute(array(':id' => $id));
		$contentList = array();
		while ($SQLRow = $SQLStatement->FetchObject()) {
			$content = new Content(
				$SQLRow->id,
				$SQLRow->name_content,
				$SQLRow->name_content_type,
				$SQLRow->name_language,
				$SQLRow->genre_content,
				$SQLRow->id_event);
			array_push($contentList, $content);
		}
		return $contentList;
	}

?>