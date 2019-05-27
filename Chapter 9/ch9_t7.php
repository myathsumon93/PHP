<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<input type="checkbox" name="boroughs[]" value="bronx"> The Bronx
<input type="checkbox" name="boroughs[]" value="brooklyn"> Brooklyn
<input type="checkbox" name="boroughs[]" value="manhattan"> Manhattan
<input type="checkbox" name="boroughs[]" value="queens"> Queens
<input type="checkbox" name="boroughs[]" value="statenisland"> Staten Island
<input type="submit" value="Submit">
</form>
<?php
if ( $_SERVER['REQUEST_METHOD']='POST' ) {
	echo 'I love ' . join(' and ', $_POST['boroughs']) . '!';
}
?>
