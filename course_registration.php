<?php
session_start();
$userinfo = @$_SESSION['userinfo'];
$course = @$_SESSION['course'];
$serial_number = @$_SESSION['serial_number'];
$courseError = @$_SESSION['courseError'];
$profile_pic = 'profile_image/'. $userinfo['Images'];
$all_courses = @$_SESSION['all_courses'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Course Registration</title>
		<link rel="stylesheet" href="bootstrap4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
		<script src="js/script.js"></script>
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

						<div class="col-md-4">
						<p>Welcome, <?php echo strtoupper($userinfo['Lastname']) . ' ' . strtoupper($userinfo['Firstname']); ?></p>
						</div>
					</div>
					<div class="row bd-top mt-5 mb-5">
                        <div class="col-md-2"></div>
						<div class="col-md-8 bd-top">
							<span><?php echo $serial_number. '. ' . $course;?></span>
                            <form action="servers/add_courses.php" role="form" method="POST">
							<span class="text-danger"><?php echo $courseError;?></span>
							<!-- <a href="#" onclick='beginRegistration()' id="start">Start New registration</a> -->
							<div id="course-selection">
                                    <span>Select a Course: </span>
                                    <select name="course">
                                        <option value="..." name='...' >...</option>
                                        <option value="MEG101" name="MEG101">MEG101</option>
                                        <option value="MEG102" name="MEG102">MEG102</option>
                                        <option value="MEG103" name="MEG103">MEG103</option>
										<option value="CEG101" name="CEG101">CEG101</option>
                                        <option value="CEG102" name="CEG102">CEG102</option>
                                        <option value="CEG103" name="CEG103">CEG103</option>
										<option value="EEG101" name="EEG101">EEG101</option>
                                        <option value="EEG102" name="EEG102">EEG102</option>
                                        <option value="EEG103" name="EEG103">EEG103</option>
                                    </select>
									<span><button type="submit">ADD</button></span>
                                </div>
                            </form><br>
							<form action="servers/delete_courses.php" role="form" method="POST">
							<span class="text-danger"><?php echo $courseError;?></span>
							<!-- <a href="#" onclick='beginRegistration()' id="start">Start New registration</a> -->
							<div id="course-selection">
                                    <span>Select a Course: </span>
                                    <select name="course">
                                        <option value="..." name='...' >...</option>
                                        <option value="MEG101" name="MEG101">MEG101</option>
                                        <option value="MEG102" name="MEG102">MEG102</option>
                                        <option value="MEG103" name="MEG103">MEG103</option>
										<option value="CEG101" name="CEG101">CEG101</option>
                                        <option value="CEG102" name="CEG102">CEG102</option>
                                        <option value="CEG103" name="CEG103">CEG103</option>
										<option value="EEG101" name="EEG101">EEG101</option>
                                        <option value="EEG102" name="EEG102">EEG102</option>
                                        <option value="EEG103" name="EEG103">EEG103</option>
                                    </select>
									<span><button type="submit">DELETE</button></span>
                                </div>
                            </form><br>
							<form action="servers/update_courses.php" role="form" method="POST">
							<span class="text-danger"><?php echo $courseError;?></span>
							<!-- <a href="#" onclick='beginRegistration()' id="start">Start New registration</a> -->
							<span><button type="submit">CHANGE</button></span>
							<span id="course-selection">
                                    <!-- <span>Select a Course: </span> -->
                                    <select name="course1"  >
                                        <option value="..." name='...' >...</option>
                                        <option value="MEG101" name="MEG101">MEG101</option>
                                        <option value="MEG102" name="MEG102">MEG102</option>
                                        <option value="MEG103" name="MEG103">MEG103</option>
										<option value="CEG101" name="CEG101">CEG101</option>
                                        <option value="CEG102" name="CEG102">CEG102</option>
                                        <option value="CEG103" name="CEG103">CEG103</option>
										<option value="EEG101" name="EEG101">EEG101</option>
                                        <option value="EEG102" name="EEG102">EEG102</option>
                                        <option value="EEG103" name="EEG103">EEG103</option>
                                    </select>									
                                </span>
								<span> to </span>
								<span id="course-selection">
                                    <!-- <span>Select a Course: </span> -->
                                    <select name="course2" >
                                        <option value="..." name='...' >...</option>
                                        <option value="MEG101" name="MEG101">MEG101</option>
                                        <option value="MEG102" name="MEG102">MEG102</option>
                                        <option value="MEG103" name="MEG103">MEG103</option>
										<option value="CEG101" name="CEG101">CEG101</option>
                                        <option value="CEG102" name="CEG102">CEG102</option>
                                        <option value="CEG103" name="CEG103">CEG103</option>
										<option value="EEG101" name="EEG101">EEG101</option>
                                        <option value="EEG102" name="EEG102">EEG102</option>
                                        <option value="EEG103" name="EEG103">EEG103</option>
                                    </select>									
                                </span>
                            </form>
						</div>
                        <div class="col-md-2"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
unset($_SESSION['courseError']);
unset($_SESSION['all_courses']);
?>