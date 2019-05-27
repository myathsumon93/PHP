<?php if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) { ?>
<form method="post" action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" enctype="multipart/form-data"> 
	<input type="file" name="document"/>
	<input type="submit" value="Send File"/>
</form>
<?php
} else {
	if ( isset( $_FILES['doucment'] ) && ( $_FILES['document']['error'] == UPLOAD_ERR_OK ) ) {
		$newPath = '/tmp/' . basename( $_FILES['doucment']['name'] );
		if( move_uploaded_file( $_FILES['document']['tmp_name'], $newPath ) ) {
			echo 'File saved in ' . $newPath;
		} else {
			echo 'Couldn\'t move file to ' . $newPath;
		}
	} else {
		echo 'No valid file uploaded.';
	}
}
