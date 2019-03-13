<?php
session_start();
require_once("connect.php");

function cleanInputData($dataInput) {
    $dataInputTrim = trim($dataInput);
    $dataInputStrip = stripslashes($dataInputTrim);
    $dataInputSpecial = htmlspecialchars($dataInputStrip);
    return $dataInputSpecial;
}

$username = cleanInputData($_POST["username"]);
$password = cleanInputData($_POST["password"]);
// $new_pass = crypt($password, "iyo");
// echo $username;
if ($username == "" || $password == "") {
    $_SESSION["errEmpt"] = "Please complete all fields!";
    header("Location: ../index.php");

}
else {
    $login_query = mysqli_query($connectpage, "SELECT * FROM tbl_userinfo WHERE Username = '$username' || Email = '$username' ");
    $login_query_array = mysqli_fetch_assoc($login_query);
    if ($login_query_array) {
        if ($login_query_array['Password'] == $password) {
            header("Location: ../dashboard.php");
            $_SESSION['userinfo'] = $login_query_array;
        } else{
            $_SESSION["passErr"] = "Please enter a correct Password";
            header("Location: ../index.php");
        }
        // echo $username;
    } 
    else {
    // $_SESSION["succLog"] = "Login was successful!";
    $_SESSION["userErr"] = "Please enter a correct Username";
    header("Location: ../index.php");
    }
}
?>