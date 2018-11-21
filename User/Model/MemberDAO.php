<?php


function connectionMember($email, $password){
	require_once('DbConn.php');
	require_once('Member.php');
	

	$SQLQuery = 'SELECT member.id_member,name_member, first_name_member, birth_date_member, description_member, password_member, photo_member, line1_address, line2_address, name_city, post_code_city, name_preference, icon_preference, value_contact_method as email_member, (select value_contact_method 
			from contact_method 
			inner join have on contact_method.id_contact_method = have.id_contact_method
			where id_contact_type = 2
			and have.id_member = member.id_member) as phone_member ';
	$SQLQuery .= 'from member '; 
	$SQLQuery .= 'left outer join have on member.id_member=have.id_member ';
	$SQLQuery .= 'left outer join contact_method on have.id_contact_method=contact_method.id_contact_method ';
	$SQLQuery .= 'left outer join contact_type on contact_method.id_contact_type=contact_type.id_contact_type ';
	$SQLQuery .= 'left outer join live on member.id_member=live.id_member ';
	$SQLQuery .= 'left outer join address on live.id_address=address.id_address ';
	$SQLQuery .= 'left outer join city on address.id_city=city.id_city ';
	$SQLQuery .= 'left outer join own on member.id_member=own.id_member ';
	$SQLQuery .= 'left outer join equipment_type on own.id_equipment_type=equipment_type.id_equipment_type ';
	$SQLQuery .= 'left outer join prefer on member.id_member=prefer.id_member ';
	$SQLQuery .= 'left outer join preference on prefer.id_preference= preference.id_preference ';
	$SQLQuery .= 'where contact_type.id_contact_type = 1 ';
	$SQLQuery .= 'and password_member = :password ';
	$SQLQuery .= 'and value_contact_method = :email';
	$SQLStatement = $bdd->prepare($SQLQuery);
	$SQLResult = $SQLStatement->execute(array(':email' => $email, ':password' => $password));
	if ($SQLRow = $SQLStatement->FetchObject()) {
		session_start();
		$_SESSION["member"] = new Member($SQLRow->id_member,
										 $SQLRow->photo_member,
										 $SQLRow->name_member,
										 $SQLRow->first_name_member,
										 $SQLRow->birth_date_member,
										 $SQLRow->line1_address,
										 $SQLRow->line2_address,
										 $SQLRow->post_code_city,
										 $SQLRow->name_city,
										 $SQLRow->phone_member,
										 $SQLRow->email_member,
										 $SQLRow->password_member,
										 $SQLRow->description_member,
										 $SQLRow->name_preference,
										 $SQLRow->icon_preference 
										);
		echo ("<h4 id = 'notification'>Bienvenue ".$_SESSION["member"]->getFirst_name_member()."</h4>");
		$SQLStatement->closeCursor();
		return true;
	}
	else{
		echo ("<h4 id = 'notification'>Les identifiants sont erronés</h4>");
		$SQLStatement->closeCursor();
		return false;
	}
}

function infosProfilPublic($id){
	require_once('DbConn.php');
	require_once('Member.php');
	$SQLQuery = 'SELECT member.id_member, first_name_member, birth_date_member, photo_member, description_member, equipment_type_name '; 
	$SQLQuery .= 'from member ';
	$SQLQuery .= 'left outer join own on member.id_member = own.id_member ';
	$SQLQuery .= 'left outer join equipment_type on equipment_type.id_equipment_type= own.id_equipment_type ';
	$SQLQuery .= 'where member.id_member = :id_member';
	$SQLStatement = $bdd->prepare($SQLQuery);
	$SQLStatement->bindValue(':id_member', $id);
	$SQLStatement->execute();
	if ($SQLStatement->rowCount() == 0){
		$id = '';
		$first_name_member = '';
		$birth_date_member ='';
		$photo_member='';
		$description_member='';
		$equipment_type_name='';
	}else{
		if ($SQLRow = $SQLStatement->fetchObject()){
			//$equipment_type_name = $SQLRow->equipment_type_name;
			$member = new Member($SQLRow->id_member, 
								$SQLRow->photo_member, 
								'',
								$SQLRow->first_name_member, 
								$SQLRow->birth_date_member,
								'',
								'',
								'',
								'',
								'',
								'',
								'',
								$SQLRow->description_member,
								'',
								'');
			$SQLStatement->closeCursor();
			return $member;
		}
	}


}
?>