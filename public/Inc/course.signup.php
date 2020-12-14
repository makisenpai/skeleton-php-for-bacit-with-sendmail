<?php 
session_start();
include "config.php";

if(isset($_POST["register"])){

    $course = $_POST["course"];
    $userID = $_SESSION["user_id"];
    

    $courseID = mysqli_fetch_assoc(mysqli_query($con, "SELECT course_ID FROM courses WHERE course_name = '$course'"));

    $sql = "INSERT INTO course_bridge(course_ID, user_ID)VALUES(?,?)";
    $stmt = $con->prepare($sql);

    $stmt->bind_param("ss", $courseID, $userID);
    
    if($stmt->execute()){
        header("location: ../site/course.site.php");

    }

}

?>