<?php
$url = 'http://www.w3schools.com';
$stream = fopen( $url, 'r' );
stream_set_timeout( $stream, 30 );
$response_body = stream_get_contents( $stream );
echo $response_body;
?>
