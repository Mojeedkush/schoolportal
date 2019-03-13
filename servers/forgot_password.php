<?php
session_start();
require_once("connect.php");

$forgot_email = $_POST['forgot-email']; 

$check_email = mysqli_query($connectpage, "SELECT * FROM tbl_userinfo WHERE Email = '$forgot_email' ");
$check_email_array = mysqli_fetch_assoc($check_email);

if ($check_email_array['Email'] == $forgot_email) {
    // echo 'emails match';
    $_SESSION['forgotPassSucc'] = 'A message has been sent to your email address, use the key to <a href="index.php">sign in</a>';
    header("Location: ../forgot_pass_success.php");

}
else {
    // echo 'emails dont match';
    $_SESSION['forgotPassError'] = 'The email address does not match any in the database';
    header("Location: ../forgot_password.php");
}
?>