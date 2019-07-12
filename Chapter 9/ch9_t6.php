<?php
$flavors = array( 'Vanilla','Chocolate','Rhinoceros' );
$defaults = array(
	'name' => '',
	'age' => '',
	'flavor' => array()
);
foreach ( $flavors as $flavor ) {
	$defaults['flavor'][$flavor] = '';
}
if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
	$errors = array();
	include __DIR__ . '/ch9_form.php';
} else {
	$errors = validate_form();
	if ( count( $errors ) ) {
		if ( isset( $_POST['name'] ) ) {
			$defaults['name'] = $_POST['name'];
		}
		if ( isset( $_POST['age'] ) ) {
			$defaults['age'] = 'checked='"checked"';
		}
		foreach ( $flavors as $flavor ) {
			if ( isset( $_POST['flavor'] ) && ( $_POST['flavor'] == $flavor ) ) {
				$defaults['flavor'][$flavor] = 'selected="selected"';
			}
		}
		include __DIR__ . '/ch9_form.php';
	} else {
		print 'The form is submitted!';
	}
}
function validate_form() {
	global $flavors;
	$errors = array();
	if ( ! (isset($_POST['name'] ) && ( strlen( $_POST['name'] ) > 3 ) ) ) {
		$errors['name'] = 'Enter a name of at least 3 letters';
	}
	if ( isset( $_POST['age'] ) && ( $_POST['age'] != '1' ) ) {
		$errors['age'] = 'Invalid age checkbox value.';
	}
	if ( isset( $_POST['flavor'] ) && ( ! in_array( $_POST['flavor'], $flavors ) ) ) {
		$errors['flavor'] = 'Choose a valid flavor.';
	}
	return $errors;
}
?>
