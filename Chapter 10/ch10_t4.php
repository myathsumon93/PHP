<?php
try {
	$db = new PDO( 'sqlite:/tmp/zodiac.db' );
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$st = $db->prepare( 'SELECT * FROM zodiac' );
	$st->execute();
	while ( $row = $st->fetch(PDO::FETCH_NUM ) ) {
	print implode( ',',$row ). '<br/>';
	}
} catch ( Exception $e ) {
print 'Database Problem: ' . $e->getMessage();
}
?>
