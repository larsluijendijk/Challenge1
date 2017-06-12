<?php
function getAllUsers(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM users";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}