<?php 

include_once "config.php";

if (isset($_POST["submit"])){
    $first = $_POST["first"];
    $last = $_POST["last"];
    $mail = $_POST["mail"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $adress = $_POST["adress"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"]; 
    $postcode = $_POST["postcode"];
    $city = $_POST["city"];
    $tlf = $_POST["tlf"];

    $i1 = $_POST["interest_one"];
    $i2 = $_POST["interest_two"];
    
    $interests = array();
    array_push($interests, $i1, $i2);

    $error_msg = array();
    


    
    //Lager SQL statmenten
    $sql = "INSERT INTO users(user_first, user_last, user_email, user_adress, user_postalcode, user_city, user_dob, user_gender, user_username, user_pwd, user_tlf) values( ?,?,?,?,?,?,?,?,?,?,?);";
    
    $stmt = $con->prepare($sql);

    $stmt->bind_param("sssssssssss", $first, $last, $mail, $adress, $postcode, $city, $dob, $gender, $username, $password, $tlf);
    $password = password_hash($password, PASSWORD_DEFAULT);

    //Kjører sql statmenten
     if($stmt->execute()){
         //henter user ID til brukeren vi nå la til i databasen
        $userID = mysqli_insert_id($con);

        foreach($interests as $value){// DENNE KODEN ER FRYKTELIG STYGG, MEN JEG FANT VIRKELIG IKKE EN BEDRE MÅTE Å GJØRE DET.
            $sql = "INSERT IGNORE INTO interests (interest_info) VALUES (?)";
        
            
            $stmt = $con->prepare($sql);
            $stmt-> bind_param("s", $value);
            mysqli_stmt_execute($stmt);
            $interestID = mysqli_insert_id($con);
            $stmt->close();

            if(empty($interestID)){
                $getID = mysqli_fetch_assoc(mysqli_query($con, "SELECT interest_ID FROM interests WHERE interest_info = '$value'"));
                $interestID = $getID['interest_ID'];
            }
            
            
            $sql = "INSERT INTO interests_bridge (interest_ID, user_ID)
            VALUES(?, ?)";

            $stmt = $con->prepare($sql);
            $stmt-> bind_param("ss", $interestID, $userID);
            mysqli_stmt_execute($stmt);

        }


        header("location: ../index.php");   
    }else{ 
        //Execute error
        header("location: ../site/signup.site.php"); //ADD ERROR HANDLER LATER
    }
}else{
    header("location: ../site/signup.site.php");// ADD ERROR HANDLER LATER
}
?>