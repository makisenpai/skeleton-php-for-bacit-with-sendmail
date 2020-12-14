<?php 
include "config.php";

$currentID = $_SESSION["user_id"];


$sql = "SELECT * FROM users WHERE user_ID = '$currentID'";

//SQL statment, bruker $currentID for å hente brukeren fra databasen. 
/*$sql = "SELECT * FROM interests_bridge 
        join interests on interests.interest_ID = interests_bridge.interest_ID
        join users on users.user_ID = interests_bridge.user_ID";*/

$stmt = $con->query($sql);

//KJØRER VIS BRUKEREN HAR TRYKKET PÅ REDIGERE
if($stmt->num_rows>0){
    
    while($row=$stmt->fetch_assoc()){
        echo "<h1>Min profil informasjon</h1>";
        ?>
<div class="Box">
        <h1>Register ny bruker</h1>
            <form action="../inc/profile.edit.php" method="post">
            <table>
                <tr>
                    <td>Fornavn</td>
                    <td><input type="text" name="first" default="<?php echo $row["user_first"];?>" required/></td>
                </tr>
                <tr>
                    <td>Etternavn</td>
                    <td><input type="text" name="last" default="<?php echo $row["user_last"];?>" required/></td>
                </tr>
                <tr>
                    <td>Epost</td>
                    <td><input type="email" name="mail" default="<?php echo $row["user_email"];?>" required/></td>
                </tr>
                <tr>
                    <td>Brukernavn</td>
                    <td><input type="text" name="username" default="<?php echo $row["user_username"];?>" required/></td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td><input type="text" name="adress" default="<?php echo $row["user_adress"];?>" required/></td>
                </tr>
                <tr>
                    <td>By</td>
                    <td><input type="text" name="city" default="<?php echo $row["user_city"];?>" required/></td>
                </tr>
                <tr>
                    <td>Postnummer</td>
                    <td><input type="text" name="postcode" default="<?php echo $row["user_postalcode"];?>" required/></td>
                </tr>
                <tr>
                    <td>Mobilnummer</td>
                    <td><input type="text" name="tlf" default="<?php echo $row["user_tlf"];?>" required/></td>
                </tr>
                <tr>
                    <td>Kjønn</td>
                    <td><select for="kjønn" name="gender" default="<?php echo $row["user_gender"];?>" required>
                        <option value="Mann">Mann</option>
                        <option value="Dame">Dame</option>
                        <option value="Annet">Annet</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Fødselsdato</td>
                    <td><input type="date" name="dob" default="<?php echo $row["user_dob"];?>" required/></td>
                </tr>
                </table>
                <input type="submit" value="Oppdater" name="submit"/>
            </form>
        </div>

        <?php
    }
}

?>
