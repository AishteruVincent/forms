<?php
	include_once('connection.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		//make use of prepared statement to prevent sql injection
		$stmt = $db->prepare("INSERT INTO members (lastname, firstname, middlename, age, sex, contact, address) VALUES (:lastname, :firstname, :middlename, :age, :sex, :contact, :address)");
		//if-else statement in executing our prepared statement
		if ($stmt->execute(array(':lastname' => $_POST['lastname'] , ':firstname' => $_POST['firstname'], ':middlename' => $_POST['lastname'], ':age' => $_POST['age'], ':sex' => $_POST['sex'], ':contact' => $_POST['contact'], ':address' => $_POST['address'])) ){
			$output['message'] = 'Member added successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot add member';
		} 
		   
	}
	catch(PDOException $e){
		$output['error'] = true;
 		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();

	echo json_encode($output);

?>