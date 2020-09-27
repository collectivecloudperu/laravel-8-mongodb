<?php

	// echo phpinfo();

	//$host = 'localhost';
	//$puerto = '27017';

	// $con = new MongoDB\Driver\Manager("mongodb://$host:$puerto"); 

	// print_r($con);

	$host = 'localhost';
	$puerto = '27017';
	$usuario = 'root';
	$pass = '123456'; 

	$m = new MongoDB\Driver\Manager("mongodb://$host:$puerto"); 

	$filter = array();
	$options = array();

	$query = new MongoDB\Driver\Query($filter, $options);

	$readPreference = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_PRIMARY);
	$cursor = $m->executeQuery("mibasededatos.postres", $query, $readPreference);

	foreach($cursor as $document) {
	    echo $document->_id . ", ". $document->nombre . ", ". $document->precio. ", ". $document->stock ."<br>";
	}

	

	
	