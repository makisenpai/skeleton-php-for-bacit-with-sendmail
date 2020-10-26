<?php
session_start();
?>
<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Profill</title>
</head>
    <body>
        <div class="Box">
            <?php
            $bruker = array(
                "fornavn" => $_POST["fornavn"],
                "etternavn" => $_POST["etternavn"],
                "epost" => $_POST["epost"],
                "brukernavn" => $_POST["brukernavn"],
                "adresse" => $_POST["adresse"],
                "mobilnummer" => $_POST["mobilnummer"],
                "kjønn" => $_POST["kjønn"],
                "fødsels dato" => $_POST["fdato"],
                "interesser" => $_POST["interesser"],
            );
            //Ganske sikker på at jeg kan bruke en foreach her for å fjerne lit kode duplikasjon
            $_SESSION['fornavn']= $_POST['fornavn'];
            $_SESSION['etternavn']= $_POST['etternavn'];
            $_SESSION['epost']= $_POST['epost'];
            $_SESSION['brukernavn']= $_POST['brukernavn'];
            $_SESSION['adresse']= $_POST['adresse'];
            $_SESSION['mobilnummer']= $_POST['mobilnummer'];
            $_SESSION['kjønn']= $_POST['kjønn'];
            $_SESSION['fdato']= $_POST['fdato'];
            $_SESSION['interesser']= $_POST['interesser'];


            foreach($bruker as $key => $value){
                echo ucfirst("$key: $value <br><br>");
            } 
            ?>
        <button class="btn"><a href="redigerbrukerinfo.php">Redigger profil</a></button> 
        </div>
    </body>
</html>