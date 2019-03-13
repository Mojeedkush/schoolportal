<?php
session_start();
require_once("connect.php");
$userinfo = @$_SESSION['userinfo'];
$username = $userinfo['Username'];
// echo $username;
$image_name = $_FILES['pix']['name'];
$image_tp_name = $_FILES['pix']['tmp_name'];
$image_size = $_FILES['pix']['size'];
$image_type = $_FILES['pix']['type'];
// echo $image_name;
$target_dir = "../profile_image/". basename($image_name);
$file_upload = move_uploaded_file($image_tp_name, $target_dir);

    $change_profile_pic = "UPDATE tbl_userinfo SET Images = '$image_name' 
                            where Username = '$username'  ";

    if (mysqli_query($connectpage, $change_profile_pic)) {
        $_SESSION['pictureUpdate'] = "You have succcessfully changed your profile picture, please re-sign in for it take effect";
        header('location: ../dashboard.php');
    }
    else {
        $_SESSION['dbPictureUpdateErr'] = "An error occurred connecting with the database";
        header('location: ../dashboard.php');
    }
// if ($file_upload) {
//     echo 'upload successful';
// } else {
//     echo 'error';
// }



?>