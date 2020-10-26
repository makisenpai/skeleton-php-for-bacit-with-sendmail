<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Oppgave 2</title>
    <body>
        <div class="Box">
        <h1>Ditt nye passord er: </h1>
        <?php
        $charr = $_GET['navn'];
        $number = '1234567890';
        $length = 8;

        function genPassword($l, $c, $n) {
            $clenght = strlen($c);
            $nlenght = strlen($n);
            $password = [];
            for ($i = 0; $i < 8; $i++){
                
                if ($i <5 ){
                    $password[$i]= substr(str_shuffle($c),0,1);
                }else{
                    $password[$i]= substr(str_shuffle($n),0,1);
                }
            }
            
            $newpass = implode('',$password);
            $newpass = strtolower($newpass);
            $newpass = ucfirst($newpass);
            $newpass = str_shuffle($newpass);
            return $newpass;
        }

        echo genPassword($length, $charr, $number)
        ?>
        </div>
        <br>
    </body>
</html>