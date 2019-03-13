<?php
session_start();
require_once("connect.php");

$userinfo = @$_SESSION['userinfo'];

$email = confirmInput($_POST["email"]);
$mobilenumber = confirmInput($_POST["mobile-number"]);
$username = $userinfo['Username'];

// echo $username. "<br>";
// echo $email;

function confirmInput($info) {
    $formTrim = trim($info);
    $formStrip = stripslashes($formTrim);
    $formHtml = htmlspecialchars($formStrip); 
    return $formHtml;
}

$biodata_update_email = "UPDATE tbl_userinfo SET Email = '$email' WHERE Username = '$username' ";
$biodata_update_num = "UPDATE tbl_userinfo SET Mobile_Number = '$mobilenumber' WHERE Username = '$username' ";
$delete_row = "DELETE FROM `tbl_userinfo` WHERE `tbl_userinfo`.`Email` = 'bag@gmail.com' ";
$delete_column = "ALTER TABLE tbl_userinfo DROP Programme;";

if (mysqli_query($connectpage, $biodata_update_email) && mysqli_query($connectpage, $biodata_update_num)) {
    $_SESSION['updateBiodata'] = "You have successfully updated your Biodata!";
    header("Location: ../dashboard.php");
}
else {
    $_SESSION['updateBiodataErr'] = "An error occured while updating your biodata!";
    header("Location: ../dashboard.php");
}

// if (mysqli_query($connectpage, $delete_row)) {
//     echo 'deleted row!';
// } else {
//     echo 'could not delete row!';
// }

// if (mysqli_query($connectpage, $delete_column)) {
//     echo 'deleted column!';
// } else {
//     echo 'could not delete column!';
// }

// $create_table = "CREATE TABLE Test1 (ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, COURSE_CODE VARCHAR(10) NOT NULL, COURSE_TITLE VARCHAR(50) NOT NULL, CREDIT_UNITS INT(2) NOT NULL)";

// if (mysqli_query($connectpage, $create_table)) {
//     echo 'table created!';
// } else {
//     echo 'unable to create table!' . "<br>" . mysqli_error($connectpage);
// }

?>