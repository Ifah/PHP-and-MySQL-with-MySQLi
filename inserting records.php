<?php
require 'db/connect.php';


$first_name = $db->real_escape_string(trim('Dale'));

if($insert = $db->query("
	INSERT INTO people (first_name, last_name, bio, created)
	VALUES ('{$first_name}', 'Garrett', 'Alex\'s brother', NOW())
	")){
	echo $db->affected_rows;
}