<form method="POST" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] );?>">
	Name: <input type="text" name="name"><br><br>
	E-mail: <input type="text" name="email"><br><br>
	age: <input type="text" name="age"><br><br>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
	Gender:
	<input type="radio" name="gender" value="female"> Female
	<input type="radio" name="gender" value="male"> Male
	<input type="radio" name="gender" value="other"> Other
	<br><br>
	<?php
	$choice = array(
		'eggs' => 'Eggs Benedict',
		'toast' => 'Buttered Toast with Jam',
		'coffee' => 'Piping Hot Coffee'
	);
	echo '<select name="food">';
	foreach ( $choice as $key => $choices ) {
		echo '<option value = "$key">$choices</option>\n';
	}
	echo '</select><br><br>';
	$menu = array(
		'eggs' => 'fried egg',
		'toast' => 'Buttered Toast with chololate',
		'coffee' => 'Ice Mocha'
	);
	foreach ( $menu as $key => $values ) {
		echo "<input type='checkbox' name='menu' value='$key'> $values \n";
	}
	echo '<br><br>';
	?>
	Credit Card: <input type="text" name="card"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
/**
 * Validating a credit card number
 * @param string $s
 */
function is_valid_credit_card($s) {
	$s = strrev(preg_replace( '/[^\d]/', '', $s ) );
	$sum = 0;
	for ( $i = 0, $j = strlen( $s ); $i < $j; $i++ ) {
	if ( ( $i%2 ) == 0 ) {
		$val = $s[ $i ];
	} else {
		$val = $s[ $i ] * 2;
		if( $val >9 ){
			$val -= 9;
		}
	}
	$sum += $val;
	}
return ( ( $sum % 10 ) == 0 );
}
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	echo $_POST['name'] . '<br>';
	echo $_POST['email'] . '<br>';
	echo $_POST['age'] . '<br>';
	echo $_POST['comment'] . '<br>';
	if ( ! ( filter_has_var( INPUT_POST, 'name' )  && (strlen ( filter_input(INPUT_POST, 'name' ) ) > 0 ) ) ) {
		echo 'You must enter your name.<br>';
	}
	if ( filter_input ( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL ) === false ) {
		echo 'Submitted email address is invalid.';
	}
	if ( filter_input( INPUT_POST, 'age', FILTER_VALIDATE_INT ) === false ) {
		echo 'Submitted age is invalid.<br>';
	}
	if ( filter_has_var( INPUT_POST, 'comment' ) && ( strlen( filter_input( INPUT_POST, 'comment', FILTER_SANITIZE_STRING ) ) <= 5 ) ) {
	echo 'Comment must be more than 5 characters.<br>';
	}
	if (! array_key_exists( $_POST['food'], $choice ) ) {
		echo 'You must select a valid choice.<br>';
	}
	if ( ! isset( $_POST['gender'] ) ) {
	echo 'No radio buttons were checked.<br>'; 
	}
	if ( ! isset( $_POST['menu'] ) ) {
	echo 'No checkboxes were checked.<br>'; 
	}
	if ( ! is_valid_credit_card( $_POST['card'] ) ) {
		echo 'Sorry, that card number is invalid.';
	}
	echo '<br><br><br>';
	echo 'The comment was: ';
	echo htmlentities($_POST['comment']);
}
?>
