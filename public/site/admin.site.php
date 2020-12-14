<?php 
session_start();
include "../inc/config.php";

$sql = "SELECT user_img FROM users WHERE user_ID='{$_SESSION['user_id']}'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$image = $row['user_img'];
$image_src = "../inc/upload/".$image;

$con->close();

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
             include "../inc/header.inc.php"
            
            ?>
            <br>
            <h1>Mail demonstrasjon, send mail til alle brukere med status ubetalt</h1>
            <form action="../inc/mail.send.php" method="post">
                <table>
                    <tr>
                    <td>Skrive tekst her</td>
                    <td><input type="text" name="text" required/></td>
                    <input type="submit" value="send" name="send"/>
                    </tr>
                </table>
            </form>
            <br>
            <form method="post" action="../inc/file.inc.php" enctype='multipart/form-data'>
                <input type='file' name='file' />
                <input type='submit' value='Last opp' name='but_upload'>
            </form>

            <img src='<?php echo $image_src; ?>' class="p_img">
        </div>
    </body>
</html>