<?php
	
	include_once( dirname( __FILE__ ) . '/../class/Database.class.php' );
	$pdo = Database::getInstance()->getPdoObject();
	
	$name = $_POST[ 'name' ];
	$message = $_POST[ 'message' ];
	
	$query = $pdo->prepare( 'INSERT INTO message VALUES( \'\', :name, :message )' );
	$query->execute( array( 'name' => $name, 'message' => $message ) );
	
?>