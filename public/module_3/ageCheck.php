<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Oppgave 1</title>
    <body>
        <div class="Box">
        <?php 
        $age = $_POST["alder"];
        $navn = $_POST["navn"];

        echo "<p>Du heter $navn og er $age år gammel</p>";
        if ($age >= 18) {
            echo "han er mynding";
        }

        switch (true){

            case ($age >= 18):
                echo "$navn er myndig";
                break;
            case ($age < 18):
                echo "$navn er ikke myndig";
                break;
            case ($age > 25):
                echo "han er yngre"
                break;
            default:
                echo "Har du oppgit en alder?";
        }
   
        ?>
        <br>
        <button class="btn"><a href="startside.php">Tilbake</a></button> 
        </div>
        
    </body>
</html>