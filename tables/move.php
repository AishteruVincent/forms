<?php
	include_once('connection.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		$sql = "INSERT INTO archive SELECT * FROM members WHERE id = members.id";
		//$sql = "SELECT FROM members WHERE id = '".$_POST['id']."'";
		//if-else statement in executing our query
		if($db->exec($sql)){
			$output['message'] = 'Member moved successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot delete member';
		} 
	}
	catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();;
	}

	//close connection
	$database->close();

	echo json_encode($output);

?>