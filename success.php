<?php
session_start();
$error = @$_SESSION["errorMsg"];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login</title>
		<link rel="stylesheet" href="bootstrap4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
		<script src="js/script.js"></script>
    </head>
    <style>

    </style>
	<body class="bg-city">
        <div class="container-fluid">
            <div class="row black-text">
                <div class="col-md-4"></div>
                <div class="col-md-4 mt-5 bg-light">
                    <!-- Row 1- Positioning company logo -->
                    <div class="row mt-3">                       
                        <div class="col text-center">
                            <a href="index.php"><img src="img/logo.png" alt="logo-icon" class="icon img-responsive image-center"></a>
                        </div>
                    </div>
                    
                    <!-- Row 2- Success begins here -->
                    <div class="row mt-3">                       
                        <div class="col text-center">
                            <h1 class="text-success">Registration was successful!</h1>
                            <p>Go to the <a href="index.php">home page</a> to sign in</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
	</body>
</html>