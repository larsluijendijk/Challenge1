<?php

require(ROOT . "model/UserModel.php");

function logout()
{
	render("login/logout");
}

function index()
{
	render("user/index");	
}
function users(){
	render("user/users", array(
		'users' => getAllUsers()
));
}

function create()
{
	render("user/create");	
}

function edit($id)
{
	render("user/edit",array(
	'user' => showUpdateUser($id)
	));
	if (isset($_POST['submit'])) {
		createUpdate();
	}

}	

function createUser()
{
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role']) ){
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		createUserAction($_POST['username'], $password, $_POST['role']);
	}
	else{
		echo"Fill in all fields.";
	}
}

function deleteUser($id){
	if(isset($id)){
		deleteUserAction($id);
	}
	else{
 		header("Location:" . URL . "user/users");
	}
}

function createUserUpdate()
{
		if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])){
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		updateUserAction($_POST['id'], $_POST['username'], $password, $_POST['role']);
	}
	header("Location:" . URL . "user/users");

}