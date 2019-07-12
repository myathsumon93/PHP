<?php
session_start();
if ( ( $_SERVER['REQUEST_METHOD'] == 'GET' ) || ( ! isset( $_POST['stage'] ) ) ) {
	$stage = 1;
} else {
	$stage = (int) $_POST['stage'];
}
	$stage = max( $stage, 1 );
	$stage = min( $stage, 3 );
if ( $stage > 1 ) {
	foreach ( $_POST as $key => $value ) {
		$_SESSION[ $key ] = $value;
	}
}
include __DIR__ . '/ch9_sg' . $stage . '.php';
?>
