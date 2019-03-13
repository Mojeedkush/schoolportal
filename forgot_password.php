<?php
session_start();
$errEmpt = @$_SESSION["errEmpt"];
// $succLog = @$_SESSION["succLog"];
$passErr = @$_SESSION["passErr"];
$userErr = @$_SESSION["userErr"];
$forgotPassError = @$_SESSION["forgotPassError"];



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
                    
                    <!-- Row 2- Login form begins here -->
                    <div class="row mt-3 mb-3">                       
                        <div class="col">
                        <span class="text-danger"><?php echo $errEmpt?></span>
                        <!-- <span class="text-success"><?php echo $succLog?></span> -->
                        <span class="text-danger"><?php echo $passErr?></span>
                        <span class="text-danger"><?php echo $forgotPassError?></span>

                        <span class="text-danger"><?php echo $userErr?></span>
                            <form action="servers/forgot_password.php" role="form" method="post">
                                <div class="form-group">
                                    Enter your email address:
                                    <input type="text" name="forgot-email" id="username" class="form-control" placeholder="you@email.com">
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">                            
                                        <a href="index.php">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
	</body>
</html>
<?php
unset($_SESSION["errEmpt"]);
unset($_SESSION["passErr"]);
unset($_SESSION["userErr"]);
unset($_SESSION["forgotPassError"]);

// unset($_SESSION["succLog"]);
?>