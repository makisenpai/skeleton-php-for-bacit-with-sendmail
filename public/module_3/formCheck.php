<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Oppgave 4</title>
    <body>
        <div class="Box">
    <?php 
        $adresse = $_POST["adresse"];
        $navn = $_POST["navn"];
        $tlf = $_POST["tlf"];

        if (empty($adresse)) {
            echo "Adresse er tom!!<br>";
        }
        if (empty($navn)) {
            echo "Navn er tom!!<br>";
        }
        if (empty($tlf)) {
            echo "Tlf er tom!!<br>";
        }
        if (empty($adresse) || empty($navn) || empty($tlf)) {
            "";
        }else{
            echo "Alt ok!";
        }

    ?>
        </div>
        <br>
        <button class="btn"><a href="startside.php">Tilbake</a></button> 
    </body>
</html>