<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Oppgave 2</title>
    <body>
        <div class="Box">
            <?php 
            $tall1 = 1;
            $tall2 = "2";
            
            for ($x = 1; $x <= 10; $x++){
                $sum = $tall1 + $tall2;
                $diff = $tall1 - $tall2;
                $avg = $sum / 2;

                echo $x;
                echo "<p>Summen av $tall1 og $tall2 er $sum</p>";
                echo "<p>Differansen mellom $tall1 og $tall2 er $diff</p>";
                echo "<p>Gjennomsnittet av $tall1 og $tall2 er $avg</p>";

                $tall1 = $tall1+1;
            }
            echo "yuuu huuu, ferdig å telle";
            ?>
            <br>
            <button class="btn"><a href="startside.php">Tilbake</a></button>
        </div> 
    </body>
</html>