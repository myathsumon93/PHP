<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'myDB';

try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$stmt = $conn->prepare( " SELECT id, firstname, lastname FROM myGuests" );
	$stmt->execute();
	$stmt->setFetchMode( PDO::FETCH_ASSOC );
	while ( $show = $stmt->fetch() ) {
		echo sprintf( '%s %s %s <br>', $show['id'], $show['firstname'],$show['lastname'] );
	}
}
catch ( PDOException $e )
{
	echo $sql . '<br>' . $e->getMessage();
}

$conn = null;
?>