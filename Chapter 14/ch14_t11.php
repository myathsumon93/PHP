<?php
$url = 'http://www.w3schools.com';
$stream = fopen( $url, 'r' );
$metadata = stream_get_meta_data( $stream );
foreach ( $metadata[ 'wrapper_data' ] as $header ) {
	print $header . '<br>';
}
$response_body = stream_get_contents( $stream );
?>
