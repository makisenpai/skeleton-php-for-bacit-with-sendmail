<?php 
session_start();
include_once "config.php";

$currentID = $_SESSION["user_id"];


if (isset($_POST["submit"])){
    $first = $_POST["first"];
    $last = $_POST["last"];
    $mail = $_POST["mail"];
    $username = $_POST["username"];
    $adress = $_POST["adress"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"]; 
    $postcode = $_POST["postcode"];
    $city = $_POST["city"];
    $tlf = $_POST["tlf"];

  
    $error_msg = array();
    
    //Lager SQL statmenten
 
    $sql = "UPDATE users SET 
                user_first='".$first."', 
                user_last ='".$last."', 
                user_email='".$mail."', 
                user_adress='".$adress."', 
                user_postalcode='".$postcode."', 
                user_city='".$city."', 
                user_dob='".$dob."', 
                user_gender='".$gender."', 
                user_username='".$username."', 
                user_tlf='".$tlf."'
            WHERE user_ID ='".$currentID."'";
    if(!$con->query($sql)){
        echo "query failed: (" . $con->errno . ") " . $con->error;
    }
   
    if(mysqli_query($con, $sql)){
        
        header("location: ../site/profile.site.php");   
    }else{ 
        //Execute error
        echo "faild in query";
    }



}else{
   echo "Submit not parsed";
}
?>