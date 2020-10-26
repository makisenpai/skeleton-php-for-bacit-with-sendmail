<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Oppgave 2</title>
    <body>
        <div class="Box">
        <?php
        $navn = strip_tags($_GET['navn']);

        echo $navn;

        ?>
        </div>
        <br>
    </body>
</html>