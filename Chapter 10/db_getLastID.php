<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'myDB';

try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('Yoon', 'Saha', 'saha@example.com')";
	$conn->exec( $sql );
	$last_id = $conn->lastInsertID();
	echo 'Last inserted ID is : ' . $last_id;
}
catch ( PDOException $e )
{
	echo $sql . '<br>' . $e->getMessage();
}

$conn = null;
?>