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
