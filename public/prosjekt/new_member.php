<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>New member</title>
    <body>
        <div class="Box">
        <h1>Register ny bruker</h1>
            <form action="signup.php" method="POST">
                Fornavn: <input type="text" name="fornavn" required/><br/><br/>
                Etternavn: <input type="text" name="etternavn" required/><br/><br/>
                Epost: <input type="email" name="epost" required/><br/><br/>
                Brukernavn: <input type="text" name="brukernavn" required/><br/><br/>
                Passord: <input type="text" name="passord" required/><br/><br/>
                Adresse: <input type="text" name="adresse" required/><br/><br/>
                Mobilnummer: <input type="text" name="mobilnummer" required/><br/><br/>
                Kjønn: <select for="kjønn" name="kjønn" required>
                    <option value="Mann">Mann</option>
                    <option value="Dame">Dame</option>
                    <option value="Annet">Annet</option>
                    </select>
                    <br/><br/>
                Fødsels dato: <input type="date" name="fdato" required/><br/><br/>
                Interesser: <input type="text" name="interesser" required/><br/><br/>
                <input type="submit" value="Register" />
            </form>
        </div>
    </body>
</html>