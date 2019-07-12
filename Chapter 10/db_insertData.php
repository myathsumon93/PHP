<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'myDB';

try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$conn->beginTransaction();
	$conn->exec( "INSERT INTO MyGuests ( firstname, lastname, email ) VALUES ( 'Moon', 'Bin', 'moonbin@example.com' )" );
	$conn->exec( "INSERT INTO MyGuests ( firstname, lastname, email ) VALUES ( 'Cha', 'Eun woo', 'chaeunwoo@example.com' )" );
	$conn->exec( "INSERT INTO MyGuests ( firstname, lastname, email ) VALUES ( 'Jin', 'Jin', 'jinjin@example.com' )" );
	$conn->commit();
	echo 'New records created successfully';
} catch ( PDOException $e )
{
	echo $e->getMessage();
}
$conn = null;
?>
