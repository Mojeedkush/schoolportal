<?php
session_start();
require_once("connect.php");

$userinfo = $_SESSION['userinfo'];
$username = $userinfo['Username'];
$current_password = $_POST['current-password'];
// echo $current_password;
$new_password = $_POST['new-password'];
$confirm_password = $_POST['confirm-password'];


if ($current_password == $userinfo['Password'] && $new_password == $confirm_password) {
    // echo 'Hurray!';
    $change_password = "UPDATE tbl_userinfo SET Password = '$new_password' where Username = '$username'  ";

    if (mysqli_query($connectpage, $change_password)) {
        $_SESSION['passwordUpdate'] = "You have succcessfully changed your password";
        header('location: ../dashboard.php');
    }
    else {
        $_SESSION['dbPasswordUpdateErr'] = "An error occurred connecting with the database";
        header('location: ../dashboard.php');
    }
} 
else {
    // echo 'Invalid Password';
    $_SESSION['passwordUpdateErr'] = "There was an error updating your password";
    header('location: ../dashboard.php');
}

// echo "Password changed!";
?>