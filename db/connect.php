<?php
// error_reporting(0); //production environment
error_reporting(E_ALL); //development  environment
$db = new mysqli('127.0.0.1', 'ifah', 'password', 'app');

if($db->connect_errno){
	// echo $db->connect_error; //for debugging purpose
	die('Sorry, we are having some problems.');
}