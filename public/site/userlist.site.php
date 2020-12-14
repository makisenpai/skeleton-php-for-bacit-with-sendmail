<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/style.css">
<title>Løsningsforslag L9-1</title>
</head>
    <body>
        <div class="Box">

            <?php 
                include "../inc/header.inc.php";

                include "../inc/userlist.inc.php";
            ?>
            Sorter etter
            <form action="userlist.site.php" method="get">
            <select for="sort" name="sort" required>
                <option value="null"></option>
                <option value="payment">Kontingentstatus</option>
                <option value="dob">Fødselsdato</option>
            </select>
            <input type="submit" name="sorter"/>
            </form>
        </div>
    </body>
</html>