<?php 
include_once "config.php";
session_start();

/*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
    header("location: ../site/home.site.php");
    exit;
}*/


$username = $_POST["username"];
$password = $_POST["password"];
$password_err = "";
$username_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){


    //Sjekker om brukernavn er tom

    if(!isset($username)){  //Fikk en bug med empty, vet ikke helt hvorfor
        $username_err = "Feil brukernavn.";
    } //Jeg har blit gjort oppmerksom at strip tags er en farlig funksjon å bruke

    //Sjekker om passord er tom 
    if(!isset($password)){
        $password_err = "Feil passord.";

    } else{
        $password = trim($_POST["password"]); //Setter passord til post og fjerner potensielt " "

    }

    if(empty($username_err) && empty($password_err)){
        //Lager sql select kode.
        $sql = "SELECT user_ID, user_username, user_pwd From users WHERE user_username = ?";
        
       //Forbreder sql tilkoblingen og setter variabelen $param_username
        if($stmt = $con->prepare($sql)){
            $param_username = $username;
            $stmt->bind_param("s", $param_username);

            //starter tilkobling
            if($stmt->execute()){
            
                $stmt->store_result();
                
                //Henter bestemt rad fra databasen og bindere dataen til php variabler
                if($stmt->num_rows == 1){

                    $stmt->bind_result($user_ID, $username, $user_pwd);

                    if($stmt->fetch()){

                        //verifiserer om passordet er det samme som user_pwd fra databasen (HASED)
                        if(password_verify($password, $user_pwd)){
                            //Setter session verdier
                            $_SESSION["loggedin"] = true;
                            $_SESSION["user_id"] = $user_ID;
                            $_SESSION["username"] = $username;
                            header("location: ../site/home.site.php");

                        }else{
                            //Error melding vis passordet er feil
                            $password_err = "Passordet var feil";
                            header("location: ../index.php");
                        }

                    }
                }else{
                    $username_err = "Ingen bruker funnet.";
                    header("location: ../index.php");
                }
            }else{
                echo "ERROR - Error i sql Execution";
            }
            mysqli_stmt_close($stmt);
        }else{
            echo "ERROR - Error i sql tilkobling";
        }
    }
}

?>

