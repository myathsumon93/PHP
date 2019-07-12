<?php
$c = curl_init( 'http://www.w3schools.com/' );
curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $c, CURLOPT_CONNECTTIMEOUT, 15 );
$page = curl_exec( $c );
echo $page;
curl_close( $c );
?>
