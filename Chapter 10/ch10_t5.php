<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'myDB';

try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$fields = array( 'firstname', 'lastname', 'email' );
	$placeholder = array();
	$values = array();
	foreach ( $fields as $field ) {
		$placeholder[] = '?';
		$values = ['Kim', 'Sohyung', 'kinsohyung@example.com'];
	}
	$st = $conn->prepare( 'INSERT INTO myGuests (' . implode( ',', $fields ) . ') VALUES (' . implode( ',', $placeholder ) .')' );
	$st->execute( $values );
}
catch ( PDOException $e )
{
	echo $e->getMessage();
}
$conn = null;
?>
