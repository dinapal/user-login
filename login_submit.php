<?php
session_start();

if ( isset( $_POST ) && $_POST['username'] != '' && $_POST['password'] != '' ) {
    require 'db.php';

    $username = $_POST['username'];
    $password = md5( $_POST['password'] );

    $check = "SELECT  `id`, `username` FROM `user` WHERE `username` = '$username' AND  `password` = '$password' ";

    if ( $res = $con->query( $check ) ) {

        while ( $row = mysqli_fetch_assoc( $res ) ) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        }

    } else {
        echo 'username or password are not matched';
    }

} else {
    echo "Please Fill The Form First";
    return false;
}
