<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>New member</title>
    <body>
        <div class="Box">
        <h1>Register ny bruker</h1>
            <form action="../inc/signup.form.php" method="post">
            <table>
                <tr>
                    <td>Fornavn</td>
                    <td><input type="text" name="first" required/></td>
                </tr>
                <tr>
                    <td>Etternavn</td>
                    <td><input type="text" name="last" required/></td>
                </tr>
                <tr>
                    <td>Epost</td>
                    <td><input type="email" name="mail" required/></td>
                </tr>
                <tr>
                    <td>Brukernavn</td>
                    <td><input type="text" name="username" required/></td>
                </tr>
                <tr>
                    <td>Passord</td>
                    <td><input type="password" name="password" required/></td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td><input type="text" name="adress" required/></td>
                </tr>
                <tr>
                    <td>By</td>
                    <td><input type="text" name="city" required/></td>
                </tr>
                <tr>
                    <td>Postnummer</td>
                    <td><input type="text" name="postcode" required/></td>
                </tr>
                <tr>
                    <td>Mobilnummer</td>
                    <td><input type="text" name="tlf" required/></td>
                </tr>
                <tr>
                    <td>Kjønn</td>
                    <td><select for="kjønn" name="gender" required>
                        <option value="Mann">Mann</option>
                        <option value="Dame">Dame</option>
                        <option value="Annet">Annet</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Interesser</td>
                    <td>
                    <input type="text" name="interest_one" required>
                    <input type="text" name="interest_two" required>
                    </td>
                </tr>
                <tr>
                    <td>Fødselsdato</td>
                    <td><input type="date" name="dob" required/></td>
                </tr>
                </table>
                <input type="submit" value="Registrer" name="submit"/>
            </form>
        </div>
    </body>
</html>
