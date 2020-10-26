<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Module 2</title>
</head>
<div class="Box">
<?php
    $medlem1 = 12345;
    $medlem2 = "11111";

    echo "<p>Sammenligner $medlem1 og $medlem2</p>";

    if ($medlem1 === $medlem2) {// ikke helt nødvending å bruke i dette tilfelle
        echo "De er HELT like";
    }else {
        if ($medlem1 == $medlem2){ 
            echo "Inneholdet er likt";
        }else {
            echo "Disse er ikke like";
        }
    }
?>
<br />

<br />
<button class="btn"><a href="startside.php">Tilbake</a></button> 
</div>
</html>