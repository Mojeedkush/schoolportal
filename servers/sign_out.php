<?php
session_start();


unset($_SESSION["errEmpt"]);
unset($_SESSION["succLog"]);
unset($_SESSION["passErr"]);
unset($_SESSION["userErr"]);
unset($_SESSION["errorMsg"]);
unset($_SESSION['userinfo']);
unset($_SESSION['updateBiodata']);

session_destroy();

header("Location: ../index.php");

?>