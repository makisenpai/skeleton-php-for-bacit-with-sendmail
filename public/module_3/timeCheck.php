<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Oppgave 4</title>
    <body>
        <div class="Box">
    <?php 

        $fornavn = $_POST["navn"];
        date_default_timezone_set("Europe/Oslo");
        $tid = date("G:i");

        switch($tid) {
            case (empty($fornavn)):
                echo "Fornavn mangler"; 
            break;
            case $tid >= 0 && $tid <6:
                echo "God natt, ", $fornavn, "!<br>";
                echo "Klokken er ", $tid;
            break;
            case $tid >= 6 && $tid <12:
                echo "God morgen, ", $fornavn, "!<br>";
                echo "Klokken er ", $tid;
            break;
            case $tid >= 12 && $tid <18:
                echo "God ettermiddag, ", $fornavn, "!<br>";
                echo "Klokken er ", $tid;
            break;
            case $tid >= 18 && $tid <24:
                echo "God kveld, ", $fornavn, "!<br>";
                echo "Klokken er ", $tid;
            break;                
        }
    ?>
        </div>
    </body>
</html>