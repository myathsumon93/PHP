 <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Username: <input type="text" name="username"> <br>
	Password: <input type="password" name="password"> <br>
	<input type="submit" value="Log In">
</form>

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
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

	$secret_word = 'if i ate spinach';
	if ( validate( $_POST['username'], $_POST['password'] ) ) {
		$_SESSION['login'] = $_POST['username'] . ',' . md5( $_POST['username'] . $secret_word);
		error_log( 'Session id ' . session_id() . ' log in as ' . $_POST['username'] );
		echo $_POST['username'] . ',' . md5( $_POST['username'] . $secret_word );
	}
}
?>
