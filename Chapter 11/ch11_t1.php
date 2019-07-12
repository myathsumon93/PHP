<?php
session_start();
if ( ! isset( $_SESSION['visits'] ) ) {
	$_SESSION['visits'] = 0;
}
$_SESSION['visits']++;
print 'You have visited here ' . $_SESSION['visits'] . ' times.<br>';
print_r( $_SESSION );
echo '<br><br>';
$salt = 'YourSpecialValueHere';
$tokenstr = strval( date( 'W' ) ) . $salt;
echo $tokenstr . '<br>';
$token = md5( $tokenstr );
echo $token . '<br>';
?>
