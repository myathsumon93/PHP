<?php
$send = mail( 'myat.hsu.mon@digitallaboratory.net', 'My Subject', 'The test mail' );
if ( $send ) {
	echo 'true';
} else {
	echo 'false';
}
?>
