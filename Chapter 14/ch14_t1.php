<?php
$str = file_get_contents( 'https://www.w3schools.com' );
$arrayLines = explode( '\n', $str );
var_dump( $arrayLines );
?>
