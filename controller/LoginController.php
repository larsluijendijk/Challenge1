<?php

require(ROOT . "model/LoginModel.php");

function logout()
{
	render("login/logout");
}

function index()
{
	render("login/index");	
}

function includes()
{
	render("login/includes");	
}

