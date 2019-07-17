<?php
$job[123] = [
	'id' => 123,
	'position' => [
		'title' => 'PHP Developer',
	],
];
$json = json_encode( $job[123] );
http_response_code(200);
header( 'Content-Type: application/json' );
print $json;
?>
