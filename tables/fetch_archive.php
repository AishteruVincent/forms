<?php
	include_once('connection.php');

	$database = new Connection();
	$db = $database->open();

	try{	
	    $sql = 'SELECT * FROM archive';
	    foreach ($db->query($sql) as $row) {
	    	?>
	    	<tr>
	    		<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
	    		<td><?php echo $row['first_name']; ?></td>
	    		<td><?php echo $row['middle_name']; ?></td>
				<td><?php echo $row['age']; ?></td>
				<td><?php echo $row['sex']; ?></td>
				<td><?php echo $row['contact_num']; ?></td>
	    		<td><?php echo $row['full_address']; ?></td>
	    		<td>
	    			<button class="btn btn-success btn-sm edit" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</button>
	    			<button class="btn btn-danger btn-sm delete" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</button>
					<button class="btn btn-info btn-sm move" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-move"></span> Move</button>

	    		</td>
	    	</tr>
	    	<?php 
	    }
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	//close connection
	$database->close();
	
?>