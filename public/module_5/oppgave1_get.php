<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Oppgave 2</title>
    <body>
        <div class="Box">
        <h1>Ditt etternavn: </h1>
        <?php

        $navn = $_GET['navn'];

        $navn = strtolower($navn);
        $navn = ucwords($navn);

        echo $navn
        ?>

        </div>
        <br>
    </body>
</html>
