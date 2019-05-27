<form method="POST" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] );?>">
	<?php 
	$value = 'yes';
	echo "<input type='checkbox' name='subscribe' value='yes'/> Subscribe?<br><br>";
	?>
	<input type="submit" value="Submit">
</form>

<?php
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	if ( filter_has_var( INPUT_POST, 'subscribe' ) ) {
		if ($_POST['subscribe'] == $value) {
		$subscribed = true;
		} else {
		$subscribed = false;
		print 'Invalid checkbox value submitted.';
		}
		} else {
			$subscribed = false;
		}
		if ( $subscribed ) {
		print 'You are subscribed.';
	} else {
		print 'You are not subscribed';
	}
}

?>
