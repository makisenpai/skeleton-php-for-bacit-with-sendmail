<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>IS-115 web programmering i PHP</title>
</head>
    <body>
        <div class="Box">
            <h2>IS-115 PHP</h2>
        </div>   
        <div class="Box">
            <p>Her ligger alle modulene som jeg har gjennomført</p>
            <br />
            <br />
            
            <button class="btn"><a href="module_1/oppgave1.php">Module 1</a></button>
            <button class="btn"><a href="module_2/startside.php">Module 2</a></button>
            <button class="btn"><a href="module_3/startside.php">Module 3</a></button>
            <pre>
            <?php
                $array = array(1, 2, 3, 4, 5, 8 => 1, 4 => 1, 19, 3 => 13);
                print_r($array);
            ?> 
            </pre>                  
        </div>
    </body>
</html>