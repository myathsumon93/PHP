<?php
/**
 * Building a query string
 */
$vars = array(
	'name' => 'Oscar the Grouch',
	'color' => 'green',
	'favorite_punctuation' => '#'
);
$query_string = http_build_query( $vars );
$url = '/muppet/select.php?' . $query_string;
print $query_string . '<br>';
print $url . '<br>';
$urls = '/muppet/select.php?' . htmlentities( $query_string );
print $urls;
?>
