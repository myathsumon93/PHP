<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'myDB';

try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare( "SELECT email FROM myGuests WHERE firstname LIKE ? OR lastname LIKE ?" );
	$stmt->execute( array( 'Moon', 'Eun Woo') );
	$results = $stmt->fetchALL();
	foreach ( $results as $i => $result ) {
		echo $result['email'] . '<br>';
	}
	echo 'Retrieved : ' . count($results) . ' rows.<br>';
	echo '<br><br>';
	$st = $conn->prepare( "SELECT firstname, lastname FROM myGuests WHERE email LIKE :email" );
	$st->execute( array( 'email' => 'jinjin@example.com' ) );
	$rs = $st->fetchALL();
	foreach ( $rs as $i => $r ) {
		echo $r['firstname'] . ' ' . $r['lastname'] . '<br>';
	}
	$st->execute( array( 'email' => 'rocky@example.com' ) );
	while( $row = $st->fetch() ) {
		print $row[0] . ' ' . $row[1] . '<br>';
	}
}
catch ( PDOException $e )
{
	echo $e->getMessage();
}
$conn = null;
?>
