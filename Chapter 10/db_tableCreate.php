<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'myDB';

try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$sql = "CREATE TABLE testguest (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";
	$conn->exec( $sql );
	echo 'Table created successfully<br>';
}
catch ( PDOException $e ) {
	echo $sql . '<br>' . $e->getMessage();
}
$conn = null;
?>
