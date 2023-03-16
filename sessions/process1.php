<?php
	// Create a database connection
	$conn = new mysqli("localhost", "root", "", "phonedatabase");
	
	// Check the GET request
	if(isset($_POST['user']) && $_POST['user'] != '')
	{
		// Select query 
		$sql = "select * from phone where phoneID ='".$_POST['user']."'" ;
		$result = $conn->query($sql);
		
		// Store data in array
		while($row = $result->fetch_assoc()){
			$label= $row['phone_price'];
			
		$data = $row['phone_price'];
		}
		// Chart data for ajax request
		$data = array(
			'labels' => $label,
			'datasets' => array(array(
			
				'fill' => false, 
				'backgroundColor' => array('purple'), 
				'borderColor' => 'black', 
				'data' => $data,
			)),
		);
		
		// Convert and echo data in JSON format
		echo json_encode($data);
	}
	
	