<?php

$con = new mysqli( 'localhost', 'root', '', 'user_login' );

if ( $con->connect_error ) {
    echo 'Connection Not Successfull';
}
