<?php
echo extension_loaded( 'tidy' ) ? 'LOADED' : 'NOT LOADED';
$file = 'example.html';
$tidy = new tidy();
$repaired = $tidy->repairfile( $file );
rename( $file, $file . '.bak' );
file_put_contents( $file, $repaired );
?>
