<?php 
session_start();
?>
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
            if(isset($_POST["submit"])){
                
                include "../inc/header.inc.php";

                include "../inc/profile.form.php";

            }else{
                include "../inc/header.inc.php";

                include "../inc/profile.inc.php";
            }
            ?>
            <form action="profile.site.php" method="post">
            <input type="submit" value="Rediger" name="submit">
            </form>
        </div>
    </body>
</html>