<?php 
	
	//Receive the data from client
	$data = $_REQUEST;
	$name = $data['planet_name'];

	//Result Array
	$result = array();
	
	// Data Array
	$plannet_details = array(
		array( 'name' => 'Mercury' , 'order_no' => '1' , 'No_of_days_in_year' => '87'),
		array( 'name' => 'Venus' , 'order_no' => '2' , 'No_of_days_in_year' => '224'),
		array( 'name' => 'Earth' , 'order_no' => '3' , 'No_of_days_in_year' => '365'),
		array( 'name' => 'Mars' , 'order_no' => '4' , 'No_of_days_in_year' => '686'),
		array( 'name' => 'Jupiter' , 'order_no' => '5' , 'No_of_days_in_year' => '4332'),
		array( 'name' => 'Saturn' , 'order_no' => '6' , 'No_of_days_in_year' => '10755'),
		array( 'name' => 'Uranus' , 'order_no' => '7' , 'No_of_days_in_year' => '30687'),
		array( 'name' => 'Neptune' , 'order_no' => '8' , 'No_of_days_in_year' => '60190'),
	);

	for( $count=0 ; $count < count( $plannet_details) ; $count++){
		
		if(stripos( $plannet_details[$count]['name'] , $name ) !== false){
			array_push( $result , $plannet_details[$count]); 
		}
	}

	// Return Response as JSON
	echo json_encode( $result);


 ?>