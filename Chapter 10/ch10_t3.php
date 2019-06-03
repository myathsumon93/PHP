<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'testing';

try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$pairs = array( 'Mars' => 'water', 'Moon' => 'water', 'Sun' => 'fire' );
	$st = $conn->prepare( "SELECT sign FROM zodiac WHERE element LIKE :element AND planet LIKE :planet" );
	$st->bindParam( ':element', $element );
	$st->bindparam( ':planet', $planet );
	foreach ( $pairs as $planet => $element ) {
		$st->execute();
		var_dump( $st->fetch() );
	}
	$error = $conn->errorInfo();
	print '<br>Problem: ' . $error[0];
} catch ( PDOException $e ) {
	$conn->rollback();
	echo 'Error: ' . $e->getMessage();
}

$conn = null;
?>
