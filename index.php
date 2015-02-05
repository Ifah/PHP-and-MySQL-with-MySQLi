<?php
require 'db/connect.php';


//getting results
if($result = $db->query("SELECT * FROM people")){
	if($count = $result->num_rows){

		// echo '<p>', $count, '</p>';

		// $rows = $result->fetch_assoc();
		// $rows = $result->fetch_all();
		// echo '<pre>', print_r($rows), '</pre>';

		// $rows = $result->fetch_all(MYSQLI_NUM); //numeric arrays
		// $rows = $result->fetch_all(MYSQLI_BOTH); //both num and assoc arrays
		// $rows = $result->fetch_all(MYSQLI_ASSOC); //associative arrays
		// echo '<p>', $rows[0]['bio'], '</p>';

		// foreach($rows as $row){
		// 	echo $row['first_name'], ' ', $row['last_name'], ' ', $row['bio'], ' ', $row['created'], '<br>'; 
		// }

		// //alternate to above
		// while($row = $result->fetch_assoc()){
		// 	echo $row['first_name'], ' ', $row['last_name'], ' ', $row['bio'], ' ', $row['created'], '<br>';
		// }

		//alternate to above
		while($row = $result->fetch_object()){
			echo $row->first_name, ' ', $row->last_name, ' ', $row->bio, ' ', '<br>';
		}

		//frees up memory associated with result set returned from mysql database
		$result->free();
		

				

	}
}