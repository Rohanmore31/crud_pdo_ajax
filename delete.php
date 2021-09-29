<?php
	include_once('connection.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		$sql = "DELETE FROM members WHERE id = '".$_POST['id']."'";
		
		if($db->exec($sql)){
			$output['message'] = 'Member deleted successfully';
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


	$database->close();

	echo json_encode($output);

?>