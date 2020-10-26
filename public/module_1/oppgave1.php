<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<title>Module 1 oppgave 1-5</title>
    <?php 
    echo "<strong>Dato</strong>";
    echo " "; 
    echo date("d.m.y"); // viser dato i formatet dag, månde, år
    ?>
</head>
    <body>
        <h2>Norge.no</h2>
        <?php
        echo "<p>Hovedstaden i Norge er: ";
        echo "<strong>Oslo</strong>";
        echo "<br />";
        include('brukerInfo.php')
        ?>
        <br />
        I dag er det den <?php echo date("d.m.Y");?>
        </p>
        <?php
        include('phpkonfigurasjon.php'); // Legger til php scriptet phpkonfigurasjon
        echo date("d.m.Y");
        ?>
    </body>
</html>