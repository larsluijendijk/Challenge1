<?php
function getAllUsers(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM users";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createUserAction($username, $password) 
{
  $db = openDatabaseConnection();
  $sql = "INSERT INTO users(username, password) VALUES (:username, :password)";
  $query = $db->prepare($sql);
  $query->execute(array(
    ':username' => $username,
    ':password' => $password
    ));

  $db = null;
  header("Location:" . URL . "user/users");
}