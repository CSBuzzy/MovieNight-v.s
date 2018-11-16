<?php


function connectionMember($email, $password){
	require_once('DbConn.php');
	require_once('Member.php');
	$SQLQuery = 'select * ';
	$SQLQuery .= 'from member '; 
	$SQLQuery .= 'inner join have on member.id_member = have.id_member ';
	$SQLQuery .= 'inner join contact_method on have.id_contact_method = contact_method.id_contact_method ';
	$SQLQuery .= 'where id_contact_type = 1 ';
	$SQLQuery .= 'and password_member = :password ';
	$SQLQuery .= 'and value_contact_method = :email';
	$SQLStatement = $bdd->prepare($SQLQuery);
	$SQLResult = $SQLStatement->execute(array(':email' => $email, ':password' => $password));
	if ($SQLRow = $SQLStatement->FetchObject()) {
		session_start();
		$_SESSION["member"] = new Member($SQLRow->id_member, 
										$SQLRow->name_member,
										$SQLRow->first_name_member,
										$SQLRow->birth_date_member,
										$SQLRow->password_member,
										$SQLRow->photo_member,
										$SQLRow->description_member,
										$SQLRow->value_contact_method,
										'',
										'');
		echo ("<h4 id = 'notification'>Bienvenue ".$_SESSION["member"]->getFirst_name_member()."</h4>");
		return true;
	}
	else{
		echo ("<h4 id = 'notification'>Les identifiants sont erronés</h4>");
		return false;
	}
}
?>