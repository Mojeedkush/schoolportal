<?php
session_start();
require_once("connect.php");

// $username = confirmInput($_POST["username"]);
// $password = confirmInput($_POST["password"]);
$image_name = $_FILES['profile-picture']['name'];
$image_tp_name = $_FILES['profile-picture']['tmp_name'];
$image_size = $_FILES['profile-picture']['size'];
$image_type = $_FILES['profile-picture']['type'];

$target_dir = "../profile_image/". basename($image_name);
$file_upload = move_uploaded_file($image_tp_name,$target_dir);
// $image_to_db = "INSERT into tbl_userinfo (Username, Password, Images) 
//                 Values ('$username', '$password', '$image_name')";


// echo $image_name.'<br>';
// echo $image_size.'<br>';
// echo $image_type;
// echo 'image recieved!';
$firstname = confirmInput($_POST["firstname"]);
$lastname = confirmInput($_POST["lastname"]);
$email = confirmInput($_POST["email"]);
$mobile_number = confirmInput($_POST["mobile-number"]);
$username = confirmInput($_POST["username"]);
// $faculty = confirmInput($_POST["faculty"]);
$programme = confirmInput($_POST["programme"]);
$password = confirmInput($_POST["password"]);
$confirm_password = confirmInput($_POST["confirm-password"]);
$match_email = "/^([A-Za-z0-9_\.\-])+\@([A-Za-z\.])+\.([A-Za-z]{2,3})$/";
$match_number = "/^[0-9]+$/";
$match_password_uppercase = preg_match("/^[A-Z]+$/", $password);
$match_password_lowercase = preg_match("/^[a-z]+$/", $password);
$match_password_number = preg_match("/^[0-9]+$/", $password);
$match_password_special_chars = preg_match("/^[\@]+$/", $password);
$match_password = preg_match("/^[A-Z]{1,}[a-z]{1,}[0-9]{1,}[\@]{1,}$/", $password);






// if ($file_upload) {
//     mysqli_query($connectpage, $image_to_db);
// }
// else {
//     echo "Sorry, error in upload";
// }






// echo $username;
// echo $programme."<br>";
    if (empty($firstname) || empty($lastname) || empty($email) || empty($mobile_number) || empty($username)  
    || ($programme == "...") || empty($password) || empty($confirm_password) || empty($image_name)) {
        // echo "All fields are needed!";
    
// if (empty($firstname)) {
    $_SESSION['errorMsg'] = "All fields are required!";
    header("Location: ../register.php");
//     }
    // echo "error";
    } 
 
  else if (!(preg_match($match_email, $email))){
    $_SESSION['errEmail'] = 'Invalid email, please use this format: you@example.com';
    header("Location: ../register.php");
    echo 'bad email';
    }

  else if (!(preg_match($match_number, $mobile_number)) || strlen($mobile_number) != 11){
    $_SESSION['errNum'] = 'Invalid number, please use this format: 08012345678';
    header("Location: ../register.php");
    // echo 'bad number, use this format: 08012345678';
    }

  else if (!($password == $confirm_password)){
    $_SESSION['errPass'] = 'Password does not match';
    header("Location: ../register.php");
        echo 'password no match';
    }
    else if (strlen($password) < 8){
        $_SESSION['errPassLen'] = 'password must be at least 8 charcaters';
        header("Location: ../register.php");
      // echo 'password must be at least 8 charcaters';
      }
    else if (!($match_password_lowercase)){
    // echo 'password must be only lowercase';
    $_SESSION['errPassCase'] = 'password must be only lowercase';
    header("Location: ../register.php");
    }

// else if (!($match_password_uppercase)){
//     echo 'password must contain uppercase';
// }
// else if (!($match_password_number)){
//     echo 'password must contain number';
// }
// else if (!($match_password_special_chars)){
//     echo 'password must contain special characters like: @,$,&';
// }
// else if (($match_password)) {
//     echo 'password must contain uppercase, lowercase, and special characters like: @,$,&';
// }
//   else {
//     echo 'nothing <br>';
// }
// $year = 13;

// else {

//     if ($faculty == "Engineering") {
//         $fa = "FE";
//     }
//     else if ($faculty == "Science") {
//         $fa = "FS";
//     }
//     else ($programme == "Art") {
//         $fa = "FA";
//     }


//     if ($programme == "Mechanical Engineering") {
//         $fa = "ME";
//     }
//     else if ($programme == "Civil Engineering") {
//         $fa = "CE";
//     }
//     else ($programme == "Electrical Engineering") {
//         $fa = "EE";
//     }

//     $num = 
 
//     $userID = $year . $fa . $dept . $num; 

// echo $image_name;
else {

//     // $userID = 12345678;
    $userID = str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
    $new_pass = crypt($password, "iyo");
// //     // $_SESSION['successMsg'] = "You have successfully registered!";

    $username_check = mysqli_query($connectpage, "SELECT * from tbl_userinfo where Username = '$username' || Email = '$username' ");
    $username_check_array = mysqli_fetch_assoc($username_check);

    if (!($username_check_array)) {
            // echo 'Username is available';
        $databaseTransfer = mysqli_query($connectpage,
        "INSERT into tbl_userinfo (UserID, Firstname, Lastname, Email, Mobile_Number, Username, Password, Programme, Images)
        VALUES ('$userID', '$firstname', '$lastname', '$email', '$mobile_number', '$username', '$new_pass','$programme', '$image_name')");
            
        if ($databaseTransfer) {
            $_SESSION['successMsg'] = "You have successfully registered!";
            header("Location: ../success.php");
        } 
        else {
            $_SESSION['errorRegMsg'] = "Sorry, You are yet to be registered";
            header("Location: ../register.php");
        }
    } 
    else {
        $_SESSION['usernameErrorMsg'] = "Username already taken";
        header("Location: ../register.php");
        // echo 'Username already taken';
    }
//   }
    // echo $firstname;


}


    
//     echo "success";

// , Firstname, Lastname, Email, Mobile Number, pr$programme, Password
// , '$firstname', '$lastname', '$email', '$mobilenumber', '$programme', '$password'
// }



function confirmInput($info) {
    $formTrim = trim($info);
    $formStrip = stripslashes($formTrim);
    $formHtml = htmlspecialchars($formStrip); 
    return $formHtml;
}

?>