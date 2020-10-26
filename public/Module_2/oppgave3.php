<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Module 2</title>
</head>
    <?php 
    $i = 4400;
    $timer = floor($i / 3600);
    $minutter = floor($i / 60) % 60;
    $sekunder = $i % 60;
    ?>
    <body>
    <div class="Box">
        <?PHP
        echo "<p>Timer.minutter.sekunder</p>";
        echo "<p>$timer:$minutter:$sekunder</p>";
        ?> 

    <button class="btn"><a href="startside.php">Tilbake</a></button>    
    </div>
    </body>
</html>