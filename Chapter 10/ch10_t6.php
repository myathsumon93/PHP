<?php
function build_query( $db, $key_field, $fields, $table ) {
	$values = array();
	if ( ! empty( $_POST[ $key_field ] ) ) {
		$update_fields = array();
		foreach ( $fields as $field ) {
			$update_fields[] = '$field = ?';
			$values[] = $_POST[ $field ];
		}
		$values[] = $_POST[ $key_field ];
		$st = $db->prepare( "UPDATE $table SET " . implode( ',', $update_fields ) . "WHERE $key_field = ?" );
	} else {
		$values[] = md5( uniqid() );
		$placeholders = array('?');
		foreach ( $fields as $field ) {
			$placeholders[] = '?';
			$values[] = $_POST[ $field ];
		}
		$st = $db->prepare( "INSERT INTO $table ( $key_field," . implode( ',', $fields ) . ') VALUES (' . implode( ',', $placeholders ) . ')' );
	}
	$st->execute( $values );
	return $st;
}
?>
