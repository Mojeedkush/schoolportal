<?php
session_start();
require_once("connect.php");
$userinfo = $_SESSION['userinfo'];
$tablename = $userinfo['Lastname']. $userinfo['UserID'];
$course = $_POST['course'];

$check_table = mysqli_query($connectpage, "SELECT * from $tablename");
if (!($check_table)) {
    $create_table = mysqli_query($connectpage, "CREATE TABLE $tablename (id INT(5) AUTO_INCREMENT PRIMARY KEY,
                    course VARCHAR(50)) ");
    if ($create_table) {
        // echo 'table successfully created<br>';
        $check_course = mysqli_query($connectpage, "SELECT * FROM $tablename WHERE course = '$course' ");
        $check_course_array = mysqli_fetch_assoc($check_course);

        if (!($check_course_array)) {
            if ($course != '...') {
                $add_course = mysqli_query($connectpage, "INSERT INTO $tablename (course) VALUES ('$course') ");
                if ($add_course) {
                    echo 'course successfully added<br>';
                    $check_course1 = mysqli_query($connectpage, "SELECT * FROM $tablename");
                    // $check_course_array = mysqli_fetch_assoc($check_course1);
                    while ($all_courses = mysqli_fetch_assoc($check_course1)){
                        
                        $_SESSION['all_courses'] = $all_courses['id']. ' ' . $all_courses['course']. '<br>';
                        header("Location: ../course_registration.php");
                    }
                } else {
                    echo 'unable to add course<br>';
                }
                
            } else {
                echo 'you are yet to select a course<br>';
            }
        } else {
             echo $course.' is already registered';   
        }    
    } else {
        echo 'unable to create table<br>';
    }
    
} else {
    // echo 'table already exists<br>';
    $check_course = mysqli_query($connectpage, "SELECT * FROM $tablename WHERE course = '$course' ");
    $check_course_array = mysqli_fetch_assoc($check_course);
    if (!($check_course_array)) {
        if ($course != '...') {
            $add_course = mysqli_query($connectpage, "INSERT INTO $tablename (course) VALUES ('$course') ");
            if ($add_course) {
                echo 'course successfully added<br>';
                $check_course1 = mysqli_query($connectpage, "SELECT * FROM $tablename");
                // $check_course_array = mysqli_fetch_assoc($check_course1);
                $counter = 1;
                while ($all_courses = mysqli_fetch_assoc($check_course1)){
                    
                    echo $counter. '.  ' . $all_courses['course']. '<br>';
                    $counter ++;
                    // header("Location: ../course_registration.php");
                }
            } else {
                echo 'unable to add course<br>';
            }
            
        } else {
            echo 'you are yet to select a course<br>';
        }
    }else {
        echo $course.' is already registered';   
   }    
}


// $_SESSION['courseError'] = 'Still under Development';
// header("Location: ../course_registration.php");



// CHECKING IF A TABLE EXISTS AND CREATING ONE
// $table_present = mysqli_query($connectpage, " SELECT * from test3 ");
// if ($table_present) {
//     echo 'table exists'.'<br>'. mysqli_error($connectpage);
// } else {
//     echo 'table does not exist'.'<br>'. mysqli_error($connectpage).'<br>';
//     $create_table = mysqli_query($connectpage, "CREATE TABLE test3 (ID INT(10) AUTO_INCREMENT PRIMARY KEY, 
//                     COURSE_CODE VARCHAR(50)) ");
//     if ($create_table) {
//         echo 'a table is thus, created';
//     } else {
//         echo 'table not created';
//     }
    
// }

// CHECKING IF A CONTENT IN A TABLE EXIST AND ADDING
// CHECKING
// $table_content_present = mysqli_query($connectpage, " SELECT * from test3 ");
// if ($table_content_present) {
//     echo 'Course code is available<br>';
// } else {
//     echo 'Course code is not available<br>';
// }

// $match_found = mysqli_num_rows($table_content_present);
// echo $match_found. '<br>';

//     $table_content_present_array = mysqli_fetch_assoc($table_content_present);
//     if ($table_content_present_array) {
//         echo 'EEG103 is available<br>';
//     } else {
//         echo 'EEG103 is not available<br>';
//     }
  
    // $course_code = $table_content_present_array['COURSE_CODE'];
    // echo $course_code;
// ADDING
// $table_add_content = mysqli_query($connectpage, "INSERT INTO test3 (COURSE_CODE) VALUES ('EEG101')");
// if ($table_add_content) {
//     echo 'course added';
// } else {
//     echo 'unable to add course';
// }

// UPDATING
// $table_add_content = mysqli_query($connectpage, "UPDATE test3 SET COURSE_CODE = 'EEG103' WHERE COURSE_CODE = '2' ");
// if ($table_add_content) {
//     echo 'course updated';
// } else {
//     echo 'unable to update course';
// }


// while($row = $table_content_present->fetch_assoc()) {
//     echo "ID: " . $row["ID"]. " - COURSE_CODE: " . $row["COURSE_CODE"]. "<br>";
    
//    } 
//    else {
//     echo "0 results";
//    }
//    $connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
//    mysql_select_db('hrmwaitrose');
   
//    $query = "SELECT * FROM employee"; //You don't need a ; like you do in SQL
//    $result = mysql_query($query);
   
//    echo "<table>"; // start a table tag in the HTML
   
//    while($row = mysqli_fetch_assoc($table_content_present)){   //Creates a loop to loop through results
//    echo " " . $row['ID'] . " " . $row['COURSE_CODE'] . "<br>";  //$row['index'] the index here is a field name
//    }
   
//    echo "</table>"; //Close the table in HTML
   
//    mysql_close(); //Make sure to close out the database connection










// echo $tablename. '<br>';
// echo $course;

//     $serial_number_query = mysqli_query($connectpage, "SELECT * FROM test22 WHERE COURSE_CODE = '$course' ");
//     $serial_number_query_array = mysqli_fetch_assoc($serial_number_query);
//     if ($serial_number_query_array) {
//         $add_course = "INSERT into test21 (COURSE_CODE) VALUES ('$course')";
//         mysqli_query($connectpage, $add_course);
//         $_SESSION['serial_number'] = $serial_number_query_array['ID'];
//         $_SESSION['course'] = $course;
//         header("Location: ../course_registration.php");
//         // echo $course;
//         // echo 'table created';
//         // echo $serial_number_query_array;
//     }

// else {

    // $create_table = "CREATE TABLE test25 (ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    // COURSE_CODE VARCHAR(10) NOT NULL)";
    // if (mysqli_query($connectpage, $create_table)) {
    //     echo 'done!';
    // }
    // $serial_number_query = mysqli_query($connectpage, "SELECT * FROM test23 WHERE COURSE_CODE = '$course' ");
    // $serial_number_query_array = mysqli_fetch_assoc($serial_number_query);
    // if ($serial_number_query_array) {
        // $add_course = "INSERT into test23 (COURSE_CODE) VALUES ('$course')";
        // mysqli_query($connectpage, $add_course);
        // $_SESSION['serial_number'] = $serial_number_query_array['ID'];
        // $_SESSION['course'] = $course;
        // header("Location: ../course_registration.php");
    // }
// }
// else {
//     echo 'not done!';
// }
?>