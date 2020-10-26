<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <title>Maki - Innlevering 2</title>
</head>
<body>
    <div class="Box">
    <h2>Oppgave 2</h2>
    </div>
    <?php
    //deffinerer variablene
        $tall1 = 5;
        $tall2 = 10;

        $sum = $tall1 + $tall2;
        $diff = $tall2 - $tall1;
        $avg = $sum / 2;
    ?>
    <div class="Box">
    <?php 

    //Skriver ut utrengnigene
    echo "<p>Summen av $tall1 og $tall2 er $sum</p>";
    echo "<p>Differansen mellom $tall1 og $tall2 er $diff</p>";
    echo "<p>Gjennomsnittet av $tall1 og $tall2 er $avg</p>";
    ?>

    <button class="btn"><a href="startside.php">Tilbake</a></button> 
    </div>   
</body>
</html>