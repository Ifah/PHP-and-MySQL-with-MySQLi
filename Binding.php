<?php
require 'db/connect.php';

//binding 1 parameter
/*if(isset($_GET['last_name'])){
	$last_name = trim($_GET['last_name']);

	$people = $db->prepare("SELECT first_name, last_name FROM people WHERE last_name = ?");
	$people->bind_param('s', $last_name);
	$people->execute();

	$people->bind_result($f_name, $l_name);
	
	while($people->fetch()){
		echo $f_name, ' ', $l_name, '<br>';
	}
}*/

//binding multiple parameters
if(isset($_GET['id'], $_GET['last_name'])){
	$last_name = trim($_GET['last_name']);
	$id = trim($_GET['id']);

	$people = $db->prepare("SELECT first_name, last_name FROM people WHERE last_name = ? AND id = ?");
	$people->bind_param('si', $last_name, $id); //string and integer
	$people->execute();

	$people->bind_result($f_name, $l_name);
	
	while($people->fetch()){
		echo $f_name, ' ', $l_name, '<br>';
	}
}