<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'phplogin';

$con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno() ) {
    exit('Failed to connect to database: ' . mysqli_connect_error());
}
//Error catch. vis det er et problem allerede i tilkoblingen til databasen

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {

    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();


    $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();
            //Sjekker om brukeren finnes
            if(password_verify($_POST['password'], $password)){

                session_regenerate_id();
                $_SESSION['verified'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;
                echo 'Welcome ' . $_SESSION['name'] . '!';
            } else {
                echo "Incorrect username and/or password";
            }
        } else {
            echo 'Incorrect username and/or password';
        }

    $stmt->close();
}
?>