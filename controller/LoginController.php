<?php

require(ROOT . "model/LoginModel.php");

function index()
{
	render("login/index");	
}

function includes()
{
	render("login/includes");	
}

function logout()
{
	render("login/logout");
}
function view()
{
	render("login/view", array(
		'exams' => getAllExams()
	));
}
