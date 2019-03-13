<?php
session_start();
$errEmpt = @$_SESSION["errEmpt"];
// $succLog = @$_SESSION["succLog"];
$passErr = @$_SESSION["passErr"];
$userErr = @$_SESSION["userErr"];
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
                    <div class="row mt-3">                       
                        <div class="col">
                        <span class="text-danger"><?php echo $errEmpt?></span>
                        <!-- <span class="text-success"><?php echo $succLog?></span> -->
                        <span class="text-danger"><?php echo $passErr?></span>
                        <span class="text-danger"><?php echo $userErr?></span>
                            <form action="servers/login.php" role="form" method="post">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="checkbox">
                                            <label for="remember"><input type="checkbox" name="remember-me" id="remember-me"> Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-6 px-5">
                                        <a href="forgot_password.php">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Row 3- Footer after the form  -->
                    <div class="row">                        
                        <div class="col text-center">                            
                            <p style="display:inline-block;">Prospective Student?</p><a href="register.php" class="px-2">Apply here</a>
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
// unset($_SESSION["succLog"]);
?>