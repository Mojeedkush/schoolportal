<?php
session_start();
$userinfo = @$_SESSION['userinfo'];
$updateBiodata = @$_SESSION['updateBiodata'];
$updateBiodataErr = @$_SESSION['updateBiodataErr'];
$passwordUpdate = @$_SESSION['passwordUpdate'];
$passwordUpdateErr = @$_SESSION['passwordUpdateErr'];
$dbPasswordUpdateErr = @$_SESSION['dbPasswordUpdateErr'];
$profile_pic = 'profile_image/'. $userinfo['Images'];
$pictureUpdate = @$_SESSION['pictureUpdate'];
$dbPictureUpdateErr = @$_SESSION['dbPictureUpdateErr'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Dashboard</title>
		<link rel="stylesheet" href="bootstrap4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
		<script src="js/script2.js"></script>

	</head>
	<body>
        <div class="container">
			<div class="row">
			<!-- Left plane for shortcut -->
				<div class="col-md-3 bg-light">
					
					<div class="row">
						<div class="col">
							<img src="<?php echo $profile_pic;?>"  alt="" class="img-rounded img-responsive" width="100%" height="250px">
						</div>
					</div>
					<div class="row">
						<div class="col left-plane mt-4">
							<p><a href="dashboard.php">Dashboard</a></p>
							<p><a href="view_biodata.php">View Biodata</a></p>
							<p><a href="update_biodata.php">Edit Biodata</a></p>
							<p><a href="update_profile_pic.php">Update Profile Picture</a></p>
							<p><a href="course_registration.php">Course Registration</a></p>
							<p><a href="change_password.php">Change Password</a></p>
							<p><a href='servers/sign_out.php'>Sign Out</a></p>
						</div>					
					</div>
				</div>

			<!-- Main content -->
				<div class="col-md-9 bg-light">
					<div class="row bd-down">
						<div class="col-md-8 mt-5">
							<h5>Programme: Bachelor of Science <?php echo $userinfo['Programme']?></h5>
						</div>
						<!-- <div class="col-md-3">
							<input type="search" name="search" id="search">
						</div> -->
						<div class="col-md-4">
							<p>Welcome, <?php echo strtoupper($userinfo['Lastname']) . ' ' . strtoupper($userinfo['Firstname']); ?></p>
						</div>
					</div>
					<div class="row bd-top mt-5">
						<div class="col bd-top">
							<p class="text-success"><?php echo $updateBiodata?></p>
							<p class="text-danger"><?php echo $updateBiodataErr?></p>
							<p class="text-success"><?php echo $passwordUpdate?></p>
							<p class="text-danger"><?php echo $passwordUpdateErr?></p>
							<p class="text-danger"><?php echo $dbPasswordUpdateErr?></p>
							<p class="text-success"><?php echo $pictureUpdate?></p>
							<p class="text-danger"><?php echo $dbPictureUpdateErr?></p>
							<a href= "view_biodata.php" class="shadow-box bdr px-4">View Biodata</a>
							<a href= "update_biodata.php" class="shadow-box bdr px-4">Edit Biodata</a>
							<a href= "course_registration.php" class="shadow-box bdr px-4">Course Registration</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
// unset($_SESSION['userinfo']);
unset($_SESSION['updateBiodata']);
unset($_SESSION['updateBiodataErr']);
unset($_SESSION['passwordUpdateErr']);
unset($_SESSION['passwordUpdate']);
unset($_SESSION['dbPasswordUpdateErr']);
unset($_SESSION['pictureUpdate']);
unset($_SESSION['dbPictureUpdateErr']);
?>