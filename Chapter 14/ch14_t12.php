<?php
$fh = fopen( __DIR__ . '/curl-response-headers.txt', 'w' ) or die( 'File cannot open.' );
$c = curl_init( 'http://www.w3schools.com' );
curl_setopt( $c, CURLOPT_POST, true );
echo $c;
curl_setopt( $c, CURLOPT_POSTFIELDS, 'monkey=uncle&amp;rhino=aunt' );
curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $c, CURLOPT_WRITEHEADER, $fh );
$page = curl_exec( $c );
curl_close( $c );
fclose( $fh ) or die( $php_errormsg );
?>
