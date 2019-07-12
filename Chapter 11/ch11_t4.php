<?php
include __DIR__ . '/ch11_t3.php';
ini_set( 'session.save_path', 'sqlite:/tmp/sessions.db' );
session_set_save_handler( new DBHandler );
session_start();
if ( ! isset( $_SESSION['visits'] ) ) {
        $_SESSION['visits'] = 0;
    }
$_SESSION['visits']++;
print 'You have visited here ' . $_SESSION['visits'] . ' times.';
?>
