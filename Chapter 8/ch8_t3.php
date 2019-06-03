<?php
/**
 * validation function
 * @param string $user
 * @param string $pass
 * @return boolean
 */
function validate( $user, $pass ) {
	$users = array( 'david' => '1234', 'adam' => '2345' );
	if ( isset( $users[ $user ] ) && ( $users[ $user ] === $pass ) ) {
		return true;
	} else {
		return false;
	}
}

if ( ! validate( $_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'] ) ) {
	$realm = 'My Website for '. date( 'Y-m-d' );
	http_response_code( 401 );
	header( 'WWW-Authenticate: Basic realm="'.$realm.'"' );
	echo 'My Website for ' . date( 'Y-m-d' );
	echo 'You need to enter a valid username and password.';
	exit;
}
$secret_word = 'if i ate spinach';
if ( validate( $_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'] ) ) {
	setcookie( 'login', $_SERVER['PHP_AUTH_USER'] . ',' . md5( $_SERVER['PHP_AUTH_PW'] . $secret_word ) );
	echo $_SERVER['PHP_AUTH_USER'] . ',' . md5( $_SERVER['PHP_AUTH_PW'] . $secret_word );
}
?>
