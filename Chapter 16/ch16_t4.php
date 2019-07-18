<?php
$hosts = gethostbynamel( 'www.yahoo.com' );
print_r( $hosts );
getmxrr( 'yahoo.com', $hosts, $weight );
for ( $i = 0; $i < count( $hosts ); $i++ ) {
	echo $weight[ $i ] . ' ' . $hosts[ $i ] . '<br>';
}
?>
