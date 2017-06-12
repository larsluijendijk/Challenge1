<?php

require(ROOT . "model/ExamModel.php");

function logout()
{
	render("login/logout");
}

function index()
{
	render("exam/index", array(
		'exams' => getAllExams()
	));
}