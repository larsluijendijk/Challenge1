<?php
function getAllUsers(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM users";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createUserAction($username, $password, $role) 
{
  $db = openDatabaseConnection();
  $sql = "INSERT INTO users(username, password, roles) VALUES (:username, :password, :role)";
  $query = $db->prepare($sql);
  $query->execute(array(
    ':username' => $username,
    ':role' => $role,
    ':password' => $password
    ));

  $db = null;
  header("Location:" . URL . "user/users");
}

function deleteUserAction($id){
	$db = openDatabaseConnection();

	$sql = "DELETE FROM users WHERE id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
	header("Location:" . URL . "user/users");
}

function showUpdateUser($id){

  if (isset($id)):
      $db = openDatabaseConnection();

      $query=$db->prepare("SELECT id, username FROM users WHERE id=$id");
      $query->bindParam(':param', $param);
      $query->execute();

      $result = $query -> fetch();
      return $result;
    endif;
}

function updateUserAction($id, $username, $password, $role){
	$db = openDatabaseConnection();

    $query = "UPDATE users SET username='$username', password='$password', roles='$role' WHERE id=$id";
    $result = $db->query($query);

  $db = null;
}