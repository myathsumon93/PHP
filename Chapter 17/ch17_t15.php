<?php
list( $now_m, $now_d, $now_y ) = explode( ',', date( 'm,d,Y' ) );
$now = mktime( 0, 0, 0, $now_m, $now_d, $now_y );
$min_ok = $now - 14*86400 - 7200;// 14 days ago 
$max_ok = $now + 7200;// today
$mo = 7;
$dy = 21;
$yr = 2010;	
$asked_for = mktime( 0, 0, 0, $mo, $dy, $yr );
if ( ( $min_ok > $asked_for ) || ( $max_ok < $asked_for ) ) {
	echo 'You are not allowed to view the comic for that day.';
} else {
	header( 'Content-type: image/png' );
	readfile( __DIR__ . '/ch17_img/panda.jpg' );
}
?>
