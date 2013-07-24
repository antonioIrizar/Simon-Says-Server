<?php

/*
	0	User registration successfully.
	1	User already registered, cant register the same user twice.
	2	Unknown problem.
*/

$name = $_POST['name'];
$password = $_POST['password'];
$gcm_id = $_POST['gcm_id'];
$email = $_POST['email'];

require_once 'db_functions.php';
$db = new DB_Functions();

	try{
		$result = $db->register($name, $password, $gcm_id, $email);	
	}
	catch (Exception $e) {
		$result = array("code"=>"-1", "message"=>"Unknown problem.");
    }
	
	echo json_encode($result);	

?>



