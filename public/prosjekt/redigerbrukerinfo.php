<?php
session_start()
?>
<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>New member</title>
</head>
    <body>
        <div class="Box">
            <h1>Reddiger bruker informasjonen din</h1>
              <form action="signup.php" method="POST">
                Fornavn: <input type="text" value="<?php echo $_SESSION["fornavn"]?>"name="fornavn" required/><br/><br/>
                Etternavn: <input type="text" value="<?php echo $_SESSION["etternavn"]?>" name="etternavn" required/><br/><br/>
                Epost: <input type="email" value="<?php echo $_SESSION["epost"]?>" name="epost" required/><br/><br/>
                Brukernavn: <input type="text" value="<?php echo $_SESSION["brukernavn"]?>" name="brukernavn" required/><br/><br/>
                Adresse: <input type="text" value="<?php echo $_SESSION["adresse"]?>" name="adresse" required/><br/><br/>
                Mobilnummer: <input type="text" value="<?php echo $_SESSION["mobilnummer"]?>" name="mobilnummer" required/><br/><br/>
                Kjønn: <select for="kjønn" value="<?php echo $_SESSION["kjønn"]?>" name="kjønn" required>
                    <option value="Mann">Mann</option>
                    <option value="Dame">Dame</option>
                    <option value="Annet">Annet</option>
                    </select>
                    <br/><br/>
                Fødsels dato: <input type="date" value="<?php echo $_SESSION["fdato"]?>" name="fdato" required/><br/><br/>
                Interesser: <input type="text" value="<?php echo $_SESSION["interesser"]?>" name="interesser" required/><br/><br/>
                <input type="submit" value="Register" />
            </form>
        </div>
    </body>
</html>
