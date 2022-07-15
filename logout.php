<?php
session_start();

if ( isset( $_GET ) ) {
    session_destroy();
    session_unset();
    header( "Location:index.php" );
}
