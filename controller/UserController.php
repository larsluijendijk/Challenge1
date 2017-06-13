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

function createUser()
{
	if (isset($_POST['username']) && isset($_POST['password'])){
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		createUserAction($_POST['username'], $password);
	}
	else{
		echo"Fill in all fields.";
	}
}

