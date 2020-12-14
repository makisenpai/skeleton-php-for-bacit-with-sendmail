<?php 

include_once "config.php";

//List ut alle verdier som er nødnveding for en bruker å se om seg selv
//Navn, Addresse, DOB, Intereser, Kommende aktiviteter, og tidligere aktiviteter, og INTERESER


    /*Henter bilde kobblet til USER *Mangler ERROR handler
    $sql = "SELECT user_img FROM users WHERE user_ID='{$_SESSION['user_id']}'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $image = $row['user_img'];
    $image_src = "../inc/upload/".$image;*/


//Binder session ID til en lokal variable,  EGENTLING UNØDVENDING MEN SESSION ID FUNGER NOEN GANGER IKKE.    
$currentID = $_SESSION["user_id"];


$sql = "SELECT * FROM users WHERE user_ID = '$currentID'";

//SQL statment, bruker $currentID for å hente brukeren fra databasen. 
/*$sql = "SELECT * FROM interests_bridge 
        join interests on interests.interest_ID = interests_bridge.interest_ID
        join users on users.user_ID = interests_bridge.user_ID";*/

$stmt = $con->query($sql);





//Error handeler
if($stmt->num_rows>0){
    
    while($row=$stmt->fetch_assoc()){
        echo "<h1>Min profil informasjon</h1>";


        echo "<br>";
        echo "<table>";
        echo "<tr>";
        echo "<td>Navn</td>";
        echo "<td>" . $row["user_first"] .' ' . $row["user_last"]. "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Brukernavn</td>";
        echo "<td>" . $row["user_username"]. "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Email</td>";
        echo "<td>" . $row["user_email"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Adresse</td>";
        echo "<td>" . $row["user_adress"] . " " .$row["user_postalcode"]. " " . $row["user_city"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Fødselsdato</td>";
        echo "<td>" . $row["user_dob"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Registrerings dato</td>";
        echo "<td>" . $row["user_reg_date"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Telefon nummer</td>";
        echo "<td>" . $row["user_tlf"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Bruker type</td>";
        echo "<td>" . $row["user_type"] . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Kontigentstatus</td>";
        echo "<td>" . $row["user_payment_status"] . "</td>";
        echo "</tr>";


    }
}else{
    echo "No users fetched";
}





?>
