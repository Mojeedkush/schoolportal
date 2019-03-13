<?php
session_start();
$userinfo = @$_SESSION['userinfo'];
$profile_pic = 'profile_image/'. $userinfo['Images'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Biodata Update</title>
		<link rel="stylesheet" href="bootstrap4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
		<script src="js/script2.js"></script>
	<style>
	.bdr {
		border: 1px solid yellow;
	}

	.bd-down {
		border-bottom: 2px solid black;
	}
	.shadow-box {
		box-shadow: 0px 1px 1px 0px 3px;
	}
	</style>
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
							<p><a href="servers/sign_out.php">Sign Out</a></p>
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
					<div class="row bd-top mt-5 mb-5">
                        <div class="col-md-2"></div>
						<div class="col-md-8 bd-top">
                            <form action="servers/change_password.php" role="form" method="POST">
                                <!-- <span class="text-danger"><?php echo $error;?></span>
                                <span class="text-danger"><?php echo $database_error;?></span>
                                <span class="text-success"><?php echo $success;?></span> -->
                                    
                                    <div class="form-group">
                                    <!-- <label for="firstname">Lastname: </label> -->
                                        <input type="password" name="current-password" id="password" class="form-control" placeholder="Current Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="new-password" id="new-password" class="form-control" placeholder="New Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm New Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Password</button>
                                </form>
						</div>
                        <div class="col-md-2"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>