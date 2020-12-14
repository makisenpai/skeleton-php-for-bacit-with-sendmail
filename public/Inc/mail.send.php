<?php 
include "config.php";

session_start();

$sql = "SELECT * from users";
$result = $con->query($sql);

if($result->num_rows>0){

    while($row=$result->fetch_assoc()){

        if($row['user_payment_status']=== "ubetalt"){
            
            //MAIL FUNKSJONEN 

            ini_set('display_errors', 1);
            error_reporting(E_ALL);

            $from = "Admin@neo.no";
            $to = $row['user_email'];
            $subject = "Varsel om ubetalt avgift";
            $message = $_POST["text"];
            $headers = 'From:' . $from . "\r\n" .
            'Reply-To: admin@neo.no' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            mail($to,$subject,$message, $headers);

            $con->close();
            header("location: ../site/admin.site.php");
        }
    }
}


?>