<?php
ini_set( 'SMTP', 'localhost.testing.com' );
ini_set( 'sendmail_from', 'myat.hsu.mon@digitallaboratory.net' );
$message = "The mail message was sent with the following mail setting:\r\nSMTP = localhost.testing.com\r\nsmtp_port = 25\r\nsendmail_from = myat.hsu.mon@digitallaboratory.net";
$headers = 'From: myat.hsu.mon@digitallaboratory.net';
mail( 'seint.nandar.oo@digitallaboratory.net', 'Testing', $message, $headers );
echo 'Check your email now....';
?>
