<?php
require 'db/connect.php';

/*$sql = "SELECT * FROM people";
$results = $db->query($sql);

if($results->num_rows){
	while($row = $results->fetch_object()){

		$country = $db->query("SELECT * FROM countries WHERE id = {$row->country}");
		$country = $country->fetch_object();
		echo "{$row->first_name} ({$country->name})<br>";
	}
}else{
	echo 'No results';
}*/


$sql = "SELECT 
		people.first_name, 
		countries.name as country 
		FROM people 
		LEFT JOIN countries 
		ON people.country = countries.id
		";

$results = $db->query($sql);

if($results->num_rows){
	while($row = $results->fetch_object()){
		echo "{$row->first_name} ({$row->country})<br>";
	}
}else{
	echo 'No results';
}