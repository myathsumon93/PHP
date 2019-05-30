<?php
$servername = 'localhost';
$username = 'root';
$password = 'pwdpwd';
$dbname = 'myDB';

try {
	$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$stmt = $conn->prepare( "INSERT INTO MyGuests ( firstname, lastname, email ) 
    VALUES ( :firstname, :lastname, :email )" );
    $stmt->bindParam( ':firstname', $firstname );
    $stmt->bindParam( ':lastname', $lastname );
    $stmt->bindParam( ':email', $email );
    // insert a row
    $firstname = 'R';
    $lastname = 'Rocky';
    $email = 'rocky@example.com';
    $stmt->execute();
    // insert another row
    $firstname = 'M';
    $lastname = 'J';
    $email = 'mj@example.com';
    $stmt->execute();
    echo 'new records created successfully';
	$last_id = $conn->lastInsertID();
	echo 'Last inserted ID is : ' . $last_id;
}
catch( PDOException $e )
{
	echo $e->getMessage();
}

$conn = null;
?>