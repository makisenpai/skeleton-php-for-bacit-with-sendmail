<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Oppgave 2</title>
    <body>
        <div class="Box">
            <?php 
                for ($x = 0; $x <= 10; $x++){
                    echo "$x<br>";
                }
                $sum = array_sum(range(0, 9));
                    echo "Juhuu, ferdig å telle! Summen av tallene ble $sum";
            ?>
        <br>
        <button class="btn"><a href="startside.php">Tilbake</a></button> 
        </div> 
    </body>
</html>