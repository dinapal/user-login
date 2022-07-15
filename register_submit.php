<?php

if ( isset( $_POST ) && $_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '' ) {
    require 'db.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5( $_POST['password'] );

    $check = "SELECT  `username`  FROM `user` WHERE `username` = '$username' ";
    $res = $con->query( $check );

    if ( $row = mysqli_fetch_assoc( $res ) && $row['username'] == $username ) {
        echo 'User name already Register';
    } else {
        $sql = " INSERT INTO `user`( `username`, `email`, `password`) VALUES ( '$username', '$email', '$password' )";

        $res = $con->query( $sql );

        if ( $res ) {
            echo 'Registration Successfull Please Login to View Dashboard';
        }

    }

} else {
    echo "Please Fill The Form First";
    return false;
}
