<?php  
	session_start();
	header('Content-Type: application/json'); 
	
	include 'includes.php';
	$ordn = $_GET['ordn'];
	$results = array();
	$documents = get_docs(session_id(), $ordn, false);
	
	foreach ($documents->fetchAll(PDO::FETCH_ASSOC) as $document) {
		$results[] = $document;	
	}
	echo json_encode($results);
