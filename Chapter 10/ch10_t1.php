<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'testing';

try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$conn->exec( "CREATE TABLE zodiac (
		id INT UNSIGNED NOT NULL,
		sign CHAR(11),
		symbol CHAR(13),
		planet CHAR(7),
		element CHAR(5),
		start_month TINYINT,
		start_day TINYINT,
		end_month TINYINT,
		end_day TINYINT,
		PRIMARY KEY(id) )"
	);
}
catch( PDOException $e )
	{
	$conn->rollback();
	echo 'Error: ' . $e->getMessage();
	}

$conn = null;
?>
