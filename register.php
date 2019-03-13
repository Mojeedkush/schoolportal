<?php
session_start();
$errorMsg = @$_SESSION['errorMsg'];
$usernameErrorMsg = @$_SESSION['usernameErrorMsg'];
$errEmail = @$_SESSION['errEmail'];
$errNum = @$_SESSION['errNum'];
$errPass = @$_SESSION['errPass'];
$errPassLen = @$_SESSION['errPassLen'];
$errPassCase = @$_SESSION['errPassCase'];
$errorRegMsg = @$_SESSION['errorRegMsg'];


// $database_error = @$_SESSION['databaseerrorMsg'];
// $success = @$_SESSION['successMsg'];
$usernameErrorMsg = @$_SESSION['usernameErrorMsg'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Application</title>
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
                    <div class="row mt-3">
                        <!-- Positioning company logo -->
                        <div class="col text-center">
                            <a href="index.php"><img src="img/logo.png" alt="logo-icon" class="icon img-responsive image-center"></a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <!-- Login form begins here -->
                        <div class="col">
                            <form action="servers/register.php" role="form" method="POST" enctype="multipart/form-data">
                            <span class="text-danger"><?php echo $errorMsg;?></span>
                            <!-- <span class="text-danger"><?php echo $database_error;?></span> -->
                            <span class="text-danger"><?php echo $errEmail;?></span>
                            <span class="text-danger"><?php echo $errNum;?></span>
                            <span class="text-danger"><?php echo $errPass;?></span>
                            <span class="text-danger"><?php echo $errorRegMsg;?></span>
                            <span class="text-danger"><?php echo $errPassLen;?></span>
                            <span class="text-danger"><?php echo $errPassCase;?></span>
                            <!-- <span class="text-success"><?php echo $success;?></span> -->
                            <span class="text-danger"><?php echo $usernameErrorMsg;?></span>
                                <div class="form-group">
                                    <input type="text" name="firstname" id="Firstname" class="form-control" placeholder="Firstname">
								</div>
                                <div class="form-group">
                                    <input type="text" name="lastname" id="Lastname" class="form-control" placeholder="Lastname">
								</div>
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                    
								</div>
                                <div class="form-group">
                                    <input type="text" name="mobile-number" id="mobile-number" class="form-control" placeholder="Mobile Number">                                    
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
								</div>
                                <!-- <div class="form-group">
                                    <span>Select a Faculty: </span>
                                    <select name="faculty">
                                        <option value="Select a preogramme" >...</option>
                                        <option value="Engineering" name="mechanical-engineering">Engineering</option>
                                        <option value="Science">Science</option>
                                        <option value="Art">Art</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <span>Select a Programme: </span>
                                    <select name="programme">
                                        <option value="Select a preogramme" name='...' >...</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                        <option value="Computer Engineering">Computer Engineering</option>
                                        <option value="Biomedical Engineering">Biomedical Engineering</option>
                                        <option value="Aeronautic Engineering">Aeronautic Engineering</option>
                                        <option value="Chemical Engineering">Chemical Engineering</option>
                                        <option value="Petroleum & Gas Engineering">Petroleum & Gas Engineering</option>
                                        <option value="Material Engineering">Material Engineering</option>
                                        <option value="Mechatronics">Mechatronics</option>
                                        <option value="Systems Engineering">Systems Engineering</option>
                                        <option value="Robotics">Robotics</option>
                                        <option value="Electrical Engineering">Electrical Engineering</option>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <span>Religion: </span>
                                    <select name="programme">
                                        <option value="Select a preogramme" >...</option>
                                        <option value="Christianity">Christianity</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <span>Nationality: </span>
                                    <select name="programme">
                                        <option value="Select a preogramme" >...</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Nigeria">Nigeria</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <p>Home Address:</p>
                                    <textarea name="home-address" id="" cols="20" rows="5"></textarea>
                                </div> -->
                                <div class="form-group">
                                    <input type="file" name="profile-picture" id="profile-picture" class="form-control">
                                </div>
                                <div class="form-group"> 
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Apply</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Footer after the form  -->
                        <div class="col text-center mb-3">                            
                            <a href="index.php">Cancel</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
	</body>
<?php
unset($_SESSION['errorMsg']);
// unset($_SESSION['databaseerrorMsg']);
unset($_SESSION['successMsg']);
unset($_SESSION['usernameErrorMsg']);
unset($_SESSION['errNum']);
unset($_SESSION['errPass']);
unset($_SESSION['errEmail']);
unset($_SESSION['errPassLen']);
unset($_SESSION['errPassCase']);
unset($_SESSION['errorRegMsg']);
?>
</html>
