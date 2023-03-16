<?php
	// Create a database connection
	$conn = new mysqli("localhost", "root", "", "phonedatabase");
	
	// Check the GET request
	if(isset($_GET['brandname']) && $_GET['brandname'] != '')
	{
		// Select query 
		$sql = "select phone_name, phone_price from phone where brandname =".$_GET['brandname'];
		$result = $conn->query($sql);
		
		// Store data in array
		while($row = $result->fetch_assoc()){
			$label[] = $row['phone_name'];
			$data[] = $row['phone_price'];
		}
		
		// Chart data for ajax request
		$data = array(
			'labels' => $label,
			'datasets' => array(array(
				'label' => "Price(£)", 
				'fill' => false, 
				'backgroundColor' => array('purple'), 
				'borderColor' => 'black', 
				'data' => $data,
			)),
		);
		
		// Convert and echo data in JSON format
		echo json_encode($data);
	}
	
?>