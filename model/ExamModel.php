<?php
function getAllExams(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM exams";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}